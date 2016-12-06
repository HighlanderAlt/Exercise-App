<?php
require "requires/config.php";
date_default_timezone_set("Australia/Melbourne");
$_SESSION['routine_time'] = date("H:i:s");
$_SESSION['routine_date'] = date("Y-m-d");

$stmt = $conn->prepare("INSERT INTO `user_routine` (user_id, routine_id, routine_date, routine_time)
    VALUES (:user_id, :routine_id, :routine_date, :routine_time )");
$stmt->bindParam(':user_id', $_SESSION['userID']);
$stmt->bindParam(':routine_id', $_SESSION['postRoutineVal']);
$stmt->bindParam(':routine_date', $_SESSION['routine_date']);
$stmt->bindParam(':routine_time', $_SESSION['routine_time']);
$stmt->execute();
