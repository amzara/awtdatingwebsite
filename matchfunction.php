<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);


    $requestfrom = $result['user_name'];
    $user_name=$_POST['matchusername'];

    $sql = "UPDATE users SET matchrequest=1,matchrequestfrom='$requestfrom'  WHERE user_name='$user_name'";
    $result = $con->query($sql);

    echo "success";

// $sql = "UPDATE usersinfo SET lastname='Doe' WHERE  username=";


?>