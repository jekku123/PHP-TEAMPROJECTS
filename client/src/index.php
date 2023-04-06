<?php

// The MySQL service named in the docker-compose.yml.
$host = 'mydb';

// Database user name
$user = 'lionUser';

// Database user password
$pass = 'lionPass';

// Database name
$dbname = 'todoDB';


// check the MySQL connection status
$conn = new mysqli($host, $user, $pass, $tododb);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
