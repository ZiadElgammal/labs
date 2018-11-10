<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html>
	<title>Login Page</title>
<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">

<?php
//echo "php file";
//$uuu = $_POST["username"];
//echo $uuu;
//if (empty($_POST["username"])) {
	//echo "empty";// code...
//}
  if (file_get_contents('php://input',true)){
	$imported_data =file_get_contents('php://input',true);
//	$data = json_decode($imported_data, TRUE);

  print_r($imported_data);echo "</br>";
	$username = $data["username"];echo "</br>";
	$password = $data["password"];echo"</br>";

	echo "username: " . $username . "</br>";
	echo "password: " . $password . "</br>";
  	if(empty($_POST["username"])||empty($_POST["password"]))
     	{
	      	echo " you did not send username or password <br/> <br/> ";
	      	die;
     	}
	$username = $data["username"];
	$password = $data["password"];

	echo "username: " . $username . "</br>";
	echo "password: " . $password . "</br>";

}
if(empty($data)) {
	echo " you did not send username or password  2 2 2<br/> <br/> ";
	die;
}
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
</body>
</html>
