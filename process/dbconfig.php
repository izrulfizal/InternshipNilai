<?php
	$conn = new mysqli('localhost', 'root', '', 'scis');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
    // else {
    //     echo "Success";
    // }
	
?>