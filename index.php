<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
	Password : <?php echo $user_data['password']; ?>
	<br><br>
	<p>What do you want to do?</p>
	<a href="editprofile.php">Set my profile to match up</p>
	<a href="list.php">See all user that wants to match up.</p>
	
	
</body>
</html>