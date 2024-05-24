<?php

include 'db_conn.php';
if (isset($_POST['Enregistrer'])) {
  
$nom_n = $_POST['nom'];
$prenom_n = $_POST['prenom'];
$dat_ne = $_POST['date_n'];
$Gen_re =$_POST['Genre'];
$email_n = $_POST['email'];
$num_phon = $_POST['tel'];
date_default_timezone_set('Africa/Algiers');
$today = date("Y-m-d");
$dat_time =date('H:i:s');

/**------------------------------ */

   if (($dat_ne < $today)) {
     
  

$query = "INSERT INTO nager( `nom`, `prenom`,`date_n`,`Genre`, `email`,`tel`)
                      VALUES ('$nom_n','$prenom_n','$dat_ne','$Gen_re','$email_n','$num_phon')";
      
$query_rum0 = mysqli_query($con,$query);

if ($query_rum0) {

  $to = 'em0403050@gmail.com,'."$email_n";
  $subject = $nom_n;
  $message = "Nom: {$nom_n}
  Prémon: {$prenom_n}
  Date de Nassance:{$dat_ne}
  Genre: {$Gen_re}
  Email: {$email_n}
  Phone: {$num_phon}
  Time :{$dat_time }
  Message: 
      Votre demande a été reçue avec succès. 
      S’il vous plaît attendre une réponse de notre part. 
      Merci de traiter avec nous." ;
   // More headers
   $headers .= 'From:  em0403050@gmail.com';
   $mail = mail($to,$subject,$message,$headers);
   $_SESSION['status']="Votre demande a été envoyée avec succès..";
   $_SESSION['status_cod']= "success";
   header("location: nager.php"); 
}
else
{
  
  $_SESSION['status']="Erreur inconnue........";
  $_SESSION['status_cod']= "error";
  header("location: nager.php");

} }
else {
  $_SESSION['status']="Il y a une erreur à la date de naissance ou à la date de détention.";
  $_SESSION['status_cod']= "error";
  header("location: nager.php");
}
}




if (isset($_POST['save_2'])) {
/* client*/ 
$nom_clien = $_POST['nom_client'];
$prenom_clien = $_POST['prenom_client'];
$date_n =$_POST['date_n'];
$email_clien = $_POST['email'];
$num_phon = $_POST['num_phone'];
$nombre_individus = $_POST['nombre_d_individus'];
$ty_Re = $_POST['type_r'];
$ty_se_Re= $_POST['Type_de_service'];
$dat_res = $_POST['date_Res'];

date_default_timezone_set('Africa/Algiers');
$dat_time =date('H:i:s');
$today = date("Y-m-d");
/**------------------------------ */

   if(($date_n <= $today) && ($dat_res >= $today)){

/*----------------------------------*/

        $query11 = "INSERT INTO demandesr( `nom_client`, `prenom_client`, `date_n`, `email`,`num_phone`, `nombre_d_individus`,`type_r`, `Type_de_service`,`date_Res`)
                              VALUES ('$nom_clien','$prenom_clien','$date_n','$email_clien','$num_phon','$nombre_individus','$ty_Re','$ty_se_Re','$dat_res')";
       $q1 = mysqli_query($con,$query11);

      if ($q1) {
            
        $to = 'em0403050@gmail.com,'."$email_clien";
        $subject = $nom_clien;
        $message = "
        Nom: {$nom_clien }
        Prémon: {$prenom_clien}
        E-mail : {$email_clien}
        Numéro de téléphone : {$num_phon}
        Date d'Reservation:{$dat_res}
        Nombre de personnes : {$nombre_individus}
        Type de Service:{$ty_se_Re}
        Type de Reservation:{$ty_Re }
        Time de Reservation:{$dat_time }
        
        Message: 
            Votre demande a été reçue avec succès. 
            S’il vous plaît attendre une réponse de notre part. 
            Merci de traiter avec nous." ;
        
        // More headers
        $headers .= 'From:  em0403050@gmail.com';
        $mail = mail($to,$subject,$message,$headers);
        $_SESSION['status']="Votre demande a été envoyée avec succès..";
        $_SESSION['status_cod']= "success";
        header("location: Reserve.php");  
      }
        else{
          $_SESSION['status']="Erreur inconnue........";
          $_SESSION['status_cod']= "error";
          header("location: Reserve.php");
        
        }
        }else{
          $_SESSION['status']="Il y a une erreur à la date de naissance ou à la date de détention.";
          $_SESSION['status_cod']= "error";
          header("location: Reserve.php");
        
        }
}

?>
