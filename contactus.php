<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CONTACT</title>
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

.container {
  border-radius: 5px;
  background-color: #8888888 ;
  padding: 20px;
}
/* Footer */
.footer {
  padding: 20px;
  background: orange;
  color:white;
  margin-top: 20px;
}


.social-items{
  list-style: none;
  padding:10px 20px;
}

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
    

      
      <li class="nav-item ">
        <a class="nav-link" href="about.php" style="font-size: 25px;">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contactus.php" style="font-size: 25px;">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="font-size: 25px;">LogOut</a>
      </li>

    </ul>
  </div>

</nav>

<!-- Navbar ends -->


<div >
  <center><img src="./images/contact1.png" style="height: 300px;width: 60%"></center>
</div>

 




<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    
    
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>


<br>
<center>
    <section>
  <div class="footer">    
      <div class="row">
        <div class="col-xs-12 col-sm-12  col-md-6 col-lg-6">
         <ul class="himaja-items">

      <li class="social-items"> <i class="fas fa-envelope fa-lg"style="color:blue;"><a href="mailto:bandlahimaja@gmail.com" style="color: inherit;color: black;padding: 10px;">Himaja </a></i></li>

        <li class="social-items"><i class="fab fa-linkedin-in fa-lg"style="color:blue;"><a href="https://www.linkedin.com/in/bandla-himaja-526658190/" style="color: inherit;color: black;padding: 10px;">Bandla Himaja</a></i></li>

         <li class="social-items"><i class="fab fa-telegram fa-lg" style="color:blue;"><a href="https://msng.link/o/?Himaja_Bandla=tg" style="color: inherit;color: black;padding: 10px;">Message me on Telegram</a></i></li>
      </ul>

        </div>
        <div class="col-xs-12 col-sm-12  col-md-6 col-lg-6">
          <ul class="Madhuri-items">

          <li class="social-items"><i class="fas fa-envelope fa-lg" style="color:blue;"><a href="mailto:gurrammadhurivijayasri@gmail.com" style="color: inherit;color: black;padding: 10px;">Madhuri VijayaSri</a></i></li>


           <li class="social-items"><i class="fab fa-linkedin-in fa-lg" style="color:blue;"><a href="https://www.linkedin.com/in/gurram-madhuri-vijayasri-9b23481a1" style="color: inherit;color: black;padding: 10px;">Gurram Madhuri VijayaSri </a></i></li>

            <li class="social-items"><i class="fab fa-telegram fa-lg" style="color:blue;"><a href="https://t.me/MADHURI_VIJAYASRI_GURRAM" style="color: inherit;color: black;padding: 10px;">Message me on Telegram</a></i></li>
         
         </ul>
        </div>
      </div>
    
<div class="outer-footer">
  <h2>Yummy Recipes</h2>
  <p>All Rights Reserved @2021</p>
</div>

</div>
</section>
  </center>

</body>
</html> 
