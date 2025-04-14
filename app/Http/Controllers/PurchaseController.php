<?php

namespace App\Http\Controllers;

use App\Models\toBePurchased;
use App\Models\Jewel;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    // public function tobepurchased(Request $request)
    // {

    //     $tbp = new toBePurchased;
    //     $tbp->user_id = Auth::user()->id;
    //     $tbp->jewel_id = 22;

    //     $tbp->save();

    //     return response()->json(['tbp' => $tbp]);
    // }


    public function getPurchase(toBePurchased $tbp, Jewel $jewel)
    {


        $tbp = toBePurchased::select('user_id', 'jewel_id')->get();

        // $jewel = Jewel::select('id', 'name', 'description', 'image', 'price')->where('id', $favourite->jewel_id)->get();
        $jewel = Jewel::select('id', 'name', 'description', 'image', 'price')->get();



        $jewel_1 = Jewel::select('id', 'name', 'image', 'price')->with('tobepurchased')->get();



        $tbp_1 = Jewel::query()->with([
            'tobepurchased' => function ($query) {
                $query->select('id', 'jewel_id');
            }
        ])->get();

        return response()->json(['tbp' => $tbp, 'jewel' => $jewel, 'jewel_1' => $jewel_1, 'tbp_1' => $tbp_1]);

    }



    public function makeTransaction()
    {
        $userId = auth()->id(); // Make sure the user is authenticated

        $items = ToBePurchased::with('jewel')
            ->where('user_id', $userId)
            ->get();

        $total = $items->sum(function ($item) {
            return $item->jewel?->price ?? 0;
        });

        return response()->json([
            'items' => $items,
            'total' => $total,
        ]);
    }







}
