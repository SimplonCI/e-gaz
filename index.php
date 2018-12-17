<?php
  session_start();
  include 'config/database.php';

  // verification si l'utilisateur est connecte
  if (!isset($_SESSION['email']) && !isset($_SESSION['logged_in'])) {
    $_SESSION['msg'] = "Veuillez vous connecter";

    header('location: login.php');
  }

  // deconnection
 if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }

 ?>


<?php include 'views/index.views.php'; ?>
