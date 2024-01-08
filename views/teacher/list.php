<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="http://localhost/crud-oop/assets/style.css">

    <title>teacher List</title>
</head>
<body>
    <?php include_once('nav.php')?>
    <h1>teacher List</h1>
    <?php if (empty($use)): ?>
        <p>There are no teacher.</p>
    <?php else: ?>
        <!-- Display the list of teachers in a table -->
        <table class="table">
            <thead>
                <tr>
                    <th class="table__heading">ID</th>
                    <th class="table__heading">Name</th>
                    <th class="table__heading">Email</th>
                    <th class="table__heading">Phone</th>
                    <th class="table__heading">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through teachers and display each row -->
                <?php foreach ($use as $teacher): ?>
                    <tr>
                        <td class="table__content"><?php echo $teacher['id']; ?></td>
                        <td class="table__content"><?php echo $teacher['name']; ?></td>
                        <td class="table__content"><?php echo $teacher['email']; ?></td>
                        <td class="table__content"><?php echo $teacher['phone']; ?></td>
                        <!-- Display other columns as needed -->
                        <td class="table__content">
                            <a href="http://localhost/crud-oop/index.php?controller=teacher&action=update&id=<?php echo $teacher['id']; ?>">Update</a>
                            <a href="./views/teacher/delete.php?id=<?php echo $teacher['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="./views/teacher/add.php" class="add">Add teacher</a>
</body>
</html>
