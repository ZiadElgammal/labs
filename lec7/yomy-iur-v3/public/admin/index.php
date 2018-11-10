<?php
require_once '../../private/initialize.php';
require_once PRIVATE_PATH.'/admin_header.php';
/*
//NEW
$args['name'] = "iur iur 1";
$args['photo'] = "iur iur photo 1";
$cat1 = new Category($args);
$cat1 -> create();
*/
$args['id'] = 23;
$args['name'] = "iur iur22 1";
$args['photo'] = "iur iu222r photo 1";
$cat1 = new Category($args);
$cat1 -> update();

/*
//DELETE
$args['id'] = 24;
$cat1 = new Category($args);
$cat1 -> delete();
*/
 ?>
