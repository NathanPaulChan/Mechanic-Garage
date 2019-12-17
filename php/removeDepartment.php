<?php
	//Opening connection to the database
	include ('db_connection.php');
	$conn = openConn();
	
	//Grabbing department information to be deleted
	$DEPART_NAME = $_POST["deptName"];

	//Putting it all in into one long string for the query
	$sql = "DELETE FROM DEPARTMENT WHERE DEPARTMENT_NAME = '$DEPART_NAME'";
						
	//Sending the query and catching any errors
	if(!$conn -> query($sql)){
	    $error = $conn -> error;
	    echo $error;
	} else {
	    echo "Success";
	}
	
	//Closing the connection
	closeConn($conn);
?>