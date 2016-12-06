<?php
session_start();

require "logInCheck.php";
require "requires/config.php";
require "requires/header.php";

//Gets the Routine name to display on the top of the page
require "getRoutineName.php";
//Gets the Exercise names within the Routine and displays
require "getExerciseNames.php";


?>

<form action="exerciseTimeInputHandler.php" method="POST" accept-charset="utf-8">
    <fieldset>
        <legend>
    <?php echo $_SESSION['routineName'] . " Workout" ?>
        </legend>
    <h4><?php
        if (empty($_SESSION['exerciseCounter'])) {
            $_SESSION['exerciseCounter'] = 0;
            echo $_SESSION['exerciseNames'][$_SESSION['exerciseCounter']];
        } elseif (!empty($_SESSION['exerciseCounter']))
            echo($_SESSION['exerciseNames'][$_SESSION['exerciseCounter']]);
        ?> </h4>
    <h4>Set <?php
        if (empty($_SESSION['setnum'])) { //Checks to see if the setnum variable is empty
            $_SESSION['setnum'] = 1; // If it was empty set it too equal 1
            echo $_SESSION['setnum']; // Echos the setnum variable next to the word Set on the page
        } elseif ((!empty($_SESSION['setnum']))) { //Checks if it isn't empty AND is not greater that five
            echo $_SESSION['setnum']; //If it is within those parameters it will echo
        }
        ?>  </h4>
    <!--Values are in for the moment to streamline testing-->
        <label for="inputWeight" class="sr-only">Weight</label>
        <input type="number" id="inputWeight" name="inputWeight" class="form-control" placeholder="Weight" value="120" required="" autofocus="">
        <label for="inputReps" class="sr-only">Rep</label>
        <input type="number" id="inputReps" name="inputReps" class="form-control" placeholder="Rep" value="10" required="">
        <button class="btn btn-primary btn-block" name ="submit" type="submit">Submit</button>
</form>

<?php
require "requires/footer.html";
?>

