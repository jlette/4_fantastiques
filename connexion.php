<?php
require('config.php');
?>
<!DOCTYPE html>

<html lang="fr">

<head>

  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="icon\icon.png"/>
  <link rel="stylesheet" href="css\Normalité.css"/>
  <link rel="stylesheet" href="css\Header.css"/>
  <link rel="stylesheet" href="css\section.css"/>
  <link rel="stylesheet" href="css\footer.css"/>
  <link rel="stylesheet" href="css\connexion.css"/>
  <title> Les 4 fantastiques </title>

</head>

<body>
<!--================ HEADER =================-->
  <header role="header">
    <nav class="menu" role="navigation">
      <div class="inner">
      <div class="m-left">
        <h1 class="logo"></i>Les <i aria-hidden="true"><img class="icon-logo"src="icon\icon.png"></i> fantastiques</h1>
      </div>
      <div class="m-right">
        <a href="index.html" class="m-link"><i class="fas fa-home" aria-hidden="true"></i>Accueil</a>
        <a href="rendezvous.html" class="m-link">rendez vous</a>
        <a href="à propos" class="m-link">À propos</a>
        <a href="Inscription.html" class="m-link">Inscription</a>
        <a href="connexion.php" class="m-link">Connexion</a>
      </div>

      <div class="m-nav-toggle">
        <span class="m-nav-toggle-icon"></span>
      </div>
    </nav>
  </header>
<!--================ HEADER =================-->

    <section class="pos-connexion" >
      <div class="connexion">
      <form action="enregistrement.php" class="login-form">
        <h1>Connexion</h1>

        <div class="txtb">
          <input type="text">
          <span data-placeholder="Nom d'utilisateur"></span>
        </div>

        <div class="txtb">
          <input type="password">
          <span data-placeholder="Mot de passe"></span>
        </div>

        <input type="submit" class="logbtn" value="Connexion">

        <div class="bottom-text">
         Vous n'avez pas de compte ? <a href="#">Inscrivez vous</a>
        </div>

      </form>
    </div>
      </section>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>

      <!--================ JAVASCRIPT =================-->
<script src="https://kit.fontawesome.com/279893fecc.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="js\app.js"></script>



  </body>


</html>
