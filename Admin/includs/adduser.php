<?php

require 'connect.php';
if (isset($_POST['save_user'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prnom'];
  $login = $_POST['login'];
  $code = $_POST['password'];
  $Act_if = $_POST['Actif'];

$query = "INSERT INTO admin (`nom`, `prenom`, `login`, `password`, `Actif`)
                      VALUES ('$nom','$prenom','$login','$code','$Act_if')";
      
$query_rum = mysqli_query($connect,$query);

if ($query_rum) {
      
   
  header("location: ../dashbord.php?adding=7");
  exit();
}
else
{
      
  header("location: ../dashbord.php?r=err");
  exit();

}
}
?>
