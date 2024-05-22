<?php

require_once "connection.php";

if($isdbconection)
{
    
    $task = $_POST["task"];

    if($task =="")
    {
       
        header("Location: http://localhost/To-do-list/");
    }
        

    else
    {

      $sql = "INSERT INTO `task`( `task`) VALUES ('$task')";

      $conn->exec($sql);
      // echo "New record created successfully";
      header("Location: http://localhost/To-do-list/");
    }

    
    }

?>


