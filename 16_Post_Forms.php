<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostForms</title>
</head>
<body>
    <form method="post" action="16.1_Postforms.php">
        <input type="text" name="User_name" placeholder="User name">
        <br><br>
        <input type="password" name="password" placeholder="@1234">
        <br><br>
        <input type="submit" value="Login" >
       
    </form>
</body>
</html>
<?php
/* echo "<pre>";
print_r($_POST);

echo "</pre>";
 */
/* if(isset($_GET['Name'])){
    $Name=$_GET['Name'];
    $Age=$_GET['Age'];
    $country=$_GET['Country'];
}
echo $Name ,"<br>";
echo $Age ,"<br>";
echo $country;
?> */