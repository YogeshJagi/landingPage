



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


  
</head>
<body>


<div id="popo">



<?php

          require_once "connection.php";

        if(isset($_GET['id']))
		{
			$userId = $_GET['id'];

            // print_r($userId);

		
			$sql  = $conn->query("SELECT * FROM `task` WHERE id = $userId LIMIT 1");

             $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

			 foreach($rows as $row)
                 
                    

          {
           ?>

<form action="edit.php" method="post">
<h2>Update Task</h2>

<input type="hidden" placeholder="Enter your Name" value = <?php echo $row['id']?> name="id">




<input type="text" placeholder = "update your task" name = "updatetask" value = '<?php echo $row['task']?>'>

<button >update task</button>
</form>

          <?php

          }
        }?>
</div>
    
<script src="assets/app.js"></script>
</body>
</html>
