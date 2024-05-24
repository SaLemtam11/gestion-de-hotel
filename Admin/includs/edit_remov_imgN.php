<?php

require 'connect.php';


if (isset($_POST['rem_sub2'])) {

  $rem = $_POST['rem_sub2'];

  $Q_02 = "DELETE FROM imagesn WHERE id =? ;";

  if ($rem == "admin") {
    header("location: ../photo_1.php?remove=done");
    exit();
  }

  $stmt_02 = mysqli_stmt_init($connect);
  if (!mysqli_stmt_prepare($stmt_02 , $Q_02)) {
    header("Location: ../photo_1.php?error1=err");
    exit();
  }

  mysqli_stmt_bind_param($stmt_02 , "i", $rem);
  mysqli_stmt_execute($stmt_02);
  header("location: ../photo_1.php?remove=done");
  exit();

}
?>