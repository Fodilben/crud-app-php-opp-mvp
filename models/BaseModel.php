<?php
// models/BaseModel.php
require_once("config.php");
class BaseModel {
    protected $db;

public function __construct() {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            // Adjust the database connection parameters as needed
            $this->db = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    // Implement common CRUD methods or other shared functionalities here
public function getAll($use) {
    $dbs=$use . 's';
        try {   
            //  $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            // // Adjust the database connection parameters as needed
            // $this->db = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
            $stmt = $this->db->query("SELECT * FROM $dbs");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
    public function add($value,$value2,$value3, $use) {
        try {
        // Assuming '$use' is the name of the table and 'name' is the actual column name
        $query = "INSERT INTO {$use}s (name, email,phone) VALUES (:name,:email,:phone)";

        // Prepare the SQL statement
        $statement = $this->db->prepare($query);

        // Bind the parameter
        $statement->bindParam(':name', $value);
        $statement->bindParam(':email', $value2);
        $statement->bindParam(':phone', $value3);

        // Execute the query
        $statement->execute();

        // Return the ID of the last inserted row
        return $this->db->lastInsertId();
    } catch (PDOException $e) {
        // Handle the exception (e.g., log the error, display a user-friendly message)
        die("Error: " . $e->getMessage());
    }
}
public function delete($Id,$use) {
        $dbs=$use . 's';
        try {
            // Prepare the SQL statement
            $query = "DELETE FROM $dbs WHERE id = :id";
            $statement = $this->db->prepare($query);

            // Bind the parameter
            $statement->bindParam(':id', $Id, PDO::PARAM_INT);

            // Execute the statement
            $statement->execute();

            // Close the database connection
            
        } catch (PDOException $e) {
            // Handle any exceptions that may occur during the process
            echo "Error: " . $e->getMessage();
        }
}
    

public function getElementById($Id,$use) {
    $dbs=$use . 's';
        try {
            // Prepare the SQL statement
            $query = "SELECT * FROM {$dbs} WHERE id = :id";
            $statement = $this->db->prepare($query);

            // Bind the parameter
            $statement->bindParam(':id', $Id, PDO::PARAM_INT);

            // Execute the statement
            $statement->execute();

            // Fetch the result as an associative array
            $student = $statement->fetch(PDO::FETCH_ASSOC);

            return $student;
        } catch (PDOException $e) {
            // Handle any exceptions that may occur during the process
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

public function update($Id,$name,$email,$phone,$use) {
    $dbs=$use . 's';
        try {
           
            // Prepare the SQL statement for updating
          $query = "UPDATE {$dbs} SET name = :name, email = :email,phone= :phone WHERE id = :id";

            $statement = $this->db->prepare($query);

            // Bind the parameters
            $statement->bindParam(':id', $Id, PDO::PARAM_INT);
            $statement->bindParam(':name', $name, PDO::PARAM_STR);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->bindParam(':phone', $phone, PDO::PARAM_STR);

            // Execute the statement
            $statement->execute();
        } catch (PDOException $e) {
            // Handle any exceptions that may occur during the process
            echo "Error: " . $e->getMessage();
        }
}
}
?>
