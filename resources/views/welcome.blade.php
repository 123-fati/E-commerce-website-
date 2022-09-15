
@extends('master.layout')
@section('content')

@if($annonce ==false)
   <div  align="center">
          Aucunes annonces
         </div> 
  
  
 
  @else



<div class="row row-cols-1 row-cols-md-3 g-4 my-5 mx-auto "  style="width: 100%" >
  @foreach($annonce as $annonce) 
    <div class="col"    >
        
        <div class="card h-100" style="width: 60% ;height:40%" >
          <a href="{{route('affiche.produits' ,['id'=>$annonce-> id])}}">
            <img src="{{asset('./images/'.$annonce-> image)}}"  class="card-img-top" style="width: 100% ;height:50%" alt="a.png"></a>
            <div class="card-body">
              <h5 class="card-title">{{$annonce-> nom}}</h5>
              <h5 class="card-title">{{$annonce->prix}}</h5>
              
              <p class="card-text"> {{$annonce->description}}.</p>
              <a class="btn btn-success "   type="submit">Reserve</a>
            </div>
        </div>
        
      
   
    </div>
  @endforeach
   
  
</div>

@endif
@endsection
