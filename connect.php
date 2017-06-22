<?php

$user_name = "root";
$password = "";
$database = "hotelieur_lucban";
$database = new mysqli('localhost', $user_name, $password, $database) or die("Unable to connect.");

echo "Great work!";

?>