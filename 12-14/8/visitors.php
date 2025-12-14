<?php
session_start();

if (!isset($_SESSION['visitor_count'])) {
    $_SESSION['visitor_count'] = 1;
} else {
    $_SESSION['visitor_count']++;
}

echo "Number of Visitors (in this session): ";
echo $_SESSION['visitor_count'];
?>
