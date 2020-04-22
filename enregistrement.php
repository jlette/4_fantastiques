<?php 

session_start();

//require('config.php');

  echo "bonjour";


$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);


if (preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $_POST['telephone'])) {
  echo "Le numéro de téléphone entré est correct.";
  $telephone = htmlspecialchars($_POST['telephone']);
  // Ajout du numéro de téléphone à la base de donnée
} else {
      $message = " ERREUR ";
      exit;}
 if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo "L'adresse e-mail est valide";
    $mail = $_POST['email'];
  }else{
    echo "L'adresse e-mail n'est pas valide";
      
    exit;}

$password = $_POST['password'];

$hashed_password = password_hash($_POST["password"],PASSWORD_DEFAULT);

 $select = $bdd->query('SELECT * FROM connexion ');
 while($valeur = $select->fetch()){
if($mail == $valeur[5]){
 
  exit();
}

if($telephone == $valeur[3]){
  
  exit();
}
var_dump($nom);
var_dump($prenom);
var_dump($telephone);
var_dump($hashed_password);
var_dump($mail);
$q = 'INSERT INTO connexion (Nom, Prénom, Telephone, password, mail) VALUES (?, ?, ?, ?, ?)';
    $req = $bdd->prepare($q);
    $req->execute([ $nom, $prenom, $telephone, $hashed_password, $mail]);



  header('Location:index.html');
  exit();
?>