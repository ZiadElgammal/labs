<<?php
function db_connect()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "contacts";
  /// Create connection
  $conn = new mysqli($servername, $username, $password,$dbname);
  if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
}
}//db_connect close




 ?>
