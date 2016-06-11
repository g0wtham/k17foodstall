<!DOCTYPE html>
<html lang="en">
<style>
.carousel-inner > .item > img {
    margin: 0 auto;
}
</style>
<head>
  <title>K17 Food Stall</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/k17/index.html">K17!! Food Stall</a>
    </div>

    <ul class="nav navbar-nav">
      <li class="active"><a href="/k17/index.html">Home</a></li>
      <li><a href="#">Non-Veg Combo</a></li>
      <li><a href="#">Veg Combo</a></li> 
      <li><a href="#">Fast Food</a></li>
      <li><a href="/k17/food.html">Food For Thought</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/k17/admin.php"><span class="glyphicon glyphicon-send"></span> Admin</a></li>
      <li><a href="/k17/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/k17/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>
&nbsp;&nbsp;<img src="/k17/img/ceg.png" alt="CEG Logo" height="100" width="100" align="left"><img src="/k17/img/k17.png" alt="CTF Logo" height="100" width="250" align="right">
<h1><p align="center" >Welcome to K17!! Food Stall</p></h1>
<br>
<br><hr>
<br><br>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "booking");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_POST['fname']);
$last_name = mysqli_real_escape_string($link, $_POST['lname']);
$email_address = mysqli_real_escape_string($link, $_POST['email']);
$va = mysqli_real_escape_string($link, $_POST['vai']); 
$vaa = mysqli_real_escape_string($link, $_POST['vaii']); 
$vaaa= mysqli_real_escape_string($link, $_POST['vaiii']); 
$vaaaa = mysqli_real_escape_string($link, $_POST['vaiiii']); 
// attempt insert query execution
$sql = "INSERT INTO `show`(`sid`, `sdes`, `theatre`, `price`, `tkt`, `date`, `movie`) VALUES ('$first_name', '$last_name', '$email_address','$va','$vaa','$vaaa','$vaaaa')";
if(mysqli_query($link, $sql)){
    echo "<h1><div style='text-align:center'>Records added successfully.</h1></div>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>	
<ul class="pager">
    <li><a href="/k17/adminfun.html">Previous</a></li>
    
  </ul>
  </body>
  </html>