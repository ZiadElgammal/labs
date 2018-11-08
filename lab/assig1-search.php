<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
 $strp = "the combination of characters and words for that make
  up the search being conducted. For example";
echo "Search word 'for' : ".strfind('for',$strp) ."</br>";
echo "Search word 'word': ".strfind('word',$strp) ."</br>";
echo "Search word 'THE' : ".strfind('THE',$strp) ."</br>";
echo "Search word 'IUR' : ".strfind('IUR',$strp) ."</br>";

function strfind($str_key, $str_p) {
//YOUR CODE GOES HERE
     $str_key = strtoupper($str_key);
     $str_p = strtoupper($str_p);     
	  return(strpos (  $str_p ,  $str_key  ));
		
		}
		
		
	

?>	
</body>