<!doctype html>
<html>
<head>

</head>

<body>
	<form action="adduser.php" method="post">
		<input type="text" name="username">
		<input type="text" name="password">

		<input type="submit" value="Submit">
	</form>

	<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$database = "lab";

		$connection = mysqli_connect($servername, $username, $password, $database);

		$query = "select * from users";
		$result = mysqli_query($connection, $query); 

		
	

		while ($row = mysqli_fetch_assoc($result)) {
			echo "Username: " . $row["username"];
			echo "<br>";
			echo "<br>";
			echo "Password: " . $row["password"];
			echo "<br>";
			echo "<br>";
		}
	?> 

</body>
</html>