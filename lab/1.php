<html>
<?php

$contacts = array(
		array (
			"name"=>"Mohammed Ali",
			"age" => 66,
			"email" => "m@m.com"
		
		),
		array (
			"name"=>"Sameh Khalil",
			"age" => 77,
			"email" => "m2@m2.com"
		
		)
		
		,
		array (
			"name"=>"Ziad Gamal",
			"age" => 77,
			"email" => "z2@m2.com"
		
		)
	);
	foreach($contacts as $sandouk){
		//strpos: search for a value in a string and returns the position
		//returns FALSE if nothing found.
		//http://php.net/manual/en/function.strpos.php
		
		$pos = (strpos(strtoupper($sandouk['name']),strtoupper(('moh'))));

		if($pos !== FALSE){
			print_r($sandouk);
		}
		//echo $sandouk['name']."</br>";
		//echo $sandouk['email']."</br>";
		
	}





?>
</html>