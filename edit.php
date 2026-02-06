<?php
include 'config/db.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM todos WHERE id=$id");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $task = $_POST['task'];
    mysqli_query($conn, "UPDATE todos SET task='$task' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Todo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>✏️ Edit Todo</h2>

    <form method="post">
        <input type="text" name="task" value="<?= htmlspecialchars($row['task']) ?>" required>
        <button type="submit" name="update">Update</button>
        <a href="index.php">Cancel</a>
    </form>
</div>

</body>
</html>
