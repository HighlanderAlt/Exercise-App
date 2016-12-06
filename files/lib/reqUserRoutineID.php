<?php
require "requires/config.php";

$sql = "SELECT user_routine.user_routine_id FROM
`user_routine` JOIN routine ON user_routine.routine_id = routine.routine_id WHERE routine.routine_name = '"
    . $_SESSION['pastRoutineVal'] . "' AND user_routine.user_id = " . $_SESSION['userID'];


    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();


    $userRoutineIds = array();       //Create an array and then add the exercise names into it.
    foreach ($result as $res) {
        foreach ($res as $key => $value) {
            $userRoutineIds[] = $value;

        }
    }
    $_SESSION['$userRoutineIds'] = $userRoutineIds;

