<?php
session_start();
$_SESSION['pastRoutineVal'] = $_POST["routine"];
require "requires/config.php";
require "logInCheck.php";
require "requires/header.php";
require "reqUserRoutineID.php";
require "userRoutineTime.php";
if (!isset($_SESSION['pastRoutineVal'])) {
    header('location: home.php');

} else {

    $sql = "SELECT user_routine.routine_date FROM
`user_routine` JOIN routine ON user_routine.routine_id = routine.routine_id WHERE routine.routine_name = '"
        . $_SESSION['pastRoutineVal'] . "' AND user_routine.user_id = " . $_SESSION['userID'];


    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();


    function build_list($result)
    {

        $html = "<div class='form-group'>
        <legend>Past Sessions for your " . $_SESSION['pastRoutineVal'] . " workouts </legend>
        <select class='form-control' id='dropDownId' name='routineIdForTheRoutineDate' onclick='' onchange='showUser(this.value)'>";

        $j = 0;
        $html .= "<option value =''>Select the date you completed the session...</option>";
        foreach ($result as $key => $value) {

            foreach ($value as $key2 => $value2) {
                $html .= '<option value= ' . $_SESSION['$userRoutineIds'][$j] . '>' . $value2 . " @ " . $_SESSION['$userRoutineTime'][$j];
                $html .= '</option>';
                $j++;
            }
        }


        $html .= "</select></form></div>";
        return $html;
        $conn = null;
    }

    ;

    echo build_list($result); ?>
    <html>
    <div id='showSession'></div>
    <div class='row'>
        <div class='span6' id='goHome'><br>
            <form action='home.php'>
                <button type='submit' class='btn btn-primary'>Click here to go back</button>
            </form>
        </div>
        <div class='span6 pull-right' id='deleteWorkout'>
            <form action=''><br>
                <button type='button' class='btn btn-primary btn-delete'>Test Placement for delete btn</button>
            </form>
        </div>
    </div>
    </html><?php
    require "requires/footer.html";
}