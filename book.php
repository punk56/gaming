<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <title>Book</title>
</head>
<body>
    <!--start header-->
<section class="header">
<a href="home.php" class="logo"><img src="images/punk.png" alt=""></a>

<nav class="navbar">
  <a href="home.php">Home</a>
  <a href="about.html">About</a>
  <a href="Events.php">Events</a>
  <a href="book.php">Book</a>
</nav>
<div id="menu-btn" class="fa-solid fa-bars"></div>
</section>
        <!--end header-->

        <div class="heading" style="background:url(images/5.jpg ) no-repeat">
            <h1>about us</h1>
          </div>


     <!--start booking section-->

<section class="booking">
<h1 class="heading-title">book your ticket</h1>

<form action="book-form.php" method="post" class="book-form">

<div class="flex">
<div class="inputBox">
  <span>name :</span>
  <input type="text" placeholder="enter you name" name="name">
</div>


<div class="inputBox">
  <span>email :</span>
  <input type="email" placeholder="enter you email" name="email">
</div>


<div class="inputBox">
  <span>phone :</span>
  <input type="number" placeholder="enter you number" name="phone">
</div>


<div class="inputBox">
  <span>address :</span>
  <input type="text" placeholder="enter you adress" name="address">
</div>


<div class="inputBox">
  <span>where to :</span>
  <input type="text" placeholder="Gaming event you want to attend" name="location">
</div>


<div class="inputBox">
  <span>how many :</span>
  <input type="number" placeholder="number of tickets" name="guests">
</div> 


<div class="inputBox">
  <span>Start Date :</span>
  <input type="date"  name="arrivals">
</div> 


<div class="inputBox">
  <span>End Date :</span>
  <input type="date"  name="leaving">
</div> 
</div>
<input type="submit" value="submit" class="btn"  name="send">
</form>
</section>





     <!--end booking section-->

          <!--start footer-->
<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>Quick Links</h3>
    <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
  <a href="about.html"><i class="fas fa-angle-right"></i> About</a>
  <a href="Events.php"><i class="fas fa-angle-right"></i> Events</a>
  <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
    </div>

    <div class="box">
      <h3>Extra Links</h3>
      <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
      <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
      <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
      <a href="#"><i class="fas fa-angle-right"></i> Terms Of Use</a>
    </div>

    <div class="box">
      <h3>Contact Info</h3>
      <a href="#"><i class="fas fa-angle-phone"></i>+21628673821</a>
      <a href="#"><i class="fas fa-angle-envelope"></i> atoui7056@gmail.com</a>
      <a href="#"><i class="fas fa-angle-map"></i> Tunsia,Ariana</a>
    </div>

    <div class="box">
      <h3>Follow US</h3>
      <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
      <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
      <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
    </div>

  </div>
  <div class="credit">Created By <span>PUNK</span> | All Rights reserved</div>

            <!--end footer-->
</body>
</html>