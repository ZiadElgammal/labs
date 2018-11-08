<?php

echo "this is index.php file";

//if (isset($_GET['name'])){
//echo "hello" . $_GET['name'];
//}else{
  //echo"no name is sent ";
    //}
    if (isset($_post['name'])){
    echo "hello" . $_post['name'];
    }else{
      echo"no name is sent ";
        }
?>
