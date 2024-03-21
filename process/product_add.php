<?php
require "../config/connection.php"; // Include necessary files and establish connection

define("FILEPATH", "http://localhost/New folder (4)/");

function feedback($message)
{
    echo "<script>alert('$message');</script>";
    //echo "<script>window.location.href='" . FILEPATH . "index.php';</script>";
}

if (isset($_POST['submit-button'])) {
    $product_name = trim($_POST['product_name']);
    $category_id = intval($_POST['category_id']);
    $product_price = intval($_POST['product_price']);
    $product_quantity = intval($_POST['product_quantity']);

    $product_image_tmp = $_FILES['image']['tmp_name'];

    if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        feedback("File upload failed with error code: " . $_FILES['image']['error']);
        exit;
    }

    $format = explode('.', $_FILES['image']['name']);
    $actualName = strtolower($format[0]);
    $actualFormat = strtolower($format[1]);
    $allowedFormats = ['jpg', 'png', 'jpeg', 'gif'];

    $image_name = $actualName . '.' . $actualFormat;
    if (in_array($actualFormat, $allowedFormats)) {
        $location = '../image/' . $actualName . '.' . $actualFormat;

        $insert = $connection->prepare('INSERT INTO product (category_id, name, quantity, price, img) 
        VALUES (:category_id, :product_name, :product_quantity, :product_price, :image)');
        $insert->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        $insert->bindParam(':product_name', $product_name, PDO::PARAM_STR);
        $insert->bindParam(':product_price', $product_price, PDO::PARAM_INT);
        $insert->bindParam(':product_quantity', $product_quantity, PDO::PARAM_INT);
        $insert->bindParam(':image', $image_name, PDO::PARAM_STR);


        if ($insert->execute()) {
            if (move_uploaded_file($product_image_tmp, $location)) {
                header("Location: " . FILEPATH . "index.php");
                exit();
            } else {
                feedback("Error moving uploaded file!");
            }
        } else {
            feedback("Error adding product!");
        }
    } else {
        feedback("Invalid file format!");
    }
} else {
    feedback("Button has not yet been clicked!");
}
?>
