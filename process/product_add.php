<?php
// Include necessary files and establish connection
require "../classes/category.php";
require "../classes/colors.php";
require "../classes/generic_products.php";
require "../classes/prod_details.php";
require "../classes/sizes.php";
require "../config/connection.php";

try {
    $category = new Category($connection);
    $colors = new Colors($connection);
    $generic_products = new Generic_products($connection);
    $product_details = new Product_details($connection);
    $sizes = new Sizes($connection);

    // Check if form is submitted
    if(isset($_POST["submit-button"])) {
        // Extract form data
        $product_name = trim($_POST['product_name']); 
        $category_id = trim($_POST['category_id']);   
        $product_quantity = trim($_POST['quantity']); 
        $product_price = trim($_POST['price']);       
        $product_description = trim($_POST['description']);
        
        // Process colors and sizes (assuming multiple selections)
        $product_colors = isset($_POST['color_id']) ? $_POST['color_id'] : [];
        $product_sizes = isset($_POST['size_id']) ? $_POST['size_id'] : [];

        // Handle image upload
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image_tmp = $_FILES['image']['tmp_name'];
            $image_name = uniqid() . '_' . $_FILES['image']['name'];
            $location = '../image/' . $image_name;
            move_uploaded_file($image_tmp, $location);
        } else {
            // Log error if file upload fails
            error_log("File upload error: " . $_FILES['image']['error'], 3, "error_log.txt");
            exit;  // Stop execution if there's a file upload error
        }

        // Insert data into database tables

        // Insert category
        $category->insertCategory($category_id);
        $last_id_category = $connection->lastInsertId();

        // Insert colors
        foreach($product_colors as $color) {
            $colors->insertColors($color);
        }

        // Insert sizes
        foreach($product_sizes as $size) {
            $sizes->insertSizes($size);
        }

        // Insert generic product
        $generic_products->insertGeneric_products($product_name, $last_id_category, $product_description, $image_name);
        $last_id_generic = $connection->lastInsertId();

        // Insert product details for each color and size combination
        foreach($product_colors as $color) {
            foreach($product_sizes as $size) {
                $product_details->insertproduct_details($last_id_generic, $color, $size, $product_quantity, $product_price);
            }
        }

        // Redirect after successful submission
        header("Location: ../add_product.php?success=true");
        exit();
    } else {
        // Redirect if form is not submitted
        header("Location: ../index.php");
        exit();
    }
} catch(PDOException $error) {
    // Log or display an error message if a PDOException occurs
    error_log("Database error: " . $error->getMessage(), 3, "error_log.txt");
    // Optionally, display an error message to the user
    echo "An error occurred. Please try again later.";
}
?>
