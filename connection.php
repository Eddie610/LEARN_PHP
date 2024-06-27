<?php
/* mysqli_connect('localhost','root','');
$mysqli_select_db('practice'); */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";