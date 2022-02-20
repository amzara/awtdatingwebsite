<?php

session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
?>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

var bla = "";
$(function() { //shorthand document.ready function
    $('#login_form').on('submit', function(e) { //use on if jQuery 1.7+
        e.preventDefault();  //prevent form from submitting
        var data = $("#login_form :input").serializeArray();
        console.log(data); //use the console for debugging, F12 in Chrome, not alerts
    });
});

console.log(bla);
var settings = {
  "url": "https://love-calculator.p.rapidapi.com/getPercentage?fname=John&sname=Alice",
  "method": "GET",
  "timeout": 0,
  "headers": {
    "x-rapidapi-key": "bb5b4fbbfcmshe9dfb7e1c2612d2p13a33ajsn6731067fec34"
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
</script>
</head>
<body>
<form id="formoid" action="studentFormInsert.php" title="" method="post">
  <div>
    <label class="title">First Name</label>
    <input type="text" id="name" name="name">
  </div>
  <div>
    <label class="title">Last Name</label>
    <input type="text" id="name2" name="name2">
  </div>
  <div>
    <input type="submit" id="submitButton" name="submitButton" value="Submit">
  </div>
</form>
<div id="result"></div>
</form>


<?php

// if($_SERVER['REQUEST_METHOD'] == "POST"){
// 	$user_name=$_POST['user_name'];


// $sql="SELECT user_name,age,sex,location FROM usersinfo WHERE user_name='$user_name'";
// $result = $con->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<br>|Username: ". $row["user_name"]. "| AGE: ". $row["age"].  "|Sex:" . $row["sex"] . "|Location:" . $row["location"] . "<br>";

//     }
// } 

// else {
//     echo "0 results";
// }

	
// }

?>


