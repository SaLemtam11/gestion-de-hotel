<?php

require 'includs\connect.php';


//خاص بترقيم صفحات الجودول
/*$limit = 7;
$page = isset($_GET['page']) ? $_GET['page'] : 1  ;
$start = ($page -1) * $limit;
*/
//التحقق من بدأ عملية البحث
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  if (isset($_POST['search'])) {
    if (!empty($_POST['search'])) {
      $s_earch    =  $_POST['search'] ;
      $Q11 = "SELECT * FROM nager WHERE nom LIKE '%$s_earch%' or prenom LIKE '%$s_earch%' or email LIKE '%$s_earch%' ;";
    }
  }

} else { // عرض جميع محتويات الجدول

  $Q11 = "SELECT * FROM nager ;";
  

}


if(!isset($Q11))  $Q11 = "SELECT * FROM nager LIMIT 0 ,0 ;";

$get = mysqli_query($connect , $Q11);  //تنفيذ التعليمة
if (!$get) {  // التحقق من نجاح جلب البيانات
  die("خطأ في ادخال بينات البعث ");
}


while ($row = mysqli_fetch_assoc($get)) {
  echo "<style> td{
    text-align: center;
  } </style>";
  echo "<tr>";
  echo "<td>" . $row['id']   . "</td>" ;
  echo "<td>" . $row['nom']   . "</td>" ;
  echo "<td>" . $row['prenom'] . "</td>" ;
  echo "<td>" . $row['date_n'] . "</td>" ;
  echo "<td >" . $row['email'] . "</td>" ;
  echo "<td >" . $row['tel'] . "</td>" ;
  echo "<td >" . $row['Genre'] . "</td>" ;
  echo "<td >" . $row['entrain'] . "</td>" ;
  echo "<td >" . $row['prix'] . "</td>" ;
  echo "</tr>";
}


$connect->close();