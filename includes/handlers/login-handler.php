<!-- LOGIN FORM HANDLER -->
<?php
if(isset($_POST['loginButton'])) {
    // login button was pressed
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    //login function
    $result = $account->login($username, $password);

    if($result) {
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}

?>