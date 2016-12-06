<?php
session_start();

if (isset($_SESSION['username'])) {
    session_destroy();
    echo "
    <html><p>You are now logged out. Redirect in <span id='counter'>2</span> second(s).</p>
    <script type='text/javascript'>
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML) == 1) {
                location.href = 'logIn.php';
            }
            i.innerHTML = parseInt(i.innerHTML) - 1;
        }
        setInterval(function () {
            countdown();
        }, 1000);
    </script>
    </html>";

}