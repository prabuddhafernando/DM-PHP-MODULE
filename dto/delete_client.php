<?php 
 		session_start();
   		require_once '../db/dbConnection.php';
									

									// Check connection
		if($conn === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}else{

			$clients = $_POST['clients'];

			$data = json_decode($clients);

			$f = "";
			for ($i=0; $i < sizeof($data) ; $i++) { 
				$f = $f."'".$data[$i]."',";
			}
			$f = rtrim($f,',');

			$sql = "delete FROM `client` WHERE client_name IN (". $f.")";

			if(mysqli_query($conn, $sql)){
   			 echo "<h3>Please Wait</h3>
   			 <script>
   			 window.location = '../client.php';
   			 </script>
   			 ";

   			 
			} else{
    			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
			}
 
			// close connection
			mysqli_close($conn);

		}



?>
