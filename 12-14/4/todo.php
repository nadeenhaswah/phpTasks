<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<h2>To Do List</h2>

<form method="post">
    <input type="text" name="task" placeholder="Enter a task" required>
    <button type="submit" name="add">Add</button>
</form>

<?php

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {

    $task = $_POST['task'];

    $_SESSION['tasks'][] = $task;
}

if (!empty($_SESSION['tasks'])) {
    echo "<h3>My Tasks:</h3>";
    echo "<ul>";

    foreach ($_SESSION['tasks'] as $t) {
        echo "<li>$t</li>";
    }

    echo "</ul>";
}
?>

</body>
</html>
