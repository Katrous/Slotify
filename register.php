<?php 
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name) {
    if(isset($_POST[$name])){
        echo $_POST[$name];
    }
}

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
            <?php echo $account->getError(Constants::$loginFailed); ?>
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
                <?php echo $account->getError(Constants::$usernameCharacters); ?>
                <?php echo $account->getError(Constants::$usernameTaken); ?>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="e.g bartsimpson" value="<?php getInputValue('username');?>" required>
            </p>
            <p>
                 <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" placeholder="e.g Bart"  value="<?php getInputValue('firstName');?>" required>
            </p>
            <p>
            <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" placeholder="e.g simpson"  value="<?php getInputValue('lastName');?>" required>
            </p>
            <p>
            <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
            <?php echo $account->getError(Constants::$emailInvalid); ?>
            <?php echo $account->getError(Constants::$emailTaken); ?>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="e.g bartsimpson@gmail.com"  value="<?php getInputValue('email');?>" required>
            </p>
            <p>
                <label for="email2">Confirm email</label>
                <input type="email" name="email2" id="email2" placeholder="e.g bartsimpson"  value="<?php getInputValue('email2');?>" required>
            </p>
            <p>
            <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
            <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
            <?php echo $account->getError(Constants::$passwordCharacters); ?>
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