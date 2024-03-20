<?php 

class Category
{
    // Properties / Fields
    private $id;
    private $category_name;
    private $connection; // Add a property for database connection

    // Constructor
    public function __construct($connection,$category_name="placeholder")
    {
        $this->category_name = $category_name;
    }

    public function getAll()
    {
        try {
            // Perform database query using the connection
            $result = $this->connection->query("SELECT * FROM category");
            $result->execute();
            // Check if query was successful
            if ($result) {
                // Fetch data and return
                return $categories=$result->fetchAll(PDO::FETCH_OBJ);
            } else {
                // Handle query error
                $errorInfo = $this->connection->errorInfo();
                $errorMessage = "Database error: " . $errorInfo[2];
                error_log($errorMessage);
                return false;
            }
        } catch (PDOException $error) {
            // Handle PDO exceptions
            error_log("Data connection failed: " . $error->getMessage() . "\n", 3, "error_log.txt");
            return "There is no respond at your request";
        }
    }

}

?>
