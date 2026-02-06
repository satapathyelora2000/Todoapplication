<?php
include 'config/db.php';
$result = mysqli_query($conn, "SELECT * FROM todos ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Todo App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>📝 Todo List</h2>

    <form action="add.php" method="post">
        <input type="text" name="task" placeholder="Enter task" required>
        <button type="submit">Add</button>
    </form>

    <ul>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <li>
                <?= htmlspecialchars($row['task']) ?>
                <a href="edit.php?id=<?= $row['id'] ?>">✏️</a>
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this task?')">❌</a>
            </li>
        <?php } ?>
    </ul>
</div>

</body>
</html>
