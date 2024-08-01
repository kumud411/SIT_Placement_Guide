<?php
include "config.php";
if(isset($_POST["submit"])){
 
    $name=$_POST["name"];
    $address=$_POST["address"]; 
    $salary=$_POST["salary"];


        $sql = "INSERT INTO employees (name, address, salary) VALUES('$name','$address','$salary')";
         $result=mysqli_query($link,$sql);
        if($result){
            
            echo "<h3>Data Inserted successfully....</h3>";
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        
         
      
    
    // Close connection
    mysqli_close($link);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form  method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control ">
                           
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control"></textarea>
                            
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control">
                          
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>

                <div>  <br><br>
                <a href="index.php"> <button>View</button></a>
                           <a href="create.php"> <button>Insert</button></a>
                           <a href="edit.php"><button>Edit</button></a>
                           <a href="deletedata.php">  <button>Delete</button></a>
                           </div>
            </div>        
        </div>
    </div>
</body>
</html>