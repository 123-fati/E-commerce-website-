<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\objet;

use App\Models\User;

class ProduitController extends Controller
{
    //
    public function showObject(int $id){
        $data = objet::all()->where('id', '=', $id);
        
        $data1 = User::all()->where('id',1);
        return view('produit',['objet' =>$data,'user' =>$data1]);

    }

    public function objetCat(){
        $data = objet::all();
        return view('categorie',['objet' =>$data]);

    }
}
