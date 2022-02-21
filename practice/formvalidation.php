<html>
<body>
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;text-align:center;color: white;">Signup</div>

			Username:<input id="text" type="text" name="user_name" required pattern="[A-Za-z0-9_]{1,12}"><br><br>
			Password:<input id="text" type="password" name="password" required><br><br>
			Email:<input id="email" type="email" name="email" required pattern="[^ @]*@[^ @]*"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
echo "Posted";
}



?>
</body>
            </html>

