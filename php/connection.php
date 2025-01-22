<?php
$servername = "localhost:3312";
$username = "root";
$password = ""; 
$db_name = "blogwebsite";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if($conn->connect_error){
    die("Connection Failed! " . $conn->connect_error);
}
    echo "Successfull Connection!";
?>