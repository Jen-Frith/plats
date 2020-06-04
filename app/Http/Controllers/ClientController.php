<?php

namespace App\Http\Controllers;
use App\Client;
use App\Entreprise;

use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function  store(){

$data=request()->validate([

'name'=>'required|min:5',
'quantite'=>'required|integer',
'entreprise_id'=>'required|integer'

]);


     Client::create($data);
        return redirect()->back();
    }


public function liste(){
// $books=Book::where('year', '>', 2000)->get();
$listSucre=Client::all();
$listSucre=Client::where('entreprise_id', '=','1')->get();
// dd($listSucre);

    return view ('sucre', compact('listSucre'));
}


public function liste1(){
    // $books=Book::where('year', '>', 2000)->get();
    $listSale=Client::all();
    $listSale=Client::where('entreprise_id', '=','2')->get();
    // dd($listSale);
    
        return view ('sale', compact('listSale'));
    }

}
