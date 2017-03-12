<!doctype html>
<html>
<head>
<meta charset="utf-8">

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "lab";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<title>phpMyAdmin Lab</title>
    
    <style type="text/css">
    

.list_wrapper {
	width:960px;
	height:auto;
	margin:20px auto;
}

.list_entry {
	width:99%;
	height:100px;
	border:solid 1px #aaa;
	margin:20px auto;
	font-size:24px;
	float:left;
}

.list_entry_half {
	width:40%;
	margin:0 5%;
	height:70px;
	padding-top:30px;
	float:left;
}
    </style>

</head>

<body>
        
        
        <div class="list_wrapper">
            <h1>Users</h1>
			<?php
            
            $query = "select * from users";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='list_entry'><div class='list_entry_half'>" . $row["username"] . "</div><div class='list_entry_half'>" . $row["password"] . "</div></div>";
                }
            }
            
            $conn->close();
            
            ?>
    </div>

</body>
</html>
