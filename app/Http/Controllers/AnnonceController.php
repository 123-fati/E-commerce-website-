<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreReclamationsRequest;
use Illuminate\Auth\AuthManager;
use App\Repository\reclamationRepository;
use App\Models\Annonce;

class AnnonceController extends Controller{

    public function __construct(){
        $this ->middleware('auth');
    }


    public function welcome(){
        $annonces=Annonce::all();

        
        
        return view("welcome")->with([
        
        'annonce' => $annonces
        
        ]);

    }

public function affiche(){
    return view('categorie');
}
public function affiche2(){
    return view('categorie2');
}

    public function infos(Request $request){
        $nom = $request->nom; 
        $prix = $request->prix; 
        $description = $request->description; 
        $ville = $request->ville; 
        $etat = $request->etat; 
        $typeAnn = $request->typeAnn;
        $periode = $request->periode;  
        $image = $request->image; 
        $categorie = $request->categorie; 
        
        return redirect()->route('affiche.infos')->with([
        
            'nom' => $nom,
            'prix' =>$prix, 
            'description' =>$description,
            'ville' =>$ville, 
            'periode' =>$periode,
            'etat' =>$etat, 
            'typeAnn' =>$typeAnn,
            'image' =>$image,
            'categorie'=>$categorie,

            ]);


    }

    public function createAnn(Request $req){

        Annonce::create([
            'description' => $req->description,
            'typeAnn' =>$req->typeAnn,
            'prix' =>$req->prix,
           'ville'=> $req->ville,
           'periode'=> $req->periode,
           'id_partenaire' =>$id_partenaire =  auth()->id(),
            'categorie_objet' =>$req->categorie,
            'nom_objet'=>$req->nom,
            'image' =>$req->image, 
            'etat_objet'=>$req->etat,
        ]);

        return redirect()->route('welcome');
}
}