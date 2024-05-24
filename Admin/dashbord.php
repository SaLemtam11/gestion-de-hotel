
<?php
 session_start();
 
 if (isset($_SESSION['admin'])) { // التحقق من وجود الجلسة لعرض الصفحة

    include 'includs\headerpage.php';
    include 'includs\navbar.php';
    include 'includs\admin_cont.php';
    include 'includs\footerpage.php';

 } else { // في حال عدم وجود الجلسة يتم الرجوع لصفحة التسجيل

   header("location: index.php");
   exit();
 }
