<?php
// Include database connection
require "../config/connection.php";

// Check if the form is submitted and the product ID to delete is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_product'])) {
    // Retrieve the product ID to be deleted
    $product_id = $_POST["delete_product"];

    // Prepare and execute the query to delete the product
    $delete_query = $connection->prepare("DELETE FROM product WHERE id = :product_id");
    $delete_query->bindParam(":product_id", $product_id);
    $delete_query->execute();

    // Redirect back to the inventory page after deletion
    header("Location: ../index.php");
    exit();
} else {
    // If the form is not submitted or the product ID to delete is not set, redirect back to the inventory page
    header("Location: ../index.php");
    exit();
}
?>
