<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>FORUM</title>
<link rel="stylesheet" type="text/css" href="style1.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">     </head>

</head>
<body>
<?php

	$IDErr = $emailErr = $genderErr = $musictypeErr= "";
	$ID = $email = $gender = $Favoritesong = $musictype = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ID"])) {
    $IDErr = "ID is required";
  } else {
    $ID = test_input($_POST["ID"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$ID)) {
      $IDErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["Favoritesong"])) {
    $Favoritesong = "";
  } else {
    $Favoritesong = test_input($_POST["Favoritesong"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["musictype"])) {
    $musictypeErr = "Gender is required";
  } else {
    $musictype = test_input($_POST["musictype"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
?>

        <h1>Please Enter The Following Information's</h1>

        <form class="container" method = "post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
         <div class="itema">
            <p ><label>University ID : </label><input type="text" name="ID"><span class="error">* <?php echo $IDErr;?></span>
			<br><br>
			</p>
		 <p ><label>EMAIL : </label><input type="email" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
          </p>
          <p><label>MUSIC TYPE </label>			
		  <span class="error">* <?php echo $musictypeErr;?></span> : </label>	<br>
		
            <input type="radio"id="Rock" name="musictype" value="Rock">
            <label for="Rock">Rock</label><br>
            <input type="radio"id="Metal" name="musictype" value="Metal">
            <label for="Metal">Metal</label><br>
            <input type="radio"id="POP" name="musictype" value="POP">
            <label for="POP">POP</label><br>
            <input type="radio"id="RAP" name="musictype" value="RAP">
            <label for="RAP">RAP</label><br>
            <input type="radio"id="CLASSICAL" name="musictype" value="CLASSICAL">
            <label for="CLASSICAL">CLASSICAL</label><br>
          </p>
          <p>
              <label>Favorite Song's Tile :</label>
              <input type="text" name="favoritesong" >
          </p>
          <p><label>GENDER 
		  <span class="error">* <?php echo $genderErr;?></span>  : </label>
            <input type="radio"id="Man" name="gender" value="Man">
            <label for="Man">Man</label>
            <input type="radio"id="Woman" name="gender" value="Woman">
            <label for="Woman">Woman</label>
            <input type="radio"id="Other" name="gender" value="Other">
            <label for="Other">Other</label>
          </p>

          <input type="submit" name = "save" value="sumbit">
        </div>

        <div class="itemb">
            <img src="Youth_Speak_Forum_Logo.png">
        </div>
        </form>

        <?php
require_once 'config1.php';

if(isset($_POST['save']))
{
  if(!(empty( $_POST['ID'] )|| empty( $_POST['email']) || empty( $_POST['musictype']) || empty( $_POST['gender']))){
    $ID = $_POST['ID'];
    $email = $_POST['email'];
    $musictype1  = $_POST['musictype'];
    $favsong = $_POST['favoritesong'];
    $gender  = $_POST['gender'];  
    $sql = "INSERT INTO myforums (id,email,music_type,fav_song,gender)
	  VALUES ('$ID','$email','$musictype1','$favsong','$gender')";
  

    if (mysqli_query($link, $sql)) {
    header("location: success.php");
     } else {
     echo "New record has not created successfully !";
     echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($link);
    }
     mysqli_close($link);
}
}


?>

</body>
</html>