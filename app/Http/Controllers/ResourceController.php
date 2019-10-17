<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $builder = Resource::with(['languages' => function($query) {
            return $query->orderBy('name', 'asc');
        }]);

        if ( request('language') ) {
            $languageId = request('language');
            $builder = $builder->whereHas('languages', function($query) use ($languageId) {
                return $query->where('id', $languageId);
            });
        }

        if ( request('resource_type') ) {
            $builder = $builder->where('resource_type', request('resource_type'));
        }

        return $builder->orderBy('name', 'asc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name'          => ['required', 'max:255', 'unique:resources'],
            'url'           => ['required', 'max:255', 'unique:resources'],
            'resource_type' => ['required', 'max:255']
        ]);

        $resource = Resource::create($validData);

        foreach ( $request->input('languages') as $languageId )
        {
            $resource->languages()->attach($languageId);
        }

        $id = $resource->id;

        return Resource::with('languages')->find($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validData = $request->validate([
            'name'          => [
                'required',
                'max:255',
                Rule::unique('resources')->ignore($id)
            ],
            'url'           => [
                'required',
                'max:255',
                Rule::unique('resources')->ignore($id)
            ],
            'resource_type' => ['required', 'max:255']
        ]);

        $resource = Resource::with('languages')->find($id);

        $resource->update($validData);

        $resource->languages()->detach();
        foreach ( $request->input('languages') as $languageId )
        {
            $resource->languages()->attach($languageId);
        }

        $resource->save();

        return Resource::with('languages')->find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Resource::find($id)->delete();

        return 0;
    }
}
