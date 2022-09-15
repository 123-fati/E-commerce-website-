<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Annonce;
use App\Models\Objet;

class ProfileController extends Controller
{
    //partenaire infos
    function partInfos($id){
        $data = User::all()->where('id', '=', $id);
        $annonce = Annonce::all()->where('id_partenaire', $id);
        $objet = Objet::all()->where('id_partenaire', $id);
        return view('profile')->with(['user' =>$data,'annonce' =>$annonce,'objet' =>$objet]);
    }

}
