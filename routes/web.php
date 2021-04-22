<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Card;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CardController;
use App\Models\ClientDetail;
use App\Models\ClientSuggestions;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Project');
});



Route::get('card/create',function(){
return view('TRY');
});

Route::view('upload','fileupload');

Route::post('card/create',[CardController::class,'store'])->name('add-cards');

Route::get('/try', function () {
    return view('TRY');
})->name('try');

Route::get('/send', function(){
return view('Project');
}

);

Route::post('/send',[ClientController::class,'index']);

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('Project');
});

Route::get('try/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('TRY');
});


Route::get('/email', [EmailController::class,'create']);
Route::post('/email', [EmailController::class,'sendEmail'])->name('send.email');
