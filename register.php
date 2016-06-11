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
<body>

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
      <li class="active"><a href="/k17/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
	<h1 align=center>Register</h1>
  <h3><p align=center>This might take few seconds</p></h3>
	<br><br><br><br>
    <form align=center action="reg.php" method="post">
      <input type="email" placeholder="Email" name="email" id="email" required><br><br><br>
      <input type="password" placeholder="Password" name="pass" id="pass" required><br><br><br>
      <input type="text" placeholder="Name" name="name" id="name"><br><br><br>
      <input type="text" placeholder="City" name="city" id="city"><br><br><br>
      <input type="number" placeholder="Age" name="age" id="age"><br><br><br>
      <input type="number" placeholder="Mobile no." name="pno" id="pno"><br><br><br>
      <button type="submit" class="btn btn-success">SignUp</button><br><br>
    </form>	

    <br><br>
    <p align=center>Old user ? &nbsp;&nbsp;<a href="index.php"><b>Click here to login</b></a></p>
</body>
	</html>