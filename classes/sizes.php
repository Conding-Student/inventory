<?php 
class Sizes
{
    // Properties / Fields
    private $connection;

    // Constructor
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    // Method to insert a new category
    public function insertSizes($sizes)
    {
        try {
            // Prepare a SQL statement
            $statement = $this->connection->prepare("INSERT INTO sizes (size) VALUES (:size)");

            // Bind parameters and execute the statement
            $statement->bindParam(':size', $sizes, PDO::PARAM_INT);
            $statement->execute();

            // Return true if insertion is successful
            return true;
        } catch (PDOException $error) {
            // Handle PDO exceptions
            error_log($error->getMessage() . "\n", 3, "error_log.txt");
            return false; // Return false in case of error
        }
    }

    // Method to retrieve all categories
    public function getAll()
    {
        try {
            // Perform database query using the connection
            $result = $this->connection->query("SELECT * FROM sizes");

            // Fetch data and return
            return $result->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $error) {
            // Handle PDO exceptions
            error_log($error->getMessage() . "\n", 3, "error_log.txt");
            return []; // Return an empty array in case of error
        }
    }
}

