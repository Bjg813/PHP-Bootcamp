<!doctype html>
<html>
<head>

</head>

<body>
<?php
	$fullname = $_POST["firstname"] .
				" " .
				$_POST["lastname"];
	echo $fullname;
?>
</body>
</html>