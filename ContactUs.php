<?php
include 'db_conn.php';

  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = 'hoggartam1100011@gmail.com,'."$email";
    $subject = $message;

    $message = "Name: {$username}
     Email: {$email}
      Phone: {$phone} 
       Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "hoggartam1100011@gmail.com" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From:  hoggartam1100011@gmail.com';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      $_SESSION['status']="Message envoyé avec succès";
      $_SESSION['status_cod']= "success";
      header("location: index.php");
    }else {
      $_SESSION['status']="Message non envoyé avec succès";
      $_SESSION['status_cod']= "error";
      header("location: index.php");
    }
  }
?>

