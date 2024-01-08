<?php 
require_once("config.php");
class moduleModel {
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
    public function getAll() {
        
            try {   
                $stmt = $this->db->query("SELECT * FROM modules");
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
    }
    public function add($value,$value2) {
        try {
        // Assuming '$use' is the name of the table and 'name' is the actual column name
        $query = "INSERT INTO modules (name, factor) VALUES (:name, :factor)";

        // Prepare the SQL statement
        $statement = $this->db->prepare($query);

        // Bind the parameter
        $statement->bindParam(':name', $value);
        $statement->bindParam(':factor', $value2);

        // Execute the query
        $statement->execute();

        // Return the ID of the last inserted row
        return $this->db->lastInsertId();
    } catch (PDOException $e) {
        // Handle the exception (e.g., log the error, display a user-friendly message)
        die("Error: " . $e->getMessage());
    }
}
public function delete($Id) {
        try {
            // Prepare the SQL statement
            $query = "DELETE FROM modules WHERE id = :id";
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
public function getElementById($Id) {
    
        try {
            // Prepare the SQL statement
            $query = "SELECT * FROM modules WHERE id = :id";
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
    public function update($Id, $name,$factor) {

        try {
            // Prepare the SQL statement for updating
            $query = "UPDATE modules SET name = :name ,  factor = :factor WHERE id = :id";
            $statement = $this->db->prepare($query);

            // Bind the parameters
            $statement->bindParam(':id', $Id, PDO::PARAM_INT);
            $statement->bindParam(':name', $name, PDO::PARAM_STR);
            $statement->bindParam(':factor', $factor, PDO::PARAM_STR);

            // Execute the statement
            $statement->execute();
        } catch (PDOException $e) {
            // Handle any exceptions that may occur during the process
            echo "Error: " . $e->getMessage();
        }
}
}
?>