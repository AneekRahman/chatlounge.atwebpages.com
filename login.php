<?php

session_start();

include_once('dbconnect.php');

$logName = $_POST['logName'];
$logPass = $_POST['logPass'];
$checked = $_POST['checked'];

$sql = "SELECT username, password, dpurl FROM accounts WHERE username='$logName' AND password='$logPass'";

$query = $conn->query($sql);

$row = $query->fetch_array();

$dpurl = $row['dpurl'];

$row_count = $query->num_rows;


if($row_count == 1){

    $_SESSION['name'] = $logName;

    $_SESSION['dpurl'] = $dpurl;

    if($checked == 1){

        setcookie("username", $logName, time() + (86400 * 30), "/");
        setcookie("password", $logPass, time() + (86400 * 30), "/");
        setcookie("dpurl", $dpurl, time() + (86400 * 30), "/");

    }

    echo '1349';


}else{

    echo 'Incorrect username or password';

}

$conn->close();

?>