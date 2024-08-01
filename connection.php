<?php
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="sit_placement";
   $conn = mysqli_connect($servername,$username,$password,$dbname);

   if($conn)
   {
   //  echo"connection is ok";
   }
    else{
    echo"connection is failed";
   }
?>