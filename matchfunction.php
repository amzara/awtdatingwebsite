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

<<<<<<< HEAD
    echo "<a href='index.php'>Main Menu</a>";
=======
    echo "success";
>>>>>>> 6c443efa88151c121f8c96557eac51b1cd286235




?>