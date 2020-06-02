<?php
session_start();
if (isset($_SESSION['email']) == "") {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/app.css">
</head>
<body>

    <div id="loader">
        <div id="status">&nbsp;</div>
      </div>
        <!-- top heading -->
        <h1 class="login-main-heading">Login your Account</h1>
        <!-- main container -->
        <div class="container-form">
            <!-- logo -->
            <div class="logo">
                <img src="./img/logo.png" alt="login-account">
            </div>

        <form action="./modal/loginModal.php" method="POST">
            <!-- input type email -->
            <div class="input-field">
                <label for="email">Email</label>
                <input type="email" name="email" class="input" placeholder="Enter your Email" required> 
            </div>
            <!-- input type password -->
            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" name="password" class="input" placeholder="Enter your password" required>
            </div>
            <?php
if (isset($_REQUEST['field'])) {
?>
<p style="color:red; margin-left:2em;">Invalid email or passowrd</p>
<?php
}
            ?>
            <!-- input type forget -->
            <div class="input-field">
            <span class="forget"><a href="registration">register here</a></span>
            <input type="checkbox"><span> Rember me</span>
            </div>

                <!-- submit button -->
            <div class="input-field">
                <input type="submit"  value="Login" name="login" class="btn">
            </div>

        </form>    
        </div>
    <script src="js/app.js"></script>
</body>
</html>
<?php
}
else{
    ?>
<script>
window.location.assign('index.php');
</script>
    <?php
}
?>