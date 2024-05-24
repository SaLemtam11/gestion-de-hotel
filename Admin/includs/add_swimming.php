<?php
require 'connect.php';
if (isset($_POST['save_3'])) {
  
$nom_n = $_POST['nom'];
$prenom_n = $_POST['prenom'];
$dat_n = $_POST['date_n'];
$email_n = $_POST['email'];
$num_phon = $_POST['tel'];
$Genre =$_POST['Genre'];
$entren = $_POST['entrain'];
$pri_x =$_POST['prix'];

/**------------------------------ */
$today = date("Y-m-d");

/**------------------------------ */

   if (($dat_ne <= $today)) {

$query = "INSERT INTO nager( `nom`, `prenom`,`date_n`, `email`,`tel`,`Genre`,`entrain`,`prix`)
                      VALUES ('$nom_n','$prenom_n','$dat_n','$email_n','$num_phon','$Genre','$entren','$pri_x')";
      
$query_rum = mysqli_query($connect,$query);

if ($query_rum) {
      
      
      header("location: ../SwimmingN.php?add=done");
      exit();
}
else
{
      
      header("location: ../SwimmingN.php?adder=err");
      exit();

}}else {
      header("location: ../SwimmingN.php?errdate=err");
      exit();
}
}

/**------------------------------------------------------------------------------------------------- */
if (isset($_POST['save_4'])) {
     
      $nom_prenom = $_POST['nom_prenom'];
      $email = $_POST['email'];
      $num_phon = $_POST['tel'];
    
     
      
      $query = "INSERT INTO entraineurs( `nom_prenom`,`email`,`tel`)
                            VALUES ('$nom_prenom','$email','$num_phon')";
            
      $query_rum = mysqli_query($connect,$query);
      
      if ($query_rum) {
            
            
            header("location: ../SwimmingE.php?add=done");
            exit();
      }
      else
      {
            
            header("location: ../SwimmingE.php?adder=err");
            exit();
      
      }
      } 
?>
