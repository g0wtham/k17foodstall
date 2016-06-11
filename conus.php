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
<body align="center">

<div class="container-fluid">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/k17/index.html">K17!! Food Stall</a>
    </div>

    <ul class="nav navbar-nav">
      <li><a href="/k17/index.html">Home</a></li>
      <li><a href="#">Non-Veg Combo</a></li>
      <li><a href="#">Veg Combo</a></li> 
      <li><a href="#">Fast Food</a></li>
      <li><a href="/k17/food.html">Food For Thought</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="/k17/admin.php"><span class="glyphicon glyphicon-send"></span> Admin</a></li>
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
<h1 align=center>Add Details</h1>
  <h3><p align=center>This might take few seconds</p></h3><hr>
	<br><br><br><br>
    <form align=center action="/k17/adminadd.php" method="post">
      <input type="text" placeholder="Food Id" name="email" id="email" required><br><br>
      <input type="text" placeholder="Combo Type" name="pass" id="pass" required><br><br>
      <input type="text" placeholder="Food Type" name="name" id="name"><br><br>
      <input type="number" placeholder="Price" name="city" id="city"><br><br>
      <input type="number" placeholder="Quantity" name="rt" id="rt"><br><br>
      <input type="text" placeholder="Offer Applicable to" name="age" id="age"><br><br>
      <input type="text" placeholder="Main Dish" name="pno" id="pno"><br><br>
      <button type="submit">Add</button>
    </form>	

    <br><br>
    </body>
    </html>