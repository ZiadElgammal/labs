<?php

/*if (file_get_contents('php://input',true)){
	$imported_data =file_get_contents('php://input',true);
	$data = json_decode($imported_data, TRUE);

	if(empty($data["username"])||empty($data["password"]))
	{
		echo " you did not send username or password <br/> <br/> ";
		die;
	}
	$username = $data["username"];
	$password = $data["password"];

	//echo "username: " . $username . "</br>"; 
	//echo "password: " . $password . "</br>";

}
if(empty($data)) {
	echo " you did not send username or password <br/> <br/> ";
	die;
}
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usersdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
          echo "Connected successfully to database <br/> ";
               //    select * from users where username='root' and password = 'aasdad'
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
			   
$sql = "SELECT * FROM users WHERE username  = '[$username]'and password = '[$password]'  ";



$con_results = mysqli_query($conn, $sql);

$usersdb = array(); //this array for save data from database  iside 

while($row = mysqli_fetch_assoc($con_results)) {
  $usersdb[]=$row;
}
//echo "this is data for user:"." ";

print_r(json_encode($usersdb) );

/*if( $row !== false){
   echo "user is found ,you have logged in";
die();
   }*/

     if(empty($usersdb['$username'])){
	echo " “error_code”:101 <br/>";
	echo "user not found ";
   }

else{
	echo "“error_code”:102,“error_message”:”User not found”,";
}




?>