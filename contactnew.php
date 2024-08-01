<?php
include "connection.php";

if (isset($_POST['contactsubmit'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   
   $sql = "INSERT INTO `contact` (`Stud_name`, `Email`, `Message`) VALUES ('$name', '$email', '$subject')";
   

   if (mysqli_query($conn, $sql)) {
      echo "Data inserted successfully";
   } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}
?>
