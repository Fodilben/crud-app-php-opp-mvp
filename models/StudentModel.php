<?php
// models/StudentModel.php

require_once('BaseModel.php');

class StudentModel extends BaseModel {
    // public function getAll() {
    //     try {
    //         $stmt = $this->db->query("SELECT * FROM students");
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     } catch (PDOException $e) {
    //         die("Error: " . $e->getMessage());
    //     }
    // }

    // public function addStudent($value) {
    //     try {
    //         // Assuming 'students' is the name of the table and 'column_name' is the actual column name
    //         $query = "INSERT INTO students (name) VALUES (:value)";
            
    //         // Prepare the SQL statement
    //         $statement = $this->db->prepare($query);

    //         // Bind the parameter
    //         $statement->bindParam(':value', $value);

    //         // Execute the query
    //         $statement->execute();

    //         // Return the ID of the last inserted row
         
    //         return $this->db->lastInsertId();
    //     } catch (PDOException $e) {
    //         // Handle the exception (e.g., log the error, display a user-friendly message)
    //         die("Error: " . $e->getMessage());
    //     }

    
    // }

    // public function deleteStudent($studentId) {
    //     try {
    //         // Prepare the SQL statement
    //         $query = "DELETE FROM students WHERE id = :id";
    //         $statement = $this->db->prepare($query);

    //         // Bind the parameter
    //         $statement->bindParam(':id', $studentId, PDO::PARAM_INT);

    //         // Execute the statement
    //         $statement->execute();

    //         // Close the database connection
            
    //     } catch (PDOException $e) {
    //         // Handle any exceptions that may occur during the process
    //         echo "Error: " . $e->getMessage();
    //     }
    // }
    //  public function getStudentById($studentId) {
    //     try {
    //         // Prepare the SQL statement
    //         $query = "SELECT * FROM students WHERE id = :id";
    //         $statement = $this->db->prepare($query);

    //         // Bind the parameter
    //         $statement->bindParam(':id', $studentId, PDO::PARAM_INT);

    //         // Execute the statement
    //         $statement->execute();

    //         // Fetch the result as an associative array
    //         $student = $statement->fetch(PDO::FETCH_ASSOC);

    //         return $student;
    //     } catch (PDOException $e) {
    //         // Handle any exceptions that may occur during the process
    //         echo "Error: " . $e->getMessage();
    //         return null;
    //     }
    // }
    // public function updateStudent($studentId, $name) {
    //     try {
    //         // Prepare the SQL statement for updating
    //         $query = "UPDATE students SET name = :name WHERE id = :id";
    //         $statement = $this->db->prepare($query);

    //         // Bind the parameters
    //         $statement->bindParam(':id', $studentId, PDO::PARAM_INT);
    //         $statement->bindParam(':name', $name, PDO::PARAM_STR);

    //         // Execute the statement
    //         $statement->execute();
    //     } catch (PDOException $e) {
    //         // Handle any exceptions that may occur during the process
    //         echo "Error: " . $e->getMessage();
    //     }
    // }
}
?>
