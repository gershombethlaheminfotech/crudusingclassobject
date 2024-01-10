<?php
    require 'connection.php';
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
        <th>View</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
<?php
    class select extends database
    {
        public function select_function()
        {
        $query = "SELECT * FROM studenttable";
        $result = mysqli_query($this->connection, $query);        
        while($fetch = mysqli_fetch_object($result))
            { 
?>
    <tr>
        <td><?php echo $fetch->id; ?></td>
        <td><?php echo $fetch->name; ?></td>
        <td><?php echo $fetch->Degree; ?></td>
        <td><?php echo $fetch->department; ?></td>
        <td><?php echo $fetch->regulation; ?></td>
        <td><a href='view.php?id=<?php echo $fetch->id; ?>'>View</a></td>
        <td><a href='update.php?id=<?php echo $fetch->id; ?>'>Update</a></td>
        <td><a href='delete.php?id=<?php echo $fetch->id; ?>'>Delete</a></td>
    </tr>
<?php
            } 
        }
    }
$obj = new select();
$obj->select_function();
?>
    <tr><th colspan="8" ><a href="insert.php">Insert Data</a></th></tr>
</table>
</body>
</html>