<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'demo'); 

if(isset($_POST['insertdata']))
{
  // Retrieve form data
  $name = $_POST['name'];
  $startdatestarttime = $_POST['startdatestarttime'];
  $enddateendtime = $_POST['enddateendtime'];
  $totalnohours = $_POST['totalnohours'];
  $trainingorganized = $_POST['trainingorganized'];
  $attendancetype = $_POST['attendancetype'];
  $typeoftraining = $_POST['typeoftraining'];
  $trainingoutcomes = $_POST['trainingoutcomes'];
  
   
									
  // Save training documents to server
  $mytrainingdocs = $_FILES['mytrainingdocs'];
  $target_dir = 'uploads/';
  $target_file = $target_dir . basename($mytrainingdocs['name']);
  move_uploaded_file($mytrainingdocs['tmp_name'], $target_file);
  
  // Insert data into database
  $query = "INSERT INTO crud (name, startdatestarttime, enddateendtime, totalnohours, trainingorganized, attendancetype, typeoftraining, trainingoutcomes, mytrainingdocs) VALUES ('$name', '$startdatestarttime', '$enddateendtime', '$totalnohours',
  '$trainingorganized', '$attendancetype', '$typeoftraining', '$trainingoutcomes', '$target_file')";
  $query_run = mysqli_query($connection, $query);
  
  // Check if insert was successful
  if($query_run)
  {
    // Return success response
    echo 'Training submitted successfully!';
	header("Location: index.php");
  }
  else
  {
    // Return error response
    header('HTTP/1.1 500 Internal Server Error');
    echo 'Error inserting data into database: ' . mysqli_error($connection);
  }
} 
else 
{
  // Return error response
  header('HTTP/1.1 400 Bad Request');
  echo 'Invalid request method.';
}
?>
