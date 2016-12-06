<?php
require "requires/config.php";

$sql = "SELECT `routine_name` FROM routine WHERE routine_id = ".$_SESSION['postRoutineVal'];

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    foreach ($result as $res) {
        foreach ($res as $key => $value) {
            $_SESSION['routineName'] = $value;

        }
    }
