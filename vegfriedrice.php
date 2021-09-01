<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VEG-FRIED-RICE</title>
<!-- Bootstrap css link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Bootstrap js link -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 100;
}
body p {
  font-size: 14px;
  line-height: 23px;
}
body li {
  font-size: 14px;
}
h3 {
  margin-left: 15px;
}
h4{
  margin-left:20px;
}
.wrapper {
  padding-top: 25px;
}

img {
  max-width:100%;
  width:70%;
  height: 490px;
  margin-left: auto;
  margin-right: auto;
  display:block;
}
.title {
  width:70%;
  height:60px;
  background-color:#3333cc;
  color:white;
  margin: auto;
}
.title h4 {
  
  font-size:3rem;
  font-weight:700;
  text-align:center;
}
ul.tab {
  margin: auto;
  padding: 0px 0px 40px 0px;
  overflow: hidden;
  background-color: #f1f1f1;
  width:70%;
  height: 55px;
}
ul.tab li {
  float:left;
}
ul.tab li a {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}
ul.tab li a:focus {
  background-color: #ccc;
}
ul.tab li a:hover {
  background-color: #ddd;
  cursor: pointer;
}
.tabcontent {
  display: none;
  padding: 6px 12px;
  background-color: white;
  border-top: none;
  width:70%;
  margin: auto;
}
.tabcontent li {
  line-height: 23px;
}
.tabcontent p {
  margin: 20px;
}

@media screen and (max-width: 992px) {

/*  .img
  {
    width:55%;
    height:500px;
  }*/
  .title{
    width:70%;
  }
.title h4{
  font-size:2rem;

}
ul.tab{
  width:70%;
}
.tabcontent p{
  margin:40px;
}
.tabcontent h3{
  margin:40px;
}
.tabcontent h4
{
  margin:45px;
}
}

/* On screens that are 600px wide or less, the background color is olive */
@media screen and (max-width: 600px) {
  /*.img
  {
    width:400px;
    height:500px;
  }*/
.title{
  width:70%;
}
ul.tab{
  width:70%;
}
.tabcontent p{
  margin:30px;
}
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

<br>

<div class="wrapper">
  <div class="img">
    <img src="./images/vegfriedrice.jpg">
  </div>
  <div class="title">
    <h4>VEG-FRIED RICE</h4>
  </div>
  <ul class="tab">
    <li><a href="javascript:void(0)" class="tablinks" onclick="salmon(event, 'ingredients')">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 50 50" style="enable-background:new 0 0 25 50; width: 50px; height: 50px;" xml:space="preserve">
        <style type="text/css">
  .st0{fill:#000000;}
</style>
        <g>
          <path class="st0" d="M24.6,12.2c1.5,0,2.9,0,4.4,0c0.7,0.3,1.3,0.6,1.4,1.4c0.1,0.6,0,1.3,0,1.9c0,0.2,0,0.4,0.1,0.6c1.6,1.9,2.1,4.1,1.8,6.5
    c0,0.1,0.1,0.3,0.2,0.4c1,0.6,2.1,1.4,3.4,1.1c0,0,0,0,0,0c0.5,0,0.9,0.4,0.9,0.9c0,0.9,0,1.8,0,2.7c0,0.6-0.4,0.9-0.9,0.9
    c-0.3,0-0.5,0-0.8,0c-0.2,0.7-0.3,1.3-0.5,1.9c-0.5,1.5-1,2.9-1.5,4.4c-0.3,0.9-0.5,1-1.4,1c-4.6,0-9.2,0-13.8,0
    c-0.5,0-0.9-0.2-1.1-0.6c-0.1-0.2-0.2-0.4-0.3-0.7c-0.6-2-1.5-3.9-1.8-6c-0.7,0-1.4,0.1-1.8-0.7c0-1.1,0-2.2,0-3.3
    c0.3-0.5,0.7-0.7,1.3-0.6c0.5,0,0.9,0,1.4,0c0-0.1,0-0.2,0-0.3c0.2-2.8,2.4-5.2,5.4-5.2c0.2,0,0.3-0.1,0.4-0.3
    c0.4-0.8,0.8-1.5,1.3-2.2c0.2-0.3,0.3-0.5,0.3-0.8C23,13.9,23,12.8,24.6,12.2z M30.5,21.9c0-0.6,0.1-1,0-1.5
    c-0.2-1.5-0.8-2.9-2.2-3.7c-0.6-0.3-0.7-1.3,0-1.5c0.6-0.2,0.5-0.6,0.4-1c-1.2,0-2.4,0-3.6,0c-0.1,0.5-0.1,0.8,0.4,1.1
    c0.2,0.1,0.4,0.5,0.4,0.8c0,0.4-0.3,0.7-0.6,0.8c-1.1,0.4-1.5,1.3-1.8,2.2c0.6,0.4,1.2,0.8,1.8,1.2c0.6-0.8,1.3-0.6,2-0.1
    C28.2,20.7,29.3,21.2,30.5,21.9z M17.7,24.1c0.7,0,1.4-0.1,2.1,0c0.8,0.1,1.4-0.2,1.9-0.8c0.6-0.7,1.3-1.3,2-1.9
    c-0.9-1-2.5-1.3-3.8-0.7C18.6,21.2,17.7,22.6,17.7,24.1z M24,30.5c0,0.6,0,1.1,0,1.7c0,0.7,0.4,1,0.9,1c0.6,0,0.9-0.4,0.9-1.1
    c0-1.1,0-2.2,0-3.3c0-0.7-0.4-1.1-0.9-1.1c-0.6,0-0.9,0.4-0.9,1.1C24,29.4,24,29.9,24,30.5z M20.4,30.5c0,0.6,0,1.1,0,1.7
    c0,0,0,0.1,0,0.1c0,0.6,0.4,1,0.9,1c0.5,0,0.9-0.4,0.9-1c0-1.2,0-2.4,0-3.5c0-0.6-0.4-1-0.9-1c-0.5,0-0.9,0.4-0.9,1
    C20.4,29.3,20.4,29.9,20.4,30.5z M29.5,30.5c0-0.5,0-1.1,0-1.6c0,0,0-0.1,0-0.1c0-0.6-0.4-1-0.9-1c-0.5,0-0.9,0.4-0.9,1
    c0,1.2,0,2.3,0,3.5c0,0.6,0.4,1,0.9,1c0.5,0,0.9-0.4,0.9-1C29.5,31.6,29.5,31.1,29.5,30.5z M30.5,24.1C30.5,24.1,30.5,24,30.5,24.1
    c-1.3-0.8-2.7-1.6-4-2.4c-0.1,0-0.3-0.1-0.3,0c-0.8,0.8-1.6,1.5-2.5,2.4C26,24.1,28.2,24.1,30.5,24.1z"/>
        </g>
      </svg>
      </a></li>
    <li><a href="javascript:void(0)" class="tablinks" onclick="salmon(event, 'directions')">
      <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 50 50" style="enable-background:new 0 0 50 50; width: 50px; height: 50px;" xml:space="preserve">
        <style type="text/css">
  .st0{fill:#000000;}
</style>
        <g>
          <path class="st0" d="M13.4,26.9c-0.8-0.3-1.5-0.5-2.2-0.8c-1-0.4-1.5-1.2-1.2-2c0.3-0.8,1.2-1.1,2.2-0.8c1.2,0.3,1.3,0.5,1,1.8
    c-0.5-0.2-1.1-0.3-1.6-0.5c0,0.1,0,0.1-0.1,0.2c0.7,0.3,1.4,0.5,2.4,0.9c-0.1-0.9-0.2-1.6-0.3-2.3c0-0.2-0.3-0.3-0.5-0.4
    c-0.2-0.2-0.3-0.4-0.5-0.6c0.2-0.2,0.5-0.4,0.7-0.5c0.2-0.1,0.4,0,0.6,0c7.6,0,15.1,0,22.7,0c0.2,0,0.5,0,0.7,0
    c0.2,0.1,0.4,0.3,0.4,0.4c0,0.2-0.2,0.5-0.3,0.6c-1.3,0.2-0.9,1.2-1,2c0,0.2,0,0.4,0.1,0.8c0.7-0.3,1.4-0.5,2.1-0.8
    c0-0.1,0-0.1,0-0.2c-0.5,0.1-1,0.3-1.5,0.4c-0.5-0.8-0.3-1.3,0.6-1.6c0.2-0.1,0.5-0.1,0.7-0.2c0.9-0.1,1.6,0.3,1.9,1
    c0.2,0.7-0.2,1.4-1.1,1.8c-0.7,0.3-1.4,0.5-2.2,0.8c0.2,0.7,0.4,1.4,0.6,2.1c0.9,3,0.2,5-2.4,6.8c-0.3,0.2-0.7,0.3-1,0.3
    c-5.9,0-11.8,0-17.8,0c-0.3,0-0.7-0.1-1-0.3C12.6,34,11.9,32,12.7,29C12.9,28.3,13.1,27.7,13.4,26.9z M16,23.4c0.3,2-0.5,3.9-1,5.9
    c-0.5,1.9,0.1,3.5,1.5,4.8c0.5,0.5,1,0.5,1.7,0.3c-0.4-0.3-0.6-0.6-0.9-0.8c-1.2-1.2-1.5-2.6-1.1-4.3c0.2-0.7,0.4-1.3,0.5-2
    c0.1-1.1,0.2-2.3,0.2-3.5C16.9,23.4,16.6,23.2,16,23.4z"/>
          <path class="st0" d="M36.6,21.1c-7.7,0-15.4,0-23.1,0c0.3-1.2,1-2,1.9-2.7c1.6-1.2,3.4-1.7,5.3-2.1c0.9-0.2,1.8-0.4,2.8-0.6
    c-0.2-0.6-0.4-1-0.5-1.4c-0.3-0.8-0.1-1.4,0.8-1.7c1.1-0.5,2.2-0.5,3.3,0c0.8,0.4,1.1,1,0.8,1.8c-0.1,0.4-0.3,0.8-0.5,1.3
    c0.8,0.2,1.5,0.4,2.2,0.6c2,0.4,4,1,5.6,2.3C35.7,19.2,36.4,19.9,36.6,21.1z M21.6,17c-1.9-0.1-5.4,1.6-6,3.1
    c0.7,0.2,1.1-0.1,1.6-0.6c0.5-0.6,1.2-1,1.8-1.4C19.9,17.7,20.8,17.4,21.6,17z"/>
        </g>
      </svg>
      </a></li>
    <li><a href="javascript:void(0)" class="tablinks" onclick="salmon(event, 'time')">
      <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 50 50" style="enable-background:new 0 0 50 50; width: 50px; height: 50px;" xml:space="preserve">
        <style type="text/css">
  .st0{fill:#000000;}
</style>
        <g>
          <path d="M25,12.2c6.6,0,12,5.4,12,12c0,6.6-5.4,12-12,12c-6.6,0-12-5.4-12-12C13,17.6,18.4,12.2,25,12.2z M29.4,15.8
    c-1.2-0.6-2.4-1-3.8-1.1c0,0.4,0,0.7,0,1.1c0,0.5-0.2,0.8-0.6,0.8c-0.4,0-0.6-0.3-0.6-0.8c0-0.4,0-0.7,0-1.1
    c-1.4,0.1-2.6,0.4-3.8,1.1c0.2,0.3,0.4,0.6,0.5,0.9c0,0.1,0,0.3-0.1,0.4c-0.1,0.1-0.3,0-0.4,0c-0.1,0-0.1-0.2-0.2-0.3
    c-0.1-0.2-0.3-0.4-0.4-0.6c-1.1,0.7-2.1,1.6-2.8,2.7c0.3,0.2,0.7,0.4,1,0.6c0.4,0.2,0.5,0.6,0.3,0.9c-0.2,0.3-0.5,0.4-0.9,0.2
    c-0.3-0.2-0.7-0.4-1-0.6c-0.6,1.2-0.9,2.5-1,3.8c0.3,0,0.6,0,0.9,0c0.2,0,0.4,0.1,0.4,0.3c0,0.3-0.2,0.4-0.5,0.4
    c-0.3,0-0.6,0-0.9,0c0.1,1.4,0.4,2.6,1,3.8c0.2-0.1,0.3-0.2,0.5-0.3c0.2-0.1,0.3-0.2,0.5-0.3c0.4-0.2,0.8-0.2,1,0.2
    c0.2,0.3,0.1,0.7-0.3,0.9c-0.3,0.2-0.6,0.4-1,0.6c0.8,1.1,1.7,2,2.9,2.8c0.1-0.3,0.3-0.5,0.4-0.7c0.1-0.2,0.3-0.4,0.6-0.3
    c0.3,0.1,0.2,0.4,0,0.6c-0.1,0.2-0.3,0.5-0.4,0.8c1.2,0.6,2.4,1,3.7,1.1c0,0,0-0.1,0-0.1c0-0.3,0-0.7,0-1c0-0.5,0.2-0.8,0.6-0.8
    c0.4,0,0.6,0.3,0.6,0.8c0,0.4,0,0.7,0,1.1c1.4-0.1,2.6-0.5,3.8-1.1c-0.2-0.3-0.4-0.6-0.5-0.9c0-0.1,0-0.3,0.1-0.4
    c0.1-0.1,0.3,0,0.4,0c0.1,0,0.1,0.2,0.2,0.3c0.1,0.2,0.3,0.4,0.4,0.6c1.1-0.7,2.1-1.6,2.8-2.7c-0.3-0.2-0.6-0.4-0.9-0.5
    c-0.4-0.2-0.5-0.6-0.3-0.9c0.2-0.3,0.6-0.4,1-0.2c0.3,0.2,0.6,0.4,0.9,0.5c0.6-1.2,0.9-2.5,1-3.9c-0.3,0-0.6,0-0.9,0
    c-0.3,0-0.5-0.1-0.5-0.3c0-0.3,0.2-0.4,0.5-0.3c0.3,0,0.6,0,0.9,0c-0.1-1.4-0.4-2.6-1-3.8c-0.3,0.2-0.6,0.4-1,0.5
    c-0.4,0.2-0.8,0.2-1-0.2c-0.2-0.3-0.1-0.7,0.3-0.9c0.3-0.2,0.6-0.4,1-0.6c-0.8-1.1-1.7-2-2.8-2.8c-0.1,0.3-0.3,0.5-0.4,0.8
    c-0.1,0.2-0.3,0.4-0.5,0.2c-0.2-0.1-0.2-0.3-0.1-0.5C29.1,16.3,29.3,16.1,29.4,15.8z"/>
          <path d="M25,25.5c-0.5,0-1-0.3-1.2-0.8c-0.1-0.1-0.2-0.3-0.3-0.4c-1.2-0.7-2.5-1.4-3.7-2.1c-0.3-0.2-0.5-0.3-0.5-0.7
    c-0.1-0.6,0.5-1,1-0.8c0.1,0,0.2,0.1,0.4,0.2c1.2,0.7,2.4,1.3,3.6,2c0.1,0.1,0.3,0.1,0.5,0.1c0.2,0,0.5,0,0.7,0
    c0.2,0,0.3,0,0.5-0.1c1.2-0.7,2.4-1.4,3.7-2c0.2-0.1,0.3-0.2,0.5-0.2c0.4,0,0.7,0.2,0.8,0.6c0.1,0.3,0,0.7-0.4,0.9
    c-0.7,0.4-1.4,0.8-2.1,1.1c-0.6,0.3-1.2,0.7-1.8,1c-0.1,0.1-0.2,0.2-0.3,0.4C26.1,25.2,25.6,25.5,25,25.5z"/>
        </g>
      </svg>
      </a></li>
    <li><a href="javascript:void(0)" class="tablinks" onclick="salmon(event, 'serving')">
      <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 50 50" style="enable-background:new 0 0 50 50; width: 50px; height: 50px;" xml:space="preserve">
        <style type="text/css">
  .st0{fill:#000000;}
</style>
        <g>
          <path d="M24.2,12.2c0.5,0,1.1,0,1.6,0c0.4,0.1,0.8,0.1,1.1,0.2c3.3,0.6,5.9,2.2,7.8,4.9c0.3,0.4,0.2,0.6-0.2,0.9
    c-3.1,1.8-6.1,3.5-9.2,5.3c-0.3,0.1-0.5,0.2-0.8,0.2c-3,0-6,0-9,0c-0.6,0-1.3,0-1.9,0c-0.4,0-0.6-0.2-0.5-0.5
    c0.2-2,0.8-3.9,1.9-5.6c1.9-2.8,4.5-4.5,7.8-5.1C23.3,12.3,23.7,12.3,24.2,12.2z"/>
          <path d="M36.9,24.5c-0.1,3.1-1.3,5.8-3.6,8.1c-0.3,0.3-0.5,0.3-0.8,0c-2.2-2.6-4.4-5.3-6.6-7.9c-0.3-0.3-0.2-0.6,0.1-0.8
    c3-1.7,5.9-3.4,8.9-5.1c0.4-0.2,0.6-0.1,0.8,0.3C36.5,20.7,36.9,22.5,36.9,24.5z"/>
          <path d="M18.7,24.4c1.7,0,3.3,0,5,0c0.5,0,0.7,0.3,0.5,0.8c-1.2,3.1-2.3,6.3-3.4,9.4c-0.1,0.4-0.4,0.5-0.8,0.3
    c-3.6-1.8-5.8-4.6-6.7-8.5c-0.1-0.4-0.1-0.9-0.2-1.4c0-0.4,0.1-0.6,0.6-0.6C15.3,24.4,17,24.4,18.7,24.4z"/>
          <path d="M25,36c-1.1,0-2.1-0.2-3.2-0.4c-0.4-0.1-0.5-0.3-0.4-0.8c1.1-3,2.2-6.1,3.3-9.1c0.2-0.5,0.6-0.6,0.9-0.2
    c1.6,2,3.3,3.9,4.9,5.9c0.4,0.5,0.9,1.1,1.3,1.6c0.3,0.3,0.2,0.6-0.1,0.8c-1.8,1.2-3.7,2-5.9,2.1C25.6,36,25.3,36,25,36z"/>
        </g>
      </svg>
      </a></li>
    
  </ul>
  <div style="background-color:black" id="ingredients" class="tabcontent">
    <h3 style="color: orange;font-size: 40px;">INGREDIENTS</h3>
    <ul>
      <li style="font-size: 25px;padding: 20px;color: white">1 cup Basmati Rice - cooked in a fluffy way (150 gms)</li>
      <li style="font-size: 25px;padding: 20px;color: white">1/2 cup Carrots thinly chopped</li>
      <li style="font-size: 25px;padding: 20px;color: white">1/3 cup French Beans thinly chopped</li>
      <li style="font-size: 25px;padding: 20px;color: white">1/2 tsp Light Soya Sauce</li>
      <li style="font-size: 25px;padding: 20px;color: white">1 tsp Vinegar,Salt</li>
      <li style="font-size: 25px;padding: 20px;color: white">1/2 tsp Aromatic Powder,1/2 tsp White Pepper</li>
      <li style="font-size: 25px;padding: 20px;color: white">1/2 tsp Pepper Powder</li>
      <li style="font-size: 25px;padding: 20px;color: white">1/2 tsp Sugar</li>
      <li style="font-size: 25px;padding: 20px;color: white">1/4 cup Spring Onions,3 tbsp Oil</li>
    </ul>
  </div>
     
  <div id="directions" class="tabcontent">
    <h3 style="color: orange;font-size: 40px;">DIRECTIONS</h3>

    <ul>
      <li style="font-size: 23px;padding: 10px;">Heat Oil and add thinly chopped French Beans, chopped Carrots and fry on a high flame up to 60 %.</li>
     <li style="font-size: 23px;padding: 10px;">Add the fluffy Basmati Rice and toss well.</li>
     <li style="font-size: 23px;padding: 10px;">Add the rest of the ingredients and toss on high flame.</li>

      <li style="font-size: 23px;padding: 10px;">Sprinkle chopped Spring Onions, toss and remove from fire.</li>

</li>



      

</ul>

    </div>
  
  <div id="time" class="tabcontent">
    <h3 style="color: orange;font-size: 40px;">ESTIMATED TIME</h3>
    <ul>
      <li style="font-size: 23px;padding: 20px;">20m preparation time</li>
    </ul>
  </div>
  <div id="serving" class="tabcontent">
    <h3 style="color: orange;font-size: 40px;">SERVING</h3>
    <li style="font-size: 23px;padding: 20px;">This specific recipe serves up to four people. Adjust it accordingly to suit the specific needs of your party.</li>
  </div>
</div>

<script>
  function salmon(evt, recipe) {

  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }


  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }


  document.getElementById(recipe).style.display = "block";
  evt.currentTarget.className += " active";

}

  </script>


<br>
<br>



<div style="background-color: orange;text-align: center;padding: 10px;">
  <h2 style="margin: 15px;color: white;">YUMMY RECIPES</h2>
  <p style="color: white;">All Rights Reserved @2021</p>
</div>



</body>
</html>
