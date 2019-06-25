<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Connexion</title>
</head>
<body>
<?php
  include("includes/connect-db.php");
  if(isset($_POST['action']))
  {
    $REQ = $conn->query('SELECT * FROM user WHERE username ="' .$_POST["username"].'"');
    $log = $REQ->fetch();

    if($log['username'] == $_POST["username"] && $log['password'] == $_POST["password"]) {
      $_SESSION['id'] = 1;
      header('Location: dashboard.php');
    }
  }
?>
<div class="row connect-form">
    <form method="post" class="col s12" action="#">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" name="username" type="text" class="validate" required />
          <label for="username">Nom de compte</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input id="password" name="password" type="password" class="validate" required />
          <label for="password">Mot de passe</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">Envoyé
        <i class="material-icons right">send</i>
      </button>
      <a class="btn waves-effect waves-light light-blue darken-3 right" href="index.php" style="margin-right: 10px;">Acceuil
        <i class="material-icons right">home</i>
      </a>
    </form>
  </div>
</body>
</html>
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="includes/js/init.js"></script>
<script src="includes/js/imgProgress.js"></script>
<!-- End scripts -->
