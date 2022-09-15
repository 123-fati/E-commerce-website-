<?php

namespace App\Repository;

use App\Models\User;


class testFourRepository {

  private $user;


  public function __construct(User  $user) {

  	$this->user = $user;
  }


  public function getAdmin(String $email ){
         
         return $this->user->newQuery()
       ->select('*')
       ->where('email'  , $email)
       ->where('userRole'   , 'admin')
       ->first();
  

    

  }
}