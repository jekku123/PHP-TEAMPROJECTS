<?php include 'functions.php';

$name = $email = $message = '';
$nameError = $emailError = $messageError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } else {
        $name = sanitizeInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameError = "No special characters allowed!";
        }
    }

    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        $email = sanitizeInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Please enter valid email address";
        }
    }

    if (empty($_POST["message"])) {
        $messageError = "Message is required";
    } else {
        $message = sanitizeInput($_POST["message"]);
        if (strlen($message) < 3) {
            $messageError = "Message must be atleast 3 characters";
        }
    }

    if (!$nameError && !$emailError && !$messageError) {
        include("formdata.php");
        exit;
    }
}
