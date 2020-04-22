<?php

session_start();

include_once('dbconnect.php');

$logName = $_COOKIE['username'];
$logPass = $_COOKIE['password'];

$sql = "SELECT username, password, dpurl FROM accounts WHERE username='$logName' AND password='$logPass'";

$query = $conn->query($sql);

$row = $query->fetch_array();

$dpurl = $row['dpurl'];

$row_count = $query->num_rows;


if($row_count == 1){

    $_SESSION['name'] = $logName;

    $_SESSION['dpurl'] = $dpurl;

    echo '5928';


}else{

    echo 'Incorrect username or password';

}

$conn->close();

?>