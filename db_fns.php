<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// set variables for database
$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "eeudoxos";

$connection;

// sql statement to set character set
$sql_char_command = "set names 'utf8'";


function db_connect() {
    // Create connection
    $connection = new mysqli($db_servername, $db_username, $db_password, $db_name);
    
    // check connection
    if (!$connection) {
        throw new Exception('Could not connect to database server.');
    }
    else {
        // connection is successful, set encoding to utf8
        if ($connection->query($sql_char_command)) {
            // do nothing
        } // end if
        else {
            echo "Error: " . $sql_char_command . "<br>" . $connection->error;
    } // end else
        
        return $connection;
    }
}