<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Add teacher</title>
</head>
<body>
    <h1>Add teacher</h1>

    <!-- Form for adding a new teacher -->
    <form action="http://localhost/crud-oop/index.php?controller=teacher&action=add" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="phone">phone:</label>
        <input type="phone" id="phone" name="phone" required>
        <!-- Add other input fields as needed -->

        <button type="submit">Add teacher</button>
    </form>

    <a href="http://localhost/crud-oop/index.php?controller=teacher&action=list">Back to teacher List</a>
</body>
</html>
