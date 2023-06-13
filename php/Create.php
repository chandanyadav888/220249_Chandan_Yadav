<?php

include_once("db.php");

$sql = "Create table message 
	(Name varchar(30), 
	Email varchar(30), 
	Message varchar(500)
	)";

if ($conn->query($sql) === TRUE) {
    echo "New table created";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>