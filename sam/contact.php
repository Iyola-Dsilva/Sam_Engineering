<?php $page="contact"; ?>
<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sam Engineering</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<style>


h1{
    font-size:30px;
    color:rgb(22, 22, 66);
    margin-left: 20%;
    padding-bottom: 20px;
}

.cform{
    position: absolute;
    top:20%;
    left:31%;
    border: 3px solid rgb(25, 32, 73);
    padding: 40px;
    border-radius: 5%;
}
 

.info{
    display: block;
    padding: 10px;
    text-align: center;
}

button{
    background-color:white;
    color:rgb(16, 16, 61);
    border: 2px solid rgb(16, 16, 61);
    border-radius: 10px;
    padding: 10px;
    height:40px;
    width:100px;
}

button:hover{
   
    background-color: rgb(16, 16, 61);
    color:white;
}
</style>

</head>
<body>
  <?php include('nav.php'); ?>
  <div class="cform"><h1>Request A Quote</h1>
  <form  method="POST" action="#">
    <div class="info" >
    <label>Name:</label>
    <input type="text" name="uname" required></div>
    <div class="info" >
    <label>Phone number:</label>
    <input type="text" name="phno" pattern="[0-9]{10}" required></div>
    <div class="info" >
    <label >Email id:</label>
    <input type="email" name="uemail"></div>
    <div class="info" >
    <label >Service :</label> 
    <select name="serv">
        <option >Roofing</option>
        <option >Gates</option>
        <option >Mezannine Floor</option>
        <option >Railing</option>
        <option >Fencing</option>
        <option >Sky light</option>
        <option >Other</option>
    </select></div>
    <div class="info" >
    <label>Description:</label>
    <textarea rows="6" cols="40" name="desc" required></textarea></div>

      <br>
      <div class="info">
	  <button type="submit"  name="submit" value="submit"><b>Submit</b></button>
      </div>
      </div>
  </form>

	
	<?php					 						 
if(isset($_POST['submit']))
{
	
		$name=$_POST['uname'];
		$ph=$_POST['phno'];
    $email=$_POST['uemail'];
		$service=$_POST['serv'];
    $des=$_POST['desc'];
	$query ="INSERT INTO `requests`(`name`, `phone`,`email`,`service`,`description`) VALUES ('".$name."','".$ph."','".$email."','".$service."','".$des."')";
						   
	mysqli_query($con, $query);
	echo "<script>
			alert('Saved Successfully. Do register to get a call from us!!');
		</script>";
	echo "<script> location.href=''; </script>";
}
	?>

</body>
</html>