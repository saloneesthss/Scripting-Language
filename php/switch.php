<!DOCTYPE html>
<html lang="en">
<head>
    <title>Switch in PHP</title>
</head>
<body>
    <h2>MENU</h2>
    <form method="post">
        Click '1' for Pizza, '2' for Burger and '3' for Others: <br><br>
        <input type="number" name="menu" min="1" max="3" style="width:100px;"><br><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $menu = $_POST['menu'];
        switch ($menu) {
            case '1':
                echo "<h3>Your pizza is ordered.</h3>";
                break;
            case '2':
                echo "<h3>Your burger is ordered.</h3>";
                break;
            case '3':
                echo "<h3>Choose other options.</h3>";
                break;
        }
    }
    ?>
</body>
</html>