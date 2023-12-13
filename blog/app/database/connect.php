<?php

$host = 'localhost';
$user = 'wbip';
$pass = '56hM1ami34!$';
$db_name = 'blog';

$conn = new mysqli($host, $user, $pass, $db_name);

if (!$conn->connect_error) 
    die('Database connection error: ' . $conn->connect_error);
else {
    echo "Db connection successful";
}

