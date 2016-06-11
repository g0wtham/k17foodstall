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
<body>
<link rel="icon" href="/k17/img/k.jpg" sizes="16x16" type="image/png">
<div class="container-fluid">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/k17/index.html">K17!! Food Stall</a>
    </div>

    <ul class="nav navbar-nav">
      <li><a href="/k17/index.html">Home</a></li>
      <li><a href="/k17/nonveg.html">Non-Veg Combo</a></li>
      <li><a href="/k17/veg.html">Veg Combo</a></li> 
      <li><a href="/k17/fastfood.html">Fast Food</a></li>
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
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {

     	//echo "<h1 align="center">";
     	echo  "<div style='text-align:center'><h2> <br> ". $row["name"]. " <br>" . $row["address"] . "<br>". $row["thens"] ."<br>". $row["city"] ."<br>". $row["email"] ."<br>". $row["phone"] ."<br></h2></div>";
     	//echo" </h1>";
        /* echo "<br> ". $row["name"].;
         echo" <br> " . $row["address"].;
         echo "<br> " . $row["thens"] .;
         echo "<br>". $row["city"] .;
         echo" <br> " . $row["email"].;
         echo "<br> " . $row["phone"] .;*/
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>