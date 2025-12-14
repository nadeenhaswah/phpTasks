<?php
session_start();
if (isset($_POST['go'])) {

    $url = $_POST['url'];
    header("Location: $url");
    exit();
}