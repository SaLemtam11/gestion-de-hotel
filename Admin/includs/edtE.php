<?php
require 'connect.php';


if (isset($_POST['x_esave_E'])) {
  $id =$_POST['x_esave_E'];
  $nom_prenom = $_POST['enom_prenom'];
  $email = $_POST['eemail'];
  $num_phon = $_POST['etel'];
 


  $Q_011 = "UPDATE `entraineurs` SET nom_prenom='$nom_prenom',email='$email',tel='$num_phon'
           WHERE id='$id'  ";



$query_rum = mysqli_query($connect,$Q_011);

if ($query_rum) {
     header("location: ../SwimmingE.php?editd=done");
        exit(); 
      
}
else
{
     header("location: ../SwimmingE.php?adder=err");
          exit(); 

} }
elseif (isset($_POST['rem_fff'])) {

      $rem_flag = $_POST['rem_fff'];

      $Q_0155 = "DELETE FROM `entraineurs` WHERE `id`=? ;";;


      $stmt_0155 = mysqli_stmt_init($connect);
      if (!mysqli_stmt_prepare($stmt_0155 , $Q_0155)) {
        header("location: ../SwimmingE.php?adder=err");
        exit();
      }

      mysqli_stmt_bind_param($stmt_0155 , "s", $rem_flag);
      mysqli_stmt_execute($stmt_0155);
      header("location: ../SwimmingE.php?removed=done");
      exit();
}
