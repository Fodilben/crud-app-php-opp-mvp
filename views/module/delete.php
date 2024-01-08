<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Delete module</title>
</head>
<body>
    <h1>Delete module</h1>

    <?php
    // Assuming you have the module ID passed in the URL parameter
    $moduleId = isset($_GET['id']) ? $_GET['id'] : null;

    if ($moduleId !== null) {
        // Display confirmation message
        echo "<p>Are you sure you want to delete this module?</p>";
        // Form for confirming deletion
        ?>
        <form action="http://localhost/crud-oop/index.php?controller=module&action=destroy" method="post">
            <input type="hidden" name="id" value="<?php echo $moduleId; ?>">
            <button type="submit">Confirm Delete</button>
        </form>
        <a href="http://localhost/crud-oop/index.php?controller=module&action=list">Cancel</a>
        <?php
    } else {
        echo "Invalid module ID.";
    }
    ?>
</body>
</html>
