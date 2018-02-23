<?php
    $db_host = '45.113.122.73'; // Server Name
    $db_user = 'mybcbqhk_prod'; // Username
    $db_pass = 'Password@01'; // Password
    $db_name = 'mybcbqhk_magodu'; // Database Name

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (!$conn) {
		die('Failed to connect to MySQL: ' . mysqli_connect_error());
	}

	$sql = 'SELECT *
			FROM Donations';

	$query = mysqli_query($conn, $sql);

	if (!$query) {
		die('SQL Error: ' . mysqli_error($conn));
	}
?>