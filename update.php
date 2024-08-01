<?php
include "config.php";
$name ='';
$address='';
$salary='';
if(isset($_POST["submit"])){
 
    $id=$_POST["id"];
   

        $sql1 = "SELECT * FROM employees WHERE id=$id";
        $result=mysqli_query($link,$sql1);
        if(mysqli_num_rows($result) ==1)
        {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
            $name = $row["name"];
            $address = $row["address"];
            $salary = $row["salary"];
    
            
    
        }
        else{
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
    <title>Update Record</title>
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
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="updatescript.php" method="post">
                    <div class="form-group">
                            <label><?php echo $id; ?></label>
                            
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                            
                        </div>

                        <input type="hidden" name="eid" class="form-control" value="<?php echo $id; ?>">
                        
                        <input type="submit" class="btn btn-primary" name="update" value="Update">
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