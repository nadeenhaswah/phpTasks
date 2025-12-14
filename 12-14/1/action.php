<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "Data sent using POST <br>";

    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {

    echo "Data sent using GET <br>";

    $email = $_GET['email'];
    $password = $_GET['password'];

    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;
}
