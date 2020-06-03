<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;


class EntrepriseController extends Controller
{
  
  
  
    public function  store(){

        $data=request()->validate([
        
        'nameEntreprise'=>'required|min:4',
        
        ]);
        
        
             Entreprise::create($data);
                return redirect()->back();
            }
}
