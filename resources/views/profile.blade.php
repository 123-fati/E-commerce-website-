@extends('master.layout') 
@section('content')

<div class="card" style="max-width: 100%; margin: 5%">
  <div class="row g-0">
    <div class="col-md-4">
    @foreach($user as $us)
      <img src="{{asset('images/'.$us['imProf'])}}" class="img-fluid rounded-start" style="margin: 3%" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="margin:6%; float: left">{{$us['username']}}</h5>
        @endforeach
        <button type="button" class="btn btn-secondary" style="float: right;margin:6%;">Envoyer un message</button>
      </div>
    </div>
  </div>
</div>
<hr style="margin-left: 5%;width:90%;color: black">

<div class="row row-cols-1 row-cols-md-2 g-4" style="margin: 5%;">
  <div class="col" >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Categories d'annonces</h5>
        @foreach($objet as $ob)
        <p class="card-text"><b>{{$ob['categorie']}} </b></p>
        <p>{{$ob['nom']}}</p>
        @endforeach
        </div>
    </div>
  </div>
  
  <div class="col" >
  
    <button type="button" class="btn btn-primary btn-lg rounded-0" style="width: 40%">Annonces</button>
      @foreach($annonce as $an)
      @foreach($objet as $ob)
      <div class="row g-0" style="border: 1px solid rgba(0,0,0,.125);">
        <div class="col-md-4">
          <img src="{{asset('images/'.$ob['path'])}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="row-md-8">
          <div class="card-body">
            <h5 class="card-title" style="float: left">{{$ob['nom']}}</h5>
            <div class="b" style="float right; margin-left: 70%;">
            <button type="button" class="btn btn-primary" style="border-radius: 100%">{{$an['prix']}}MAD/{{$an['periode']}}</button>
            </div>
            <p class="card-text">{{$an['description']}}</p>
            <button type="button" class="btn btn-success">Voir l'annonce</button>
          </div>
        </div>
      </div>
      @endforeach
      @endforeach
  </div>
</div>
</div>
@endsection