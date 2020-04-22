<?php
require('config.php');
?>

<!DOCTYPE HTML>
<!--commentaires -->
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" sizes="32x32" href="images/favicon-32.png" type="image/png">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="Inscription.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
</head>
<body>

   

    <br>
    <br>

<td><a name="#sds"><h2 align="center"><strong>INSCRIPTION</strong></h2></a><br></td>

    <br>

<form action="enregistrement.php" method="POST" id="myform" align="center">
	<p>
		<label for="name">Nom :</label>
		<input id="name" type="text" name="nom" size="10" ><br/>
	</p>
	<br>
	<p>
		<label for="first-name">Prenom :</label>
		<input id="first-name" type="text" name="prenom" size="10" /><br/>
 	</p>
 	<br>
    <p>
		<label for="mail">E-mail :</label>
		<input id="mail" type="email" name="email" size="10" /><br/>
 	</p>
 	<br>
 	<p>
		<label for="Pseudo">Telephone :</label>
		<input id="Pseudo" type="text" name="telephone" size="10" /><br/>
 	</p>
 	<br>
 	<p>
		<label for="password">Mot de passe :</label>
		<input id="password" type="password" name="password" size="10" /><br/>
 	</p>
 	<br>
	<p>
		<label></label>
		<input align="center" class="button" type="submit" value="S'inscrire"  />
 	</p>
</form>


<style>

form#myform label { display:inline-block; width:130px; }
form#myform input { display:inline-block; }
form#myform input[type=submit] { color:#fff; background-color:green; }

</style>

  
</body>