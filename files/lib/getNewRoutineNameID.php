<?php
require "requires/config.php";
require "logInCheck.php";

require "makeNewRoutineName.php";


$sql = "SELECT routine_id
FROM routine
WHERE routine_name ='" . $_SESSION['newRoutineName'] ."' AND user_id = ". $_SESSION['userID'];


$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();


foreach ($result as $key => $value) {
    foreach ($value as $key2 => $value2){

        $_SESSION['routineID'] = $value2;

    }
}