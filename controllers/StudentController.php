<?php
// controllers/StudentController.php
require("controllers/BaseController.php");  
class StudentController extends BaseController {
    // public function listAction() {
    //     // $students = $this->model->getAll();
    //     // include_once('views/student/list.php');

    //     // $use = ($_GET['controller']);
       
    //     // $use = $this->model->getAll();
    //     // include_once('views/student/list.php');

    // }

    // public function addAction() {
    //      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $name = $_POST['name']; // Assuming a form field with name 'name'
    //         $this->model->addStudent($name);
    //         header('Location: index.php?controller=student&action=list');
    //         exit();
    //     } else {
    //         echo "Invalid request method.";
    //     }
    //     include_once('views/student/add.php');
    // }

//    public function destroyAction() {
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             $studentId = isset($_POST['id']) ? $_POST['id'] : null;

//             if ($studentId !== null) {
//                 // Delete the student from the database
//                 $this->model->deleteStudent($studentId);

//                 // Redirect back to the student list
//                 header('Location: index.php?controller=student&action=list');
//                 exit();
//             } else {
//                 echo "Invalid student ID.";
//             }
//         } else {
//             echo "Invalid request method.";
//         }
//     }

//     public function updateAction() {
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             $studentId = isset($_POST['id']) ? $_POST['id'] : null;
//             $name = isset($_POST['name']) ? $_POST['name'] : null;
//             if ($studentId !== null && $name !== null) {
//                 // Update the student in the database
//                 $this->model->updateStudent($studentId, $name);

//                 // Redirect back to the student list
//                 header('Location: http://localhost/crud-oop/index.php?controller=student&action=list');
//                 exit();
//             } else {
//                 echo "Invalid student data.";
//             }
//         } else {
//             // Fetch the student details for updating
//             $studentId = isset($_GET['id']) ? $_GET['id'] : null;

//             if ($studentId !== null) {
//                 // Fetch student details from the model
//                 $student = $this->model->getStudentById($studentId);

//                 // Pass student details to the update view
//                 include_once('C:/xampp/htdocs/TPs/crud-oop/views/student/update.php');
//             } else {
//                 echo "Invalid student ID.";
//             }
//     }
// }
}
?>
