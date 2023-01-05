<?php
	echo "php version: ".phpversion();

	$dbcon = mysqli_connect("mysql","root","highrisk");
	if (!$dbcon) {
		die("<br>Connection failed: " . mysqli_connect_error());
	}
	echo "<br>Connected successfully";
?>
