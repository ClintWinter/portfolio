<?php

namespace App\Http\Controllers\Admin;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Support\Collection;

class ResourceController extends Controller
{
    /**
     * Fetch a list of resources.
     *
     * @param  Request $request
     * @return Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resources = Resource::query()
            ->with(['languages' => fn ($q) => $q->oldest('name')])
            ->when($request->has('language'), fn ($q) =>
                $q->whereRelation('languages', 'id', $request->language)
            )->when($request->has('type'), fn ($q) =>
                $q->where('type', $request->type)
            )->latest()->get();

        return view('admin.library.index', [
            'resources' => $resources,
        ]);
    }

    /**
     * Store a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:resources',
            'url' => 'required|max:255|unique:resources',
            'type' => 'required|max:255',
            'languages' => 'nullable|regex:/[a-zA-Z0-9 #_+,.-]+/'
        ]);

        $resource = Resource::create($request->only('name', 'url', 'type'));

        $resource->languages()->sync(
            $this->findOrCreateLanguages(explode(',', $request->input('languages', '')))
        );

        return back()->with('status', 'Resource created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Resource $resource)
    {
        return view('admin.library.edit', ['resource' => $resource]);
    }

    /**
     * Update the Resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        $request->validate([
            'name' => ['required', 'max:255', Rule::unique('resources')->ignore($resource->id)],
            'url' => ['required', 'max:255', Rule::unique('resources')->ignore($resource->id)],
            'type' => 'required|max:255',
            'languages' => 'nullable|regex:/[a-zA-Z0-9 #_+,.-]+/',
        ]);

        $resource->update($request->only('name', 'url', 'type'));

        $resource->languages()->sync(
            $this->findOrCreateLanguages(explode(',', $request->input('languages', '')))
        );

        $resource->save();

        return redirect()->route('admin.resources.index')->with('status', 'Resource updated.');
    }

    /**
     * Delete the Resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        $resource->delete();

        return back()->with('status', 'Resource deleted.');
    }

    /**
     * Turn an array of language strings into a collection of language IDs.
     *
     * @param array $languages
     * @return \Illuminate\Support\Collection
     */
    protected function findOrCreateLanguages(array $languages): Collection
    {
        return collect($languages)
            ->map(fn ($l) => Language::firstOrCreate(['name' => $l]))
            ->pluck('id');
    }
}
