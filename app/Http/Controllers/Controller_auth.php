<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\connexionRequest;
use App\Repository\testFourRepository;
use App\Repository\reclamationRepository;

class Controller_auth extends Controller
{
  

    	private $r;

      public function __construct(testFourRepository $testFourRepository , reclamationRepository $reclamationRepository){

 	  $this->r = $testFourRepository;
    $this->rep = $reclamationRepository;
  }
 	

 	   public function login(connexionRequest $request){

 	   	if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'), 'userRole' => 'admin' ])) {
    echo 'Authentication was successful...';

    $user = $this->r->getAdmin($request->get('email'));

     Auth::login($user);

     
       
     return view('/Admin/tableauDeBord' , ['unread'=>$this->rep->unreadCount()] );
}
          
         
        
       

          else{

          	return response([
          		'message' => 'Invalid email or password'],
          	401);
          }

        

  }
}
