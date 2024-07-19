<?php $page="home"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sam Engineering</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">

</head>
<body>
  <?php include 'nav.php' ?>
        
    
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/fab1.jpg" height="700px" width="100%"> 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/fab2.jpg" height="700px" width="100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/fab3.jpg" height="700px" width="100%">
</div>

</div>
<script src="home.js"></script>
<div class="ss">
<br><br>
<h1 style="margin-top:750px;color: #171b4b;text-align: center;"> Services</h1>
<br>
<br>
<div class="services">
    <div class="boxes">
      <h3 style="color: #171b4b;text-align: center;">Roofing</h3>
    <img src="images/c2.jpg" >
    <p>Services are available as per quotation</p>
    <a href="roofing.php"><button >Know more</button></a>
  </div>

    <div class="boxes">
      <h3 style="color: #171b4b;text-align: center;">Mezzannine Floors</h3>
    <img src="images/mfs.jpg" >
    <p>Services are available as per quotation</p>
    <a href="mezz.php"><button>Know more</button></a>
  </div>

  <div class="boxes">
    <h3 style="color: #171b4b;text-align: center;">Gates</h3>
    <img src="images/gts.jpg" >
    <p>Services are available as per quotation</p>
    <a href="gates.php"><button >Know more</button></a>
  </div>
  </div>
  <br><br><br>
    <div class="services"> 
  <div class="boxes">
    <h3 style="color: #171b4b;text-align: center;">Fencing</h3>
  <img src="images/fncs.jpg" >
  <p>Services are available as per quotation</p>
  <a href="fen.php"><button >Know more</button></a>
</div>

<div class="boxes">
  <h3 style="color: #171b4b;text-align: center;">Railings</h3>
<img src="images/rls.jpg" >
<p>Services are available as per quotation</p>
<a href="rail.php"><button >Know more</button></a>
</div>

<div class="boxes">
  <h3 style="color: #171b4b;text-align: center;">Skylight</h3>
<img src="images/skls.jpg" >
<p>Services are available as per quotation</p>
<a href="sky.php"><button >Know more</button></a>
</div>

  </div>
  <br><br>
  </div>
  <?php include "footer.php" ?>

</body>
</html> 
