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
                    <h2 class="mt-5">Edit Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="update.php" method="post">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" class="form-control ">
                           
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