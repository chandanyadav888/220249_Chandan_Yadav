<?php

include_once("db.php");

$sql = "DELETE FROM message WHERE Name = 'John'";

if ($conn->query($sql) === TRUE) {
    echo "Deleated Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>