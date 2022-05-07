<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="./images/solidarity.png" type="image/icon type">
    <title>Blood-Bank</title>
</head>
<body>
    
  <header id="home">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand float " href="#"><i class="fas fa-hand-holding-heart fa-lg ml-5 mr-3"></i>Blood Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item active pl-lg-3">
              <a class="nav-link mr-3" href="#home">Home</a>
            </li>
            <li class="nav-item pl-lg-3">
              <a class="nav-link mr-3" href="#donaters">Donaters</a>
            </li>
            <li class="nav-item pl-lg-3">
              <a class="nav-link mr-3" href="#about">About</a>
            </li>
            <li class="nav-item align-self-lg-center pl-lg-3">
                <input class="btn login-btn" type="button" value="Fund">
            </li>
          </ul>
        </div>
    </nav>
    <div class="header-content">
        <div class="left">
          <img src="images/header.jpg" alt="blood-donate">
        </div>
        <div class="right">
          <h2>ONLINE <span style="color:red;">BLOOD</span> BANK</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil eum ab quasi quis? 
            Eligendi nihil odit temporibus incidunt, ullam debitis dolores consequatur voluptas alias
            enim sit vel dicta possimus sapiente reiciendis nulla saepe sequi magni maiores distinctio
              in molestias explicabo? Minus in ex minima? Debitis sit sunt id. Voluptate, enim?</p>
              <div class="header-button">
                <input type="button" class="btn btn-outline-danger hover1 " value="Donaters">
                <input type="button" class="btn btn-danger hover " value="view" >
              </div>
        </div>  
    </div>
  </header>
<div id="donaters">
  <h1>MOST <span>DONORS</span></h1>
    <div class="row ">
      <div class="donaters-box col-md-3 col-sm-6 pl-5 text-center">
        <img src="images/bd.png" alt="">
        <h3>Madhan</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In omnis nihil perferendis.</p>
      </div>
      <div class="donaters-box col-md-3 pl-5 col-sm-6 text-center">
        <img src="images/bd.png" alt="">
        <h3>Raja</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quidem cum sequi?</p>
      </div>
      <div class="donaters-box col-md-3 col-sm-6 pl-5 text-center">
        <img src="images/bd.png" alt="">
        <h3>Kamaraj</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quidem cum sequi?</p>
      </div>
      <div class="donaters-box col-md-3  col-sm-6 pl-5 text-center">
        <img src="images/bd.png" alt="">
        <h3>Vel</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quidem cum sequi?</p>
      </div>
    </div>
  <div class="row">
    <div class="col-md-4 donaters-box col-sm-6 pl-5 text-center">
      <img src="images/bd.png" alt="">
      <h3>Kumar</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam atque eaque dicta!</p>
    </div>
    <div class="col-md-4 donaters-box pl-5 col-sm-6 text-center">
      <img src="images/bd.png" alt="">
      <h3>Xavier</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam atque eaque dicta!</p>
    </div>
    <div class="col-md-4 donaters-box pl-5 col-sm-12 text-center">
      <img src="images/bd.png" alt="">
      <h3>Aravindh</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam atque eaque dicta!</p>
    </div>
  </div>
</div>

<div id="about">
        <div class="about-head">
            <p>Join our Community of <span>Donor</span></p>
            <p>There are 72M Doners Donate our blood around the world. We try to make <br>  more Donaters, equitable and more seamless for them.</p>
            <p>500+ online Donor</p>
            <button class="btn btn-danger">Join Now</button>
        </div>
        <div class="footer">
            <img src="images/2.png" width="100%" height="400px" alt="">
            <div class="footer-content">
            <p class="text-center bg-danger text-white p-2">&copy;2022 All Right Reseved,PocketBank is a registered Oraganization.</p>
            </div>
        </div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>