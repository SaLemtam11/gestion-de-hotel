<?php
require 'connect.php';


if (isset($_POST['x_esave_2'])) {
  $e_flag = $_POST['x_esave_2'];
  $nom_clien = $_POST['enom_client'];
  $prenom_clien = $_POST['eprenom_client'];
  $date_n = $_POST['edate_n'];
  $email_clien = $_POST['eemail'];
  $num_phon = $_POST['enum_phone'];
  $nombre_individus = $_POST['enombre_d_individus'];
  
  /**------------------------------ */
  $ty_Re = $_POST['etype_r'];
  $ty_se_Re= $_POST['eType_de_service'];
  $dat_res = $_POST['edate_Res'];
  $prix_inttial = $_POST['eprix_intial'];
  $prix_som = $_POST['eprix_somme'];
  
  /**------------------------------ */
  $today = date("Y-m-d");

  if(($date_n <= $today) && ($dat_res >= $today)){

                      

              $Q_011 = "UPDATE `client` SET nom_client='$nom_clien',prenom_client='$prenom_clien',
              email='$email_clien',num_phone='$num_phon',nombre_d_individus='$nombre_individus',
              type_r='$ty_Re', Type_de_service='$ty_se_Re',date_Res='$dat_res',prix_intial='$prix_inttial',prix_somme='$prix_som'
              WHERE num_client='$e_flag'  ";



            $query_rum = mysqli_query($connect,$Q_011);

            if ($query_rum) {
            header("location: ../Client.php?editd=done");
            exit(); 

            }
            else
            {
              header("location: ../Client.php?adder=err");
              exit(); 

            } 
            }else { 
              header("location: ../Client.php?errdate=err");
              exit();
    
  }
}elseif (isset($_POST['rem_fff'])) {

            $rem_flag = $_POST['rem_fff'];

            $Q_0155 = "DELETE FROM `client` WHERE `num_client`=? ;";;


            $stmt_0155 = mysqli_stmt_init($connect);
            if (!mysqli_stmt_prepare($stmt_0155 , $Q_0155)) {
              header("location: ../Client.php?adder=err");
            exit();
            }

            mysqli_stmt_bind_param($stmt_0155 , "s", $rem_flag);
            mysqli_stmt_execute($stmt_0155);
            header("location: ../Client.php?removed=done");
            exit();
            }

