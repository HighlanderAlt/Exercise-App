<?php
//This file allows the connection of the pages to the database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tracking_exercise_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
