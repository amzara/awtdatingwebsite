<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);





$sql = "SELECT user_name, age, sex, location WHERE matching=1 FROM usersinfo";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
/*echo "id: " . $row["id"]. "User id: " . $row["user_id"]. "User name: " . $row["user_name"]. 
		"Password: " . $row["password"]. "Date: " . $row["date"]. "<br>" "Matching: " . $row["matching"]. 
		"<br>" "<br>"; 
		*/
		
		echo "user_name: " .$row['user_name']. "age:" .$row['age'] . "sex: ".$row['sex'] ."location :" . $row['location'].
		"<br>""<br">
		
		
		
	}
}
else{ echo "0 results";}

?>