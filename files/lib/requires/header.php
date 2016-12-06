<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Exercise App</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">

</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="home.php">Exercise App</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php
                //This checks to see if a user is logged in, if so then it will display a logout button, however if there is no userId session variable, it will display a createUser link
                if (!isset($_SESSION['userID'])) {
                    echo "<li><a href='createUser.php'><span class='glyphicon glyphicon-user'></span> Create User</a></li></ul>";
                } else if (isset($_SESSION['userID'])) {
                    echo "<li><a href='logOut.php'><span class='glyphicon glyphicon-log-out'></span> Log Out</a></li></ul>";
                } ?>

        </div><!--/.nav-collapse -->
    </div>
</nav>
<section id="content">
    <div class="container allContent">
