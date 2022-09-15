<?php
namespace App\Repository;



use App\Models\Reponse;
Use Carbon\Carbon;

class reponseReclamationRepository {

	

  private $reponse;

	public function __construct( Reponse $reponse) {


    $this->reponse = $reponse;
    }
    public function getReponsesReclamation( int $reclamation_id) {
      

       return $this->reponse->newQuery()
       ->select('*')
       ->where('reclamationId'  , $reclamation_id)
       ->where('actif'  , 1)
       ->orderBy('created_at','DESC') 
       ->get();
    
      
    }

    public function createReponseReclamation(int $from,string $content, int $reclamationId){
      

    	return $this->reponse->newQuery()->create([
      'reclamationId' => $reclamationId,
      'from_id' => $from,
    	'content'	=> $content,
    	'created_at'	=> Carbon::now(),
      'actif'=>1
      
    	])
              ;
    }
	
	public function Reponsefinder(int $reponseId)  {

    return $this->reponse->newQuery()
      ->select('*')
       ->where('id', $reponseId)
       ->get();
    
  }

  public function updatereponseReclamation(int $reponseReclamationId , String $newContent){

    return $this->reponse->newQuery()
    ->where('id' , $reponseReclamationId)
    ->update([
          'content'=> $newContent,
          'updated_at' => Carbon::now()
    ]) ;

  }

  public function deleteReponseReclamation( int $reponseReclamationId){

    return $this->reponse->newQuery()
    ->where('id' , $reponseReclamationId)
    ->update([
      'actif' => 0
        
    ]) ;
  }
	
}

