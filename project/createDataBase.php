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


$sql = "CREATE DATABASE Forum_Data";
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
$dbname = "forum_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE myforums (
id VARCHAR(100)  NOT NULL PRIMARY KEY,
email VARCHAR(100) NOT NULL,
music_type VARCHAR(50) NOT NULL,
fav_song VARCHAR(100),
gender VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table myforums created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
</body>
</html>