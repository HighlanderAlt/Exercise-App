//Old password validator, doesn't work with bootstrap???
// var password = document.getElementById("password")
//     , confirm_password = document.getElementById("confirm_password");
//
// function validatePassword(){
//     if(password.value != confirm_password.value) {
//         confirm_password.setCustomValidity("Passwords Don't Match");
//     } else {
//         confirm_password.setCustomValidity('');
//     }
// }
//
// password.onchange = validatePassword;
// confirm_password.onkeyup = validatePassword;


function showUser(str) {
    if (str == "") {
        document.getElementById("showSession").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showSession").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "viewPastSessionTable.php?q=" + str, true);
        xmlhttp.send();
    }
}

//Password compare / validator
$('#createUser').on('submit', function () {
    if ($('#password').val() != $('#confirm_password').val()) {
        alert('Passwords don\'t match');
        return false;
    }
    return true;
});




jQuery(document).ready(function () {

    $('#deleteWorkout').click(function () {
        $('#dropDownId option:selected').alert();
        // $.ajax(type: "POST",
        //     url: "some.php",
        //     data: "id="+id,
        //     success: function(msg){
        //     $(id).remove();
        // });
    });
});


function myFunction() {
        confirm("Press a button!");
    };