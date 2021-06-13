<?php

// $db_handle = pg_connect("host=localhost dbname=employeurdb user=root  password=root");


    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "mybase";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);  
    }
    return  $conn;
    // pg_connect("host=localhost dbname=employeurdb user=root  password=root");
