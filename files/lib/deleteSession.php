<?php
session_start();
require "requires/config.php";
require "requires/header.php";



echo "<html>
            <div id='deleteSession' class='row'>
                <form action='viewPastSessionList.php' id='routine' method='post'>
                    <button type='submit' class='btn btn-primary' value='" . $_SESSION['pastRoutineVal'] . "'>Click here to go back</button>
                </form>
            </div>
    </html>";


require "requires/footer.html";