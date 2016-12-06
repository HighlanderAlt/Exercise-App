<?php
session_start();
require "requires/config.php";
require "logInCheck.php";
require "reqRoutineExerciseIds.php";

$exerciseIDs = $_SESSION['exerciseIds'];

$weight = $_POST['inputWeight'];
$reps = $_POST['inputReps'];
date_default_timezone_set("Australia/Melbourne");
$time = date("H:i:s");
$date = date("Y-m-d");

//// Prepare the SQL and bind the parameters before sending to the database
$stmt = $conn->prepare("INSERT INTO `user_routine_exercises` (`user_routine_exercise_id`, `user_routine_id`, `exercise_id`, `set_id`, `reps`, `weight`, `exercise_date`, `ex_time`) 
VALUES (NULL, :user_routine_id, :exercise_id , :set_id, :reps, :weight, :exercise_date, :ex_time)");
$stmt->bindParam(':user_routine_id', $_SESSION['userRoutineID']);
$stmt->bindParam(':exercise_id', $exerciseIDs[$_SESSION['exerciseCounter']]);
$stmt->bindParam(':set_id', $_SESSION['setnum']);
$stmt->bindParam(':reps', $reps);
$stmt->bindParam(':weight', $weight);
$stmt->bindParam(':exercise_date', $date);
$stmt->bindParam(':ex_time', $time);
$stmt->execute();


//This if statement will create the loop back onto the exerciseTime.php page until the end set.
if ($_SESSION['setnum'] < 3) {
    $_SESSION['setnum']++;
    header('Location: exerciseTime.php');

} //When the counter hits the next number, go to the next exercise name display.
 elseif ($_SESSION['setnum'] == 3 && $_SESSION['exerciseCounter'] < count($_SESSION['exerciseNames']) - 1) {
    $_SESSION['setnum'] = 1;
    $_SESSION['exerciseCounter']++;
    header('Location: exerciseTime.php');
}//Finish up the sessions
elseif ($_SESSION['exerciseCounter'] == count($_SESSION['exerciseNames']) - 1) {
    unset($_SESSION['setnum']);
    unset($_SESSION['exerciseName']);
    unset ($_SESSION['exerciseCounter']);
    unset($_SESSION['exerciseIds']);
    unset($_SESSION['routineID']);
    unset($_SESSION['exArrCount']);
    unset($_SESSION['exerciseDisplay']);
    unset($_SESSION['routine_time']);
    unset($_SESSION['routine_date']);
    unset($_SESSION['userRoutineID']);
    unset($_SESSION['exerciseCounter']);
    unset($_SESSION['userRoutineID2']);
    header('Location: endExerciseTime.php');

}