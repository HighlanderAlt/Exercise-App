<?php
session_start();
require "requires/config.php";
require "logInCheck.php";
include "requires/header.php";
?>

<!--AUTO GET LIST OF ROUTINES-->

<?php
require "reqRoutineIds.php";

$sessionDisplay = "SELECT routine_name FROM routine WHERE user_id = " . $_SESSION['userID'] . " OR user_id = 0";

try {
    $stmt = $conn->prepare($sessionDisplay);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    function build_table($result)
    {

        $j = 0;

        $html = '<div class="form-group"><form action="getShowRoutineExercises.php" method="post" id="createNewSession"><fieldset>
    <legend>Start A Session</legend><select class="form-control" id="routine" name="routine" placeholder="Select A Routine">';
        $html .= "<option value='' selected disabled>Select A Routine...</option>";
        foreach ($result as $key => $value) {

            foreach ($value as $key2 => $value2) {

                $html .= '<option value= ' . $_SESSION['routineIds'][$j] . '>' . $value2;
                $html .= '</option>';
                $j++;

            }

        }
        $html .= '</select><br>
    <button type="submit" class="btn btn-primary btn-home">Submit</button></fieldset></form></div>';
        return $html;

    }

    ;

    echo build_table($result);


} catch
(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<br>
<br>
<!--AUTO GET LIST OF PAST SESSIONS-->

<?php
$sessionDisplay = "SELECT DISTINCT routine.routine_name
FROM user_routine
JOIN routine
ON user_routine.routine_id = routine.routine_id
WHERE user_routine.user_id = '" . $_SESSION['userID'] . "'";

try {

    $stmt = $conn->prepare($sessionDisplay);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    if (empty($result)) {
        echo "<legend>View Past Sessions</legend><b>YOU HAVE NO PAST SESSIONS</b>";
    } else {
        function build_table2($result)
        {
            $i = 0;
            $html = '<div class="form-group"><form action="viewPastSessionList.php" method="post" id="viewPastSessions"><fieldset>
    <legend>View Past Sessions</legend><select class="form-control" id="routine" name="routine">';
            $html .= "<option value='' selected disabled>Select A Past Session...</option>";
            foreach ($result as $key => $value) {


                foreach ($value as $key2 => $value2) {
                    $html .= "<option value= '" . $value2 . "'>" . $value2;
                    $html .= "</option>";
                    $i++;
                }

            }
            $html .= '</select><br>
    <button type="submit" class="btn btn-primary btn-home">Submit</button></fieldset></form></div>';
            return $html;

        }

        ;

        echo build_table2($result);

    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>
<br>
<br>
<!--CREATE A NEW ROUTINE-->
<div class="form-group">
    <form action="makeRoutineForm.php" method="POST">
        <fieldset>
            <legend>Create A Routine</legend>
            <input type="text" class="form-control" name="makeRoutineName" method="post" id="makeRoutineName"
                   required><br>
            <button type="submit" class="btn btn-primary btn-home">Submit</button>
            <fieldset>
    </form>
</div>

<?php

require "requires/footer.html";
?>

