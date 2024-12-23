<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP File Upload</title>
</head>
<body>
    <?php if(isset($_GET['success'])) { ?>
        <?php echo $_GET['success']; ?>
    <?php } ?>
    <h2>Upload File</h2>
    <form action="upload_file_process.php" method="post" enctype="multipart/form-data">
        <label for="photo">Upload Photo Here:</label>
        <input type="file" accept=".jpg, .jpeg, .png" name="photo" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>