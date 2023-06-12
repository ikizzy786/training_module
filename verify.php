<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'demo'); 

if(isset($_POST['updatedata']))
{
	$id = $_POST['update_id'];
 
  $supervisor_approval = ($_POST['supervisor_approval']) ? 1 : 0;
  $supervisor_comment = ($_POST['supervisor_comment']) ? $_POST['supervisor_comment'] : '';
  $hr_approval = ($_POST['hr_approval']) ? 1 : 0;
  $hr_comment = ($_POST['hr_comment']) ? $_POST['hr_comment'] : '';
  // Insert data into database
  $query = "INSERT INTO crud (supervisor_approval,supervisor_comment,hr_approval, hr_comment) VALUES ('$supervisor_approval',
  '$supervisor_comment','$hr_approval','$hr_comment')";
  $query_run = mysqli_query($connection, $query);
  
  // Check if insert was successful
  if($query_run)
  {
    // Return success response
    echo 'Verification submitted successfully!';
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
