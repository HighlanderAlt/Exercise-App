<?php
session_start();
require "requires/config.php";
require "requires/header.php";
?>

<p>You have finished your workout. Redirect in <span id="counter">2</span> second(s).</p>
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

<?php

require "requires/footer.html";
?>