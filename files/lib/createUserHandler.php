<?php
//createUserHandler.php gets the data from createUser.php and sends to the database
require "requires/config.php";
session_start();

// Prepare the SQL and bind parameters before executing into database
    $stmt = $conn->prepare("INSERT INTO `user_table` (`user_id`, `first_name`, `last_name`, `email`, `password`)
    VALUES (NULL, :first_name, :last_name, :email, :password)");
    $stmt->bindParam(':first_name', $_POST["firstName"]);
    $stmt->bindParam(':last_name', $_POST["lastName"]);
    $stmt->bindParam(':email', $_POST["emailAddress"]);
    $stmt->bindParam(':password', $_POST["password"]);

    $stmt->execute();

   ?> <p>You have created an account. Redirect in <span id="counter">2</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)==1) {
        location.href = 'home.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>

