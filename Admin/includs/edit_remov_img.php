<?php

require 'connect.php';

if (isset($_POST['rem_sub1'])) {

  $rem = $_POST['rem_sub1'];

  $Q_02 = "DELETE FROM images WHERE id =? ;";

  if ($rem == "admin") {
    header("location: ../photo_2.php?remove=done");
    exit();
  }

  $stmt_02 = mysqli_stmt_init($connect);
  if (!mysqli_stmt_prepare($stmt_02 , $Q_02)) {
    header("Location: ../photo_2.php?error1=err");
    exit();
  }

  mysqli_stmt_bind_param($stmt_02 , "i", $rem);
  mysqli_stmt_execute($stmt_02);
  header("location: ../photo_2.php?remove=done");
  exit();

}
?>