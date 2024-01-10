<?php
    require 'connection.php';
    class update extends database
    {
    function update_function()
    {
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM studenttable where id=$id"; 
        $result = mysqli_query($this->connection, $query);
        $numrow = mysqli_num_rows($result);
            if($numrow==1)
            {
                $row = mysqli_fetch_object($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
        <div class="container mt-5 ">
        <div class="row justify-content-center">
        <div class="col-md-3">
            <form action="updaterecord.php" method="post"> 
                <div> 
                    <label class="form-label">ID</label>
                    <input name="id" class="form-control" type="text" value="<?php echo $row->id; ?>" readonly>
                </div>
                <div> 
                    <label class="form-label">Name</label>
                    <input name="name" class="form-control" type="text" placeholder="Enter The Name" value="<?php echo $row->name; ?>">
                </div>
                <div>
                    <label class="form-label">Degree</label>
                    <input name="degree" class="form-control" type="text" placeholder="Enter The Degree" value="<?php echo $row->Degree?>">
                </div>
                <div>
                    <label class="form-label">Department</label>
                    <input name="department" class="form-control" type="text" placeholder="Enter The Department" value="<?php echo $row->department?>">
                </div>
                <div>
                    <label class="form-label">Regulation</label>
                    <input name="regulation" class="form-control" type="text"placeholder="Enter The Regulation" value=" <?php echo $row->regulation?>">
                </div>
                    <button name="save" type="submit" class="mt-3 btn btn-danger" value="Update">Update</button>
                    <a href="select.php" class="mt-3 btn btn-danger" >View All Data</a>
            </form>
        </div>
        </div>
        </div>
<?php 
        }
else 
    echo "Record Not Found";
    }
else 
    echo "Your Not Allowed";
    }
    }
$obj= new update();
$obj->update_function();
?>
</body>
</html>