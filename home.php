<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HOME</title>
<!-- Bootstrap css link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Bootstrap js link -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>

.gallery .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.gallery .box-container .box{
  height:23rem;
  /*flex:1 1 30rem;*/
  border:1rem solid #fff;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
  border-radius: .5rem;
  position: relative;
  overflow: hidden;
}
.gallery .box-container .box img{
  height:100%;
  width:100%;
  object-fit: cover;
}

.gallery .box-container .box .content{
  position: absolute;
  top:-100%; left:0;
  height: 100%;
  width:100%;
  background:rgba(255,255,255,.9);
  padding:2rem;
  padding-top: 5rem;
  text-align: center;
}

.gallery .box-container .box .content h3{
  font-size: 2.5rem;
  color:#333;
}

.gallery .box-container .box .content p{
  font-size: 1.5rem;
  color:#666;
  padding:1rem 0;
}

.gallery .box-container .box:hover .content{
  top:0;
}


.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active_color{
  background-color: black;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.active{
  background-color:#ff9933;
}
</style>
</head>
<body>

  <!-- Navbar begins -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <img style="width: 70px;height: 70px;border-radius: 50%" src="./images/Yummy-logo.jpeg">
   <h2  style="color: orange;padding: 15px;font-size: 30px;">YUMMY</h2>  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div  class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link" href="home.php" style="font-size: 25px;">Home <span class="sr-only">(current)</span></a>
      </li>

     <li class="nav-item dropdown">
        <a style="font-size: 25px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recipes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="veg.php" style="">Veg Recipes</a>
          <a class="dropdown-item" href="nonveg.php" style="">Non-Veg Recipes</a>
          <a class="dropdown-item" href="snacks.php" style="">Snacks</a>
          <a class="dropdown-item" href="juices.php" style="">Juices</a>

        </div>
      </li>
    

      
      <li class="nav-item">
        <a class="nav-link" href="about.php" style="font-size: 25px;">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php" style="font-size: 25px;">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="font-size: 25px;">LogOut</a>
      </li>

    </ul>
  </div>

</nav>

<!-- Navbar ends -->

<br>

<!-- Slide show begins -->

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="./images/chicken.jpg" style="width:100%;height: 500px;">
</div>

<div class="mySlides fade">
  <img src="./images/fruits.jpg" style="width:100%;height: 500px;">
</div>

<div class="mySlides fade">
  <img src="./images/nonveg.jpg" style="width:100%;height: 500px;">
</div>
<div class="mySlides fade">
  <img src="./images/food_5.png" style="width:100%;height: 500px;">
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
</div>

<!-- slide show ends -->

<br>


 <center><h2 style="color: orange">OUR POPULAR RECIPES</h2></center>


<section style="margin: 55px;" class="gallery" id="gallery">
  
<div class="box-container">
<div class="box">
  <img src="./images/paneer_butter_masala.jpg" alt="Avatar" style="width:300px;height:330px;padding: 15px;">
  <div class="content">
      <h3>PANNER BUTTER MASALA</h3>
      <p>OUR POPULAR RECIPE</p>

  </div>
</div>
<div class="box">
      <img src="./images/Non_veg.jpg" alt="Avatar" style="width:300px;height:330px;padding: 15px;">
      <div class="content">
          <h3>CHICKEN</h3>
      <p>OUR POPULAR RECIPE</p>

      </div>
    </div>
  <div class="box">
    <img src="./images/burger.jpg" alt="Avatar" style="width:300px;height:330px;padding: 15px;">
    <div class="content">
        <h3>BURGER</h3>
      <p>OUR POPULAR RECIPE</p>
    </div>
    </div>
  <div class="box">
      <img src="./images/carrotjuice.jpg" alt="Avatar" style="width:300px;height:330px;padding: 15px;">
      <div class="content">
          <h3>CARROT JUICE</h3>
      <p>OUR POPULAR RECIPE</p>

      </div>
    </div>
  </div>
</section>


<br>

<div style="background-color: orange;text-align: center;padding: 10px;">
  <h2 style="margin: 15px;color: white;">YUMMY RECIPES</h2>
  <p style="color: white;">All Rights Reserved @2021</p>
</div>






</body>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active_color", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active_color";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</html> 
