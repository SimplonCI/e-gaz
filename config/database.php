<?php
   // parametre de connexion a BD;
   $servername = 'localhost';
   $database = 'e-gaz';
   $username = 'root';
   $password = 'python92';

   // creation d'une connexion a la base de donnee

   $db = mysqli_connect($servername,$username,$password,$database);

   // verification de l'etat de la connexion
   if(!$db){
     die('DB connexion failed : '. mysqli_connect_error());
   }

 ?>
