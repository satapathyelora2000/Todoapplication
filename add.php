<?php
include 'db.php';

if (isset($_POST['task'])) {
    $task = trim($_POST['task']);
    mysqli_query($conn, "INSERT INTO todos (task) VALUES ('$task')");
}

header("Location: index.php");
