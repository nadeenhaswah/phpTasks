<?php
session_start();

$filename = 'task2.1.php';

if (file_exists($filename)) {
    $lastModifiedTime = filemtime($filename);
    $lines = file($filename);
    $lineCounts = count($lines);
    echo "Count of Lines " . $lineCounts;
    echo "<br>";
    echo "The file '$filename' was last modified on: " . date("F d Y H:i:s", $lastModifiedTime);
} else {
    echo "The file '$filename' does not exist.";
}

$_SESSION['fileName'] = $filename;
$_SESSION['lastModified'] = date("F d Y H:i:s", $lastModifiedTime);
$_SESSION['numberOfLines'] = $lineCounts;

echo "<hr>";
echo "<b>File Name : </b> " . $_SESSION['fileName'];
echo "<br>";
echo "<b>Last modified: </b> " . $_SESSION['lastModified'];
echo "<br>";
echo "<b>Count of Lines : </b> " . $_SESSION['numberOfLines'];
