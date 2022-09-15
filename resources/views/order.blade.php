@extends('master.layout')
@section('content')
<h3 class="text-center my-5">Orders</h3>
@if(session()->has('success'))

<div class="alert alert-success container text-center">

        {{session()->get('success')}}

</div>



@endif
 @if($order ==false)
   <div  align="center">
          Aucun orders
         </div> 
  
  
 
  @else
<table class="table my-5 border w-75 mx-auto">
  <thead>
    <tr class="text-white text-center" style="background:#444444">
      <th scope="col">Num</th>
      <th scope="col">Objet</th>
      <th scope="col">Client</th>
      <th scope="col">Voir le profil de client</th>
      <th scope="col">Action</th>
    </tr>
    <tr class="text-secondary text-center" style="background:#eee">
      <th scope="col">{{$order->user->id}}</th>
      <th scope="col">{{$order->objet->nom}}</th>
      <th scope="col">{{$order->partenaire->name}}</th>
      <th scope="col"><button class="btn btn-success">Consulter</button></th>
      <form action="{{route('edit',$order->objet->id)}}" method="post">
        @csrf
        <th scope="col"><button type="submit "class="btn btn-primary">Accepter</button></th>
      </form>

  
    </tr>

  </thead>
  <tbody>

  </tbody>
</table>
@endif
@endsection