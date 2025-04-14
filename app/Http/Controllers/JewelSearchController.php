<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jewel;
use App\Http\Requests;

class JewelSearchController extends Controller
{
    // public function index(Request $request)
    // {
    //     if ($request->has('namesearch')) {
    //         $jewels = Jewel::search($request->namesearch)
    //             ->paginate(6);
    //     } else {
    //         $jewels = Jewel::paginate(6);
    //     }
    //     return response()->json(['jewels' => $jewels]);
    // }

    public function index()
    {
        // $jewels = Jewel::select('id', 'name')->get();
        $jewels = Jewel::select('id', 'name', 'description', 'image', 'price')->with('details')->get();
        // $name = $jewels->name;

        return response()->json(['jewels' => $jewels]);
    }


}
