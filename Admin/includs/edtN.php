<?php
require 'connect.php';


if (isset($_POST['x_esave_N'])) {
  $id =$_POST['x_esave_N'];
  $nom = $_POST['enom'];
  $prenom = $_POST['eprenom'];
  $dat_n = $_POST['edate_n'];
  $email = $_POST['eemail'];
  $num_phon = $_POST['etel'];
  $Genre =$_POST['eGenre'];
  $entren = $_POST['eentrain'];
$pri_x =$_POST['eprix'];
 
  $today = date("Y-m-d");

  /**------------------------------ */
  
     if (($dat_ne <= $today)) {

  $Q_011 = "UPDATE `nager` SET nom='$nom',prenom='$prenom',email='$email',tel='$num_phon',date_n='$dat_n',Genre='$Genre',entrain='$entren',prix='$pri_x'
           WHERE id='$id'  ";



$query_rum = mysqli_query($connect,$Q_011);

if ($query_rum) {
     header("location: ../SwimmingN.php?editd=done");
        exit(); 
      
}
else
{
     header("location: ../SwimmingN.php?adder=err");
          exit(); 

}}else {
  header("location: ../SwimmingN.php?errdate=err");
          exit(); 
} }
elseif (isset($_POST['rem_fff'])) {

      $rem_flag = $_POST['rem_fff'];

      $Q_0155 = "DELETE FROM `nager` WHERE `id`=? ;";;


      $stmt_0155 = mysqli_stmt_init($connect);
      if (!mysqli_stmt_prepare($stmt_0155 , $Q_0155)) {
        header("location: ../SwimmingN.php?adder=err");
        exit();
      }

      mysqli_stmt_bind_param($stmt_0155 , "s", $rem_flag);
      mysqli_stmt_execute($stmt_0155);
      header("location: ../SwimmingN.php?removed=done");
      exit();
}
