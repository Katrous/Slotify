<?php 
include("includes/classes/Account.php");

$account = new Account();

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Slotify</title>
</head>
<body>
<div id="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input type="text" name="loginUsername" id="loginUsername" placeholder="e.g bartsimpson" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input type="password" name="loginPassword" id="loginPassword" required>
            </p>

            <button type="submit" name="loginButton">LOG IN</button>
        </form>



        <form action="register.php" id="registerForm" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="e.g bartsimpson" required>
            </p>

            <p>
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" placeholder="e.g Bart" required>
            </p>

            <p>
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" placeholder="e.g simpson" required>
            </p>

            <p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="e.g bartsimpson@gmail.com" required>
            </p>

            <p>
                <label for="email2">Confirm email</label>
                <input type="email" name="email2" id="email2" placeholder="e.g bartsimpson" required>
            </p>

            <p>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Your password" required>
            </p>

            <p>
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" id="password2"  placeholder="Confirm password"required>
            </p>

            <button type="submit" name="registerButton">SIGN UP</button>
        </form>
    </div>
</body>
</html>