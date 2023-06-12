<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	

 <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!-- DataTables stylesheet -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap library -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Another Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<!-- The following code sets up the page's body and includes three modal pop-up forms -->
    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Training Documents </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcode.php" id="mytrainingdocs" enctype="multipart/form-data" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label><B>Name of the Training</B></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name of the Training" >
                        </div>
                    <div class="form-group">
                            <label><B>Duration</B></label>
                        </div>
                        <div class="form-group">
                            <label><B>Start Date and Time</B></label>
                            <input type="datetime-local" class="form-control"  placeholder="Start date" name="startdatestarttime" >
                        </div>

                        <div class="form-group">
                            <label><B>End Date End Time</B></label>
                            <input type="datetime-local" name="enddateendtime" class="form-control" placeholder="End Date">
                        </div>
						
							<div class="form-group">
							<label><B>Total Duration</B></label>
							<input type="text" class="form-control"
							placeholder="Total No of Hours" name="totalnohours" id="totalnohours">
						</div>
						<div class="form-group">
							<label><B>Training Organized by:</B></label>
							<input type="text" class="form-control" 
							placeholder="Training Organized By" name="trainingorganized">
						</div>
						<div class="form-group">
							<label><B>Training Attendance Type</B></label><BR>
						    <input type="radio"  name="attendancetype" value="Online">
							<label for="online">Online</label><br>
							<input type="radio"  name="attendancetype" value="Physical">
							<label for="online">Physical</label><br>
						</div>
						<div class="form-group">
							<label for="cars"><B>Type of Training:</B></label>
							<select id="typeoftrainings" name="typeoftraining">
								<option value="training">Training</option>
								<option value="workshop">Workshop</option>
								<option value="seminar">Seminar</option>
								<option value="conference">Conference</option>
								<option value="shortcourse">Short Course</option>
							</select>
						</div>
						<div class="form-group">
							<label for="trainingoutcomes"><B>Training Outcomes:</B></label>
							<textarea name="trainingoutcomes"></textarea>
						</div>

						<div class="form-group">
							<label for="mytrainingdocs"><B>Upload Training Documents:</B></label>
							<input type="file" class="form-control"  id="mytrainingdocs" name="mytrainingdocs">
						</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Training Documents </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">
						
						<div class="form-group">
                            <label><B>Name of the Training</B></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name of the Training">
                        </div>
                        <div class="form-group">
                            <label><B>Duration</B></label>
                        </div>
                        <div class="form-group">
                            <label><B>Start Date and Time</B></label>
                            <input type="datetime-local" class="form-control"  placeholder="Start date" name="startdatestarttime" id="startdatestarttime">
                        </div>
                        
                        <div class="form-group">
                            <label><B>End Date and Time</B></label>
                            <input type="datetime-local" name="enddateendtime" id="enddateendtime" class="form-control" placeholder="End Date">
                        </div>
						
							<div class="form-group">
							<label><B>Total Duration</B></label>
							<input type="text" class="form-control"
							placeholder="Total No of Hours" name="totalnohours" id="totalnohours">
						</div>
						<div class="form-group">
							<label><B>Training Organized by:</B></label>
							<input type="text" class="form-control" 
							placeholder="Training Organized By" name="trainingorganized" id="trainingorganized">
						</div>
						<div class="form-group">
							<label><B>Training Attendance Type</B></label><BR>
						    <input type="radio"  name="attendancetype" id="attendancetype1" value="Online">
							<label for="online">Online</label><br>
							<input type="radio"  name="attendancetype" id="attendancetype2" value="Physical">
							<label for="online">Physical</label><br>
						</div>
						<div class="form-group">
							<label for="trainings"><B>Type of Training:</B></label>
							<select  name="typeoftraining" id="typeoftraining">
								<option value="training">Training</option>
								<option value="workshop">Workshop</option>
								<option value="seminar">Seminar</option>
								<option value="conference">Conference</option>
								<option value="shortcourse">Short Course</option>
							</select>
						</div>
						<div class="form-group">
							<label for="trainingoutcomes"><B>Training Outcomes:</B></label>
							<textarea name="trainingoutcomes" id="trainingoutcomes"></textarea>
						</div>
						<div class="form-group">
							<label><B>Upload Supporting Documents</B></label>
						</div>
						<div class="form-group">
							<label for="myfile"><B>Select a file:</B></label>
							<input type="file" name="mytrainingdocs" id="mytrainingdocs">
						</div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Training Documents </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="jumbotron">
		   <!-- Display the table of training documents -->
            <div class="card">
                <h2>Add Training Documents</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
           <!-- Connect to the MySQL database -->
                    <?php
					
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'demo');
			// Select all records from the 'crud' table
                $query = "SELECT * FROM crud";
                $query_run = mysqli_query($connection, $query);
            ?>
			
                <!-- Display the table using Bootstrap classes -->
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
						   
                            <tr>
                                <th scope="col">S1 no</th>
                                <th scope="col">Name of the Training</th>
                                <th scope="col">Total/No of hours</th>
                                <th scope="col">Training Organized By</th>
                                <th scope="col">Attendance Type</th>
                                <th scope="col">EDIT</th>
                                <th scope="col">DELETE</th>
								<th scope="col">Supervisor</th>
								<th scope="col">HR</th>
                            </tr>
                        </thead>
							<!-- Loop through the fetched records and display them in the table -->
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['totalnohours']; ?> </td>
                                <td> <?php echo $row['trainingorganized']; ?> </td>
                                <td> <?php echo $row['attendancetype']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
								<td> <?php echo $row['supervisor_comment']; ?> </td>
								<td> <?php echo $row['hr_comment']; ?> </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


        </div>
    </div>
	
<script>
$(function() {
    // Listen for changes in the start and end date/time fields
    $('input[name="startdatestarttime"], input[name="enddateendtime"]').on('change', function() {
        // Get the start and end date/time values
        var startDateTime = $('input[name="startdatestarttime"]').val();
        var endDateTime = $('input[name="enddateendtime"]').val();
        
        // If both fields have values
        if (startDateTime && endDateTime) {
            // Convert the date/time strings to Date objects
            var startDate = new Date(startDateTime);
            var endDate = new Date(endDateTime);
            
            // Calculate the difference in hours between the start and end dates
            var duration = Math.abs(endDate - startDate) / 36e5;
            
            // Set the value of the Total Duration field
            $('#totalnohours').val(duration);
		
        }
    });
});
</script>


<!-- Include necessary CSS and JS files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<!-- Include DataTables CSS and JS files -->
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
	


    <script>
	// When the document is ready, execute the following function
        $(document).ready(function () {
      // Initialize the DataTable
            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>

    <script>
	// When the document is ready, execute the following function
        $(document).ready(function () {
    // When the "Delete" button is clicked
            $('.deletebtn').on('click', function () {
     // Show the delete modal
                $('#deletemodal').modal('show');
    // Find the row associated with the clicked button
                $tr = $(this).closest('tr');
     // Get the data from the row
                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();
    // Log the data to the console for debugging purposes
                console.log(data);
     // Fill in the hidden input field with the ID of the row to delete
                $('#delete_id').val(data[0]);

            });
        });
    </script>


<script>
// When the document is ready, execute the following function
$(document).ready(function () {
// When the "Edit" button is clicked
    $('.editbtn').on('click', function () {
 // Show the edit modal
        $('#editmodal').modal('show');
// Find the row associated with the clicked button
        $tr = $(this).closest('tr');
 // Get the data from the row
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
 // Log the data to the console for debugging purposes
        console.log(data);
// This block of code sets the values of different form fields with the data retrieved from the clicked row of the table
        $('#update_id').val(data[0]);
        $('#name').val(data[1]);
        $('#startdatestarttime').val(data[2]);
        $('#enddateendtime').val(data[3]);
        $('#totalnohours').val(data[4]);
        $('#trainingorganized').val(data[5]);
        $('input[name="attendancetype"][value="' + data[6] + '"]').prop('checked', true);
        $('#typeoftraining').val(data[7]);
        $('#trainingoutcomes').val(data[8]);
         
    });
});
</script>


	
	
</body>
</html>