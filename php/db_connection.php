<?php
$host = "localhost"; 
$dbname = "swastik";
$username = "root"; 
$password = ""; 

try {
    $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected successfully to the database '{$dbname}'!";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>