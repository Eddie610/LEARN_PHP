<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "practice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['submit'])){
    if(!empty($_POST['name'] && $_POST['age'] && $_POST['gender'])){

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$sql = "INSERT INTO register (name, age, gender) VALUES ('$name', $age, '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "SUCCESSFULY ADDED ENTRY: " . $name . ", " . $age . ", " . $gender, "INTO THE DATABASE";
    header("refresh:2,url=form.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
       echo "Please fill in the blanks";
       header("refresh:2,url=form.php");
   }
}

$conn->close();

