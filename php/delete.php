<?php
    require 'connection.php';
class delete extends database
{
    public function delete_function()
    {
    if (isset($_GET['id']) && $_GET['id']!="")
        {
        $query = "Delete FROM studenttable where id='".$_GET['id']."'";
        $result = mysqli_query($this->connection, $query); 
        if($result) 
            header('Location: select.php'); 
        }
    }
}
$obj = new delete;
$obj->delete_function();
?>
