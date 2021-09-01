<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NONVEG</title>
<!-- Bootstrap css link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Bootstrap js link -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 2px solid orange;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.active{
  background-color:#ff9933;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.popular .box-container{
  display:flex;
  flex-wrap: wrap;
  gap:1.2rem;
}
.heading{
  font-family:Verdana;
  font-size:40px;
  text-align:center;
  color:#BF1363;
}
.popular .box-container .box{
  padding:2rem;
  background:#fff;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
  border:.1rem solid rgba(0,0,0,.3);
  border-radius: .5rem;
  text-align: center;
  flex:1 1 30rem;
  position: relative;
}

.popular .box-container .box img{
  height:22rem;
  object-fit: cover;
  width:90%;
  border-radius: .5rem;
}



.popular .box-container .box h3{
  color:#009900;
  font-size: 2.5rem;
  font-family: Verdana;
  padding-top:0.3rem;
}

.btn{
  display: inline-block;
  padding:.8rem 3rem;
  border:.2rem solid var(--red);
  color:red;
  text-decoration: none;
  cursor: pointer;
  font-size: 1.7rem;
  border-radius: .5rem;
  position: relative;
  overflow: hidden;
  z-index: 0;
  margin-top: 1rem;
}

.btn::before{
  content: '';
  position: absolute;
  top:0; right: 0;
  width:0%;
  height:100%;
  background:red;
  transition: .3s linear;
  z-index: -1;
}

.btn:hover::before{
  width:100%;
  left: 0;
}

.btn:hover{
  color:#fff;
}

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

      <li class="nav-item ">
        <a class="nav-link" href="home.php" style="font-size: 25px;">Home <span class="sr-only">(current)</span></a>
      </li>

     <li class="nav-item dropdown active">
        <a style="font-size: 25px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recipes
        </a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="veg.php" style="">Veg Recipes</a>
          <a class="dropdown-item" href="nonveg.php" style="">Non-Veg Recipes</a>
          <a class="dropdown-item" href="snacks.php" style="">Snacks</a>
          <a class="dropdown-item" href="juices.php" style="">Juices</a>

        </div>
      </li>
    

     
      <li class="nav-item ">
        <a class="nav-link" href="about.php" style="font-size: 25px;">About</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="contactus.php" style="font-size: 25px;">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="font-size: 25px;">LogOut</a>
      </li>

    </ul>
  </div>

</nav>

<!-- Navbar ends -->

 <section style="padding: 20px;" class="popular" id="popular">

      <h1 class="heading"> NON-VEG RECIPES </h1>

      <div class="box-container">

          <div class="box">

              <img src="./images/chickenbiryani.jpg" alt="">
              <h3>CHICKEN BIRYANI</h3>
              <a href="chickenbiryani.php" class="btn">View More</a>
          </div>
          <div class="box">

              <img src="./images/fishcurry.jpg" alt="">
              <h3>FISH CURRY</h3>
              <a href="fish.php" class="btn">View More</a>
          </div>
          <div class="box">

              <img src="./images/muttonbiryani.jpg" alt="">
              <h3>MUTTON BIRYANI</h3>
              <a href="muttonbiryani.php" class="btn">View More</a>
          </div>
          <div class="box">

              <img src="./images/eggmasalafry.jpg" alt="">
              <h3>EGG MASALA FRY</h3>
              <a href="egg.php" class="btn">View More</a>
          </div>
          <div class="box">

              <img src="./images/frawnsbiryani.jpg" alt="">
              <h3>PRAWNS BIRYANI</h3>
              <a href="prawns.php" class="btn">View More</a>
          </div>
          <div class="box">

              <img src="./images/chickencurry.jpg" alt="">
              <h3>TOMATO CHICKEN</h3>
              <a href="tomatochicken.php" class="btn">View More</a>
          </div>

      </div>

  </section>


<br>

<div style="background-color: orange;text-align: center;padding: 10px;">
  <h2 style="margin: 15px;color: white;">YUMMY RECIPES</h2>
  <p style="color: white;">All Rights Reserved @2021</p>
</div>



</body>
</html>
