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
	<a href="editprofile.php">Edit my profile information.</p>
	<a href="listallprofile.php">See all user that wants to match up.</a><br>
	<a href="selectmatch3.html">Test</a>
	
	--------------------------------------------------------<br><br>

	<?php 
	$user_data = check_login($con);
	$json = json_encode($user_data);
	$result = json_decode($json,true);
	if($result['matchrequest'] == 1){
		echo "you have match request from: " .$result['matchrequestfrom'];
	}else{
		echo "There is no match request right now<br>";
	}
	
	// if( $result['matchrequest'] == 0){
		
	// 	echo $result;
	// }
	//  ?>

	<?php
	
	//echo "My location is" . $user_data['location'];
	
	// if($user_data['matching']==0){
	// echo "There is no match request right now";	
	// }
	// if($user_data['matching']==1){
	// echo "You are currently looking for a match";
	// }
	// if($user_data['matching']==2){
	// echo "There is a match from user (requested user)";
	// }

?>	
</body>
</html>