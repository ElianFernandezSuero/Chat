<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbDataBase = 'chat2';

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbDataBase);

if ($conn-> connect_errno) {
    die("Hay un error");
}
?>