<?php 
class moduleController {
    protected $model;

    public function __construct(moduleModel $model) {
        $this->model = $model;
    }
    public function listAction() {
        $modules = $this->model->getAll();
        include_once('views/module/list.php');
       
    }
    public function addAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name']; // Assuming a form field with name 'name'
             $factor = $_POST['factor'];
            $this->model->add($name,$factor); // Use the dynamic value obtained from $_GET['controller']
            header("Location: index.php?controller=module&action=list");
            exit();
        } else {
            echo "Invalid request method.";
        }
    
        include_once("views/module/add.php"); // Use the dynamic value obtained from $_GET['controller']
    }
    public function destroyAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Id = isset($_POST['id']) ? $_POST['id'] : null;

            if ($Id !== null) {
                // Delete the student from the database
                $this->model->delete($Id);

                // Rediect back to the student list
                header("Location: index.php?controller=module&action=list");
                exit();
            } else {
                echo "Invalid  ID.";
            }
        } else {
            echo "Invalid request method.";
        }
    }
    public function updateAction() {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Id = isset($_POST['id']) ? $_POST['id'] : null;
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $factor = isset($_POST['factor']) ? $_POST['factor'] : null;
           
            if ($Id !== null && $name !== null && $factor !== null) {
                // Update the student in the database
                $this->model->update($Id, $name,$factor);

                // Redirect back to the student list
                header("Location: http://localhost/crud-oop/index.php?controller=module&action=list");
                exit();
            } else {
                echo "Invalid module data.";
            }
        } else {
            // Fetch the student details for updating
            $Id = isset($_GET['id']) ? $_GET['id'] : null;

            if ($Id !== null) {
                // Fetch student details from the model
                $modules = $this->model->getElementById($Id);

                // Pass student details to the update view
                include_once("C:/xampp/htdocs/TPs/crud-oop/views/module/update.php");
            } else {
                echo "Invalid module  ID.";
            }
    }
}

}
?>