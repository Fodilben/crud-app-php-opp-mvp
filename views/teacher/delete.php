<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Delete teacher</title>
</head>
<body>
    <h1>Delete teacher</h1>

    <?php
    // Assuming you have the teacher ID passed in the URL parameter
    $Id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($Id !== null) {
        // Display confirmation message
        echo "<p>Are you sure you want to delete this teacher?</p>";
        // Form for confirming deletion
        ?>
        <form action="http://localhost/crud-oop/index.php?controller=teacher&action=destroy" method="post">
            <input type="hidden" name="id" value="<?php echo $Id; ?>">
            <button type="submit">Confirm Delete</button>
        </form>
        <a href="http://localhost/crud-oop/index.php?controller=teacher&action=list">Cancel</a>
        <?php
    } else {
        echo "Invalid teacher ID.";
    }
    ?>
</body>
</html>
