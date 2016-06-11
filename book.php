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
session_start();
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
$c=$_GET["id"];
$_SESSION["sid"]=$c;

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
}




   $user=$_SESSION['user'];
   echo "&nbsp;Mr.".$user; ?>
  <a  href="logouts.php"><button type="button" class="btn btn-danger">Logout</button></a>
    
    
     <h3>Combo Available : <?php echo $tkt; ?></h3><br><br>
     <form action="bb.php" method="post">
        <input type="number" placeholder="Quantity" name="qq" id="qq"><br><br>
        <button type="submit" class="btn btn-success">Order</button>
     </form>




</body>
</html>