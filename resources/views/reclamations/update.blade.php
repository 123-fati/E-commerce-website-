@extends('master.layout')
@section('title' , 'Modification | reclamation')
@section('content')

<div class="container">
  <p class="text-center"> <h1>Modifier une reclammation</h1> </p>
  <form action="" method="POST" class="form">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="sujet">Modifier le sujet </label>
            {{ csrf_field() }}
          <input  id="sujet" type="text" class="form-control" name="sujet" value="{{ $reclamation[0]->sujet }}" >
        </div>
        
      </div>
      
    </div>
    <br>
      <div class="row">
      <div class="col-sm-6">
       <div class="form-group">
          {{ csrf_field() }}
          <textarea name="contenu"class="form-control" >{{$reclamation[0]->contenu }}</textarea>
          
        </div>
      </div>
      </div>
    </div>
    </br></br>
    <div class="container">
      <button class="btn btn-primary " name="MODIFIER">MODIFIER</button>
    </div>
  
  </form>

</div>
@if($errors->any())
<div class="alert alert-danger">
  <ul> 
   @foreach($errors->all() as $error)
     <li>
       {{$error}}
     </li>
     @endforeach
  </ul>
  
</div>
@endif
@endsection