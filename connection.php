<?php
    $db_username = "gbennett_user";
    $db_password = "KZTi5tA5=!8[";
    try {
        $conn = new PDO('mysql:host=localhost;dbname=gbennett_life', $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        session_start();
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>