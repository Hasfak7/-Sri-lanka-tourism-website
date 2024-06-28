<?php
     $serverName = "localhost";
     $userName = "root";
     $password = "";
     $dbName = "srilanka_tourism";
 
     $con = mysqli_connect($serverName, $userName, $password, $dbName);
 
     if(!$con)
     {
         die("Connection Error ". mysqli_connect_error());
     }
?>