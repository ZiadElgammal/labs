<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";


function DB_connection($servername,$username,$password,$dbname)
      {
// Create connection
            $conn = new mysqli($servername, $username, $password,$dbname);
           if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
                }
          echo "Connected successfully to database <br/> ";

}





 ?>
