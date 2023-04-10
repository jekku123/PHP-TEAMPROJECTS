<?php
if(isset($_POST['add'])){
  $id = $_POST['id'];
  $field = $_POST['field'];
  $activity = $_POST['activity'];
  $description = $_POST['description'];
  $deadline = $_POST['deadline'];
  echo $id . ' ' . $field . ' ' . $activity . ' ' . $description . ' ' . $deadline;
  
  if($id && $field && $activity && $description && $deadline){
    echo $id . ' ' . $field . ' ' . $activity . ' ' . $description . ' ' . $deadline;
  }else{
     echo 'Please fill the missing field';
  }

  $host = 'db';
$dbname = 'tododb';
$user = 'root';
$pass = 'lionPass';

$conn = new mysqli($host, $user, $pass, $dbname);
if($conn->connect_error){
  die('connection failed: ' . $conn->connect_error);
}else{
  echo 'connected successfully';
}
$query = "INSERT INTO activities(id, field, activity, description, deadline )";
$query .= "VALUES ('$id', '$field', '$activity', '$description', '$deadline')";

$result = mysqli_query($conn, $query);

if (!$result) {
  die('Query insertion failed');
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
<form action="index.php" method="post">
  <label for="id">Id</label>
  <input type="number" id='id' name = 'id'>
  <label for="field">Field</label>
  <input id='field' type="text" name='field'>
  <label for="activity">Activity</label>
  <input id='activity' type="text" name='activity'>
  <label for="description">Description</label>
  <textarea name="description" id="description"></textarea>
  <label for="deadline">Deadline</label>
  <input id='deadline' type="text" name='deadline'>
  <input type="submit" name='add' value="Add">
</form>
</body>
</html>