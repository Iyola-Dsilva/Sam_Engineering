<?php $page="services"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sam Engineering</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<style>
  
.roofs{
    padding-top:30px;
  }

 h1{
   position:absolute;
   top:120px;
   left:40%;
   font-size:40px;
    font-weight: bold;
    color:#190c5c;
 }

  table tr img{

    height:250px;
    width: 350px;
    padding: 20px;
  }

  table{
    color:#190c5c;
    font-size: 25px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    margin-top:230px;
    margin-left:3%;
  }
</style>
</head>
<body> 
  <?php include 'nav.php' ?>
  <h1>ROOFING</h1>
  
  <div class="roofs">
    <table>
        <tr style="text-align:center;">
            <td>A Shape</td>
            <td>Arc</td>
            <td>4 Corners</td>
            <td>1 Side Slope</td>
        </tr>
    <tr>
        <td><img src="images/ashape.jpg"></td>
        <td><img src="images/arc.jpeg"></td>
        <td><img src="images/4c.jpg"></td>
        <td><img src="images/1slope.jpg"></td>
    </tr>
    <tr><td><br><br></td> </tr>
    <tr style="text-align:center;">
            <td>6 Corners</td>
            <td>Mangalore Tiles 1</td>
            <td>Mangalore Tiles 2</td>
            <td>Other</td>
        </tr>
    <tr>
    <td><img src="images/6c.jpeg"></td>
    <td><img src="images/mang1.jpeg"></td>
    <td><img src="images/mang2.jpg"></td>
    <td><img src="images/c2.jpg"></td>
    </tr>
  </table>
  </div>
</body>
</html>