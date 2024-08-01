<?php
include "config.php";
if(isset($_POST["update"])){

    $UID= $_POST['eid'];
    $name=$_POST["name"];
    $address=$_POST["address"]; 

    $salary=$_POST["salary"];


    $sql = "UPDATE employees SET name='$name', address='$address', salary='$salary' WHERE id=$UID";
    $result=mysqli_query($link,$sql);
    if($result)
    {
        echo "<h3>Data Updated Successfully...</h3>";
        header("location: index.php");
        exit();
        
    }
    else{
        echo "Oops! Something went wrong. Please try again later.";
    }

}

?>