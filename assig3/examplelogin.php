<?php

//get values from html form
$username = $_POST['username'];
$password = $_POST['password'];
 if(!empty($username) && !empty($password))
 {
//connect to server and select database
mysql_connect("localhost","root","","usersdb");
mysql_select_db("usersdb");

//query database for user
$result = mysql_query("select*from users where username = '$username' and password = '$password'") ;

$row = mysql_fetch_array($result);

if($row['username']== $username && $row ['password'] == $password){
	include("login_contact.php");
} 

else{
	echo"failed to login ";
       }
	}
	else{
		echo "empty user name or password";
	}


?>