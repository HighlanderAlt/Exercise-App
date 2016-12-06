<?php
require "requires/config.php";
require "logInCheck.php";

    $stmt = $conn->prepare("INSERT INTO `routine` (routine_name, user_id)
    VALUES (:routine_name, :user_id)");
    $stmt->bindParam(':routine_name', $_SESSION['newRoutineName']);
    $stmt->bindParam(':user_id', $_SESSION['userID']);
    $stmt->execute();
