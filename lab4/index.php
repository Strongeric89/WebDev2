<?php
include 'database.php';
connected();

 ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>lab 4</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/functions.js"></script>
  <script src="js/jquery.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <script>
    $(document).ready(function() {
      $('h1').addClass('red');
      $(function() {
        $("#pickdate").datepicker();
      });

    });
  </script>


</head>

<body>

  <h1 id="heading">Lab 4 and 6(part 3)- Form Validation</h1>

  <div id="container">
    <form name="myform" id="myform" action="index.php" method="post">
      <h1>Personal Information</h1></td>

      <table>

        <td>Name: </td>
        <td><input type="text" name="name" width="20" maxlength="40" size="20" required>
        </td>
        </tr>

        <tr>
          <td> E-mail address: </td>
          <td>
            <input id="email" type="email" name="email" width="20" maxlength="40" size="20" required>
          </td>
        </tr>

        <tr>
          <td> Date of Birth (DD/MM/YYYY):</td>
          <td>

            <input type="text" id="pickdate" size="8" name="date" required>
            <!-- <input type="text" name="day" maxlength="2" size="2">/<input type="text" name="month" maxlength="2" size="2"> /<input type="text" name="year" maxlength="4" size="4">      <br> -->

          </td>
        </tr>

        <tr>
          <td>Gender:</td>
          <td><select name="gender" required>
          			<option value="">None</option>
          			<option value="F">Female</option>
          			<option value="M">Male</option>
          		</select></td>
        </tr>

        <tr>
          <td>Street address (line 1):</td>
          <td> <input type="text" name="addr1" width="15" size="15" maxlength="15" required>
          </td>
        </tr>

        <tr>
          <td>Street address (line 2): </td>
          <td><input type="text" name="addr2" width="15" size="15" maxlength="15" required>
          </td>
        </tr>


        <tr>
          <td>City: </td>
          <td><input type="text" name="city" width="6" size="6" maxlength="5" required>
          </td>
        </tr>

        <tr>
          <td>ZIP code: </td>
          <td><input type="text" name="zip" width="6" size="6" maxlength="5" required>
          </td>
        </tr>

        <tr>
          <td>
            <input type="submit" value="Submit" name="submitForm">

          </td>

          <td>

            <input type="reset" value="Clear">
          </td>


        </tr>


      </table>

    </form>

     <?php

        $flag = 0;
        //check for header injection
        function has_header_injection($str){
          return preg_match( "/[\r\n]/", $str);
        }


         if(isset($_POST['submitForm'])){
             //validate the input
             $name = htmlentities(trim($_POST['name']));
             $email = htmlentities(trim($_POST['email']));
             $dob  = htmlentities(trim($_POST['date']));
             $gender = htmlentities(trim($_POST['gender']));
             $addr1 = htmlentities(trim($_POST['addr1']));
             $addr2 = htmlentities(trim($_POST['addr2']));
             $city = htmlentities(trim($_POST['city']));
             $zip = htmlentities(trim($_POST['zip']));


             //provide some validation
            if(has_header_injection($name) || has_header_injection($email)){
              die();
            }

            $insert = "INSERT INTO person (name, email, dateofbirth,gender,address1,address2,city,zip) VALUES ('$name','$email','$dob','$gender','$addr1','$addr2','$city','$zip');";


            $result = $mysqli->query($insert);


              if(!$result){

                echo
                "
                <script>

                alert('There was a problem with your data!');

                </script>";
                $flag = 0;
                die('error: ' .mysql_error());

              }else{
                $flag = 1;
                echo
                "
                <script>


                setTimeout(alert('Your data has been inserted!'), 4000);




                </script>";

              }


              if($flag == 1){
echo "
                <script>
                  $('form[name=myform]').submit(function(e) {
                    if (validate()) {
                      var y = document.getElementById('heading');
                      y.innerHTML = 'Your form has been sent!';
                      var x = document.getElementById('container');
                      x.style.display = 'none';
                      alert('form sent!!');



                      return true;
                    } else {
                      return false;
                    }
                  });
                </script>

                ";


              }

            //  $data = $name . ' ' . $email . ' ' . $dob . ' ' . $gender . ' ' . $addr1 . ' ' . $addr2 . ' ' . $city . ' ' . $zip;
             //
            //  echo
            //  "
            //  <script>
             //
            //  alert('" .$data. "');
             //
            //  </script>";


         }

      ?>




  </div>



</body>

</html>
