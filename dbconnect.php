<?php

$conn = new mysqli('fdb18.awardspace.net', '2577875_accounts', 'passHere', '2577875_accounts');

if($conn->connect_error){

    die("Connection problem, try later");

}

?>