<?php

include 'Database.php';
include 'TodosModel.php';
include 'includes/functions.php';

$db = new Database();
$conn = $db->connect();

$myTodos = new TodosModel($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['add']) && !empty($_POST['todo'])) {
        $todo = sanitize_input($_POST['todo']);
        $myTodos->add($todo);
    } else if (!empty($_POST['save']) || !empty($_POST['delete'])) {
        $id = array_values($_POST)[0];
        $todo = sanitize_input(array_values($_POST)[1]);

        if (!empty($_POST['delete'])) {
            $myTodos->delete($id);
        }

        if (!empty($_POST['save']) && !empty($todo)) {
            $myTodos->update($id, $todo);
        }
    }

    header("Location: index.php");
    exit;
}

$todos = $myTodos->get_all();
