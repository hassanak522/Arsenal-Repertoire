<?php

session_start();
include "db_connect.php";
if (isset($_POST['CODE']) ) {
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
							  
	}
	$CODE = validate($_POST['CODE']);

    
	if (empty($CODE)) {
		header("Location: authentication.php?error=User Name is required");
		exit();
							  
	
	}else{
		
		$sql = "SELECT * FROM code_info WHERE CODE='$CODE' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['CODE'] === $CODE )			{
				echo "Logged in!";
			    $_SESSION['CODE'] = $row['CODE'];

               

                header("Location:feedbackReport.php");

                exit();
									  
			}else{
				header("Location: authentication.php?error=Incorect User name or password");

                exit();
								   
			}
							   
						  	
		}else{
							
			header("Location: authentication.php");

            exit();
			
		}
							
?>							

                         
