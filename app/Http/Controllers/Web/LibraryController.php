<?php

namespace App\Http\Controllers\Web;

use App\Models\Resource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibraryController extends Controller
{
    /**
     * Get a list of resources.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        $groupedResources = Resource::with('languages')->get()
                                    ->groupBy('resource_type')
                                    ->sortKeys();

        return view('library.index', [
            'groupedResources' => $groupedResources,
        ]);
    }
}
