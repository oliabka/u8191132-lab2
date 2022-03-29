<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Address;
use Illuminate\Http\Request;

class BuyersController extends Controller
{
    public function showAll(Request $request)
    {
        $page = $request->get('page', 1);
        $buyers = Buyer::query()->offset(($page-1)*10)->limit(10)->get();
        return view('buyersAll', ['buyers' => $buyers]);

    }

    public function showOne($id)
    {
        $buyer = Buyer::query()->findOrFail($id);
        $addresses = Address::query()->where('buyer_id',$id)->orderBy('addition_date','desc')->get();
        return view('buyerOne', ['buyer' => $buyer, 'addresses' => $addresses]);
    }

    public function showFiltered(Request $request)
    {
        $buyers = match ($request->get('blocked')) {
            'not blocked' => Buyer::query()->where('blocked', false),
            'blocked' => Buyer::query()->where('blocked', true),
            default => Buyer::query(),
        };

        if($request->get('email'))
            $buyers = $buyers->where('email', $request->get('email'));

        if($request->get('phone'))
            $buyers = $buyers->where('phone', $request->get('phone'));

        if($request->get('name')) {
            $names = explode(" ", $request->get('name'));
            if(count($names) == 2) {
                $buyers = $buyers->where('name', $names[0])->
                where('surname', $names[1]);
            }
            elseif (count($names)==1)
            {
                $buyers = $buyers->where('name', $names[0]);
            }
            else{
                $buyers= $buyers->where('id', null);
            }
        }

        $buyers = $buyers->limit(10)->get();
        return view('buyersAll', ['buyers' => $buyers]);
    }
}
