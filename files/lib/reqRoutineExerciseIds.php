<?php
require "requires/config.php";

$sql = "SELECT DISTINCT exercise.exercise_id
FROM exercise
JOIN routine_exercises ON exercise.exercise_id=routine_exercises.exercise_id
WHERE routine_exercises.routine_id = ". $_SESSION['postRoutineVal'];

try {
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


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
