@extends('master.layout')
@section('title' , 'Faire une reclamation')
@section('content')
<div class="container">
	<p class="text-center"> <h1>Ajouter une reclammation</h1> </p>
	<form action="" method="POST" class="form">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="sujet">Donner un sujet </label>
					{{ csrf_field() }}
					<input  id="sujet" type="text" class="form-control" name="sujet" placeholder="Sujet...">
				</div>
				
			</div>
			
		</div>
		<br>
      <div class="row">
			<div class="col-sm-6">
			 <div class="form-group">
			 	{{ csrf_field() }}
					<textarea name="contenu"class="form-control" placeholder="Ecrivez votre reclammation..."></textarea>
					
				</div>
			</div>
			</div>
		</div>
		</br></br>
		<div class="container">
			<button class="btn btn-primary " name="AJOUTER">AJOUTER</button>
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

@endsection;