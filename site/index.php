<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV Thomas Alzonne</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/imgProgress.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="title" content="Site CV Alzonne Thomas">
    <meta name="description" content="Bonjour et bienvenue sur mon site web illustrant mon parcours scolaire ainsi que mes compétences. Vous pouvez si vous le souhaitez m'envoyer un message et me proposer une offre de stage."
</head>
<body>
<?php
ini_set("display_errors", "1");
include("includes/connect-db.php");
?>
<!-- Navbar -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper light-blue darken-4">
            <a href="#home" class="brand-logo center waves-effect hide-on-med-and-down">Thomas Alzonne</a>
            <a href="#home" class="brand-logo center waves-effect hide-on-large-only show-on-medium-and-down">Thomas</a>
            <ul class="left hide-on-med-and-down">
                <li><a class="waves-effect waves-light" href="#home" >Accueil</a></li>
                <li><a class="waves-effect waves-light" href="#about">A propos</a></li>
                <li><a class="waves-effect waves-light" href="#skills">Compétences</a></li>
                <li><a class="waves-effect waves-light" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Navbar -->
<!-- Index Page -->
    <a href="" id="home"></a>
    <div class="section page grey lighten-4 valign-wrapper">
        <div class="row container">
            <h1 class="header center">Developpeur Logiciel</h1>
            <div class="row align-item=center margin-left = 10%">
                <div class="col s2">
                    <img class="responsive-img circle materialboxed" width="650" src="ressources/img/toto.jpg">
                </div>
                <div class="col s6">
                    <p>
                    Je m'appelle Thomas Alzonne j'ai 20 ans et je suis à l'école Ynov en Bachelor 1 de la section Ingésup.
                    J'habite au 42 rue d'Oradour sur Glane à Toulouse. Je suis très intéressé par l'informatique depuis
                    que je suis petit. J'aimerai, à terme, travailler dans le développement logiciel ou dans le
                    développement de jeux vidéo. J'ai notamment créer un petit console game comme projet final de
                    Python. Je compte commencer à apprendre à utiliser l'outil Unreal Engine qui est un outil utilisé pour faire des jeux vidéos ainsi que des applications en réalité augmenté.
                    </p>
                </div>
            </div>
        </div>
    </div>
<!-- End Index -->
<!-- Spacer parallax -->
    <div class="parallax-container">
        <div class="parallax"><img src="ressources/parallax/informatic.jpg" alt="Homme qui fait de l'informatique"></div>
    </div>
<!-- End spacer -->
<!-- Page about -->
    <a href="" id="about"></a>
    <div class="section page grey lighten-4 valign-wrapper">
      <div class="row container">
        <h2 class="center">A propos de moi</h2>
        <ul class="collapsible z-depth-1 hide-on-med-and-down">
        <?php
        $REQ = $conn->query('SELECT * FROM about ORDER BY date_debut ');
        while($about = $REQ->fetch()) {
            include('models/about.model.php');
        }
        ?>
        </ul>
        <ul class="collapsible z-depth-1 hide-on-large-only show-on-medium-and-down">
        <?php
        $REQ = $conn->query('SELECT * FROM about ORDER BY date_debut ');
        while($about = $REQ->fetch()) {
            include('models/about-med.model.php');
        }
        ?>
        </ul>
      </div>
    </div>
<!-- End about -->
<!-- Spacer parallax -->
    <div class="parallax-container">
        <div class="parallax"><img src="ressources/parallax/informatic.jpg"></div>
    </div>
<!-- End spacer -->
<!-- Page competence -->
    <a href="" id="skills"></a>
    <div class="section page grey lighten-4 valign-wrapper">
        <div class="row container center">
            <h2 class="header">Mes compétences</h2>
            <div class="row container">
                <?php
                $REQ = $conn->query('SELECT * FROM competence ORDER BY progress DESC');
                while($competence = $REQ->fetch()) {
                    include('models/competence.model.php');
                }
                ?>
            </div>
        </div>
    </div>
<!-- End competence -->
<!-- Spacer parallax -->
<div class="parallax-container">
        <div class="parallax"><img src="ressources/parallax/informatic.jpg"></div>
    </div>
<!-- End spacer -->
<!-- Page contact -->
    <a href="" id="contact"></a>
    <div class="section page grey lighten-4 valign-wrapper">
      <div class="row container">
        <h2 class="header">Contactez moi</h2>
        <div class="row">
            <?php
            if(isset($_POST["action"])) {
                $query = $conn->prepare('INSERT INTO contact(name, mail, message) VALUES (:name, :mail, :message)');
                $query->execute(array(
                    ':name'=>htmlspecialchars($_POST["name"]),
                    ':mail'=>htmlspecialchars($_POST["mail"]),
                    ':message'=>htmlspecialchars($_POST["message"]))
                );
            }
            ?>
            <form class="col s12" method="post" action="#contact">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="name" name="name" type="text" class="validate" required />
                        <label for="name">Nom</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">contact_mail</i>
                        <input id="mail" name="mail" type="email" class="validate" required />
                        <label for="mail">Email</label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <textarea name="message" class="materialize-textarea" required></textarea>
                    <label for="message">Message</label>
                </div>
                <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Envoyer
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
      </div>
    </div>
<!-- End contact -->
<!-- Footer -->
<footer class="page-footer light-blue darken-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <span class="white-text page-title">CV Thomas Alzonne</span>
                <p class="grey-text text-lighten-4">Bonjour si tu es arrivé jusque là sache que je recherche actuellement un stage ou un contrat étudiant en alternance. Voila voilà bisous bisous.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <span class="white-text page-title">Comment me contacter</span>
                <ul>
                    <li><a class="grey-text text-lighten-3" target="_blank" href="https://www.facebook.com/thomas.alzonne">Facebook</a></li>
                    <li><a class="grey-text text-lighten-3" target="_blank" href="https://www.linkedin.com/in/thomas-alzonne-a42850173/">Linked In</a></li>
                    <li><a class="grey-text text-lighten-3" target="_blank" href="https://twitter.com/Thomas_Alzonne">Twitter</a></li>
                </ul>
                <span class="white-text page-title">Portfolio</span>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Portfolio</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright light-blue darken-4">
        <div class="container">
            © 2019 Thomas Alzonne
            <a class="grey-text text-lighten-4 right" href="connect.php">Connexion</a>
        </div>
    </div>
</footer>
<!-- End footer -->
</body>
</html>
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="includes/js/init.js"></script>
<script src="includes/js/imgProgress.js"></script>
<!-- End scripts -->
