<!DOCTYPE html>
<html>
<head>
	<title>Page </title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	
</head>
<body>
<div class="container">
	    <H1 align="center">Choisissez votre role</H1>
        <hr>
        <div class="btn-group-vertical">
          <a href="{{route('welcome') }}"> <button type="button" class="btn btn-outline-primary"> <h5>CLIENT </h5></button></a><br>

          <a href="{{route('connexionFournisseur') }}"> <button type="button" class="btn btn-outline-secondary"><h5>ADMINISTRATEUR</h5></button></a><br>

          
        </div>
    </div>
</div>

</body>

</html>