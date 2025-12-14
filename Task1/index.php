<?php
// 2
echo "Tomorrow I'll learn PHP global variables.<br>";
echo "This is a bad command: del c:\\*.*";
echo "<hr>";
?>

<!-- // 3 -->
<form action="proccess.php" method="POST">
    <label for="">Name : </label>
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<!-- 4 -->
<?php
$ip = $_SERVER['REMOTE_ADDR'];
echo "Client IP Address: " . $ip;

echo "<hr>";
// 5
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<hr>";

// 6
$url = "https://www.w3schools.com/php/default.asp";

$components = parse_url($url);

echo "<pre>";
print_r($components);
echo "</pre>";

// 7
$string = "PHP and SQL";

$firstChar = $string[0];
$rest = substr($string, 1);
echo "<span style='color:red;'>$firstChar</span>$rest";

// 8
$flag = 0;
if ($flag) {
    header("Location: https://www.w3schools.com/");
    exit;
}
