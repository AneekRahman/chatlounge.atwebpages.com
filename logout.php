<?php

setcookie("username", "", time() - 3600, "/");
setcookie("password", "", time() - 3600, "/");

session_start();

session_unset();
session_destroy();

echo 'reload';

?>