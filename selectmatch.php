<?php

session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
?>
<html>
<body>

<form method="POST">
<input type="text" name="user_name">
<input type="submit">
</form>


<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$user_name=$_POST['user_name'];


$sql="SELECT user_name,age,sex,location FROM usersinfo WHERE user_name='$user_name'";
$result = $con->query($sql);



}

?>


</html>