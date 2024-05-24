<?php
require 'connect.php';

if (isset($_POST['x_esave_2'])) {
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
  $today = date("Y-m-d");
  date_default_timezone_set('Africa/Algiers');
$tim = date('H:i:s');


  if(($date_n <= $today) && ($dat_res >= $today)){
        
  $query = "INSERT INTO client( `nom_client`, `prenom_client`, `date_n`, `email`,`num_phone`, `nombre_d_individus`,`type_r`, `Type_de_service`,`date_Res`,`prix_somme`,`prix_intial`)
  VALUES ('$nom_clien','$prenom_clien','$date_n','$email_clien','$num_phon','$nombre_individus','$ty_Re','$ty_se_Re','$dat_res','$prix_som','$prix_inttial')";
  
  $query1 = "INSERT INTO archives( `nom_client`, `prenom_client`, `date_n`, `email`,`num_phone`, `nombre_d_individus`,`type_r`, `Type_de_service`,`date_Res`,`prix_somme`,`prix_intial`)
  VALUES ('$nom_clien','$prenom_clien','$date_n','$email_clien','$num_phon','$nombre_individus','$ty_Re','$ty_se_Re','$dat_res','$prix_som','$prix_inttial')"; 
  $Q_0155 = "DELETE FROM `demandesr` WHERE `num_client`='$_POST[x_esave_2]' ;";
 $query_rum1 = mysqli_query($connect,$query1); 
  $query_rum = mysqli_query($connect,$query);
  $qdel = mysqli_query($connect,$Q_0155);
  
  if ($query_rum && $query_rum1 && $qdel ) {
  
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
    Time de Reservation:{$tim }
    
    Message: 
    Votre candidature a été acceptée.
    Remarque : Si le paiement n’est pas effectué dans les deux heures, la demande sera refusée." ;
    
    // More headers
    $headers .= 'From:  em0403050@gmail.com';
    $mail = mail($to,$subject,$message,$headers);
  header("location: ../demandesResev.php?add=done");
  exit();
  }
  else
  {
  
  header("location: ../demandesResev.php?adder=err");
  exit();
  
  }
  }else{
        header("location: ../demandesResev.php?errdate=err");
        exit();
  }
  
  
  
  /**-------- die();---------------------- */
  
  }

            if (isset($_POST['rem_fff'])) {
              $nom_clien = $_POST['nom_client'];
              $prenom_clien = $_POST['prenom_client'];
              $email_clien = $_POST['email'];
              $Raison = $_POST['Raison_du_rejet'];
              date_default_timezone_set('Africa/Algiers');
            $tim = date('H:i:s');
            
            
              
                    
                $Q_0155 = "DELETE FROM `demandesr` WHERE `num_client`='$_POST[rem_fff]' ;";
                 $qdel = mysqli_query($connect,$Q_0155);
              
              if ($qdel ) {
              
                $to = 'em0403050@gmail.com,'."$email_clien";
                $subject = $nom_clien;
                $message = "
                Nom: {$nom_clien }
                Prémon: {$prenom_clien}
                E-mail : {$email_clien}
                Time :{$tim }
                
                Message: 
                {$Raison}" ;
                
                // More headers
                $headers .= 'From:  em0403050@gmail.com';
                $mail = mail($to,$subject,$message,$headers);
              header("location: ../demandesResev.php?removed=done");
              exit();
              }
              else
              {
              
              header("location: ../demandesResev.php?adder=err");
              exit();
              
              }
              }