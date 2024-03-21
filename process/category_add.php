<?php
require "../config/connection.php";
define("FILEPATH","http://localhost/New folder (4)/");
function feedback($message)
{
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='" . FILEPATH . "/index.php';</script>";
}

if (isset($_POST['submit-button'])) {
    $name = trim($_POST['category']);

    // Check if the category already exists
    $search = $connection->prepare('SELECT COUNT(*) FROM category WHERE category_name = :name');
    $search->bindParam(':name', $name, PDO::PARAM_STR);
    $search->execute();
    $name_count = $search->fetchColumn();

    if ($name_count == 0) 
    {
        // Category does not exist, insert into the database
        $insert = $connection->prepare('INSERT INTO category (category_name) VALUES (:name)');
        $insert->bindParam(':name', $name, PDO::PARAM_STR);

        if ($insert->execute()) {
            echo "<script>window.location.href='" . FILEPATH . "/index.php';</script>";
        } else {
            feedback("Error creating category!");
        }
    } else {
        // Category already exists
        feedback("Category already listed!");
    }
} else {
    feedback("Button has not yet been clicked!");
}
?>
