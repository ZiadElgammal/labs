<?php
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
case 'GET':
echo "get case";
$sql = "select * from `$contacts`".($key?" WHERE id=$key":'');
// handle get contacts here. i,e. call a function that retrieve and return contacts
GetContacts();
break;
case 'PUT':
echo "put case";
//$sql = "update `$table` set $set where id=$key";
// handle updating contacts here. i,e. call a function that update and return a contact

break;

case 'POST':
echo "post case";
//$sql = "insert into `$table` set $set"; break;
break;
case 'DELETE':
echo "delete case";

//$sql = "delete `$table` where id=$key"; break;
}
 ?>
