<?php
session_start();
require "requires/config.php";
require "logInCheck.php";
require "requires/header.php";

//Unset some session variables to eliminate incorrect database inputs
unset($_SESSION['routine_date']);
unset($_SESSION['routine_time']);
unset($_SESSION['user_RoutineID']);
unset($_SESSION['routineName']);

//Get the post variable from the home.php page and store into a session to recall later in getRoutineName.php, reqCreateUSerRoutineId.php and reqRoutineExerciseIds.php
$_SESSION['postRoutineVal'] = $_POST["routine"];

if (!isset($_SESSION['postRoutineVal'])){
header ('location:home.php');
}

else {
//Create an sql statement to get the exercise names to display
    $stmtRoutineDisplay = "SELECT exercise.exercise_name
FROM `routine_exercises`
JOIN exercise
ON routine_exercises.exercise_id=exercise.exercise_id
WHERE routine_exercises.routine_id = " . $_SESSION['postRoutineVal'];


//Prepare sql statement
    $stmt = $conn->prepare($stmtRoutineDisplay);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    function build_table($result)
    {
        $html = "<table class='table'><thead>";

        $html .= "<tr>";
        foreach ($result[0] as $key => $value) {
            $input = $key;
            $output = str_replace('_', ' ', $input);
            $output = ucfirst($output);

            $html .= "<th>" . $output . "</th>";
        }
        $html .= "</tr></thead>";

        foreach ($result as $key => $value) {
            $html .= "<tr>";

            foreach ($value as $key2 => $value2) {
                $html .= "<td>" . $value2 . "</td>";
            }
        }

        $html .= "</table>";

        $html .= "<form action='exerciseTime.php'>
    <button class='btn btn-lg btn-primary btn-block' name ='submit' type='submit'>Start Workout</button>
</form>";
        $html .= "</div>";
        return $html;
    }

    ;


    echo build_table($result);
//Creates and gets the user_routine_id for this session
    require "getUserRoutineId.php";

    require "requires/footer.html";


}