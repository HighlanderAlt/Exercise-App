<?php
//TODO: Implement a user customized set limit per exercise
//TODO: REDESIGN
//TODO: Script ensuring one selection


session_start();
require "requires/config.php";
require "logInCheck.php";
require "requires/header.php";


$_SESSION['newRoutineName'] = $_POST['makeRoutineName'];



require "reqExerciseIds.php";

$exerciseList = "SELECT exercise_name FROM exercise WHERE 1";

 $stmt = $conn->prepare($exerciseList);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

        function build_table($result)
        {
            $i=0;
            $html = "<form action='newRoutineExerciseHandler.php' method='post' id='routineExercise'><div class='checkbox'>";
            foreach ($result as $key => $value) {


                foreach ($value as $key2 => $value2) {
                    $html .= "<label><input type='checkbox' name='" . $_SESSION['exerciseIds'][$i] . "'>" . $value2 . "</label><br>";
                    $i++;
                }

            }
            $html .= '<button type="submit" class="btn btn-primary">Submit</button></div></form>';
            return $html;

        }

        ;

        echo build_table($result);





require "requires/footer.html";