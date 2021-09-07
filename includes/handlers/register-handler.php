<!-- register form handler -->

<?php
// remove html tags and spaces from username
function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}
// remove html tags from Password
function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}

// remove html tags, spaces and capitol letters from form strings
function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}



if(isset($_POST['registerButton'])){

    // Clean Form Inputs ()
    $username = sanitizeFormUsername($_POST['username']);

    $firstName = sanitizeFormString($_POST['firstName']);

    $lastName = sanitizeFormString($_POST['lastName']);
 
    $email = sanitizeFormString($_POST['email']);
    
    $email2 = sanitizeFormString($_POST['email2']);

    $password = sanitizeFormPassword($_POST['password']);

    $password2 = sanitizeFormPassword($_POST['password2']);

   $wasSuccesful = $account -> register($username, $firstName, $lastName, $email, $email2, $password, $password2);

   if($wasSuccesful) {
       header("Location: index.php");
   }
}

?>