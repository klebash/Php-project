<!DOCTYPE html>
<html>
    <head></head>
    <style>
        table, th, td {
    border: 1px solid black;
	background-color:#936E1A85  ;
}

body {
  background-color: darkgray;
}
</style>
<body>

<?php
require_once "config1.php";

$sql = "SELECT * FROM myforums";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    echo "<center><h1> HERE IS THE INSERTED DATA</h1></center>";
    echo "<center><table ><tr><th>ID</th><th>EMAIL</th><th>MUSIC TYPE</th><th>FAVORITE SONG</th><th>GENDER</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td>
            <td>" . $row["email"]. "</td>
            <td>" . $row["music_type"]. "</td>
            <td>" . $row["fav_song"]. "</td>
            <td>" . $row["gender"]. "</td>
        
        </tr>";
    }
    echo "</table></center>";
} else {
    echo "0 results";
}
$link->close();
?>

</body>
</html>
