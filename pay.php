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
<link rel="icon" href="/k17/img/k.jpg" sizes="16x16" type="image/png">
<body align="center">

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
$d=$_GET["d"];
session_start();
//echo "Payment completed";
$u=$_SESSION['user'];
$c=$_SESSION['sid'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "booking";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  $i=0;
  $sql="SELECT * FROM `show` WHERE sid=$c";
          $result = $conn->query($sql);
         while($row = $result->fetch_assoc()) {
        $sid=$row['sid'];
        $sdes=$row['sdes'];
        $theatre=$row['theatre'];
        $price=$row['price'];
        $tkt=$row['tkt'];
        $date=$row['date'];
        $movie=$row['movie'];
       $i++;
    }
     
    $sql="UPDATE `show` SET `tkt`=$d WHERE sid=$sid";
         $result = $conn->query($sql);

?>

   <h1> <p>Your Order has been confirmed</p></h1><br><br>
    <h2>Order Details</h2>
    <br><br>
    <?php echo "Name : $u<br>Combo Type: $theatre<br>Offer Applicable Till: $date<br>Combo Type: $sdes<br>Star Dish : $movie<br>";?>
<br><br><br>
    <button onclick="window.print();" type="button" class="btn btn-warning">Print Bill</button><br><br><br>
    <a href="index.php"><button type="button" class="btn btn-success">Click here to Order More </button></a>
</body>
</html>
