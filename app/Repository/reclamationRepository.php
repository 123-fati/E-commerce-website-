<?php
namespace App\Repository;


use App\Models\Reclamation;
Use Carbon\Carbon;

class reclamationRepository {

	
	private $reclamation;

	public function __construct( Reclamation $reclamation) {

		
		$this->reclamation = $reclamation;
    }

    public function allUsersReclamations(){

      return $this->reclamation->newQuery()
      ->select('*')
      ->where('actif', 1)
      ->orderBy('created_at','DESC')
      ->get();
    }
    public function getReclamations( int $userid) {
      

       return $this->reclamation->newQuery()
       ->select('*')
       ->where('userId'  , $userid)
       ->where('actif'  , 1)
       ->orderBy('created_at','DESC') 
       ->get();
    
      
    }

    public function createReclamation(string $sujet ,string $content, int $userId){
      

    	return $this->reclamation->newQuery()->create([
      'userId' => $userId,
    	'sujet'	=> $sujet,
    	'contenu'	=> $content,
    	'created_at'	=> Carbon::now(),
      'status' =>'En cours',
      'actif'=>1
    	])
              ;
    }
	
	public function Reclamationfinder(int $reclamationId)  {

		return $this->reclamation->newQuery()
	    ->select('*')
       ->where('id', $reclamationId)
       ->get();
		
	}

  public function updateReclamation(int $reclamationId , String $newSubject, String $newContent){

    return $this->reclamation->newQuery()
    ->where('id' , $reclamationId)
    ->update([
      'sujet' => $newSubject,
          'contenu'=> $newContent,
          'updated_at' => Carbon::now()
    ]) ;

  }

  public function deleteReclamation( int $reclamationId){

    return $this->reclamation->newQuery()
    ->where('id' , $reclamationId)
    ->update([
      'actif' => 0
        
    ]) ;
  }

  public function searchReclamation(String $sujet , int $userid){
      
      return $this->reclamation->newQuery()
       ->select('*')
       ->where('sujet'  ,'like','%'.$sujet.'%')
       ->where('userId'  , $userid)
        ->where('actif'  , 1)
       ->orderBy('created_at','DESC') 
       ->get();
  }

   public function searchReclamationInAll(String $sujet ){
      
      return $this->reclamation->newQuery()
       ->select('*')
       ->where('sujet'  ,'like','%'.$sujet.'%')
        ->where('actif'  , 1)
       ->orderBy('created_at','DESC') 
       ->get();
  }

  public function unreadCount(){
     
         return $this->reclamation->newQuery()
          
         ->select('id')
         ->whereRaw('read_at IS NULL')
          
         ->get();
        
  }

  public function readAll(){

    return $this->reclamation->newQuery()->whereRaw('read_at IS NULL')->update(['read_at'=> Carbon::now()]);
  }
	
}

