<?php

namespace App\Database;

use mysqli;

class Connection
{
    private $conn;

    /**
     * Establish a connection to the database.
     *
     * @throws \Exception if connection fails
     */
    public function __construct()
    {
        // $hostname = 'localhost';
        // $username = 'root';
        // $userpassword = '1234';
        // $dbname = 'store1';
            // Use the Railway MySQL connection details
            $hostname = 'mysql.railway.internal';  // The host from your Railway connection string
            $username = 'root';  // The username for Railway
            $userpassword = 'VQzXuJBkVxDCwHBnOUcaVJFCExlTVpyN';  // The password for Railway
            $dbname = 'railway';  // The name of the database (or the one you imported)
    
        // Create connection
        $this->conn = new mysqli($hostname, $username, $userpassword, $dbname);

        // Check connection and throw an exception on failure
        if ($this->conn->connect_error) {
            throw new \Exception('Connection failed: ' . $this->conn->connect_error);
        }
    }

    /**
     * Get the established database connection.
     *
     * @return mysqli
     */
    public function getConnection(): mysqli
    {
        return $this->conn;
    }
}
