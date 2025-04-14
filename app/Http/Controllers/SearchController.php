<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jewel;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $results = (new Search())
            ->registerModel(Jewel::class, ['name'])
            ->search($request->input('query'));

        return response()->json(['results' => $results]);
    }

    public function searchJewels(Request $request)
    {
        $search = $request->input('search');
        $results = Jewel::where('name', 'like', "%$search%")->get();

        return response()->json(['search' => $search, 'results' => $results]);
    }
}
