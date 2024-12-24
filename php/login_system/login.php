<?php
session_start();
if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin#123') {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        header("Location: login.php?error=Invalid username or password.");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p style="color: red;"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required> <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required> <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>