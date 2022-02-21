<?php

session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

 /*
 purpose of practice=draw data from current logged in user_data(from this page i need to draw current user and matcherequestfrom)
 +edit my and other person's info (matchrequest,currentmatched)
 refer to registration on how to enter
 */
 
 //turn this page into a confirm match.php
 //make a button that appears if someone matches , and send to the confirm match page. 
 ?>

 <?php
 
 $user_data = check_login($con);
 $json = json_encode($user_data);
 $result = json_decode($json,true);

 echo $result['currentmatch'];

 $matchrequestfrom=$result['matchrequestfrom'];
 echo "Accept Request from user ?";
 echo "<br><br>";
 echo "<form method='post' action='multiquery.php'>
 <input type='hidden' value ='$matchrequestfrom'  name='matchrequestfrom'>
 <input value='Match!' type='submit'>
 </form>";
 


 

/*

how did bob alter another person's match
$sql="SELECT user_name,age,sex,location FROM usersinfo WHERE user_name='$user_name'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>|Username: ". $row["user_name"]. "| AGE: ". $row["age"].  "|Sex:" . $row["sex"] . "|Location:" . $row["location"] ."<br>";
		$matchusername=$row["user_name"];
        echo "<form method='post' action='matchfunction.php'>
<input type='hidden' value ='$matchusername'  name='matchusername'>
<input value='Match!' type='submit'>
</form>";

//user_data;
//form that sends a username to somewhere else

PART 1)send matchrequestfrom info to another page with a click
PART 3)echo the matchrequestfrom and self user_name;
part 2)alter data for self and WHERE=matchrequest(set matching parameters)


query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
			mysqli_query($con, $query);
			
			$query2= "insert into usersinfo (user_id,user_name) values ('$user_id','$user_name')";
			mysqli_query($con, $query2);
			

*/


?>