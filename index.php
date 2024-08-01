<?php
include "config.php";
                    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
  
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        
                    </div>
                   
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Salary</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    $result = mysqli_query($link, $sql);
                    if($result){
                        if(mysqli_num_rows($result) > 0){
                           
                                while($row = mysqli_fetch_array($result))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?> </td>
                                        <td> <?php echo $row['name'] ?></td>
                                        <td><?php echo  $row['address']?></td>
                                        <td><?php echo  $row['salary'] ?></td>
                                       
                                    </tr>
                                    <?php
                         
                                }
                              
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>

                    
               
                                </tbody>                          
                            </table>

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