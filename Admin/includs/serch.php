
<?php

//التحقق من بدأ عملية البحث
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  if (isset($_POST['search'])) {
    if (!empty($_POST['search'])) {
      $s_earch    =  $_POST['search'] ;
      $Q = "SELECT * FROM admin WHERE login LIKE '%$s_earch%' or nom LIKE '%$s_earch%' or prenom LIKE '%$s_earch%' ;";
    }
  }

} else { // عرض جميع محتويات الجدول

  $Q = "SELECT * FROM admin LIMIT $start ,$limit ;";

}
