<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<body>
<p>Displaying all user information for users that has matched = 1</p>
<?php

$sql = "SELECT user_name, age,sex,location FROM usersinfo WHERE matching=1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>|Username: ". $row["user_name"]. "| AGE: ". $row["age"].  "|Sex:" . $row["sex"] . "<br>";
    }
} else {
    echo "0 results";
}


?>

<p>What do you want to do?</p><br>
<a href="index.php">Go back to Main Menu</a><br>
<a href="selectmatch.php">Go to matching page to match with one of the users</a><br>


</body>
</html>




	
	