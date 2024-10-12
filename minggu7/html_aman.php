<?php
$input = $_POST['input'];
$email = $_POST['email'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Input yang aman: " . $input . "<br>";
    echo "Email yang valid: " . $email;
} else {
    echo "Email tidak valid";
}
?>