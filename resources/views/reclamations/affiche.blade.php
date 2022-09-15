
 @extends($view)
@section('title' , $reclamation[0]->sujet)
 @section('content')

 <br>
<div class="card ">
  <div class="card-header">
   <div class="row"> <div class="col-sm-6"><strong>{{$reclamation[0]->from->id == $user->id ? 'moi'  : $reclamation[0]->from->name  }} </strong> {{ $reclamation[0]->sujet }}<span style="background-color: yellow;">{{ $reclamation[0]->created_at }}</span>
   </div>

 @if($user->userRole =='user')
   <div class="col-sm-3" ><a href="{{route('reclamation.supprimer' , ['id' =>$reclamation[0]->id])}}"> 
             <i class="fas fa-trash"></i></a></br> </div>
       
        <div class="col-sm-3"><a href="{{route('reclamation.modifier' , ['id' =>$reclamation[0]->id])}}">
              <i class="fas fa-edit"></i> </a></br></div>
      @endif      
     </div>
 </div>
  </div>
  <div class="card-body">

    <p class="card-text">{{ $reclamation[0]->contenu }}.</p>
    
  </div>
  <hr>
</div>
 <br>
    @if($reponses==false)
      <div  align="center">
          Pas de reponses
         </div> 
  
  
 
  @else
   @foreach($reponses as $reponse)
    <div class="card">
    
  
    <div class="card-header" >
           <div class="row"> <div class="col-sm-6">
       <strong>{{$reponse->from->id == $user->id ? 'moi'  : $reponse->from->name  }}</strong> Repondu   le {{$reponse->created_at }}  </div>
        

 @if($reponse->from->id == $user->id)
       <div class="col-sm-3" ><a href="{{route('reponse.supprimer' , ['reponseId' =>$reponse->id  , 'reclamationId' => $reclamation[0]->id ] ) }}"> 
             <i class="fas fa-trash"></i></a></br> </div>
       
        <div class="col-sm-3"><a href="{{route('reponse.modifier' , ['reponseId' =>$reponse->id ,'reclamationId' => $reclamation[0]->id])}}">
              <i class="fas fa-edit"></i> </a></br></div>
              @endif
     </div>
       </div>
       <div class="card-body" >
       <p>{{ $reponse->content }}  </p>
       </div>
    
  
</div>
@endforeach
@endif
<br>
<br>
<section>

     <form action="" method="POST" class="">
       <div class="row">
      <div class="col-sm-6">
       <div class="form-group">
          {{ csrf_field() }}
          <textarea name="content"class="form-control" placeholder="Ecrivez votre reponse..."></textarea>
          
        </div>
      </div>
      </div>
      <br>
      <div container>
        <button type="submit" name="REPONDRE" class="btn btn-primary"> REPONDRE</button>
      </div>
     </form>   
</section>

@endsection