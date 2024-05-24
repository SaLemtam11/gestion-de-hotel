<?php

require 'includs\connect.php';

//خاص بترقيم صفحات الجودول
/*$limit = 7;
$page = isset($_GET['page']) ? $_GET['page'] : 1  ;
$start = ($page -1) * $limit;*/

//التحقق من بدأ عملية البحث
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  if (isset($_POST['search'])) {
    if (!empty($_POST['search'])) {
      $s_earch    =  $_POST['search'] ;
      $Q = "SELECT * FROM client WHERE nom_client LIKE '%$s_earch%' or prenom_client LIKE '%$s_earch%' or email LIKE '%$s_earch%' ;";
    }
  }

} else { // عرض جميع محتويات الجدول

  $Q = "SELECT * FROM client ;";
  

}

if(!isset($Q))  $Q = "SELECT * FROM client LIMIT 0 ,0 ;";

$get = mysqli_query($connect , $Q);  //تنفيذ التعليمة
if (!$get) {  // التحقق من نجاح جلب البيانات
  die("خطأ في ادخال بينات البعث ");
}


while ($row = mysqli_fetch_assoc($get)) {
  echo "<style> td{
    text-align: center;
  } </style>";
  echo "<tr>";
  echo "<td>" . $row['num_client']. "</td>" ;
  echo "<td>" . $row['nom_client']. "</td>" ;
  echo "<td>" . $row['prenom_client']. "</td>" ;
  echo "<td>" . $row['date_n'] . "</td>" ;
  echo "<td>" . $row['email'] . "</td>" ;
  echo "<td>" . $row['num_phone'] . "</td>" ;
  echo "<td >" . $row['type_r'] . "</td>" ;
  echo "<td>" . $row['Type_de_service'] . "</td>" ;
  echo "<td>" . $row['date_Res']. "</td>" ;
  echo "<td>" . $row['nombre_d_individus']. "</td>" ;
  echo "<td>" . $row['prix_intial']. "</td>" ;
  echo "<td>" . $row['prix_somme']. "</td>" ;
  echo "</tr>";
}

$connect->close();
