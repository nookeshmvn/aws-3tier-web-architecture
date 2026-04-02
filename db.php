<?php
$host = "webhostingdb.ci30qo8uk3ya.us-east-1.rds.amazonaws.com";
$dbname = "webhostingDB";
$username = "admin";
$password = "iammvn2026";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>