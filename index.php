<?php
// index.php

// Include the configuration file
require_once('config.php');

// Include the file to set up the database
// require_once('setup_database.php');

// Simple router
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = ucfirst($_GET['controller']) . 'Controller';
    $modele=ucfirst($_GET['controller']).'Model';
    $action = $_GET['action'] . 'Action';


    // Include the requested controller
    if (file_exists("controllers/$controller.php")) {
        require_once("controllers/$controller.php");
        if(file_exists("models/$modele.php")){
            require_once("models/$modele.php");
        }
        // Create an instance of the controller and call the requested action
        $modelClass = $controller == 'TeacherController' ? 'TeacherModel' : 'StudentModel';
        if($controller== 'TeacherController'){
            $modelClass='TeacherModel';
        }
        else if($controller== 'StudentController'){
            $modelClass='StudentModel';

        }
        else{
            $modelClass='moduleModel';
        }
        $model = new $modelClass();
      
        $controllerInstance = new $controller($model);

        if (method_exists($controllerInstance, $action)) {
            $controllerInstance->$action();
        } else {
            echo "/Action not found.";
        }
    } else {
        echo "Controller not found.";
    }
} else {
    // HTML content for the homepage
    echo "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"assets/style.css\">
        <title>Your Application</title>
    </head>
    <body>
        <h1>Welcome to Your Application</h1>
        <p>This is the homepage. Add more content here!</p>
        <a href=\"http://localhost/crud-oop/index.php?controller=student&action=list\">Student List</a>
        <a href=\"http://localhost/crud-oop/index.php?controller=teacher&action=list\">teacher  List</a>
        <a href=\"http://localhost/crud-oop/index.php?controller=module&action=list\">module  List</a>
    </body>
    </html>";   
}
?>
