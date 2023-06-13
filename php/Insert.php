<?php

include_once("db.php");

$sql = "INSERT INTO message (Name, Email, Message)
VALUES ('John', 'john@example.com', 'this is a message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>