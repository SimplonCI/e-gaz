<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>E-GAZ</title>
  </head>
  <body>
    <ul>
      <li>
        <a class="active" href="#home">
          <img src="assets/img/logo.png" alt="logo" srcset="">
        </a>
      </li>

    </ul>
    <div class="login-page">
      <h4>Je m'inscris</h4>
      <?php include 'partials/error.php' ?>
      <div class="form">

        <form class="login-form" method="post" action="register.php">
          <input class="invalid" type="text" placeholder="Nom" name="nom" id="nom"  value="<?php echo $nom ?>" />
          <input type="text" placeholder="Prenom" name="prenom" id="prenom" value="<?php echo $prenom ?>" />
          <input type="email" placeholder="Email" name="email" id="email" value="<?php echo $email ?>" />
          <input type="tel" placeholder="Telephone" name="telephone" id="telephone" value="<?php echo $telephone ?>"  />
          <input type="password" placeholder="mot de passe" name="password" id="password"   />
          <input type="password" placeholder="confirmer le mot de passe" name="passwordConfirm" id="passwordConfirm"  />
          <button onclick="registerValidation();" name="inscription">Je m'inscris</button>
          <p class="message">Vous avez déjà un compte ? <a href="login.php">connexion </a></p>
        </form>
      </div>
    </div>

  <script src="assets/js/login.js"></script>
  </body>
</html>
