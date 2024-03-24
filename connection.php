<?php
$db = new mysqli('localhost', 'root', '', "laboratory");

if ($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}
?>