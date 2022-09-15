 @extends('master.layout')
@section('title' , 'Mes reclamations')
 @section('content')

<br><br>
 <form action="" method="POST" style="top: 100px; "  class="h-100">
 	<div class="container">
 	<div class="row">
 		<div class="col">
 	<h3>Reclamation</h3></div>
 	<div class="col">
 		{{ csrf_field() }}
 	<input type="search" name="reclamationSearch" id="reclamation" placeholder="rechercher un sujet"> <BUTTON type="search" name=search>Rechercher</BUTTON> </div>
 	<div class="col">
 		<a href="{{route('reclamation.edit')}}" style=" display: block;width: 55px;height: 55px;line-height: 55px;text-align: center;color: #FFF;font-size:  30px;background-color: #007bff;border-radius: 50%;position: absolute;top: 150px;right : 400px;text-decoration: none;" class="reclammation__bouton">+</a>
 	</div>
     
     </div > </div>
 </form>
 <br><br>
    @if($reclamations->toArray()==false)
      <div  align="center">
          Aucune reclamations
         </div> 
 	
 	
 
 	@else
 		<div class="card">
 		
 		@foreach($reclamations as $reclamation)
 			
 		
 		<div class="card-header" align="center">
      <a href="{{route('reclamation.affiche', ['id'=>$reclamation->id] ) }}" style="text-decoration: none;"> <strong>{{ $reclamation->sujet}}</strong>   le {{$reclamation->created_at }} </a>
       </div>
    
  
</div>
@endforeach
@endif
@endsection
