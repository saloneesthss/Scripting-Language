<?php
$cookie_name = "user_cookie";
$cookie_value = "Hello, this is your cookie value!";
$expiry_time = time() + (24 * 60 * 60);
setcookie($cookie_name, $cookie_value, $expiry_time, "/");

if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '{$cookie_name}' is already set! Its value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '{$cookie_name}' has been set and will expire in 24 hours.";
}
?>