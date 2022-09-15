
<!DOCTYPE html>
<html>
<head>
	<title>Identification</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  
  
<form method="POST" action=" ">
	 <p><h1>Veuillez saisir les informations demandées</h1></p>
	 <div class="separation"></div>
     <div class="corps">
         <div class="groupe">
         	<label>Enter votre email</label>
            {{ csrf_field() }}
         	<input type="email" name="email" >
         	<i class="fas fa-user"></i>
         </div>
         <div class="groupe">
         	<label>Enter votre mot de passse</label>
            {{ csrf_field() }}
         	<input type="password" name="password"  >
         	<i class="fas fa-key"></i>
         </div>

     </div> 
     <div class="envoi" align="center">
         	<input type="submit" name="CONNECTER" >
         </div> 
</form>



</body>
</html>