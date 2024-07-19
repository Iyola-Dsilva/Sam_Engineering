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
   left:42%;
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
    margin-left:15%;
  }
</style>
</head>
<body> 
  <?php include 'nav.php' ?>
  <h1>RAILINGS</h1>
  
  <div class="roofs">
    <table >
        
    <tr style="text-align:center;">
            <td>Balcony</td>
            <td>Step</td>
            <td>Safety railing</td>
            
        </tr>
    <tr>
    <td><img src="images/r1.jpeg"></td>
    <td><img src="images/r2.jpeg"></td>
    <td><img src="images/r3.jpeg"></td>
    </tr>
    <tr style="text-align:center;">
            <td>Compound railing</td>
    </tr>
    <tr>
    <td><img src="images/r4.jpeg"></td>
    </tr>

  </table>
  </div>
</body>
</html>