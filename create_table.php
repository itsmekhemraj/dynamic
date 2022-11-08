<?php 

// connecting to the databse

$servername = "localhost";
$username = "root";
$password = "";
$database = "google";

// create a connection 

$conn = mysqli_connect($servername, $username, $password, $database);

// die if connection was not success

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
else {
    echo "Connection was successful from table<br>";
}

// create table in the database

$sql = "CREATE TABLE `google`.`employee` (`id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`))";

$result = mysqli_query($conn, $sql);

if($result) {
    echo "Table was created successfully";
}
else {
    echo "Sorry tabel was not created.";
}

?>

