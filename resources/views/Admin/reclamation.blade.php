@extends('layouts.appFournisseur')

@section('content')
<form action="" method="POST" style="top: 100px;" >
    <div class="container">
    <div class="row">
        <div class="col">
    <h3>Reclamation</h3></div>
    <div class="col">
        {{ csrf_field() }}
    <input type="search" name="reclamationSearch" id="reclamation" placeholder="rechercher un sujet"> <BUTTON type="search" name=search>Rechercher</BUTTON> </div>
     
     </div > </div>
 </form>
 <br><br>
 @if($reclamations==false)
      echo'<div  align="center">
          Pas de reclamations
         </div> ';
    
    
 
    @else 
        @foreach($reclamations as $reclamation)
            
        <div class="card">
        <div class="card-header" >
           
      <a href="{{route('showReclamation',['id'=>$reclamation->id]) }}" style="text-decoration: none;"> {{$reclamation->from->name }}  | <strong>{{$reclamation['sujet']}}</strong>   
             |  {{ substr($reclamation['contenu'], 0, 12).'...'}} 
          |  {{ $reclamation['created_at']}}</a>
      
         </div>
         </div>
         <br>
      @endforeach
      @endif
@endsection