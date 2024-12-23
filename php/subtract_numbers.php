<!DOCTYPE html>
<html lang="en">
<head>
    <title>Subtract Numbers</title>
</head>
<body>
    <h2>Difference of Two Numbers</h2>
    <form method="post">
        <label for="num1">Enter First Number: </label>
        <input type="number" id="num1" name="num1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>"> <br><br>
        <label for="num2">Enter Second Number: </label>
        <input type="number" id="num2" name="num2" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>"> <br><br>
        <label for="sub">Result: </label>
        <input readonly type="number" id="sub" value="<?php echo isset($_POST['submit']) ? $_POST['num1'] - $_POST['num2'] : ''; ?>"> <br><br>
        <button type="submit" name="submit" >Subtract</button>
    </form>
</body>
</html>