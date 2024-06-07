
<?php
$hostname = "localhost";
$username = "root";
$password = "";  
$database = "hrgkanbn";   
$con=mysqli_connect($hostname,$username,$password,$database);  
if($con->connect_errno)
{
    echo 'database connection error';
}
 ?>


  

?> 
