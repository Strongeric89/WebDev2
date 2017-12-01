<?php
include 'database.php';
connected();

$name = sanitize($_POST['name']);
$score = sanitize($_POST['score']);

//insert with prepared statement
// prepared statement - insert
$insert1 = "INSERT INTO scores (name,score) VALUES (?,?)";
$stmt = $mysqli->prepare($insert1);
$stmt->bind_param("si",$name,$score);
$stmt->execute();
header('Location: test.html');

function sanitize($str){
  //clear white space
  $str = trim($str);
  //strip any slashes to preven sql injection
  $str = stripslashes($str);
  //prevent crosssite scripting
  $str = htmlspecialchars($str);

  return $str;

}



 ?>
