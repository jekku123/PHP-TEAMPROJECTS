<?php

$host = 'db';
$dbname = 'todoDB';
$user = 'root';
$pass = 'lionPass';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['add']) && !empty($_POST['todo'])) {
        $todo = $_POST['todo'];
        $query = "INSERT INTO todos(todo) VALUES ('$todo')";
        mysqli_query($conn, $query);
    } else if (!empty($_POST['update']) || !empty($_POST['delete'])) {
        $id = array_values($_POST)[0];
        $todo = array_values($_POST)[1];



        if (!empty($_POST['delete'])) {
            $query = "DELETE FROM todos WHERE id = " . $id;
            mysqli_query($conn, $query);
        }

        if (!empty($_POST['update'])) {
            $query = "UPDATE todos SET todo = '" . $todo . "' WHERE id = $id";
            mysqli_query($conn, $query);
        }
    }
}

$todos = mysqli_query($conn, "SELECT * FROM todos ORDER by id DESC");
