<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Delete Student</title>
</head>
<body>
    <h1>Delete Student</h1>

    <?php
    // Assuming you have the student ID passed in the URL parameter
    $studentId = isset($_GET['id']) ? $_GET['id'] : null;

    if ($studentId !== null) {
        // Display confirmation message
        echo "<p>Are you sure you want to delete this student?</p>";
        // Form for confirming deletion
        ?>
        <form action="http://localhost/crud-oop/index.php?controller=student&action=destroy" method="post">
            <input type="hidden" name="id" value="<?php echo $studentId; ?>">
            <button type="submit">Confirm Delete</button>
        </form>
        <a href="http://localhost/crud-oop/index.php?controller=student&action=list">Cancel</a>
        <?php
    } else {
        echo "Invalid student ID.";
    }
    ?>
</body>
</html>
