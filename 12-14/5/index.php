<?php

$scriptName = $_SERVER['SCRIPT_NAME'];

$path = explode("/", $scriptName);
$projectName = $path[1]; 

echo "Project Name: " . $projectName . "<br>";
echo "Script Name: " . basename($scriptName);

