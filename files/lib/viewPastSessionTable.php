<?php
//TODO: change back and delete buttons to here
session_start();
require "requires/config.php";
require "logInCheck.php";

$_SESSION['routineIdForTheRoutineDate'] = $_GET['q'];

$sql = "SELECT DISTINCT exercise.exercise_name,set_id,reps,weight,exercise_date
FROM user_routine_exercises
JOIN routine_exercises
ON  routine_exercises.exercise_id=user_routine_exercises.exercise_id
JOIN exercise
ON exercise.exercise_id=user_routine_exercises.exercise_id
WHERE user_routine_id = " . $_SESSION['routineIdForTheRoutineDate'] . "
ORDER BY exercise.exercise_name,set_id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();

if (!$result) {
    echo "NO DATA FOUND";

} else {
    function build_table($result)
    {
        // Start Table
        $html = "<table class='table table-striped'>
                 <thead>";

        // Header Row Auto Get
        $html .= '<tr>';
        foreach ($result[0] as $key => $value) {
            $input = $key;
            $output = str_replace('_', ' ', $input);
            $output = ucwords($output);

            $html .= '<th>' . $output . '</th>';
        }
        $html .= "</tr>
                  </thead>
                  <tbody>";

        //Data that goes into the Rows
        //This will set up the amount of Row tags needed??
        foreach ($result as $key => $value) {
            $html .= '<tr>';

            //This will now get the value and create data slots in the table
            foreach ($value as $key2 => $value2) {
                $html .= '<td>' . $value2 . '</td>';
            }
            $html .= '</tr></div></div>';
        }

        // This finishes the table in the html Variable
        $html .= "</tbody>    
                    </table>";
        //Use return to be able to call it all later
        return $html;
    }

    ;

    echo build_table($result);

}

$conn = null;