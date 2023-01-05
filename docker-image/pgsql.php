<?php
	echo "php version: ". phpversion();

	$dbcon = pg_connect("host=pgsql dbname=db1 user=postgres password=highrisk");
	if($dbcon){
		echo "<br>Connected successfully";
	}else{
		echo "connection failed";
	}
?>
