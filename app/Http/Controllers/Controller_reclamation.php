<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreReclamationsRequest;
use App\Http\Requests\searchRequest;
use Illuminate\Auth\AuthManager;
use App\Repository\reclamationRepository;
use App\Repository\reponseReclamationRepository;

class Controller_reclamation extends Controller
{
    private $r;
	private $auth;
	private $rep;

	public function __construct(AuthManager $auth, reclamationRepository $reclamationRepository, reponseReclamationRepository $reponseReclamationRepository){
		$this->auth = $auth;
		$this->r=$reclamationRepository;
		$this->rep=$reponseReclamationRepository;
	}


	public function all(){
       
        return view('/reclamations/all' , ['reclamations' =>  $this->r->getReclamations($this->auth->user()->id)  ]);
	}

  public function allReclamations(){
    $unread=$this->r->unreadCount();
          $this->r->readAll();
          unset($unread);
     return view('/Admin/reclamation' , ['reclamations' =>  $this->r->allUsersReclamations() ]);
  }

	public function show(int $id){
    
    
    if($this->auth->user()->userRole  === 'user') {
    $view = 'master.layout';
   
     } else {
    $view = 'layouts.appFournisseur';
    
      }


       return view('/reclamations/affiche' , ['reclamation' =>$this->r->Reclamationfinder($id) ,
                                              'reponses'=> $this->rep->getReponsesReclamation($id) ,
                                              'user'=> $this->auth->user(),
                                              'view'=>$view,
                                              'unread'=>$this->r->unreadCount()]);
	}
    
     public function edit(){
        return view('/reclamations/edit');
     }

	public function store(StoreReclamationsRequest $request) {
        
        $this->r->createReclamation(
        	$request->get('sujet'),
        	$request->get('contenu'),
            $this->auth->user()->id);

        return redirect(route('reclammations') );
    }

    public function update(int $id) {

    	 return view('/reclamations/update' , ['reclamation' => $this->r->Reclamationfinder($id) ]);
    }

    public function updateReclamation(int $id ,StoreReclamationsRequest $request) {
       
        $this->r->updateReclamation(
            $id,
            $request->get('sujet'),
            $request->get('contenu')
             )
        ;
        return redirect(route('reclammations') );
    }

     public function delete(int $id){
        
        $this->r->deleteReclamation($id);
        return redirect(route('reclammations') );
     }
 
     public function search(searchRequest $request){
        
        
         return view('/reclamations/recherches' , ['recherches' => $this->r->searchReclamation($request->get('reclamationSearch') ,$this->auth->user()->id ),
         'view'=>'master.layout' ]);

     }

     public function searchInAll(searchRequest $request){
        
        
         return view('/reclamations/recherches' , ['recherches' => $this->r->searchReclamationInAll($request->get('reclamationSearch') ) ,
            'view'=>'layouts.appFournisseur']);

     }

   
}
