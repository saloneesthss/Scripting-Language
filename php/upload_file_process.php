<?php
if (!is_uploaded_file($_FILES['photo']['tmp_name'])) {
    die("Please upload a photo.");
}

$fileName=$_FILES['photo']['name'];
move_uploaded_file(
    $_FILES['photo']['tmp_name'],
    './photos/' . $fileName
);
header("Location: upload_file.php?success=Photo uploaded successfully.");
die;

if (file_exists("./photos/$fileName")) {
unlink("./photos/$fileName");
}