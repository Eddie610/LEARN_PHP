<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   /*  $name = "John Doe"; // Example value
    $age = 30; // Example value
    $gender = "Male"; // Example value */
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO register (name, age, gender) VALUES ('$name', $age, '$gender')";

    // Use exec() because no results are returned
    $conn->exec($sql);
    echo "ADDED: " . $name . ", " . $age . ", " . $gender;
} catch(PDOException $e) {
    echo "Error: " . $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>