<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<body>
<p>Displaying all user information for users that has matching on.</p>
<?php

$sql = "SELECT user_name,age,sex,location FROM usersinfo WHERE matching=1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table border='1'>
    <tr>
    <th>Id</th>
    <th>UserId</th>
    <th>Username</th>
    <th>Date</th>
    <th>Matching</th>
    </tr>";


    while($row = $result->fetch_assoc()) {
        echo "<tr>";
		echo "<td>" .$row["user_name"]. "</td>";
		echo "<td>" .$row["age"]. "</td>";
		echo "<td>" .$row["sex "]. "</td>";
		echo "<td>" .$row["location"]. "</td>";
	
		echo "</tr></table>";
    }
} else {
    echo "0 results";
}


?>

<p>Enter the username that you want to match with:</p>
<form method="POST">
<input type="text" name="user_name">
<input type="submit">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$user_name=$_POST['user_name'];


$sql="SELECT user_name,age,sex,location FROM usersinfo WHERE user_name='$user_name'";
$result = $con->query($sql);

echo "<br>";
echo "Confirm information?";

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

}

?>















<a href="index.php">Click to Go back to Main Menu</a><br>



</body>
</html>




	
	