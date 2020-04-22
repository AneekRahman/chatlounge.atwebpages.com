<?php

require_once("dbconnect.php");

$sql = "SELECT username, dpurl FROM accounts";

$query = $conn->query($sql);

while($row = $query->fetch_assoc()){

    $dpurl = $row['dpurl'];

    $name = $row['username'];

    echo "<div class='bigName'><div class='nameCard'><div style='background-image: url($dpurl)'></div><p>$name</p></div></div>";

}

$conn->close();

?>