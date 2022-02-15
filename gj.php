<?php
	$host = "172.18.0.2"
	$username = "root";
	$password = "";
	$db = "trucorp";

	$link = mysqli_connect("$host","$username","$password","$db");
	if(!$link) {
		echo "connect error" . PHP_EOL;
	}
	echo "Sucess: connected\n" . PHP_EOL;
	$query = "SELECT count(name) as jumlah FROM users";
	$result = $link->query($query);
	
	echo $result;
?>
