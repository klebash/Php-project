<?php
require_once 'config1.php';

if(isset($_POST['save']))
{
    $ID = $_POST['ID'];
    $email = $_POST['email'];
    $musictype1  = $_POST['musictype'];
    $favsong = $_POST['favoritesong'];
    $gender  = $_POST['gender'];

    $sql = "INSERT INTO myforums (id,email,music_type,fav_song,gender)
	 VALUES ('$ID','$email','$musictype1','$favsong','$gender')";

if (mysqli_query($link, $sql)) {
    echo "New record created successfully !";
 } else {
    echo "Error: " . $sql . "
" . mysqli_error($link);
 }
 mysqli_close($link);
}


?>