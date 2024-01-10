<?php
    require 'connection.php';
    class insert extends database
    {
        public function insert()
        {           
        if(isset($_POST["save"]))
        {
            if (empty($_POST["name"]) ||empty($_POST["degree"]) || empty($_POST["department"]) || empty($_POST["regulation"]))
            echo "<script>alert('You Have Not Inserted All Fields!');</script>";  
            else
            {
                $query = "INSERT INTO studenttable(Name, Degree, Department, Regulation)
                values ('".$_POST["name"]."','".$_POST["degree"]."','".$_POST["department"]."','".$_POST["regulation"]."')";
                $result = mysqli_query($this->connection,$query);       
                echo "<script>alert('You Have Inserted Successfully!');</script>";           
            }
        }
        }
    }
    $obj = new insert();
    $obj->insert();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 ">
        <div class="row justify-content-center">
        <div class="col-md-3">
        <form action="" method="post"> 
        <div> 
            <label class="form-label">Name</label>
            <input name="name" class="form-control" type="text" placeholder="Enter The Name">
        </div>
        <div>
            <label class="form-label">Degree</label>
            <input name="degree" class="form-control" type="text" placeholder="Enter The Degree">
        </div>
        <div>
            <label class="form-label">Department</label>
            <input name="department" class="form-control" type="text" placeholder="Enter The Department">
        </div>
        <div>
            <label class="form-label">Regulation</label>
            <input name="regulation" class="form-control" type="text"placeholder="Enter The Regulation">
        </div>   
        <button name="save" type="submit" class="mt-3 btn btn-danger">Insert Data</button>
        <a href="select.php" class="mt-3 btn btn-danger" >View All Data</a>
        </form>  
        </div>
        </div>
    </div>
</body>
</html>
