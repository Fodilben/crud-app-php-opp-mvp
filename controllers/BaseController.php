<?php
// controllers/BaseController.php

class BaseController {
    protected $model;

    public function __construct(BaseModel $model) {
        $this->model = $model;
    }
    public function listAction() {
        // $students = $this->model->getAll();
        // include_once('views/student/list.php');
        $con = $_GET['controller'];
     
        $use = $this->model->getAll($con);
        include_once("views/{$con}/list.php");
    }
   public function addAction() {
    $use = $_GET['controller'];
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name']; // Assuming a form field with name 'name'
        $email = $_POST['email']; // Assuming a form field with name 'name'
        $phone = $_POST['phone']; // Assuming a form field with name 'name'
        $pattern2 = "/(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/";
        $rep="$1-$2-$3-$4-$5";
        $phoneReg=preg_replace($pattern2,$rep,$phone);
        $this->model->add($name,$email,$phoneReg,$use); // Use the dynamic value obtained from $_GET['controller']
        header("Location: index.php?controller={$use}&action=list");
        exit();
    } else {
        echo "Invalid request method.";
    }
    
    include_once("views/{$use}/add.php"); // Use the dynamic value obtained from $_GET['controller']
}

public function destroyAction() {
    $use = $_GET['controller'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Id = isset($_POST['id']) ? $_POST['id'] : null;

            if ($Id !== null) {
                // Delete the student from the database
                $this->model->delete($Id,$use);

                // Rediect back to the student list
                header("Location: index.php?controller={$use}&action=list");
                exit();
            } else {
                echo "Invalid  ID.";
            }
        } else {
            echo "Invalid request method.";
        }
    }
    public function updateAction() {
        $use = $_GET['controller'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Id = isset($_POST['id']) ? $_POST['id'] : null;
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $phone = isset($_POST['phone$']) ? $_POST['phone$'] : null;
            if ($Id !== null && $name !== null && $email !== null) {
                // Update the student in the database
                $this->model->update($Id,$name,$email,$phone,$use);

                // Redirect back to the student list
                header("Location: http://localhost/crud-oop/index.php?controller={$use}&action=list");
                exit();
            } else {
                echo "Invalid {$use} data.";
            }
        } else {
            // Fetch the student details for updating
            $Id = isset($_GET['id']) ? $_GET['id'] : null;

            if ($Id !== null) {
                // Fetch student details from the model
                $element = $this->model->getElementById($Id,$use);

                // Pass student details to the update view
                include_once("C:/xampp/htdocs/TPs/crud-oop/views/{$use}/update.php");
            } else {
                echo "Invalid {$use} ID.";
            }
    }
}
}
?>
