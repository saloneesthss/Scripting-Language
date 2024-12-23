<?php
$students = [
    ['first_name' => "Ram", 'last_name' => "Sharma", 'email' => "ram@gmail.com", 'dob' => "2060-03-26"],
    ['first_name' => "Rita", 'last_name' => "Regmi", 'email' => "rita@gmail.com", 'dob' => "2059-09-12"],
    ['first_name' => "Herman", 'last_name' => "Shrestha", 'email' => "herman@gmail.com", 'dob' => "2062-10-04"],
];
?>
<html>
<head>
    <title>PHP Array</title>
</head>
<body>
    <h3>List of Students</h3>
    <table width="500" border="1" style="border-collapse: collapse;">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
        </tr>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo $student['first_name']; ?></td>
                <td><?php echo $student['last_name']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['dob']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>