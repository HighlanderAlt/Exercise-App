<?php
require "requires/config.php";
require "reqCreateUserRoutineId.php";


$date = $_SESSION['routine_date'];
$time = $_SESSION['routine_time'];

$sql = "SELECT user_routine_id
FROM user_routine
WHERE routine_date ='".$date."'
AND routine_time ='".$time."'";


$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();

foreach ($result as $key => $value) {
    foreach ($value as $key2 => $value2) {
        $_SESSION['userRoutineID'] = $value2;
    }
}

$_SESSION['setnum'] = 1;
$_SESSION['exerciseCounter'] = 0;