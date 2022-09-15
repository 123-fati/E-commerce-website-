@extends($view)
@section('title' , 'Modification | reclamation')
@section('content')

<section>

     <form action="" method="POST" class="">
       <div class="row">
      <div class="col-sm-6">
       <div class="form-group">
          {{ csrf_field() }}
          <textarea name="content"class="form-control" > {{ $reponse[0]->content}}</textarea>
          
        </div>
      </div>
      </div>
      <br>
      <div container>
        <button type="submit" name="MODIFIER" class="btn btn-primary"> MODIFIER</button>
      </div>
     </form>   
</section>

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