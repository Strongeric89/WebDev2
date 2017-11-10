<?php


require_once('routes.php');

function __autoload($class_name){

  if(file_exists('./classes/' .$class_name. '.php')){
    require_once './classes/' .$class_name. '.php';
  }else if (file_exists('./Controllers/' .$class_name. '.php')){
    require_once './Controllers/' .$class_name. '.php';
  }


}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>test</title>
   </head>
   <body>
     <?php
        echo $_GET['url'];
      ?>

   </body>
 </html>
