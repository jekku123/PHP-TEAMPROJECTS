<?php
$host = 'db';
$dbname = 'todoDB';
$user = 'root';
$pass = 'lionPass';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['update'])) {

        $id = array_values($_POST)[0];
        $todo = array_values($_POST)[1];

        $query = "UPDATE todos SET ";
        $query .= "todo = '" . $todo . "' ";
        $query .= "WHERE id = " . $id;

        $result = mysqli_query($conn, $query);
    }

    if (!empty($_POST['delete'])) {

        $id = array_values($_POST)[0];

        $query = "DELETE FROM todos ";
        $query .= "WHERE id = " . $id;

        $result = mysqli_query($conn, $query);
    }

    if (!empty($_POST['add']) && !empty($_POST['todo'])) {

        $todo = $_POST['todo'];

        $query = "INSERT INTO todos(todo)";
        $query .= "VALUES ('$todo')";

        $result = mysqli_query($conn, $query);
    }
}

$query_all = "SELECT * FROM todos ORDER by id DESC";
$result_all = mysqli_query($conn, $query_all);
