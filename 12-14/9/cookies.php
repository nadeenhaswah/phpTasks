<?php

// 1️⃣ إنشاء Cookie
$cookie_name  = "user";
$cookie_value = "=";
$expiry_time  = time() + 3600; // ساعة واحدة
$cookie_path  = "/";
$domain       = "";   // نفس الدومين
$secure       = false; // true إذا الموقع https
$httponly     = true;

// إنشاء الكوكي
setcookie(
    "bg-color",
    "red",
    time() + 3600,
    '/'
);
setcookie(
    "theme",
    "dark",
    time() + 3600,
    '/'
);

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";


// setcookie('bg-color', "", time() - 3600);


?>
