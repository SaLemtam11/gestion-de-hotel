<?php
/* print_r($_POST);
die();  */
require 'connect.php';
if (isset($_POST['save_2'])) {
/* client*/ 
/* $num =$_POST['num_client']; */
$nom_clien = $_POST['nom_client'];
$prenom_clien = $_POST['prenom_client'];
$date_n =$_POST['date_n'];
$email_clien = $_POST['email'];
$num_phon = $_POST['num_phone'];
$nombre_individus = $_POST['nombre_d_individus'];
$ty_Re = $_POST['type_r'];
$ty_se_Re= $_POST['Type_de_service'];
$dat_res = $_POST['date_Res'];
$prix_inttial = $_POST['prix_intial']; 
$prix_som = $_POST['prix_somme'];
date_default_timezone_set('Africa/Algiers');
$today = date("Y-m-d");


/* --------------------------------------------------- */
if(($date_n <= $today) && ($dat_res >= $today)){
      
$query = "INSERT INTO client( `nom_client`, `prenom_client`, `date_n`, `email`,`num_phone`, `nombre_d_individus`,`type_r`, `Type_de_service`,`date_Res`,`prix_somme`,`prix_intial`)
VALUES ('$nom_clien','$prenom_clien','$date_n','$email_clien','$num_phon','$nombre_individus','$ty_Re','$ty_se_Re','$dat_res','$prix_som','$prix_inttial')";

$query1 = "INSERT INTO archives( `nom_client`, `prenom_client`, `date_n`, `email`,`num_phone`, `nombre_d_individus`,`type_r`, `Type_de_service`,`date_Res`,`prix_somme`,`prix_intial`)
VALUES ('$nom_clien','$prenom_clien','$date_n','$email_clien','$num_phon','$nombre_individus','$ty_Re','$ty_se_Re','$dat_res','$prix_som','$prix_inttial')";

$query_rum1 = mysqli_query($connect,$query1);
$query_rum = mysqli_query($connect,$query);

if ($query_rum && $query_rum1) {


header("location: ../Client.php?add=done");
exit();
}
else
{

header("location: ../Client.php?adder=err");
exit();

}
}else{
      header("location: ../Client.php?errdate=err");
      exit();
}

die();

/**------------------------------ */

}
?>
