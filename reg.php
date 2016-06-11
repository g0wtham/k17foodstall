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

// username and password sent from form 
$email=$_POST['email']; 
$pass=$_POST['pass'];
$name=$_POST['name'];
$pno=$_POST['pno'];
$city=$_POST['city'];
$age=$_POST['age'];


//echo $myusername.$mypassword;

        //getting cartid
          $sql="INSERT INTO `user`(`email`, `pass`, `pno`, `city`, `name`, `age`) VALUES ('$email','$pass',$pno,'$city','$name',$age)";
          $result = $conn->query($sql);
          if(!$result){
            echo "Failed to update... Retry";
            ?>
            <a href="register.php">Click here</a>
            <?php
          }
          else
          {
     header("location:index.php");
      }
?>     
