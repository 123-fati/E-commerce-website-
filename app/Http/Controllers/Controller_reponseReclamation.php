<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storeReponseReclamationRequest;
use Illuminate\Auth\AuthManager;
use App\Repository\reponseReclamationRepository;


class Controller_reponseReclamation extends Controller
{
   private $auth;
   private $r;

   public function __construct(AuthManager $auth, reponseReclamationRepository $reponseReclamationRepository) {

   	$this->auth = $auth;
   	$this->r = $reponseReclamationRepository;

   }

    public function store(storeReponseReclamationRequest $request ,int $reponseReclamationId) {

       $this->r->createReponseReclamation(
       	$this->auth->user()->id,
       	$request->get('content'),
       	$reponseReclamationId
       );

       return redirect(route('reclamation.affiche' , ['id' => $reponseReclamationId] )); 
    }

    public function update(int $reclamationId , int $reponseId){
       if($this->auth->user()->userRole  === 'user') {
    $view = 'master.layout';
   
     } else {
    $view = 'layouts.appFournisseur';
    
      }
       return view('/reclamations/updateReponse' , ['reponse' => $this->r->Reponsefinder($reponseId),
        'view' => $view]);
    }

    public function updateReponse(int $reclamationId , int $reponseId,storeReponseReclamationRequest $request){

    	$this->r->updatereponseReclamation(
            $reponseId,
            $request->get('content')
             )
        ;
        return redirect(route('reclamation.affiche', ['id' =>$reclamationId] ) );
    }
    public function delete(int $reclamationId , int $reponseId){
    	
    	$this->r->deleteReponseReclamation( $reponseId);

    	return redirect(route('reclamation.affiche' , ['id' =>$reclamationId]));
    }
}
