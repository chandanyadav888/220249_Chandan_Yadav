<?php

include_once("db.php");

$sql = "UPDATE message SET Email = 'wa@php.m' where Name = 'John' ";

if ($conn->query($sql) === TRUE) {
    echo "Updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>