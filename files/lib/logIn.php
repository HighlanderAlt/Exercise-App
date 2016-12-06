<?php
session_start();
require "requires/config.php";
require "requires/header.php";
 ?>
    <form class="form-signin" action="loginHandler.php" method="post">
        <h2 class="form-signin-heading">Log In</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" value="demo@example.com" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" value="1234" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block" name ="submit" type="submit">Sign in</button>
    </form>

<?php
require "requires/footer.html";
?>