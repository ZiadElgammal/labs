<?php
/*__FILE__ is always replaced with the filename in which the symbol appears.*/
// echo __FILE__;
//echo dirname(__FILE__);
define("PRIVATE_PATH", dirname(__FILE__));
define("INCLUDES_PATH", PRIVATE_PATH . '/includes');
define("PUBLIC_PATH", dirname(dirname(__FILE__)) . '/public');

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once("database_functions.php");
require_once("classes/Category.php");

$db = db_connect();
Category::set_database($db);

?>
