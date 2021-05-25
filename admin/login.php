<?php
require_once "dbconnect.php";
//Declare new session 
session_start();
//if the user has filled full information then check the username and password
if (isset($_POST['login'])) {
    //Declare the variable to get the data from form login
    $un = $_POST['username'];
    $pass = $_POST['password'];
    //Encrypt password by using md5() function
    $pw = md5($pass);
    //Check the username and password in database
    $sql = "SELECT * FROM user WHERE username = '$un' && password = '$pw'"; //check in user table
    $result = $connection->query($sql); //execute the query command
    $user = mysqli_fetch_array($result);
    if ($result->num_rows > 0 && $user[3] == 0) { 
        $_SESSION['username'] = $un;
        $_SESSION['password'] = $pw;
?>
        <script>
            alert("Logged in successfully !");
            window.location.href = "home_user.php";
        </script>
    <?php } else if ($result->num_rows > 0 && $user[3] == 1) {
        $_SESSION['usernameAdmin'] = $un;
        $_SESSION['passwordAdmin'] = $pw;
    ?>
        <script>
            alert("Logged in successfully !");
            window.location.href = "home_admin.php";
        </script>
    <?php } else { ?>
        <script>
            alert("Login failed, please try again !");
            window.location.href = "login.php";
        </script>
<?php }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body id="bodyLogin">
    <div id="left">
        <form action="" method="POST" id="f1">
            <center>
                <h1>Login</h1><br>
                <img src="images/user.png">
                <input type="text" class="typelogin" required name="username" size="30" placeholder="Username"><br><br>
                <input type="password" id="passwordLogin" class="typelogin" name="password" required size="30" placeholder="Password"><br><br>
                <input type="checkbox" onclick="showPass()"> Show password <br><br>
                <input type="submit" id="loginbtn" name="login" value="Login">
            </center>
        </form>
    </div>
    <div id="right">
        <img src="images/login_Background.png">
    </div>
</body>

</html>