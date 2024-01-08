<!-- views/student/update.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/crud-oop/assets/formCss.css">
    <title>Update Student</title>
</head>
<body>
   <div class="container">
     <h1 class="heading">Update Student</h1>

    <?php
    // Assuming you have the student details passed from the controller
    if (isset($element)) {
        ?>
        <!-- Form for updating student details -->
        <form action="http://localhost/crud-oop/index.php?controller=student&action=update" method="post" id="insert_form" class="form">
            <input type="hidden" name="id" value="<?php echo $element['id']; ?>">
            <div class="form-group">
                <label for="name" class="label">Name:</label>

                <div class="input-container">
                    <input type="text" id="name" class="input" name="name" value="<?php echo $element['name']; ?>" required>

                </div>
            </div>
            <div class="form-group">
                <label for="email" class="label">Email:</label>
                <div class="input-container">
                    <input type="text" id="email" class="input" name="email" value="<?php echo $element['email']; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="label">phone:</label>

                <div class="input-container">
                    <input type="text" id="phone" class="input" name="phone" value="<?php echo $element['phone']; ?>" required>

                </div>
            </div>
            <div class="form-group">
            <div class="btn-container">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="http://localhost/crud-oop/index.php?controller=student&action=list" class="home">Cancel</a>
            </div>
        </div>  
        </form>
        <?php
    } else {
        echo "Student not found.";
    }
    ?>
   </div>
</body>
</html>
