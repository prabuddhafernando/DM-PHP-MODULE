<?php 
 		session_start();
   		require_once '../db/dbConnection.php';
   		//require_once './client.php';
									

									// Check connection
		if($conn === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}else{

			$cname = $_POST['cname'];
			$address = $_POST['address'];
			$country = $_POST['country'];

			// retrieve josn array of contact person
			$contact_person_string = $_POST['contact_person'];
			$contact_person = json_decode($contact_person_string);
			
			$sql = "INSERT INTO client (client_name, Address ,country ) VALUES ('$cname', '$address','$country')";

			if(mysqli_query($conn, $sql)){
   			 echo "Records 1 added successfully<br/>";
			} else{
    			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
			}

			$sql4Client = "select ID from client where client_name ='".$cname."'";
			$result4Client = $conn->query($sql4Client);
			$ID = ""; 
           	if ($result4Client->num_rows > 0) {
              while ($row = $result4Client->fetch_assoc()) {
              		 $ID = $row['ID'];
              }
          	}

			for ($i=0; $i < sizeof($contact_person) ; $i++) { 
			
			$sql2 = "insert into contactperson (ID,contacts) values ('".$ID."','".$contact_person[$i]."')";
				if(mysqli_query($conn, $sql2)){
	   			 echo "Records 2 added successfully<br/>";
				} else{
	    			echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
				}	
			}
 
 			
			header("Location: ../client.php"); /* Redirect browser */
			//close connection
			mysqli_close($conn);
			exit();

		}



?>
