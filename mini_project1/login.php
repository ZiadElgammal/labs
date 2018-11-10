 <?php

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
echo "post method";
   if (isset($_POST['username'])) {
     $username = $_POST['username'];
  echo "$username";
   }

   if (isset($_POST['password'])) {
     $password = $_POST['password'];
   }




}
 ?>
