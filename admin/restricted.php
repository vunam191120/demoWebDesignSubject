<?php
session_start();
//Check if the admin is logged in before working with sites that have admin user rights
//if not give the error and redirect to login page
if(!isset($_SESSION['usernameAdmin']) && !isset($_SESSION['passwordAdmin'])){ ?>
    <script>
        alert("You must loggin as Admin first !")
        window.location.href = "login.php";
    </script>
<?php } ?>