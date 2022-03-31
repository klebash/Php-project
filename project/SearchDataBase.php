<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>addmin</title>
<link rel="stylesheet" href="style2.css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<html>
<body>
<?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['musictype'])) {
        $selected = $_POST['musictype'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    }
?>

<h1>  Welcome to search Page<h1><HR>
<h2>Please insert the following Info's</h2>

<form action="create_show_search.php" method="post">
    <select name="musictype">
        <option value="" disabled selected>Choose option</option>
        <option value="Rock">Rock</option>
        <option value="Metal">Metal</option>
        <option value="POP">POP</option>
        <option value="RAP">RAP</option>
        <option value="CLASSICAL">CLASSICAL</option>
    </select>

    <input type="submit" name="Search" vlaue="Choose options">
</form>

</body>
</html>
