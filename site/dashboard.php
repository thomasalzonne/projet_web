<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/imgProgress.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
  <?php
  ini_set("display_errors","1");
  include("includes/connect-db.php");

  ?>
<!-- Navbar -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper light-blue darken-4">
            <a href="#home" class="brand-logo center waves-effect ">Dashboard</a>
            <ul class="left hide-on-med-and-down">
                <li><a class="waves-effect waves-light" href="#home" >Accueil</a></li>
                <li><a class="waves-effect waves-light" href="#message">Mes messages</a></li>
                <li><a class="waves-effect waves-light" href="#stats">Statistiques</a></li>
            </ul>
        </div>
    </nav>
    <div class="" id="home">

    </div>
</div>
    <a href=""></a>
    <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Compétences</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Expériences</a></li>
        <li class="tab col s3"><a href="#test3">Utilisateur</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
      <?php
      if(isset($_POST["message"])) {
          $query = $conn->prepare('INSERT INTO about(image, nom, date_debut , date_fin , description) VALUES (:image, :nom , :date_debut , :date_fin , :description)');
          $query->execute(array(
              ':image'=>htmlspecialchars($_POST["image"]),
              ':nom'=>htmlspecialchars($_POST["name"]),
              ':date_debut'=>htmlspecialchars($_POST["date_debut"]),
              ':date_fin'=>htmlspecialchars($_POST["date_fin"]),
              ':description'=>htmlspecialchars($_POST["message"])
            ));
      }
      ?>
      <form class="col s12" method="post" action="#home">
        <div class="input-field col s6">
            <i class="material-icons prefix">image_search</i>
            <input id="image" name="image" type="text" required />
            <label for="image">url image</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="name" name="name" type="text" required />
            <label for="name">Nom</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">calendar_today</i>
            <input id="date_debut" name="date_debut" type="text" required />
            <label for="date_debut">Date Début</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">calendar_today</i>
            <input id="date_fin" name="date_fin" type="text" required />
            <label for="date_fin">Date de fin</label>
        </div>
        <div class="input-field col s12">
            <textarea name="message" class="materialize-textarea" required></textarea>
            <label for="message">Description</label>
        </div>
        <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
        </button>
      </form>

    </div>
    <div id="test2" class="col s12">
      <?php
      if(isset($_POST["progress"])) {
          $query = $conn->prepare('INSERT INTO competence(image, progress) VALUES (:image, :progress)');
          $query->execute(array(
              ':image'=>htmlspecialchars($_POST["image"]),
              ':progress'=>htmlspecialchars($_POST["progress"])
            ));
      }
      ?>
      <form class="col s12" method="post" action="#home">
        <div class="input-field col s6">
            <i class="material-icons prefix">image_search</i>
            <input id="image" name="image" type="url" required />
            <label for="image">url image</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">replay</i>
            <input id="progress" name="progress" type="number" required />
            <label for="progress">Progression</label>
        </div>
        <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
        </button>
      </form>
    </div>
    <div id="test3" class="col s12">Test 3</div>

  </div>
    <!-- End Navbar -->
    <div class="parallax-container">
        <div class="parallax"><img src="ressources/parallax/fibre.jpg" alt="Homme qui fait de l'informatique"></div>
    </div>
    <!-- Index Page -->
  <a href="" id="message"></a>
  <div class="section page grey lighten-4 valign-wrapper">
    <div class="row container">
      <h2 class="center">Mes messages</h2>
      <ul class="collapsible z-depth-1">
      <?php
      $REQ = $conn->query('SELECT name, message FROM contact ');
      while($about = $REQ->fetch()) {
        echo "<div class = \"messages\">";
        echo $about["name"];
        echo " : ";
        echo $about["message"];
        echo "</div>";
      }
      ?>
</div>

</body>
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="includes/js/init.js"></script>
<script src="includes/js/imgProgress.js"></script>
<!-- End scripts -->
