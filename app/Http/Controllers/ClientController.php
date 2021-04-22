<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientDetail;
use App\Models\ClientSuggestions;
use App\Http\Controllers\ClientController;
class ClientController extends Controller
{
    //
     public function index(Request $request){

        $items=ClientDetail::create([
                             'id'=>$request->id,
                            'FirstName'=>$request->FirstName,
                            'LastName'=>$request->LastName,
                            'PhoneNumber'=>$request->PhoneNumber
                            ]);



                  ClientSuggestions::create([
                            'client_id'=>$items->id,
                            'suggestions'=>$request->suggestions
                            ]);
                return back();
        }

        public function change($lang){
        App::setlocale($lang);
            return view('Project');
        }
}
