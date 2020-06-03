<?php

namespace App\Http\Controllers;
use App\Client;
use App\Entreprise;

use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function  store(){

$data=request()->validate([

'name'=>'required|min:10',
'entreprise_id'=>'required|integer'

]);


     Client::create($data);
        return redirect()->back();
    }




}
