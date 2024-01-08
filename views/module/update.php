<!-- views/module/update.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Update module</title>
</head>
<body>
    <h1>Update module</h1>

    <?php
    // Assuming you have the module details passed from the controller
    if (isset($modules)) {
        ?>
        <!-- Form for updating module details -->
        <form action="http://localhost/crud-oop/index.php?controller=module&action=update" method="post">
            <input type="hidden" name="id" value="<?php echo $modules['id']; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $modules['name']; ?>" required>
            <label for="factor">factor:</label>
            <input type="text" id="factor" name="factor" value="<?php echo $modules['factor']; ?>" required>
            <button type="submit">Update module</button>
        </form>
        <a href="http://localhost/crud-oop/index.php?controller=module&action=list">Cancel</a>
        <?php
    } else {
        echo "module not found.";
    }
    ?>
</body>
</html>
