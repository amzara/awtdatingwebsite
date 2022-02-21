<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

	
?>

<!DOCTYPE html>
<html>
<head>
<title>AWT DATING WEBSITE</title>
<link rel="stylesheet" href="index.css">
</head>
<body>
	
	
	
	<a href="logout.php">Logout</a>
	<div class="myHeader">
	<h1>AWT DATING WEBSITE!</h1>
	<h1>Where you can finally find a friend or girlfriend in EQIU!</h1>
</div>
	

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
	
	Current matching status : <?php echo $user_data['matching']; ?>
	
	<br><br>
	<p>What do you want to do?</p>
	<a href="editprofile.php">Edit my profile information and set matching status.</p>
	<a href="listallprofile.php">See all user that wants to match up.</a><br>
	<br>
	
	--------------------------------------------------------<br><br>

	<?php 
	$user_data = check_login($con);
	$json = json_encode($user_data);
	$result = json_decode($json,true);
	$matchrequestfrom=$result['matchrequestfrom'];
	$currentmatch=$result['currentmatch'];
	if($result['matchrequest'] == 1){
		echo "You currently have a match request from user: " .$result['matchrequestfrom'];
		echo "<br>";
		echo "Accept?"; 
		echo "<form method='post' action='multiquery.php'>
		<input type='hidden' value ='$matchrequestfrom'  name='matchrequestfrom'>
		<input value='Match!' type='submit'>
		</form>";
		echo "<form method='post' action='declinematch.php'>
		<input value='Reject' type='submit'>";
	}
	
		

		
	else if($result['matching']==2){
		echo "You are currently matched with user " .$result['currentmatch']."<br>";
		echo "Click here to start dating<br>";
		
		echo "Click here to unmatch";
		echo "<form method='post' action='unmatch.php'>

		
		<input value='Unmatch!' type='submit'>
		</form>"; 


	}else{
		echo "You do not have a match request right now.<br>";
	}
	

	
	
	

?>	

-----------------------------------<br>
<a href="selectmatch3.html">LOVE API CALCULATOR</a><br>
<a href="googletranslate.html">Google Translate API</a><br>

</body>
</html>