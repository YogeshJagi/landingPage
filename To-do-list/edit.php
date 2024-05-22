<?php

require_once "connection.php";

if($isdbconection)
{

    $id = $_POST['id'];
    $updatetask = $_POST['updatetask'];
    

    $sql  = $conn->query("UPDATE `task` SET `task`= '$updatetask'  WHERE id = $id ");

    header("Location: http://localhost/To-do-list/");
    

    
}

?>