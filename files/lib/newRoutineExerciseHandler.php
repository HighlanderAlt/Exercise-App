<?php
session_start();

require "requires/config.php";

require "getNewRoutineNameID.php";

var_dump($_POST);

    foreach ($_POST as $key => $value) {

        $exercise_id = $key;


        $stmt = $conn->prepare("INSERT INTO `routine_exercises` (`routine_exercise_id`, `routine_id`, `exercise_id`, `user_id`) 
VALUES (NULL, :routine_id, :exercise_id , :user_id)");
        $stmt->bindParam(':routine_id', $_SESSION['routineID']);
        $stmt->bindParam(':exercise_id', $exercise_id);
        $stmt->bindParam(':user_id', $_SESSION['userID']);

        $stmt->execute();

    }
  header("location: home.php");

//TODO: NOTICE WHEN COMPLETED FORM