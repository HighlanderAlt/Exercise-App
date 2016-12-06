<?php
require "requires/config.php";


$sql = "SELECT exercise_name
FROM `routine_exercises`
JOIN exercise
ON routine_exercises.exercise_id=exercise.exercise_id
WHERE routine_exercises.routine_id = " . $_SESSION['postRoutineVal'];

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();


    $names = array();       //Create an array and then add the exercise names into it.
    foreach ($result as $res) {
        foreach ($res as $key => $value) {
            $names[] = $value;
        }
    }
    $_SESSION['exerciseNames'] = $names;
