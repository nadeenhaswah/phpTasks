<?php
session_start(); // تفعيل session
?>

<!DOCTYPE html>
<html>
<body>

<h2>Website Counter</h2>

<?php

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}

echo "You have visited this page ";
echo $_SESSION['counter'];
echo " times.";

?>

</body>
</html>
