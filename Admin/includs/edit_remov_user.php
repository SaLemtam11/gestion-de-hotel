<?php

require 'connect.php';
if (isset($_POST['edit_sub'])) {
  $ed = $_POST['edit_sub'];
  $e_nom = $_POST['e_nom'];
  $e_prenom = $_POST['e_prnom'];
  $e_login = $_POST['e_login'];
  $e_pss = $_POST['e_password'];
  $e_Act_if = $_POST['e_Actif'];


  $Q_01 = "UPDATE admin SET nom='$e_nom ', prenom='$e_prenom',login='$e_login',password='$e_pss',Actif='$e_Act_if'
           WHERE nom='$e_nom' ";




$query_rum = mysqli_query($connect,$Q_01);

if ($query_rum) {
      
      
  header("location: ../dashbord.php?edit=done");
  exit();
}
else
{
      
  header("location: ../dashbord.php?edit=err");
  exit();

}
}

if (isset($_POST['rem_sub'])) {

  $rem = $_POST['rem_sub'];

  $Q_02 = "DELETE FROM admin WHERE id =? ;";

  if ($rem == "admin") {
    header("location: ../dashbord.php?removea=admrem");
    exit();
  } 

  $stmt_02 = mysqli_stmt_init($connect);
  if (!mysqli_stmt_prepare($stmt_02 , $Q_02)) {
    header("location: ../dashbord.php?remove=err");
    exit();
  }

  mysqli_stmt_bind_param($stmt_02 , "s", $rem);
  mysqli_stmt_execute($stmt_02);
  header("location: ../dashbord.php?remove=done");
  exit();

}
