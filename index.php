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
	Current matching status : <?php echo $user_data['matching']; ?>
	<br><br>
	<p>What do you want to do?</p>
	<a href="editprofile.php">Set my profile to match up</p>
	<a href="list.php">See all user that wants to match up.</a><br>
	
	--------------------------------------------------------<br><br>
	<?php
	
	if($user_data['matching']==0){
	echo "There is no match request right now";	
	}
	if($user_data['matching']==1){
	echo "You are currently looking for a match";
	}
	if($user_data['matching']==2){
	echo "There is a match from user (requested user)";
	}

?>	
</body>
</html>