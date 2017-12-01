<?php include 'database.php';
connected(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP prepared Statements</title>
    <link rel="stylesheet" href="style.css">
    <script src="myscript.js"></script>
    <!-- jquery -->
    <script src="jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      //alert('jquery is working');
      $('#testJQuery').html('jquery is definetly working').slideUp(1000);
    });
    </script>
  </head>
  <body>


    <form class="form1" name="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post" onsubmit="return validateForm();">
      <h3>Insert Details to DB</h3>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" ><br><br>
            <label for="phone">Phone:</label><br>
            <input type="text" name="phone"><br><br>
            <input type="submit" name="submit" value="submit" ><br>
    </form>
    <?php
    //INSERT - prepared statement
    // prepared statement - insert
    if(isset($_POST['submit'])){

      //sanitize inputs
      $email = sanitize($_POST['email']);
      $password = md5(sanitize($_POST['password']));
      $phone = sanitize($_POST['phone']);


      $insert1 = "INSERT INTO testtable (email,password,phone) VALUES (?,?,?)";
      $stmt = $mysqli->prepare($insert1);
      $stmt->bind_param("sss",$email,$password,$phone);
      $stmt->execute();

    }

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

     <form class="form1" name="form2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post">
       <h3>Get Details from DB</h3>
       <label for="email">Email:</label><br>
       <input type="email" id="email" name="email"><br><br>
       <label for="password">Password:</label><br>
       <input type="password" name="password" ><br><br>
       <input type="submit" name="submit2" value="fetch details">


       <?php
             if(isset($_POST['submit2'])){
               //display
               //prepared statements - SELECTS
               $sql = "SELECT phone FROM testtable WHERE email =? AND password =? AND phone = ?";
               $stmt = $mysqli->prepare($sql);

               //s- string  i - int d- double b- blob
               $stmt->bind_param('sss',$_POST['email'],$_POST['password'],$_POST['phone']);

               $stmt->execute();

               //bind the variables
               $stmt->bind_result($phone);
               //fetch() gets first record
               //
               if($row = $stmt->fetch()){
                 echo 'details: ' .
                 $row;

               }else{
                 die();
               }

             }

        ?>


     </form>






    <div id="testJQuery"></div>

  </body>
</html>
