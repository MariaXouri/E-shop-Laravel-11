<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Favourite;
use App\Models\Jewel;
class FavouritesController extends Controller
{
    public function getFavourites(Favourite $favourite, Jewel $jewel)
    {


        $favourite = Favourite::select('user_id', 'jewel_id')->get();

        // $jewel = Jewel::select('id', 'name', 'description', 'image', 'price')->where('id', $favourite->jewel_id)->get();
        $jewel = Jewel::select('id', 'name', 'description', 'image', 'price')->get();


        $favourite_all = Favourite::all();

        $jewel_1 = Jewel::select('id', 'name', 'image', 'price')->with('favourites')->get();



        $favourite_1 = Jewel::query()->with([
            'favourites' => function ($query) {
                $query->select('id', 'jewel_id');
            }
        ])->get();

        return response()->json(['favourite' => $favourite, 'favourite_all' => $favourite_all, 'jewel' => $jewel, 'jewel_1' => $jewel_1, 'favourite_1' => $favourite_1]);

    }


    public function postFavourites(Request $request, $id1)
    {

        $jewel = Jewel::find($id1);
        $favourite1 = Favourite::select('jewel_id')->get();

        if ($id1 !== 0) {
            $favourite = new Favourite;
            $favourite->user_id = Auth::user()->id;
            $favourite->jewel_id = request('jewel_id');

            $favourite->save();
        }
        return response()->json(['favourite' => $favourite, 'jewel' => $jewel]);


    }

    public function deleteFavourites(Request $request, $id3)
    {
        $favourite_dl = Favourite::find($id3);

        // $favourite->user_id = Auth::user()->id;
        // $favourite->jewel_id = request('jewel_id');

        $favourite_dl->delete();
        //  $favourite_dl = Favourite::where('id', $id3)->delete();


        return response()->json(['favourite_dl' => $favourite_dl]);


    }


}
