<?php 

class essential_functionality
{
    // Properties / Fields
    private $connection;

    // Constructor
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function get_last_value()
    {
         // Perform database query using the connection
         $result = $this->connection->query("SELECT LAST_INSERT_ID()");
    }
}


