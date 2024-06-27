<?php

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

/* $servername = "localhost";
$username = "root";
$password = "";
$db = "practice";

$conn = new mysqli($servername,$username, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
} */
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

$sql="INSERT INTO register(name,age,gender) values($name,$age,$gender)";

/* $sql = "insert into register(name,age,gender) values('$name','$age','$gender')"; */

/* if ($conn->query($sql) === TRUE) {
	echo "ADDED: ".$name.", ".$age.", ".$gender;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
} */

if ($conn->query($sql) === TRUE) {
    echo "ADDED: " . $name . ", " . $age . ", " . $gender;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
