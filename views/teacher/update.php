<!-- views/teacher/update.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Update teacher</title>
</head>
<body>
    <h1>Update teacher</h1>

    <?php
    // Assuming you have the teacher details passed from the controller
    if (isset($element)) {
        ?>
        <!-- Form for updating teacher details -->
        <form action="http://localhost/crud-oop/index.php?controller=teacher&action=update" method="post">
            <input type="hidden" name="id" value="<?php echo $element['id']; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $element['name']; ?>" required>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $element['email']; ?>" required>
            <label for="phone">phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $element['phone']; ?>" required>
            <button type="submit">Update teacher</button>
        </form>
        <a href="http://localhost/crud-oop/index.php?controller=teacher&action=list">Cancel</a>
        <?php
    } else {
        echo "teacher not found.";
    }
    ?>
</body>
</html>
