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
        $host = 'junction.proxy.rlwy.net'; // Railway DB Host
        $port = '46142';                   // Railway DB Port
        $user = 'root';                    // Username
        $password = 'VQzXuJBkVxDCwHBnOUcaVJFCExlTVpyN';    // MySQL password
        $database = 'railway';  // Database name 
        
        // Create a MySQL connection
        $this->conn = new mysqli($host, $user, $password, $database, $port);
        



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
