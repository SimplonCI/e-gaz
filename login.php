<?php
  session_start();
  include 'config/database.php';
  $username = "";
  $password = "";
  $errors = array();


  // quand le formulaire est soumit
  if (isset($_POST['connexion'])) {
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

      //validation du formulaire
      if (empty($username)) {
        array_push($errors,"L'email ou le telephone est obligatoire");
      }

      if (empty($password)) {
        array_push($errors,"Le mot de passe est obligatoire");
      }

      if (count($errors) == 0) {
        $password1 = md5($password);
        // verifier si l'utilisateur a un compte
        $query = "SELECT * FROM users WHERE email='$username'  AND password = '$password1'";
        $results = mysqli_query($db,$query);
        // $user = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($results) == 1) {
          $array  = $results -> fetch_assoc();
          $_SESSION['logged_in'] = true;
          $_SESSION['id'] = $array['id'];
          $_SESSION['email'] = $array['email'];
          

          mysqli_close($db);
          // redirection de l'utilisateur
          header('location: index.php');
        } else {
          array_push($errors, "Erreur identifiant ou mot de passe incorrect");
        }

      }
  }

?>



<?php include 'views/login.views.php'; ?>
