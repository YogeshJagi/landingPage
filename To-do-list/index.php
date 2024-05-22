
<?php

require_once "connection.php";
?>






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


<div class="container">
	
	<div class="header">
		<h1>To do list app</h1>	
	</div>
	
	<div class="input-container">
        <form action="addtask.php" method = "post">
		<input type="text" placeholder = "Add New Task" name = "task">
		<button >ADD</button>
		</form>
	</div>
	
	<div class="tast-container">
		<table>

		<?php

				// echo "<br>".$row['task'];
			


			if($isdbconection)
			{
				$sql  = $conn->query("SELECT * FROM `task` ");
				$rows = $sql->fetchAll(PDO::FETCH_ASSOC);

				foreach($rows as $row)
				{
	
						?>

				<tr>
								<td><input type="checkbox" name="" class = "satus"></td>
								<td><?php echo $row['task'];?> </td>
								<td> <a href="update.php?id=<?php echo $row['id']?> " onclick="return updatetask()"><i class="fa-regular fa-pen-to-square" ></i></a> <a href="delete.php?id=<?php echo $row['id']?>" onclick = "return deletetask()"><i class="fa-solid fa-trash" id = "deletebtn"></i></a></td>
							</tr>

				<?php

 
					}

				}

				?>
			<!-- <tr>
			    
				<td>hiii </td>
				<td> <a href="#"><i class="fa-regular fa-pen-to-square" style = "color ="></i></a> <a href="#"><i class="fa-solid fa-trash"></i></a></td>
			</tr> -->

		</table>
		

		
	</div>
	
	
</div>

    <script src="assets/app.js"></script>
</body>
</html>