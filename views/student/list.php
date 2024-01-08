<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/crud-oop/assets/style.css">
   
    <title>Student List</title>
</head>
<body>
    <?php include_once('nav.php')?>
    <h1>Student List</h1>
    <?php if (empty($use)): ?>
        <p>There are no students.</p>
    <?php else: ?>
        <!-- Display the list of students in a table -->
        <table class="table">
            <thead>
                <tr>
                    <th class="table__heading">ID</th>
                    <th class="table__heading">Name</th>
                    <th class="table__heading">Email</th>
                    <th class="table__heading">phone</th>
                    <th class="table__heading">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through students and display each row -->
                <?php foreach ($use as $student): ?>
                    <tr>
                        <td class="table__content"><?php echo $student['id']; ?></td>
                        <td class="table__content"><?php echo $student['name']; ?></td>
                        <td class="table__content"><?php echo $student['email']; ?></td>
                        <td class="table__content"><?php echo $student['phone']; ?></td>
                        <!-- Display other columns as needed -->
                        <td class="table__content">
                            <a href="http://localhost/crud-oop/index.php?controller=student&action=update&id=<?php echo $student['id']; ?>" class="link">update</a>
                            <a href="./views/student/delete.php?id=<?php echo $student['id']; ?>" class="link">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="./views/student/add.php"  class="add">Add Student</a>
   
   
</body>
</html>
