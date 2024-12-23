<!DOCTYPE html>
<html lang="en">
<head>
    <title>Conditions in PHP</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method="post">
        Enter your score: 
        <input type="number" name="score" min="0" max="100" style="width:100px;"><br><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $score = $_POST['score'];
        if($score >= 90) {echo "<h3>Grade: A</h3>";}
        elseif($score >= 80) {echo "<h3>Grade: B</h3>";}
        elseif($score >= 70) {echo "<h3>Grade: C</h3>";}
        elseif($score >= 60) {echo "<h3>Grade: D</h3>";}
        else {echo "<h3>Grade: F</h3>";}
    }
    ?>
</body>
</html>