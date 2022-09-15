@extends('master.layout')
@section('content')
  @if($reservation ==false)
   <div  align="center">
          Aucunes reservations
         </div> 
  
  
 
  @else
<h3 class="text-center my-5">Reservation</h3>
<table class="table my-5 border w-75 mx-auto">
  <thead>
    <tr class="text-white text-center" style="background:#444444">
      <th scope="col">Num</th>
      <th scope="col">Objet</th>
      <th scope="col">Partenaire</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
    <tr class="text-secondary text-center" style="background:#eee">
      <th scope="col">{{$reservation->user->id}}</th>
      <th scope="col">{{$reservation->objet->nom}}</th>
      <th scope="col">{{$reservation->partenaire->name}}</th>
      <th scope="col">{{$reservation->objet->status}}</th>
      <th scope="col"><button class="btn btn-success">Voir Annonces</button></th>

  
    </tr>

  </thead>
  <tbody>

  </tbody>
</table>
@endif
@endsection