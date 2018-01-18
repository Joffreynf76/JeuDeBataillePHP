<?php
session_start();
include_once ("./functions/functions.php");
$game = generateCards(52);
echo "<pre>";
print_r($game);
echo "</pre>";




