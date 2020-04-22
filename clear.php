<?php

session_start();

$logName = $_SESSION['name'];

$handler = fopen("chats/common_room.txt", "w");

$post = "<span class='clear'><b>".$logName."</b> cleared the chat</span>";

fwrite($handler, $post);

fclose($handler);

echo "reload";

?>