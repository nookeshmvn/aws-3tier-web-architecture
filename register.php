<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];

    $sql = "INSERT INTO users (name, email, phone, event)
            VALUES (:name, :email, :phone, :event)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':event' => $event
    ]);

    echo "Registration Successful!";
}
?>