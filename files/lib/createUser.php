<?php
session_start();
require "requires/config.php";
require "requires/header.php" ?>

<div id="createUser">
    <form class="form-group" action="createUserHandler.php" method="post">
            <legend>Create User</legend>
            <label for="inputFname" class="sr-only">First Name</label>
            <input type="text" value="1" id="inputFname" name="firstName" class="form-control" placeholder="First Name"
                   required="" autofocus="">
            <label for="inputLname" class="sr-only">Last Name</label>
            <input type="text" value="1" id="inputLname" name="lastName" class="form-control" placeholder="Last Name"
                   required="">
            <label for="inputEmail" class="sr-only">Email Address</label>
            <input type="email" value="1@1" id="inputEmail" name="emailAddress" class="form-control"
                   placeholder="Email Address" required="">
            <label for="password" class="sr-only">Password</label>
            <input type="password" value="1" id="password" name="password" class="form-control" placeholder="Password"
                   required="">
            <label for="confirm_password" class="sr-only">Retype Password</label>
            <input type="password" value="1" id="confirm_password" name="confirm_password" class="form-control"
                   placeholder="Retype Password" required="">
            <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Create New User</button>
    </form>
</div>


<?php
require "requires/footer.html";
?>