<?php
require_once 'config.php';
if (isset($_POST['add'])) {
    if ( !empty($_POST['task'])) {
        $task = $_POST['task'];
        /* $addtasks="INSERT INTO `task`(task,status) VALUES('', '$task', 'Pending') */
 
        $addtasks = mysqli_query($db, 
            "INSERT INTO  task(task,status) VALUES( '$task', 'Pending')");
            header("refresh:2,url=My_Todo.php")
            or
            die(mysqli_error($db));
        header('location:index.php');

    }
}
