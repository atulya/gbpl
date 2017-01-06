<?php
    $db_username = "root";
    $db_password = "";
    try {
        $conn = new PDO('mysql:host=localhost;dbname=gbennett_life', $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        session_start();
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>