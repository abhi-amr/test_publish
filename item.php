<?php

session_start();

$mid = $_GET['id'];

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'metro_mirchi');

$query = "select * from menu where mid =".$mid.";";
 

//menu table
$result = mysqli_query($con,$query);
//$rows = mysqli_num_rows($result);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<!--    favicon-->
    <link rel="icon" href="images/pidilite_logo.png" type="image/png" >
    
<!--    font awesome-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
<!--    bootstrap css-->
   <link rel="stylesheet" href="css/bootstrap.css">
    
    
<!--    main.css-->
   <link rel="stylesheet" href="css/main.css">
    
    <title>Metro Mirchi | Khazanchi</title>
</head>
<body>
   
   <header class="container-fluid">
        <div class="row">
        <div class="col-11"><h2><a href="index.html">Metro Mirchi <i class="fas fa-utensils"></i></a></h2></div>
        <div class="col-1"><a href="userprofile.php"><i class="fas fa-user-alt float-right"></i></a></div>
        </div>
       <nav class="row">
          <div class="col-12">
           <ul>
               <li><a href="index.html" class="active">Home</a></li>
               <li><a href="menu.php">Menu</a></li>
               <li><a href="about.html">About</a></li>
           </ul>
           </div>
       </nav>
        
    </header>
   
  
  <div class="container">
    <div class="row">
      <div class="col-6">
        
      </div>
      <div class="col-6">
        
      </div>
    </div>
  </div> 


 





    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-6"><p><strong>Come Visit Us</strong><br>Khazanchi Road <br>Ashok Rajpath <br>Patna</p></div>
            <div class="col-6"><p><b>Opening Hours</b><br>Opens at <br>12.00PM <br>Closes at <br>10.00PM</p></div>
        </div>
    </footer>
    
    
</body>
</html>


