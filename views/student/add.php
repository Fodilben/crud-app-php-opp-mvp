<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="http://localhost/crud-oop/assets/style.css">

    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>

    <!-- Form for adding a new student -->
<div class="container">
    <form action="http://localhost/crud-oop/index.php?controller=student&action=add" method="post" class="form">
        <div class="form-group">
        <label for="name" class="label">Name:</label>
        <div class="input-container">
        <input type="text" id="name" name="name" required class="input">
        </div>
        </div>
        <div class="form-group">
        <label for="email" class="label">Email:</label>
        <div class="input-container">
        <input type="email" id="email" name="email" required class="input">
        </div>
        </div>
        <div class="form-group">
        <label for="phone" class="label">Phone:</label>
        <div class="input-container">
        <input type="phone" id="phone" name="phone" required class="input">
        </div>
        </div>
        <div class="btn-container">
        <button type="submit" class="btn btn-success">Add Student</button>
        <a href="http://localhost/crud-oop/index.php?controller=student&action=list" class="back">Back to Student List</a></div>
    </from>
</div>



</body>
</html>
