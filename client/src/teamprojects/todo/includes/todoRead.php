<form action="index.php" method='post'>
<input type="submit" name='submit' value="Read">
</form>

<?php
// connecting to the database
$host = 'db';
$dbname = 'tododb';
$user = 'root';
$pass = 'lionPass';
$conn = new mysqli($host, $user, $pass, $dbname);


// Read a todo database
  $sql = 'SELECT * FROM activities';
$result = mysqli_query($conn, $sql);

if(isset($_POST['submit'])){
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
   foreach($row as $item =>$value){
    // echo $item;
    echo '<tr>'.
    '<td>'. $item .'<td><br>'.
    '<td>'. $value .'<td><br>'.
     '<tr>';
   }
  }
}else{
  echo 'No data found';
}
}
?>