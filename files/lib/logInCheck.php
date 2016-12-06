<?php
require "requires/config.php";
if(!isset($_SESSION['username'])){
    header('location:logIn.php');
    die();
}