<?php
require_once 'config.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/21ef495763.js" crossorigin="anonymous"></script>



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyChA3IpB2PwocaLxQiQ-JSqk7Y4H10uBkc'></script>


    <link rel="stylesheet" href="css/contact.css">
    <title>Welcome to American leather</title>
</head>
<body id="home">


<?php

try{

  $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

  $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
  if(isset($_POST['submit']))
  {		
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $lastname = $_POST['lastname'];
  $message = $_POST['message'];

  $sql = "INSERT INTO `contactform`(`firstname`, `email`,`lastname`,`message`) VALUES ('$firstname','$email','$lastname','$message')";

  $pdo->exec($sql);


}




}

catch (PDOException $e){

  echo "My Database connection has failed...";
  die($e->getmessage());

}


?>






  <div class="loader">
    <img src="./images/giphy (1).gif" alt="loader">
  </div>
<div class="hero">
<div class='container-fluid' >
    <nav class='navbar'>
        
        <h1 class="logo"><a href="index.php"> <i class="fas fa-shoe-prints"></i><span> American </span>Leather</a></h1>
        <ul class="navbar_stuff">
          <li class="item">
            <a class="current"  href="index.php">Home</a>
          </li>
          <li class="item">
            <a class="current"  href="about.html">About</a>
          </li>
          <li class="item">
            <div class="dropdown">
                <button class="dropbtn">Catalog</button>
                <div class="dropdown-content">
                  <a href="men.html">Men</a>
                  <a href="women.html">Women</a>
                  <a href="accesories.html">Accesories</a>
                </div>
              </div>
              
     
          <li class="item">
            <a class="current" href="contact.php">Contact</a>
          </li>
        </ul>
    </nav>
</div>
</div>


<!--Contact us-->
<div class="grid-container">




    <div class="grid-item">
        <h1 class="l-heading">
            <span class="text_primary"> Contact</span> Us
            
        </h1>
        <p>Please fill out the ofr below to contact us</p>

        
        <form method="POST">

           <div class="form-group">
               <label for="firstname">First Name:</label>
               <input type="text" id="firstname" name="firstname">
           </div>


           <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname">
           </div>

           <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>



            <div class="form-group">
                <label for="message">Message:</label>
                <textarea type="text" id="message" name="message"></textarea>
            </div>
            <button type="submit" name="submit" class="btnn">Submit</button>


        </form>

    




    </div >


    <div class="grid-item" id="item2">


        <div >
        <h5 id="item2">We're here to help and answer any question you might have.
        We look forward to hearing from you!</h5>
 
        </div>
    <div class="box">
    <i class="fas fa-map-marker-alt fa-2x"></i>
      <p>Located in Kalamazo, MI, 49009 USA</p>
    </div>
    <div class="box" id='yolo'>
        <i class="fas fa-phone-alt fa-2x"></i>
      <p>You Can call as <a href="#">1-800-545-9999</a></p>
    </div>
    <div class="box">
        <i class="fas fa-envelope fa-2x"></i>
      <p>Email: AmericanLeather117@gmail.com</p>
    </div>
  
  
  

    </div>

 
</div>





<div class="clr"></div>

<footer class="main-footer" id='py-2' style="height:440px;">

  <div class="container footer-container">


    <div class="emaildiv">
      <img class="emaildiv" src="./images/sssss.jpg" alt="phone">
      <p class="emaildiv" >Having issues with our products? We are glad to help our customers!!.</p>
      <p>Just call 1-800-989-6969</p>
    </div>

    <div>
      <h3>Email Us</h3>
      <p>Want to recieve updates on discounts? Join here!</p>
      <form method="POST">
        Full Name : <br><input type="text" name="fullname" placeholder="Enter Full Name" Required>
        <br/>
        Email : <input type="email" name="email" placeholder="enter email" Required>
        <br/>
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>


    <div class="emaildiv">
      <h3 class="emaildiv">Site links</h3>
      <ul class="list" class="emaildiv">
        <li class="emaildiv"><a href="#">Help & Support</a></li>
        <li class="emaildiv"><a href="#">Privacy Policy</a></li>
        <li class="emaildiv" ><a href="#">About Us</a></li>
        <li class="emaildiv"><a href="#">Contact</a></li>
      </ul>
    </div>


    <div>
      <h2>Social Media</h2>
      <p><i class="fab fa-facebook-square fa-2x"></i></p>
      <p><i class="fab fa-twitter-square fa-2x"></i></p>
      <p><i class="fab fa-instagram fa-2x"></i></i></p>
      <a href="#" class="seconday">Follow us!</a>
    </div>



    <div id="rumm" >
      <p>
        American Leather &copy; 2020, All Rights Reserved
      </p>
    </div>
  </div>

</footer>
<script src="./javascript/loading.js"></script>
</body>
</html>