<?php
require "requires/config.php";

$sql = "SELECT exercise_id FROM exercise WHERE 1";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();


    $exIds = array();       //Create an array and then add the exercise names into it.
    foreach ($result as $res) {
        foreach ($res as $key => $value) {
            $exIds[] = $value;

        }
    }
    $_SESSION['exerciseIds'] = $exIds;
