

<?php

				
			require_once "connection.php";

            


			if(isset($_GET['id']))
			{

                $id = $_GET['id'];

                // print_r( $id);
				$sql  = $conn->query("DELETE FROM `task` WHERE id = $id ");
				
                

            }


            header("Location: http://localhost/To-do-list/");
  ?>