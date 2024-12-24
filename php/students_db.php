<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=swastik", 'root', '');
    $sql = 'SELECT * FROM students';
    $stmt = $con->query($sql);
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Student Records</title>
</head>
<body>
    <h2>Student Records</h2>
    <table border="1" style="border-collapse:collapse;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Date of Birth</th>
        </tr>
        <?php if ($students) { ?>
            <?php foreach ($students as $student) { ?>
                <tr>
                    <td><?php echo $student['id']; ?></td>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['email']; ?></td>
                    <td><?php echo $student['address']; ?></td>
                    <td><?php echo $student['date_of_birth']; ?></td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr> <td colspan="5" style="text-align: center;">No records found</td> </tr>
        <?php } ?>
    </table>
</body>
</html>