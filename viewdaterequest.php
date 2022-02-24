<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request match</title>
</head>

    

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
         echo "<div id='image'>aaa</div>";
        echo "Message: ".$datemessage."<br>";

    




    }
}

?>

<script type="text/javascript">
  /*commenting so that i dont reach 50 use limit
    var venue = "<?php Print($venue); ?>";
    var final_result;
    var settings = {
                    "url": `https://google-image-search1.p.rapidapi.com/?keyword=${venue}&max=1`,
                    "method": "GET",
                    "timeout": 0,
                    "async":false,
                    
                    "headers": {
                    "x-rapidapi-host": "google-image-search1.p.rapidapi.com",
                      "x-rapidapi-key": "39dc5092cfmsh6d681f0d9f7e41dp1efdeejsn5e2fc15ff323"
                    },
                  };
                  
                  $.ajax(settings).done(function (response) {
                    console.log(response);
                    final_result = response[0].image.url;
                    $("#image").prepend(`<img id="theImg" width="40%" height="40%" src="${final_result}" />`);
                   
                   
                  });

                //   console.log(final_result);
                */
  
</script>



    <body>
        <form method="POST" action="acceptdaterequest.php">
            <input type="submit" value="accept">
</form>
<form method="POST" action="rejectdaterequest.php">
            <input type="submit" value="reject">
</form>