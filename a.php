<?php
error_reporting(0);
$servername ="localhost:3306";
$username ="root";
$password ="";
$database_name ="try";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if($conn) 
{
    // echo "Connection ok";

}
else{
    echo "connection failed";
}
?>