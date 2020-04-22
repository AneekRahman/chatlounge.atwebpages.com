<?php

session_start();

$logName = $_SESSION['name'];

if(isset($_SESSION['dpurl'])){

    $dpurl = $_SESSION['dpurl'];

}else{

    $dpurl = "";

}



$msg = $_POST["msg"];


$dir = "chats/";

$handler = fopen($dir."common_room.txt", "a");

$post = "<div class='bWrap'><div class='wrapper'><div style='background-image: url(".$dpurl.")'></div><b>".$logName.":</b></div>".$msg."</div>";

fwrite($handler, $post);

fclose($handler);

echo "reload";

?>