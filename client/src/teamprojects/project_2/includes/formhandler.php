<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nameError = $emailError = $messageError = '';
$name = $email = $message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameError = "No special characters allowed!";
        }
    }

    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Please enter valid email address";
        }
    }

    if (empty($_POST["message"])) {
        $messageError = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
        if (strlen($message) < 3) {
            $messageError = "Message must be atleast 3 characters";
        }
    }
}
