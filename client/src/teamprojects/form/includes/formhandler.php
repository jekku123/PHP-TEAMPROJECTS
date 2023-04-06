<?php include 'functions.php';

$nameError = $emailError = $messageError = '';
$name = $email = $message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } else {
        $name = validateInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameError = "No special characters allowed!";
        }
    }

    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        $email = validateInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Please enter valid email address";
        }
    }

    if (empty($_POST["message"])) {
        $messageError = "Message is required";
    } else {
        $message = validateInput($_POST["message"]);
        if (strlen($message) < 3) {
            $messageError = "Message must be atleast 3 characters";
        }
    }

    if (!$nameError && !$emailError && !$messageError) {
        include("formdata.php");
        exit;
    }
}
