<?php
include 'database.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">



  <!-- <link rel="stylesheet" href="stylesheets/Creative.css"> -->
<link rel="stylesheet" href="stylesheets/Professional.css" id="pagestyle">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Eric Strong - CV </title>
</head>
<style>
.mySlides {display:none}
.demo {cursor:pointer}
</style>

<body>

  <div id="container">


    <div id="mainBanner">
      <div id="banner"><a id="logoLink2" href="#"><?php

      if(isset($_GET['name'])){
        echo $_GET['name'];
        echo ' ';
        echo $_GET['surname'];
        echo '(with php!)';
      }else{
        echo 'Eric Strong ';

      }


       ?>CV</a></div>

        <div> <a id="logoLink" href="#"><img src="images/eric.JPG" alt="eric" width="100px" height="130px" ></a></div>

        </div>

    <div id="nav">

      <ul id="navbar">

        <a href="#">Home</a>
        <span>    |    </span>
        <a href="#">Certifications</a>
        <span>    |    </span>
        <a href="#">Projects</a>
        <span>    |    </span>
        <a href="#">Skills</a>
        <span>    |    </span>
        <a href="#">Experience</a>


      </ul>


    </div>


      <div id="main" style="background-color: #480080;">

        <div class="w3-content" style="max-width:1200px;   background-color: #480080" >
          <img class="mySlides" src="images/sp1.jpg" style="width:100%">
          <img class="mySlides" src="images/sp2.jpg" style="width:100%">
          <img class="mySlides" src="images/1.gif" style="width:100%">
            <img class="mySlides" src="images/2.gif" style="width:100%">

          <div class="w3-row-padding w3-section" style="background-color: #480080">
            <div class="w3-col s4">
              <img id="img1" class="demo w3-opacity w3-hover-opacity-off" src="images/sp1.jpg" style="width:100%;" onclick="currentDiv(1);mark(this);">
            </div>
            <div class="w3-col s4">
              <img id="img2" class="demo w3-opacity w3-hover-opacity-off" src="images/sp2.jpg" style="width:100%" onclick="currentDiv(2);mark(this);">
            </div>
            <div class="w3-col s4">
              <img id="img3" class="demo w3-opacity w3-hover-opacity-off" src="images/1.gif" style="width:100%" onclick="currentDiv(3);mark(this);">
            </div>

          </div>
        </div>







        <section class="sect">
          <button id="stylesheet1" >Creative</button>
          <button id="stylesheet2" >Professional</button>


        </section>





        <section class="sect">

          <h1>Questions about me</h1>

          <article id="art1">

            <div class="main_div">
                    <div style="text-align:center;">

                      <p> Who is my favorite Person?</p>
                    <button onclick="divVisibility('Div1');">Show Answer</button>
                      <div id="Div1" style="display: none;">Eric Strong</div>

                        <p> What are my favorite programming languages?</p>
                    <button onclick="divVisibility('Div2');">Show Answer</button>
                      <div id="Div2" style="display: none;">Python and Java</div>

                      <p> What is my favourite Operating System?</p>
                    <button onclick="divVisibility('Div3');">Show Answer</button>
                      <div id="Div3" style="display: none;">OS - X</div>

                     <p> What is my favorite Mobile Platform?</p>
                    <button onclick="divVisibility('Div4');">Show Answer</button>
                      <div id="Div4" style="display: none;">Android</div>
                    </div>

                  </div>
                    <script src="js/showHide.js"></script>
          </article>

          <script> </script>

        </section>

        <section class="sect">

          <h1>Summary</h1>
          <article id="art1">

            <p style="text-align: justify;">ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae repellat asperiores,
            <a href="#" target="_blank"><img src="images/eric.JPG" alt="dit" height="150px" width="150px" style="float:left; padding:10px;"></a>
              consequatur architecto libero est, fugiat optio, nemo rerum quae cum laudantium delectus vero. Labore sed, dolore expedita libero omnis.ipsum Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.
            A libero cum, veniam nulla suscipit inventore quos, temporibus doloribus soluta nobis dolore deserunt officiis mollitia vitae omnis esse, ab natus! Non.
            ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae repellat asperiores, consequatur architecto libero est, fugiat optio, nemo rerum quae cum laudantium delectus vero. Labore sed, dolore expedita libero omnis.ipsum Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. A libero cum, veniam nulla suscipit inventore quos, temporibus doloribus soluta nobis dolore deserunt officiis mollitia vitae omnis esse, ab natus! Non.</p>

          </article>

        </section>

        <section class="sect">

            <h1>Education</h1>
            <article id="art1">

              <p style="text-align: justify;"> <h5>Dublin Institute of Technology</h5>
              <a href="https://www.dit.ie" target="_blank"><img src="images/dit.png" alt="dit" height="100px" style="float:left; padding:10px;"></a>


              <div id="todaysDate" onmouseover="randomColor(this);" onmouseout="randomColor2(this);"></div>


              <?php
                  $query1 = "SELECT * FROM EDUCATION;";
                  $result = $mysqli->query($query1);
                  while($row = $result->fetch_assoc()){
                    echo $row['school'];
                    echo $row['degree'];
                    echo $row['StartYear'];
                    echo $row['EndYear'];
                    echo $row['Grade'];
                  }


               ?>

            </article>


        </section>


        <section class="sect">

            <h1>Experience</h1>
            <article id="art1">

              <p style="text-align: justify;">

                ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur tempora doloremque magni incidunt blanditiis. Voluptates officia, a ipsum officiis, labore fuga quibusdam, recusandae cumque temporibus quis alias omnis eos nulla.

                <ul>

                      <a href="http://www.codefirstgirls.org.uk"><li>Code First Girls</li></a>
                      <a href="http://www.dit.ie/ace/access/accessentryroutes/accessfoundationprogramme/"><li>Access Foundation Programme</li></a>

                      <a href="http://www.iskill.ie/"><li>iSkill Android Academy</li></a>


                </ul>
              </p>
            </article>


        </section>


        <section class="sect">

            <h1>Skills</h1>
            <article id="art1">

              <p style="text-align: justify;">

                ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur tempora doloremque magni incidunt blanditiis. Voluptates officia, a ipsum officiis, labore fuga quibusdam, recusandae cumque temporibus quis alias omnis eos nulla.


              </p>

              <ol>
                  <li>
                    <h5>Technical Skills</h5>
                    <ul>
                    <li>Programming</li>
                    <li>Networking</li>
                    <li>Web Development</li>
                  </ul>
                </li>

                <li>
                  <h5>Communication Skills</h5>
                  <ul>
                  <li>Project Management</li>
                  <li>Soft Skills</li>
                  <li>Leadership</li>
                </ul>
              </li>


              <li>
                <h5>Language Skills</h5>
                <ul>
                <li>Java</li>
                <li>Python</li>
                <li>C++</li>
              </ul>
            </li>


              </ol>
            </article>


        </section>


        <section class="sect">

            <h1>GPA</h1>
            <article id="art1" style="text-align:center; ">

              <table id="grades" border="1">
                  <td colspan="3">Education</td>
                  <td colspan="3">Years</td>
                  <td colspan="3">Grades</td>
                  <td colspan="3">Project</td>

                  <tr>
                    <td colspan="3">DT211C/1</td>
                    <td colspan="3">Year 1</td>
                    <td colspan="3">1.1</td>
                    <td colspan="3"> Lotto Game</td>
                  </tr>

                  <tr>
                    <td colspan="3">DT211C/2</td>
                    <td colspan="3">Year 2</td>
                    <td colspan="3">1.1</td>
                      <td colspan="3"> Android App</td>
                  </tr>

                  <tr>
                    <td colspan="3">DT211C/3</td>
                    <td colspan="3">Year 3</td>
                    <td colspan="3">1.1</td>
                      <td colspan="3">Website</td>
                  </tr>





              </table>
        </section>






      <!-- </div> -->

    </div>


    <div id="footer">

      <p>

        Copyright &copy; Eric Strong | DT211C/3
        connected();
      </p>

    </div>


  </div>

<script src="js/Time.js"></script>
<script src="js/slideshow.js"></script>
  <script src="js/switchStyle.js"></script>
</body>

</html>
