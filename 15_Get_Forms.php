<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetForms</title>
</head>
<body>
    <form action="">
        <input type="text" name="Name" placeholder="Write full nmaes">
        <br><br>
        <input type="number" name="Age" placeholder="Age">
        <br><br>
        <input type="text" name="Country" placeholder="country">
        <br><br>
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>
<?php
/* echo "<pre>";
print_r($_GET);

echo "</pre>"; */

if(isset($_GET['Name'])){
    $Name=$_GET['Name'];
    $Age=$_GET['Age'];
    $country=$_GET['Country'];
}
echo $Name ,"<br>";
echo $Age ,"<br>";
echo $country;
?>