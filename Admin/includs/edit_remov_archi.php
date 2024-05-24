<?php

require 'connect.php';


 if ( isset($_POST['rem_fff'])) {

    $rem_flag = $_POST['rem_fff'];

     $Q_0155 = "DELETE FROM `archives` WHERE `num_client`=? ;";;


     $stmt_0155 = mysqli_stmt_init($connect);
     if (!mysqli_stmt_prepare($stmt_0155 , $Q_0155)) {
       header("location: ../Archives.php?remove=err");
       exit();
     }

     mysqli_stmt_bind_param($stmt_0155 , "s", $rem_flag);
     mysqli_stmt_execute($stmt_0155);
     header("location: ../Archives.php?removed=done");
     exit();

}
