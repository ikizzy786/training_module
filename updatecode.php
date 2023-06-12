<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'demo');
var_dump($_POST);
    if(isset($_POST['updatedata']))
    {   

        $id = $_POST['update_id'];
        
		$name = $_POST['name'];
		$startdatestarttime = $_POST['startdatestarttime'];
		$enddateendtime = $_POST['enddateendtime'];
		$totalnohours = $_POST['totalnohours'];
		$trainingorganized = $_POST['trainingorganized'];
		$attendancetype = $_POST['attendancetype'];
	
		$typeoftraining = $_POST['typeoftraining'];
		$trainingoutcomes = $_POST['trainingoutcomes'];
		$mytrainingdocs = $_POST['mytrainingdocs'];
	

	
	//$query = "UPDATE crud SET name='$name', startdatestarttime='$startdatestarttime', enddateendtime='$enddateendtime',
		//totalnohours='$totalnohours', trainingorganized='$trainingorganized',attendancetype='$attendancetype',typeoftraining='$typeoftraining',
		//trainingoutcomes='$trainingoutcomes',mytrainingdocs='$mytrainingdocs' WHERE id='$id' ";
	//	$query_run = mysqli_query($connection, $query);
		
		
		$query = "UPDATE crud SET ";
		if(!empty($name)) {
		$query .= "name='$name', ";
		}
		if(!empty($startdatestarttime)) {
		$query .= "startdatestarttime='$startdatestarttime', ";
		}
		if(!empty($enddateendtime)) {
		$query .= "enddateendtime='$enddateendtime', ";
		}
		if(!empty($totalnohours)) {
			$query .= "totalnohours='$totalnohours', ";
		}
		if(!empty($trainingorganized)) {
			$query .= "trainingorganized='$trainingorganized', ";
		}
		if(!empty($attendancetype)) {
			$query .= "attendancetype='$attendancetype', ";
		}
		if(!empty($typeoftraining)) {
			$query .= "typeoftraining='$typeoftraining', ";
		}
		if(!empty($trainingoutcomes)) {
			$query .= "trainingoutcomes='$trainingoutcomes', ";
		}
		if(!empty($mytrainingdocs)) {
			$query .= "mytrainingdocs='$mytrainingdocs', ";
		}

		// Remove the last comma
		$query = rtrim($query, ", ");

		$query .= "WHERE id='$id' ";
		$query_run = mysqli_query($connection, $query);
	
        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
		

    }
?>


