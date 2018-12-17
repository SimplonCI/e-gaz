<?php
  include 'config/database.php';

  mysqli_query($db,"INSERT INTO users (nom,prenom,email,telephone,password,adresse,image) VALUES ('Totos','patric','toto@gmail.com','2994949','python92','','')");


//   $sql = "INSERT INTO users (nom,prenom,email,telephone,password,adresse,image) VALUES ('Toto','patric','toto@gmail.com','2994949','python92','','')";
//
//   if ($db->query($sql)===TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $db->error;
// }

$db->close();
?>
