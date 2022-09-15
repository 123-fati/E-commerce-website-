@extends('master.layout')

@section('content')
    
    <div class="card" style="margin: 5%; width: 90%; border: 0px solid ">
        <div class="card-body mb-4">
      
          <!-- Stepper -->
          <div class="steps-form">
            <div class="steps-row setup-panel">
              <div class="steps-step">
                <a href="#step-9" type="button" class="btn btn-indigo btn-circle">1</a>
                <p>Categorie</p>
              </div>
              <div class="steps-step">
                <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Details</p>
              </div>
              <div class="steps-step">
                <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Check out</p>
              </div>
            </div>
          </div>
      
          <form role="form"  action="{{route('affiche.inputs')}}" method="get">
      
            <!-- First Step -->
           <center> <div class="row setup-content" id="step-9">
              <div class="col-md-12" style="align: center">
                    <div style="margin-left: 40%"></div>
                        <div class="jumbotron">
                            <div class="container">
                            <div class="row">
                                  <div class="row g-3 " style="width: 40rem;margin-left:100px">
                                    <div class="col" >
                                     <label for="state">Choisissez une categorie <b><label for="required" style="color: red">*</label></b></label>
                                    </div>
                                    <div class="col">
                                      <select class="form-select" aria-label="Default select example" id="state" name="categorie" required>
                                        <option value="all">Categories</option>
                                        <option value="BTP" >BTP</option>
                                        <option value="BTP" >Transport</option>
                                        <option value="BTP" >Jardin</option>
                                        <option value="BTP" >Electricite</option>
                                        <option value="BTP" >Maison</option>
                                      </select>                                    
                                    </div>
                                  </div>
                            </div>
                        </div>
                        </div>
                        <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button" style="margin:3%">Suivant</button>
                    </div>
                </div>
              </center>
      
            <!-- Second Step -->
            <center><div class="row setup-content" id="step-10" style="width: 95%;">
              <div class="col-md-12">
                <p class="font-weight-bold pl-0 my-4">
                  Vous etes entrain de creer une annonce: <br>
                  Pour creer une annonce de location pour qu'un locataire vous contacte
                </p>
                <div class="row g-3" style="margin:3%">
                  <div class="col">
                    <label for="inputEmail4" class="form-label">Que louez-vous <b><label for="required" style="color: red">*</label></b></label>
                    <input type="text" class="form-control"  aria-label="First name" name="nom">
                  </div>
                  <div class="col">
                    <label for="inputEmail4" class="form-label">Prix/jours <b><label for="required" style="color: red">*</label></b></label>
                    <input type="text" class="form-control"  aria-label="Last name" name="prix">
                  </div>
                </div>

                <div class="row g-3" style="margin:3%">
                  <div class="col">
                    <label for="inputEmail4" class="form-label">Description <b><label for="required" style="color: red">*</label></b></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                  </div>
                  <div class="col">
                    <label for="inputEmail4" class="form-label">Ville <b><label for="required" style="color: red">*</label></b></label>
                    <select id="inputState" class="form-select" name="ville">
                      <option selected>Choisissez votre ville</option>
                      <option>Tanger</option>
                      <option>Tetouan</option>
                      <option>Chefchouen</option>
                      <option>Agadir</option>
                      <option>Casablanca</option>
                      <option>Rabat</option>
                      <option>Safi</option>
                      <option>Marrakech</option>
                      <option>kenitra</option>
                      <option>Sale</option>
                      <option>Bengurir</option>
                      <option>hoceima</option>
                    </select>                  
                  </div>
                </div>

                <div class="row g-3" style="margin:3%">
                  
                  <div class="col">
                    <label for="inputEmail4" class="form-label">Etat de produit <b><label for="required" style="color: red">*</label></b></label>
                    <select id="inputState" class="form-select" name="etat">
                      <option selected>Choisissez l'etat d'objet </b></option>
                      <option>Good</option>
                      <option>No good</option>
                    </select> 
                  </div>
                  <div class="col">
                    <label for="inputEmail4" class="form-label">Type d'annonce <b><label for="required" style="color: red">*</label></b></label>
                    <select id="inputState" class="form-select" name="typeAnn">
                      <option selected>Choisissez le type d'annonce</option>
                      <option>Premium</option>
                      <option>Normale</option>
                    </select>                    
                  </div>

                  <div class="row g-3">

                    <div class="col" >
                        <label for="formFileLg" class="form-label">Periode d'annonce <b><label for="required" style="color: red">*</label></b></label>
                        <input type="text" class="form-control"  aria-label="Last name" name="periode">                    
                    </div>
                    <div class="col" >
                      <label for="formFileLg" class="form-label">Image <b><label for="required" style="color: red">*</label></b></label>
                      <input class="form-control form-control" id="formFileLg" type="file" style="background-color:#2bbbad; color:white" name="image">
                    </div>
                  </div>
                  
                </div>
                <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Retour</button>
                <button class="btn btn-indigo btn-rounded nextBtn float-right" type="submit">Suivant</button>
              </div>
            </div>
            </center>
          </form>
            <!-- Third Step -->
            <div class="row setup-content" id="step-11">
              <div class="col-md-12">
                <h3 class="font-weight-bold pl-0 my-4"><strong>Step 3</strong></h3>
                @if(session()->has('nom'))
                <p>{{session()->get('nom')}}</p>
                @endif
                <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
              </div>
            </div>
      
         
      
        </div>
      </div>
      <!-- Steps form -->
    </div>
@endsection