<?php
//Declare the Session
session_start();
//Declare and assign the value of the variable SESSION to an empty array
$_SESSION = array();
//Delete the session
unset($_SESSION); 
session_destroy();
//Redirect back to login.php or home
?>
<script>
    alert("Logged out successfully !");
</script>
<?php
header("Location: login.php");
?>