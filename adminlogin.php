<?php
include('adminsession.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="adminstyle.css" rel="stylesheet" type="text/css">
</head>
<link rel="icon" href="/k17/img/k.jpg" sizes="16x16" type="image/png">
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="adminlogout.php">Log Out</a></b>
</div>
</body>
</html>