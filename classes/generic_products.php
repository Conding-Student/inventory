<?php 
class Generic_products
{
    // Properties / Fields
    private $connection;

    // Constructor
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    // Method to insert a new category
    public function insertGeneric_products($name,$cat_id ,$details,$img)
    {
        try {
            // Prepare a SQL statement
            $statement = $this->connection->prepare("INSERT INTO generic_products (name,cat_id ,details,img) 
            VALUES (:name, :cat_id, :details,:img)");

            // Bind parameters and execute the statement
            $statement->bindParam(':name', $name, PDO::PARAM_STR);
            $statement->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);
            $statement->bindParam(':details', $details, PDO::PARAM_STR);
            $statement->bindParam(':img', $img, PDO::PARAM_STR);
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
            $result = $this->connection->query("SELECT * FROM generic_products");

            // Fetch data and return
            return $result->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $error) {
            // Handle PDO exceptions
            error_log($error->getMessage() . "\n", 3, "error_log.txt");
            return []; // Return an empty array in case of error
        }
    }
}

