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
      <li><a href="/k17/index.html">Home</a></li>
      <li><a href="/k17/nonveg.html">Non-Veg Combo</a></li>
      <li><a href="/k17/veg.html">Veg Combo</a></li> 
      <li><a href="/k17/fastfood.html">Fast Food</a></li>
      <li><a href="/k17/food.html">Food For Thought</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/k17/admin.php"><span class="glyphicon glyphicon-send"></span> Admin</a></li>
      <li><a href="/k17/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="active"><a href="/k17/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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

  $i=0;
  $sql="SELECT * FROM `show` WHERE 1";
          $result = $conn->query($sql);
         while($row = $result->fetch_assoc()) {
        $sid[$i]=$row['sid'];
        $sdes[$i]=$row['sdes'];
        $theatre[$i]=$row['theatre'];
        $price[$i]=$row['price'];
        $tkt[$i]=$row['tkt'];
        $date[$i]=$row['date'];
        $movie[$i]=$row['movie'];
       $i++;
    }




   $user=$_SESSION['user'];
   echo "Welcome back &nbsp;Hey.".$user; ?>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logouts.php"><button type="button" class="btn btn-danger">Logout</button></a>
    
    <br><br><br><br><br><br>

    
    	<?php $j=0; 
    	for(;$j<$i;$j++){
    		echo "<li>$sdes[$j]&nbsp;&nbsp;&nbsp;&nbsp;$theatre[$j]&nbsp;&nbsp;&nbsp;&nbsp;$price[$j]&nbsp;&nbsp;&nbsp;&nbsp;$date[$j]&nbsp;&nbsp;&nbsp;&nbsp;$movie[$j]</li>";
    	    if($tkt[$j]!=0) {
    	    	?><a href="book.php?id=<?php echo $sid[$j]; ?>"><button type="button" class="btn btn-warning">Book</button></a><?php
    	    }if($tkt[$j]==0)
    	    	{?><button type="button" class="btn btn-warning" disabled>Book</button>
    	    	<?php
    	       }
    	    }
    	?>
    

   <?php
}
else{
	?>
	<h2><p align=center>Please login to continue...</p></h2>
	<br><br><br><br>
    <form align=center action="login.php" method="post">
      <input type="text" placeholder="Name" name="name" id="name" required><br><br><br>
      <input type="email" placeholder="Email" name="email" id="email" required><br><br><br>
      <input type="password" placeholder="Password" name="pass" id="pass" required><br><br>
      <button type="submit" class="btn btn-success">Login</button>
    </form>	

    <br><br>
    <p align=center>New here .... &nbsp;&nbsp;<a href="register.php"><b>Click here to register</b></a></p>
<?php
}
?>
</body>
</html>