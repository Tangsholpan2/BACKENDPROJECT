<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientSuggestions extends Model
{
    use HasFactory;
      protected $fillable = ['client_id','suggestions'];

        public function item(){
          return $this->belongsTo('App\ClientDetail');
          }

}
