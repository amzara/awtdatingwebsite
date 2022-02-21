<?php

session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
?>
<html>
<body>
<p>Enter a username</p>
<form method="POST">
<input type="text" name="user_name">
<input type="submit">
</form>


<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$user_name=$_POST['user_name'];


$sql="SELECT user_name,age,sex,location FROM usersinfo WHERE user_name='$user_name'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>|Username: ". $row["user_name"]. "| AGE: ". $row["age"].  "|Sex:" . $row["sex"] . "|Location:" . $row["location"] ."<br>";
		$matchusername=$row["user_name"];
        echo "<form method='post' action='matchfunction.php'>
<input type='hidden' value ='$matchusername'  name='matchusername'>
<input value='match' type='submit'>
</form>";
		
    }
} else {
    echo "0 results";
}

echo "<br><br>";
echo "Send a match request with user " . $matchusername. "?";
}

?>


</html>