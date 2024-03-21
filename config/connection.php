<?php
try
{
    // use constant variable to avoid modifications
    define("host","localhost");
    define("user","root");
    define("password","");
    define("dbname","itst");

    // Setting up a connection into the database
    $connection = new pdo("mysql:host=".host.";dbname=".dbname.";",user,password);

    // If there is an error occur this syntax will throw the error
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $error)
{
    // safety debugging to hide error code at the ui, can be viewed at the text file
    error_log("Data connection failed: " . $error->getMessage() . "\n", 3, "error_log.txt"); 

    echo "Data connection failed. Please try again later.";
    exit; // Exit the script
}

