<?php

include_once("db.php");

$sql = "SELECT Name, Email, Message from message";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["Name"]. " - Email: ". $row["Email"]. " " .  " -Message:" . $row["Message"] . "<br>";
    }
} else {
    echo "no results";
}

$conn->close();
?>