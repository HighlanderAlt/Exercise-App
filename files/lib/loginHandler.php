<?php
require "requires/config.php";
session_start();

if (isset($_POST['submit'])) {
    $errMsg = '';
    //username and password sent from Form
    $username = trim($_POST['inputEmail']);
    $password = trim($_POST['inputPassword']);

//    //work on an error message showing up if incorrect password
//    if ($username == '') {
//        $errMsg .= 'You must enter your Username<br>';
//        header('location:logIn.php');}
//    if ($password == '') {
//        $errMsg .= 'You must enter your Password<br>';
//        header('location:logIn.php');
//    }


    if ($errMsg == '') {
        $records = $conn->prepare('SELECT user_id, email, password FROM  user_table WHERE email = :username');
        $records->bindParam(':username', $username);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        if (count($results) > 0 && ($password == $results['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['userID'] = $results['user_id'];


            echo "<html><p>You are now logged in. Redirect in <span id='counter'>2</span> second(s).</p>
            <script type='text/javascript'>
                function countdown() {
                    var i = document.getElementById('counter');
                    if (parseInt(i.innerHTML) == 1) {
                        location.href = 'home.php';
                    }
                    i.innerHTML = parseInt(i.innerHTML) - 1;
                }
                setInterval(function () {
                    countdown();
                }, 1000);
            </script>
            </html>";
            exit;

        } else {
            echo $errMsg .= 'Username and Password are not found<br>';


            echo "<html><p>You will be redirected in <span id='counter'>2 </span> second(s).</p>
            <script type='text/javascript'>
                function countdown() {
                    var i = document.getElementById('counter');
                    if (parseInt(i.innerHTML) == 1) {
                        location.href = 'home.php';
                    }
                    i.innerHTML = parseInt(i.innerHTML) - 1;
                }
                setInterval(function () {
                    countdown();
                }, 1000);
            </script>
            </html>";
        }
    }
} 


