<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
} else {
    $name = "";
    $email = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST Method</title>
</head>
<body>
    <h2>Student Registration</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <button type="submit">Register</button>
    </form>
    <?php if($name && $email) { ?>
        <h3>Registered Name: <?php echo "$name"; ?></h3>
        <h3>Registered Email: <?php echo "$email"; ?></h3>
    <?php } ?> 
</body>
</html>