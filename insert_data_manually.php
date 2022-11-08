<?php 

// connecting to the databse

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbkrs";
$name = "This is KRS";
$email = "email123@gmail.com";

// create a connection 

$conn = mysqli_connect($servername, $username, $password, $database);

// die if connection was not success

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
else {
    echo "Connection was successful from insert<br>";
}


$ins = "INSERT INTO `users` (`id`, `username`, `email`) VALUES (NULL, '$name', '$email')";

mysqli_query($conn, $ins);

?>







<!-- INSERT INTO `users` (`id`, `username`, `email`) VALUES (NULL, 'khemraj shrestha', 'khem322@gmail.com'); -->