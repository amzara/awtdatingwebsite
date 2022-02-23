<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);
echo $result['user_name'];
$myname=$result['user_name'];

$sql="SELECT age,sex,location FROM usersinfo WHERE user_name='$myname'";
$result = $con->query($sql);

$resultt = $con->query($sql);
if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
        $age=$row['age'];
        $sex=$row['sex'];
        $location=$row['location'];
        
        echo $age;
        echo $sex;
        echo $location;
        


    }

}


?>
