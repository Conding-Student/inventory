<?php 
class Product_details
{
    // Properties / Fields
    private $connection;

    // Constructor
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    // Method to insert product details
    public function insertproduct_details($generic_id, $color_id, $sizes_id, $stock, $price)
    {
        try {
            // Prepare a SQL statement
            $statement = $this->connection->prepare("INSERT INTO product_details (generic_id, color_id, size_id, stock, price) 
            VALUES (:gen_id, :color_id, :size_id, :stock, :price)");

            // Bind parameters and execute the statement
            $statement->bindParam(':gen_id', $generic_id, PDO::PARAM_INT);
            $statement->bindParam(':color_id', $color_id, PDO::PARAM_INT); // Corrected to PARAM_INT
            $statement->bindParam(':size_id', $sizes_id, PDO::PARAM_INT);
            $statement->bindParam(':stock', $stock, PDO::PARAM_INT);
            $statement->bindParam(':price', $price);
            $statement->execute();

            // Return true if insertion is successful
            return true;
        } catch (PDOException $error) {
            // Handle PDO exceptions and log error message
            error_log($error->getMessage() . "\n", 3, "error_log.txt");
            return false; // Return false in case of error
        }
    }

    // Method to retrieve all product details
    public function getAll()
    {
        try {
            // Perform database query using the connection
            $result = $this->connection->query("SELECT * FROM product_details");

            // Fetch data and return
            return $result->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $error) {
            // Handle PDO exceptions and log error message
            error_log($error->getMessage() . "\n", 3, "error_log.txt");
            return []; // Return an empty array in case of error
        }
    }
}
?>
