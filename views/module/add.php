<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Add module</title>
</head>
<body>
    <h1>Add module</h1>

    <!-- Form for adding a new module -->
    <div class="container">
<form action="http://localhost/crud-oop/index.php?controller=module&action=add" method="post" class="form">
  <div class="form-group">
    <label for="name" class="label">Name:</label>
    <div class="input-container">
      <input type="text" id="name" name="name" required class="input">
    </div>
  </div>
  <div class="form-group">
    <label for="factor" class="label">Factor:</label>
    <div class="input-container">
      <input type="text" id="factor" name="factor" required class="input">
    </div>
  </div>
  <div class="btn-container">
    <button type="submit" class="btn btn-success">Add module</button>
    <a href="http://localhost/crud-oop/index.php?controller=module&action=list" class="back">Back to module List</a>
  </div>
</form>
</div>

</body>
</html>
