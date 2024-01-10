<?php
    require 'connection.php';
    class view extends database
    {
        public function view_function()
        {   
            if (isset($_GET['id']))
            {
            $query = "select * from studenttable where id='".$_GET['id']. "'";
            $result = mysqli_query($this->connection, $query);
            $obj = mysqli_fetch_object($result);
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>   
    <table class="dbresult">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Degree</th>
        <th>Department</th>
        <th>Regulation</th>
    </tr>
    <tr>
        <td><?php echo $obj->id; ?></td>
        <td><?php echo $obj->name; ?></td>
        <td><?php echo $obj->Degree; ?></td>
        <td><?php echo $obj->department; ?></td>
        <td><?php echo $obj->regulation; ?></td>  
    </tr>
    <tr>
        <th colspan="5" ><a href="insert.php">Insert Data</a></th> 
    </tr>
    <tr>  
        <th colspan="5" ><a href="select.php">View All Data</a></th>
    </tr>
    </table>
<?php
        }
    }
    $viewrec=new view();
    $viewrec->view_function();
?>
</body>
</html>
