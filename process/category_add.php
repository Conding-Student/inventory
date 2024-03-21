<?php
try {
    require "../classes/Category.php"; // Assuming your class file is named Category.php
    require "../config/connection.php";

    // Instantiate the Category class with the database connection
    $category_table = new Category($connection);

    if(isset($_POST["submit-button"])) 
    {
        $category_name = htmlspecialchars(trim($_POST['category'])); // Assuming your form field name is 'category'

        // Check if category name is empty
        if(empty($category_name)) 
        {
            $error_message = "Category name is empty.";
        } 
        else 
        {
            // Insert the category into the database
            $result = $category_table->insertCategory($category_name);
            if ($result) 
            {
                header("Location: ../add_category.php");
                exit(); // Make sure to exit after redirection
            } 
            else 
            {
                $error_message = "Failed to insert category into the database.";
            }
        }
    }

    if(isset($_POST["cancel-button"])) 
    {
        header("Location: ../index.php");
        exit(); // Make sure to exit after redirection
    }

    } 
    catch (PDOException $error) 
    {
        // Log the error to the error log file
        error_log("Database error: " . $error->getMessage() . "\n", 3, "error_log.txt");
        $error_message = "An error occurred. Please try again later.";
    }

    // Redirect to index.php with error message if there's an error
    if (isset($error_message)) 
    {
        header("Location: ../index.php?error=" . urlencode($error_message));
        exit(); // Make sure to exit after redirection
    }
    
?>
