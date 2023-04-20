<?php include 'functions.php';

$name = $email = $message = $subject = '';
$nameError = $emailError = $messageError = $subjectError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } else {
        $name = sanitize($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameError = "No special characters allowed!";
        }
    }

    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        $email = sanitize($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Please enter valid email address";
        }
    }

    if (empty($_POST["subject"])) {
        $subjectError = "Subject is required";
    } else {
        $subject = sanitize($_POST["subject"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $subject)) {
            $subjectError = "No special characters allowed!";
        }
    }


    if (empty($_POST["message"])) {
        $messageError = "Message is required";
    } else {
        $message = sanitize($_POST["message"]);
        if (strlen($message) < 3) {
            $messageError = "Message must be atleast 3 characters";
        }
    }

    if (!$nameError && !$emailError && !$messageError && !$subjectError) {
        include("formdata.php");
        exit;
    }
}
