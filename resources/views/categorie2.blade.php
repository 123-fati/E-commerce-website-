@extends('master.layout')

@section('content')
    
    <div class="card " style="margin: 5%; widtd: 90%; border: 0px solid ">
        <div class="card-body mb-4">
      
          <!-- Stepper -->
          <div class="steps-form">
            <div class="steps-row setup-panel">
              <div class="steps-step">
                <a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled">1</a>
                <p>Step 1</p>
              </div>
              <div class="steps-step">
                <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Step 2</p>
              </div>
              <div class="steps-step">
                <a href="#step-11" type="button" class="btn btn-indigo btn-circle">3</a>
                <p>Step 3</p>
              </div>
             
            </div>
          </div>
      <form action="{{route('addAnn')}}"  method="post">
          <!-- tdird Step -->
          @csrf
          <center><div class="row setup-content" id="step-11">
            <div class="col-md-12">
              @if(session()->has('nom'))
              <table class="table 
              table-bordered" style="widtd: 400px">
                <tbody>
                  <tbody>
                    <tr>
                      <td scope="col">categorie</td>
                      <td><input type="hidden" value="{{session()->get('categorie')}}" name="categorie">{{session()->get('categorie')}}</td>
                    </tr>
                    <tr>
                      <td scope="col">Objet a louer</td>
                      <td><input type="hidden" value="{{session()->get('nom')}}" name="nom">{{session()->get('nom')}}</td>
                    </tr>
                    <tr>
                      <td scope="col">description</td>
                      <td><input type="hidden" value="{{session()->get('description')}}" name="description">{{session()->get('description')}}</td>
                    </tr>
                    <tr>
                      <td scope="col">etat de produit</td>
                      <td><input type="hidden" value="{{session()->get('etat')}}" name="etat">{{session()->get('etat')}}</td>
                    </tr>
                    <tr>
                      <td scope="col">Prix par jour</td>
                      <td><input type="hidden" value="{{session()->get('prix')}}" name="prix">{{session()->get('prix')}} MAD</td>
                    </tr>
                    <tr>
                      <td scope="col">Type d'annonce</td>
                      <td><input type="hidden" value="{{session()->get('typeAnn')}}" name="typeAnn" >{{session()->get('typeAnn')}}</td>
                    </tr>
                    <tr>
                      <td scope="col">Periode d'annonce</td>
                      <td><input type="hidden" value="{{session()->get('periode')}}" name="periode" >{{session()->get('periode')}} Jours</td>
                    </tr>
                    <tr>
                      <td scope="col">Ville</td>
                      <td><input type="hidden" value="{{session()->get('ville')}}" name="ville">{{session()->get('ville')}}</td>
                    </tr>
                    <tr>
                      <td scope="col">Image de l'objet</td>
                      <td><input type="hidden" value="{{session()->get('image')}}" name="image">{{session()->get('image')}}</td>
                    </tr>
                </tbody>
              </table>
              
              <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Retour</button>
              <button class="btn btn-default btn-rounded float-right" type="submit"
              >Valider</button>
            </div>
          </div>
          @endif
          </form>
      
        </div>
      </div></center>
      <!-- Steps form -->
    </div>
@endsection