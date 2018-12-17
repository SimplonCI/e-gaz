<?php
  session_start();
  include 'config/database.php';
  $nom = "";
  $prenom = "";
  $email = "";
  $telephone = "";
  $password = "";
  $passwordConfirm = "" ;

  $errors = array();

  // quand le formulaire est soumit
  if (isset($_POST['inscription'])) {
    // echappement des carateres speciaux
    $nom = mysqli_real_escape_string($db,$_POST['nom']);
    $prenom = mysqli_real_escape_string($db,$_POST['prenom']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $telephone = mysqli_real_escape_string($db,$_POST['telephone']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $passwordConfirm = mysqli_real_escape_string($db,$_POST['passwordConfirm']);

    // validation du formulaire et ajout des erreurs  dans le tableau errors
    if (empty($nom)) {
      array_push($errors,"Le nom est obligatoire");
    }

    if (empty($prenom)) {
      array_push($errors,"Le prenom est obligatoire");
    }

    if (empty($email)) {
      array_push($errors,"Le email est obligatoire");
    }

    if (empty($password)) {
      array_push($errors,"Le mot de passe est obligatoire");
    }

    if ($password != $passwordConfirm) {
      array_push($errors,"Les deux mot de passe ne concorde pas");
    }


    // verification si l'utilisateur a deja un compte
    $user_check_query = "SELECT * FROM users WHERE email='$email' OR telephone='$telephone' LIMIT 1";

    $result  = mysqli_query($db,$user_check_query);
    $user = mysqli_fetch_assoc($result);

    // check if user exist
    if ($user) {
      if ($user['email']===$email) {
        array_push($errors,"L'email existe deja");
      }
      if ($user['telephone'] === $telephone) {
        array_push($errors,"Le telephone existe deja");
      }
    }


    if (count($errors)==0) {
      // cryptage du mot de passe
      $password1 = md5($password);
      $query = "";

      mysqli_query($db,"INSERT INTO users (nom,prenom,email,telephone,password) VALUES ('$nom','$prenom','$email','$telephone','$password1')");


      mysqli_close($db);
      header('location: index.php');
    }
  }

 ?>



<?php include 'views/register.views.php';?>
