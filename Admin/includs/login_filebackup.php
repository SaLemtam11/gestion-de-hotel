<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {

  require 'connect.php';

  $user_log = $_POST['user_login'];
  $user_pass = $_POST['user_pass'];

  $Q_3 = "SELECT * FROM admin WHERE login = ? and password =? ;";

  $stmt_3 = mysqli_stmt_init($connect);
  if (!mysqli_stmt_prepare($stmt_3 , $Q_3)) {
    header("location: index.php?chick=STMTERR ");
    exit();
  }

  mysqli_stmt_bind_param($stmt_3 , "ss" ,$user_log ,$user_pass );
  mysqli_stmt_execute($stmt_3);
  $data_3 = mysqli_stmt_get_result($stmt_3);


  if ($roww = mysqli_fetch_assoc($data_3)) {

    $Q_get_info = "SELECT nom,prenom,Actif FROM admin WHERE login = ? and password =?; ";
    $stmt_get_info = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt_get_info , $Q_get_info)) {
      header("location: index.php?chick=STMTERR ");
      exit();
    }
    mysqli_stmt_bind_param($stmt_get_info , "ss" ,$user_log ,$user_pass );
    mysqli_stmt_execute($stmt_get_info);
    $log_info = mysqli_stmt_get_result($stmt_get_info);

    $info = mysqli_fetch_assoc($log_info);

      $per_id  = $info['Actif'] ;
      $name    = $info['nom'];
      $prenome = $info['prenom'];

      if ($per_id == "1" ) {

        $_SESSION['admin']  = $user_log;
        $_SESSION['name']   = $name;
        $_SESSION['prenom'] = $prenome;

        header("location: home.php ");
        exit();
      

      } elseif ($per_id == "1" ) {

        $_SESSION['admin']  = $user_log;
        $_SESSION['name']   = $name;
        $_SESSION['prenom'] = $prenome;

        header("location: dashbord.php ");
        exit();

      }elseif ($per_id == "2") {

        $_SESSION['user_grad_1'] = $user_log;
        $_SESSION['user_grad_2'] = $user_log;
        $_SESSION['name']   = $name;
        $_SESSION['prenom'] = $prenome;

        header("location: home.php ");
        exit();

      } elseif ($per_id == "2") {

        $_SESSION['user_grad_1'] = $user_log;
        $_SESSION['name']   = $name;
        $_SESSION['prenom'] = $prenome;

        header("location: Archives.php ");
        exit();

      } elseif ($per_id == "2") {

        $_SESSION['user_grad_2'] = $user_log;
        $_SESSION['name']   = $name;
        $_SESSION['prenom'] = $prenome;

        header("location: Client.php ");
        exit();
      }

  } else {
        header("location: index.php?chick=nologin ");
        exit();
  }
}
