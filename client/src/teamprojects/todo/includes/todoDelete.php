<?php
// connecting to the database
$host = 'db';
$dbname = 'tododb';
$user = 'root';
$pass = 'lionPass';
$conn = new mysqli($host, $user, $pass, $dbname);


// Read a todo database
//   $sql = 'SELECT * FROM activities';
// $result = mysqli_query($conn, $sql);
if(isset($_POST['delete'])){
  
  $field = $_POST['field'];
  $activity = $_POST['activity'];
  $description = $_POST['description'];
  $deadline = $_POST['deadline'];
  $id = $_POST['id'];

$query = "DELETE FROM activities WHERE id = $id";

$result = mysqli_query($conn, $query);
if (!$result) {
  die("Delete query failed" . mysqli_error($conn));
}else{
  echo 'Deleted successfully';
}
}


?>
<form action="index.php" method="post">
  <label for="field">Field</label>
  <input id='field' type="text" name='field'>
  <label for="activity">Activity</label>
  <input id='activity' type="text" name='activity'>
  <label for="description">Description</label>
  <textarea name="description" id="description"></textarea>
  <label for="deadline">Deadline</label>
  <input id='deadline' type="text" name='deadline'>
  <select name="id" id="id">
   <?php
 while($row = mysqli_fetch_assoc($result)) {
 $id = $row['id'];
 echo "<option value='$id'>$id</option>";
 } 
 ?> 
 </select>
  <input type="submit" name='delete' value="Delete">
</form>