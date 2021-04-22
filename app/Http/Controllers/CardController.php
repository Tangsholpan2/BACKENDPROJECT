<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card;

class CardController extends Controller
{
    //
     public function store(Request $request){



        Card::create([
        'id'=>$request->id,
        'name'=>$request->name,
        'cardNumber'=>$request->cardNumber,
         'address'=>$request->address
        ]);
        return back();
        }
}
