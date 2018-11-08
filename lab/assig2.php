<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$strp = "the combination of the characters and words
for that make up the words search being conducted
words. For example";
print_r("Search word 'for' : ");
print_r(strfindall('for',$strp));
echo "</br>";

print_r("Search word 'word': ");
print_r(strfindall('word',$strp));
echo "</br>";

print_r("Search word 'TH' : ");
print_r(strfindall('TH',$strp));
echo "</br>";

print_r("Search word 'IUR' : ");
print_r(strfindall('IUR',$strp));
echo "</br>";

function strfindall($str_key, $str_p) {
//YOUR CODE GOES HERE
  strtoupper($str_p);
  $text = array($str_p);
  foreach($text as $var){
		return substr_count ( string $text , string $str_key  )
		
		$pos = ( strpos(strtoupper ($str_key) ) , ($text) );

		if($pos !== FALSE){
			print_r($var);
		                  }
                        }
}?>