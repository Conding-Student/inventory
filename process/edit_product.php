<?php
// Include database connection
require "../config/connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_product'])) {
    // Retrieve the submitted data
    $price = $_POST["price"][$_POST['edit_product']];
    $quantity = $_POST["quantity"][$_POST['edit_product']];
    $product_id = $_POST["edit_product"];

    // Update the product record in the database
    $update_query = $connection->prepare("UPDATE product SET price = :price, quantity = :quantity WHERE id = :product_id");
    $update_query->bindParam(":price", $price);
    $update_query->bindParam(":quantity", $quantity);
    $update_query->bindParam(":product_id", $product_id);
    $update_query->execute();

    // Redirect back to the inventory page after updating
    header("Location: ../index.php");
    exit();
} else {
    // If the form is not submitted or the edit_product button is not clicked, redirect back to the inventory page
    header("Location: ../index.php");
    exit();
}
?>
