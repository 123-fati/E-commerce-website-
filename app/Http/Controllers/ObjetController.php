<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreReclamationsRequest;
use Illuminate\Auth\AuthManager;
use App\Repository\reclamationRepository;
use App\Models\Objet;

class ObjetController extends Controller{
    public function welcome(){
        $objets=Objet::all();
        
        return view("welcome")->with([
        
        'objet' => $objets
        
        ]);

    }
}