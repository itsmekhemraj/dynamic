<?php 

// connecting to the databse

$servername = "localhost";
$username = "root";
$password = "";

// create a connection 

$conn = mysqli_connect($servername, $username, $password);
$sql = "CREATE DATABASE google";
$result = mysqli_query($conn, $sql);

// die if connection was not success

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
else {
    echo "Connection was successful <br>";
}

?>