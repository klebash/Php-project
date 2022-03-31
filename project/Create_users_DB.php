<!DOCTYPE html>
<html>
<body>
<?php
$servername =  "localhost";
$username="root";
$password="";



$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE DATABASE users";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
	
	?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    user_type bit(1) ,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
   )";

if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

<?php

require_once 'config.php';
$password1 = password_hash('ics20032',PASSWORD_DEFAULT);
$password2 = password_hash('ics200322',PASSWORD_DEFAULT);

$sql = "INSERT INTO users (
  username,password,user_type
  )
   VALUES 
   ('ics20032','$password1','1'),
   ('ics200322','$password2','1')";

if ($link->query($sql) === TRUE) {
  echo "admins created successfully";
} else {
  echo "Error creating Admins: " . $link->error;
}

$link->close();
?>
</body>
</html>