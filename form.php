<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER_STUDENT</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<style>
    body{
        margin: 20px;
        padding: 30px;
        background-color: azure;
        border-radius: 7.5rem;
        
    }
    h1{
text-align: center;
font-size: 20px;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    p{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>
<body class="container">
    <div class="row">
        <div class="col">
            <h1>REGISTORY FORM</h1>
    <form action="new.php" method="post">
        <p>Name:</p> <input type="text" name="name"><br><br>
       <p>Age:</p>  <input type="text" name="age"><br><br>
       <p>Gender:</p>  <select name="gender">
            <option value=" "> </option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select><br><br>
        <input type ="submit" name="submit">
        </form>
        </div>
        <div class="col-6">
      <img src="uploads/registration.jpg" width="600px" height="600px" alt="">
</div>
    </div>
    <div>
    </div>
</body>
</html>