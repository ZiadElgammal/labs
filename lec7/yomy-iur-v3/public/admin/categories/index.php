<?php
require_once '../../../private/initialize.php';
require_once PRIVATE_PATH.'/admin_header.php';
 ?>


<div class="container">

<?php
$args['name'] = 'IUR cat 33';
$args['photo'] = 'IUR photo 33';
$args['id'] = 24;
$nCat = new Category($args);

if($nCat->delete())
echo "deleted";


//$result  = Category::find_all();
$result  = Category::find_by_id(5);
print_r($result);

?>
</div>
