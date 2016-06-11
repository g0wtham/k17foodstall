<?php
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
else
{
	echo "pkau";
}

/* $email=$_POST['email']; 
$pass=$_POST['pass'];
$name=$_POST['name'];
$pno=$_POST['pno'];
$city=$_POST['city'];
$age=$_POST['age'];
$xxx=$_POST['rt'];
    $query="INSERT INTO `show`(`sid`, `sdes`, `theatre`, `price`, `tkt`, `date`, `movie`) VALUES ('$email','$pass',$pno,'$city','$name',$age,$xxx)"; 
    $result=mysql_query($query);

   $result = $conn->query($sql);
          if(!$result){
            echo "Failed to update... Retry";
            ?>
            <a href="#">Click here</a>
            <?php
          }
          else
          {
     			echo "success";
      }
?>     */
?>
