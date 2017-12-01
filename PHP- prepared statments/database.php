<?php
// ob_start();


  $host = "localhost";
  $db_name = "testing123";
  $user = "root";
  $password = ""; // for xamp login


$mysqli = new mysqli($host, $user,$password, $db_name);


   function connected(){

     if (mysqli_connect_errno())
     {
         echo "failed to connect";
         die();
     }
     else{
        echo "db connected!";
     }

   }


 ?>
