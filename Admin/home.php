
<?php
  session_start();

if (isset($_SESSION['name'])) {

    include 'includs\headerpage.php' ;
    include 'includs\navbar.php' ;
    include 'includs\home_cont.php';
    include 'includs\footerpage.php';

  }  else {
        header("location: index.php ");
        exit();
     }
