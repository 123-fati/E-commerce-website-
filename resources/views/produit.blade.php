 @extends('master.layout') 
 @section('content')
 @foreach($objet as $ob)
 
<div class="row row-cols-1 row-cols-md-2 g-4" style=" margin: 3%">
    <div class="col">
        <div class="card">
        <div class="card-body">
           <h5 class="card-title">{{$ob['nom']}}</h5>
        </div>
        <img src="{{asset('images/'.$ob['image'])}}" class="card-img-top" alt="..." style="margin-bottom: 6%">
        </div>
    </div>
    <div class="col">
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title">Lieu de location</h5>
            </div>
            <img src="images/local.jpg" class="card-img-top" alt="..." style="margin-bottom: 6%">
            <p></p>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" ><span> Infos sur l'objet</span></h5>
                <P><HR NOSHADE></P>
                <h6>Etat de produit: {{$ob['etat']}}</h6>
                <P><HR NOSHADE></P>
                <P><HR NOSHADE></P>
                <h5><span>Details</span></h5>
                <h6>Ville: </h6>
            </div>
        </div>  
    </div>
    @endforeach
    <div class="col">
        <div class="card">
        <img src="images/part.jpg" class="card-img-top" alt="..."  >
        <div class="card-body">
        @foreach($user as $us)
            <h5 class="card-title" style="text-align: center; color: green">{{$us['nom']}}</h5>
        </div>
        @endforeach
        <form action="post" style="margin: 5%" class="btn btn-outline-info">
            
            <a href="{{ route('profile.show', $us['id'] ) }}" style="text-decoration:none;color: #0dcaf0">Contacter le partenaire</a>
            
        </form>
        </div>
    </div>
</div>
<div class="card" style=" margin: 5%">
    <h5 class="card-header">Commentaires</h5>
    <div class="card-body">
        <form style="float: left; width: 50%">
            <div class="mb-3" >
                <label for="exampleInputEmail1" class="form-label">Laissez un commentaire</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" >5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" >4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1">1 star</label>
            </div>
            <button type="submit" class="btn btn-success">Poster un commentaire</button>
        </form>

        <span class="vertical-line" ></span>

        <div class="mb-3" style="float: right; width: 40%;">
                <label for="exampleInputEmail1" class="form-label" >Dernieres commentaires</label>
        </div>
    </div>
</div>

@endsection