<?php

$servername = "localhost"; $username = "root";
$password = "";  $dbname = "login_sample_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
} 

$sql = "SELECT id, user_id, user_name, password, date, WHERE matching=1 FROM users";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "User id: " . $row["user_id"]. "User name: " . $row["user_name"]. 
		"Password: " . $row["password"]. "Date: " . $row["date"]. "<br>" "Matching: " . $row["matching"]. 
		"<br>" "<br>"; 
	}
}
else
{ echo "0 results";}
$conn->close();
?>