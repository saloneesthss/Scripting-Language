<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
} else {
    $name = "";
    $age = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET Form Values</title>
</head>
<body>
    <form method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        <button type="submit">Submit</button>
    </form>
    <?php if ($name && $age) { ?>
        <h1>Name: <?php echo $name; ?></h1>
        <h1>Age: <?php echo $age; ?></h1>
    <?php } ?>
</body>
</html>