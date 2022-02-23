<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);
echo $result['user_name'];
$myname=$result['user_name'];

$sql="SELECT date,time,venue,datemessage FROM usersdate WHERE user_name='$myname'";
$result = $con->query($sql);

$resultt = $con->query($sql);
if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
        $date=$row['date'];
        $time=$row['time'];
        $venue=$row['venue'];
        $datemessage=$row['datemessage'];
        echo "<br>";
        
        echo "Date: ".$date."<br>";
        echo  "Time: ".$time."<br>";
        echo "Venue: ".$venue."<br>";
        echo "Message: ".$datemessage."<br>";

    


        


    }

}


?>

<html>
    <body>
        <form method="POST" action="acceptdaterequest.php">
            <input type="submit" value="accept">
</form>
<form method="POST" action="rejectdaterequest.php">
            <input type="submit" value="reject">
</form>