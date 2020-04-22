<?php

session_start();

include_once('dbconnect.php');

$logName = $_SESSION['name'];

$sql = "SELECT dpurl FROM accounts WHERE username='$logName'";

$query = $conn->query($sql);

$row = $query->fetch_array();

echo $row['dpurl'];

$conn->close();

?>