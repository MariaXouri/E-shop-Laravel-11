<?php

namespace App\Http\Controllers;
use App\Models\Jewel;
use Illuminate\Http\Request;
use App\Models\Favourite;
use App\Models\toBePurchased;
use App\Models\Detail;
use Auth;
use Illuminate\Support\Facades\DB;


class JewelsController extends Controller
{
    public function getJewels()
    {

        $jewel = Jewel::select('id', 'name', 'description', 'image', 'price')->with('details')->get();
        $jewels = Jewel::select('id', 'name', 'description', 'image', 'price')->with('details')->get();
        $detail = Detail::select('id', 'jewel_id', 'material', 'description')->get();
        $id = Jewel::select('id')->get();
        $name = Jewel::select('name')->get();

        return response()->json(['jewel' => $jewel, 'jewels' => $jewels, 'id' => $id, 'name' => $name, 'detail' => $detail]);

    }

    public function tobepurchased(Request $request, $id)
    {
        $jewel = Jewel::find($id);
        $tbp = new toBePurchased;
        $tbp->user_id = Auth::user()->id;
        $tbp->jewel_id = request('jewel_id');

        $tbp->save();

        // $tbp_list = toBePurchased::all();
        // $tbp_price = $tbp_list->price;
        // for ($i = 0; $i < count($tbp_list); $i++) {
        //     $tbp_price += $tbp_list[$i]->price;
        // }

        return response()->json(['tbp' => $tbp, 'jewel' => $jewel]);
    }

    public function getDetails(Request $request, $id)
    {
        $jewels = Jewel::where('id', $id)->get();
        $detail = Detail::where('jewel_id', $id)->get();
        // $detail = Detail::select('jewel_id', 'material', 'description')->get();
        $id = Jewel::select('id')->get();
        // $mtrl = DB::table('details')->select(DB::raw('material, jewel_id'))->where('jewel_id', $id)->get();
        return response()->json(['jewels' => $jewels, 'detail' => $detail, 'id' => $id]);
    }

    public function deletePurchase(Request $request, $id4)
    {

        $purchase_dl = toBePurchased::find($id4);
        $purchase_dl->delete();
        return response()->json(['purchase_dl' => $purchase_dl]);

    }


    // public function getDetails(Request $request, $id)
    // {
    //     //select material, description from details where jewel_id = route.param.id

    //     $details = Detail::select('jewel_id', 'material', 'description');


    //     return response()->json(['details' => $details]);

    // }

}
