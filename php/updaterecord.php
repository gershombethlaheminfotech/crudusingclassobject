<?php
    require 'connection.php';
    class updaterecord extends database
    {
        function updaterecord_function()
        {
        if(isset($_POST['save']))
        {   
        $id = $_POST['id'];
        $Name = $_POST['name'];
        $Degree = $_POST['degree'];
        $Department = $_POST['department'];
        $Regulation = $_POST['regulation'];
        $query = "UPDATE studenttable SET id='" . $id . "',name='" . $Name . "', Degree='" . $Degree . "', department='" . $Department . "', regulation='" . $Regulation . "' WHERE ID=" . $id;
        $result = mysqli_query($this->connection, $query);
            if($result)
            {
            echo "<script>alert('You Have Updated Successfully!');</script>";
            echo "<a href='select.php'>View All Data</a>";
            }  
            else
            echo "<script>alert('Failed Not Updated!');</script>";
        }
        else
        {
        echo "Your Not Allowed .Not Updated";
        echo "<a href='select.php'>Go Back</a>";
        }
        }
    }
    $obj = new updaterecord();
    $obj->updaterecord_function();
?>