<?php
require "requires/config.php";

$sql = "SELECT DISTINCT routine_id
FROM routine
WHERE 1";

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();


    $routineIds = array();       //Create an array and then add the exercise names into it.
    foreach ($result as $res) {
        foreach ($res as $key => $value) {
            $routineIds[] = $value;

        }
    }
    $_SESSION['routineIds'] = $routineIds;


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
