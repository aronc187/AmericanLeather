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

    <link rel="stylesheet" href="css/style.css">
    <title>Welcome to American leather</title>
    
</head>
<body id="home">


<?php

try{

  $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

  $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
  if(isset($_POST['submit']))
  {		
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];

  $sql = "INSERT INTO `register`(`fullname`, `email`) VALUES ('$fullname','$email')";

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



<div class="show-content">
<div class="container-fluid">

    <div class="showcase-content">
    <h1>A Leather You Can Trust</h1>
    <h2>America's Top equaltiy leather!</h2>
    <a class='link_to_AU' href="about.html">About Us</a>


    </div>
    </div>
</div>

<section class="home-info" class="bg-dark">

  
  
    <div class="img-content"> </div>


    <div class="info-cont3nt">
      <h2> <spanc class="text-primary" id='box77'>Company </span><span class="text_p" id='box77'>Perspective</span></h2>
      <p class="p_text" id="box9">Finding the perfect pair of boots can be something of a feat. With many options out there for many different purposes, it can be a bit overwhelming to narrow things down. One niche that stands out when searching for boots are those that are American-made. Why? Because this brand value's craftsmanship over passing trends and represent a local way of doing things that just feels a little bit better than buying from a big box department store.</p>
      <a href="catalog.html" class="btn-light">See More</a>
    </div>

</section>


<section id="features">
  
  <div class="box" >
    <i class="fas fa-user-tie fa-3x"></i>
    <h3 id="mobiles">Boots<span id="box9">/Shoes</span></h3>
    <p id='box9'>look no further American Leather has the right shoes for the right occasion</p>
  </div>
  <div class="box" id='yolo'>
    <i class="fas fa-mobile fa-3x"></i>
    <h3 id="mobiles">Phone Cases</h3>
    <p id='box9' >Dress to impress? Why not add a little bit of class to your perosnal items!</p>
  </div>
  <div class="box">
    <i class="fas fa-suitcase fa-3x"></i>
    <h3 id="mobiles">Backpacks</h3>
    <p id='box9'>Travel in style!</p>
  </div>



</section>


<div class="clr"></div>

<footer class="main-footer" id='py-2'>

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



      <div id='rum'>
        <p>
          American Leather &copy; 2020, All Rights Reserved
        </p>
      </div>
    </div>

</footer>
<script src="./javascript/loading.js"></script>
</body>
</html>