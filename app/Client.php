<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Client extends Model
{

    protected $guarded=[];


    public function entreprise(){


        return $this->belongsTo('App\Entreprise');

    }
}
