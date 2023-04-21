<?php

class TodosModel
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function add($todo)
    {
        $query = "INSERT INTO todos(todo) VALUES ('$todo')";
        $result = mysqli_query($this->conn, $query);

        if (!$result) {
            die('Failed to add' . mysqli_error($this->conn));
        }
    }

    public function delete($id)
    {
        $query = "DELETE FROM todos WHERE id = " . $id;
        $result = mysqli_query($this->conn, $query);

        if (!$result) {
            die('Failed to delete' . mysqli_error($this->conn));
        }
    }

    public function update($id, $todo)
    {
        $query = "UPDATE todos SET todo = '$todo' WHERE id = $id";
        $result = mysqli_query($this->conn, $query);

        if (!$result) {
            die('Failed to update' . mysqli_error($this->conn));
        }
    }

    public function get_all()
    {
        $todos = null;
        $result = mysqli_query($this->conn, "SELECT * FROM todos ORDER by id DESC");

        if (!$result) {
            die('Query failed' . mysqli_error($this->conn));
        } else {
            $todos = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        return $todos;
    }
}
