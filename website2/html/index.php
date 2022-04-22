<?php
   $servername = "db";
   $username = "devops";
   $password = "devops101";

   $dbhandle = mysqli_connect($servername,$username,$password);
   $selected = mysqli_select_db($dbhandle, "titanic");
   echo "Hello : from hostname " . $_SERVER['HTTP_HOST'] . "<br>";
   echo "Connected database server<br>";
   echo "Selected database";
?>
