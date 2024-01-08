<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/crud-oop/assets/style.css">   
    <title>module List</title>
</head>
<body>
    <?php include_once('nav.php')?>
    <h1>module List</h1>
    <?php if (empty($modules)): ?>
        <p>There are no modules.</p>
    <?php else: ?>
        <!-- Display the list of modules in a table -->
        <table class="table">
            <thead>
                <tr>
                    <th class="table__heading">ID</th>
                    <th class="table__heading">Name</th>
                    <th class="table__heading">Factor</th>
                    <!-- Add other columns as needed -->
                    <th class="table__heading">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through modules and display each row -->
                <?php foreach ($modules as $module): ?>
                    <tr>
                        <td class="table__content"><?php echo $module['id']; ?></td>
                        <td class="table__content"><?php echo $module['name']; ?></td>
                        <td class="table__content"><?php echo $module['factor']; ?></td>
                        <!-- Display other columns as needed -->
                        <td>
                            <a href="http://localhost/crud-oop/index.php?controller=module&action=update&id=<?php echo $module['id']; ?>" class="link">Update</a>
                            <a href="./views/module/delete.php?id=<?php echo $module['id']; ?>" class="link">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="./views/module/add.php" class="add">Add module</a>
</body>
</html>
