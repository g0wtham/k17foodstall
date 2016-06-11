<!DOCTYPE html>
<html lang="en">
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
$q=$_POST["qq"];
//echo $q;
session_start();
$c=$_SESSION["sid"];
if(isset($_SESSION['user'])){

    

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

    if($q>$tkt){
      echo "<div style='text-align:center'><h2>Avaliable tickets is less than you requested...</h2></div>";
      ?><br><br><h2><a href="index.php">click here to view tkts in others..</a></h2><?php
    }
    else{
    	$d=$tkt-$q;
        echo "<div style='text-align:center'><h1>Money you have to pay </h1></div>".$q*$price;
        $_SESSION["pay"]=$q*$price;
        ?><br><br><h2><a href="pay.php?d=<?php echo $d;?>">Click here to go to payment</h2></a><br><br>
       <h2><a href="bk.php?d=<?php echo $d;?>">Order more</a> </h2>
        <?php

    //$sql="UPDATE `show` SET `tkt`=$d WHERE sid=$sid";
      //    $result = $conn->query($sql);
    }
   
   }

?>
</body>
</html>