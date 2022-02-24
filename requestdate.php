<?php

session_start();
include("connection.php");
include("functions.php");
$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);
$me=$result['user_name'];
$target=$result['currentmatch'];

?>

<html>
<body>

<form method="POST">
Date: <input type="date" required name="date" min="2022-01-01" max="2023-01-01"><br>
Time: <input type="time" required name="time"><br>
Venue:<input type="text" required name="venue"><br>
Drop a Message Here:<br><input type="text" required name="datemessage"><br>
<input type="submit">
</form>

<br><br><a href="googletranslate.html" target="_blank">Language barrier getting in the way of love? Use our Google Translate API to help you convey your love!</a>


<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
if(isset($_POST['date'])||isset($_POST['time'])||isset($_POST['venue'])||isset($_POST['datemessage'])){

$date=($_POST['date']);
$time=($_POST['time']);
$venue=($_POST['venue']);
$datemessage=($_POST['datemessage']);

/*
$date=isset($_POST['date']);
$time=isset($_POST['time']);
$venue=isset($_POST['venue']);
$datemessage=isset($_POST['datemessage']);
*/




$query = "UPDATE users SET daterequest=1,daterequestfrom='$me' WHERE user_name='$target'";
mysqli_query($con, $query);
$query2= "UPDATE usersdate SET date='$date',time='$time',venue='$venue',datemessage='$datemessage' WHERE user_name='$target'";
mysqli_query($con, $query2);


echo "<a href='index.php'>Date request sent. Click here to return to main menu.</a>";

}
}
?>