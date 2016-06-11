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
  echo "success";
}
// username and password sent from form 
$myusername=$_POST['email']; 
$mypassword=$_POST['pass']; 
//$myname=$_POST['name'];


// To protect MySQL injection (more detail about MySQL injection)
/*$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword); 
*/
//echo $myusername.$mypassword;

        //getting cartid
          $sql="SELECT * FROM admin WHERE email='$myusername' and pass='$mypassword'";
          $result = $conn->query($sql);
           if($result){
          if ($result->num_rows > 0) { 
           $count=$result->num_rows;
           // If result matched $myusername and $mypassword, table row must be 1 row
          if($count==1){
          //echo "success setting session variable";
          //session_start();
          // Register $myusername, $mypassword and redirect to file "login_success.php"
          //$_POST['user']=$myusername;
          //$_SESSION['user']=$myname; 
          	
          <a href="/k17/index.html">Proceed</a>
         
          }
          else {
         echo "Wrong Username or Password";
           }
       }
   }
   else {
         echo "Wrong Username or Password";
     }


?>     
