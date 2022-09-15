  @extends($view)
@section('title' , 'Mes reclamations')
 @section('content')

 @if($recherches->toArray()==false)
      <div  align="center">
          Pas de reclamations
         </div> 
 	
 	
 
 	@else
 		<div class="card">
 		
 		@foreach($recherches as $recherche)
 			
 		
 		<div class="card-header" align="center">
      <a href="{{route('reclamation.affiche', ['id'=>$recherche->id] ) }}" style="text-decoration: none;"> {{$recherche->from->name}} | <strong>{{ $recherche->sujet}}</strong>   le {{$recherche->created_at }} </a>
       </div>
    
  
</div>
@endforeach
@endif
@endsection