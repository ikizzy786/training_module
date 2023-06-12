<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard_hr</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
	<!-- Javascript 
<script>
$(document).ready(function() {
  $('#supervisor_form').submit(function(event) {
    event.preventDefault(); // Prevent form from submitting normally
    var formData = new FormData(this); // Create new FormData object
    $.ajax({
      type: 'POST',
      url: 'verify.php', // Replace with the URL of the server-side script that will handle the form submission
      data: formData,
      processData: false,
      contentType: false,
      success: function(data) {
        // Handle success response
        console.log(data);
      },
      error: function(xhr, textStatus, errorThrown) {
        // Handle error response
        console.log(xhr.responseText);
      }
    });
  });
});
</script>-->

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


    <!-- HR VERIFY POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Verify Training Documents </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="verify.php" method="POST" id="supervisor_form">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">
						
						<div class="form-group">
                            <label><B>Name of the Training</B></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name of the Training" disabled>
                        </div>
                        <div class="form-group">
                            <label><B>Duration</B></label>
                        </div>
                        <div class="form-group">
                            <label><B>Start Date and Time</B></label>
                            <input disabled type="datetime-local" class="form-control"  placeholder="Start date" name="startdatestarttime" id="startdatestarttime">
                        </div>
                        
                        <div class="form-group">
                            <label><B>End Date and Time</B></label>
                            <input disabled type="datetime-local" name="enddateendtime" id="enddateendtime" class="form-control" placeholder="End Date">
                        </div>
						
							<div class="form-group">
							<label><B>Total Duration</B></label>
							<input disabled  type="text" class="form-control"
							placeholder="Total No of Hours" name="totalnohours" id="totalnohours">
						</div>
						<div class="form-group">
							<label><B>Training Organized by:</B></label>
							<input disabled type="text" class="form-control" 
							placeholder="Training Organized By" name="trainingorganized" id="trainingorganized">
						</div>
						<div class="form-group">
							<label><B>Training Attendance Type</B></label><BR>
						    <input disabled type="radio"  name="attendancetype" id="attendancetype1" value="Online">
							<label for="online">Online</label><br>
							<input disabled type="radio"  name="attendancetype" id="attendancetype2" value="Physical">
							<label for="online">Physical</label><br>
						</div>
						<div class="form-group">
							<label for="trainings"><B>Type of Training:</B></label>
							<select  disabled id="typeoftrainings" name="typeoftraining" id="typeoftraining">
								<option value="training">Training</option>
								<option value="workshop">Workshop</option>
								<option value="seminar">Seminar</option>
								<option value="conference">Conference</option>
								<option value="shortcourse">Short Course</option>
							</select>
						</div>
						<div class="form-group">
							<label for="trainingoutcomes"><B>Training Outcomes:</B></label>
							<textarea  disabled name="trainingoutcomes" id="trainingoutcomes"></textarea>
						</div>
			
						<!--<div class="form-group">
							<label for="myfile"><B>Download file:</B></label>
							<!--<input type="file" name="mytrainingdocs" id="mytrainingdocs"> 
							

							<a href="uploads" target="_blank">Download Training Documents</a>
						</div>-->
						
						<label for="myfile"><b>Training Documents:</b></label>
							<ul>
						 <?php
							$dir = "uploads/";
							$files = scandir($dir);
							foreach ($files as $file) {
							if ($file != "." && $file != "..") {
							echo "<li><a href=\"$dir$file\" target=\"_blank\">$file</a></li>";
							}
								}
							?>
							</ul>
						
						 <div class="form-group">
							<label for="hr_approval"><B>HR Approval:</B></label>
							<input type="checkbox" id="hr_approval" name="hr_approval">
						</div>
						
						<div class="form-group">
							<label for="hr_comment"><B>HR Comment:</B></label>
							<textarea class="form-control" id="hr_comment" name="hr_comment"></textarea>
						</div>
						
                    </div>
						<div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Verify</button>
						</div>
                </form>

            </div>
        </div>
    </div>

    

    <div class="container">
        <div class="jumbotron">
		   <!-- Display the table of training documents -->
            <div class="card">
                <h2>HR Dashboard</h2>
            </div>
            <div class="card">
                <div class="card-body">
               
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
                                <th scope="col">Total/No.of Days</th>
                                <th scope="col">Training Organized By</th>
                                <th scope="col">Attendance Type</th>
                                <th scope="col">VERIFY</th>
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
                                    <button type="button" class="btn btn-success editbtn"> VERIFY </button>
                                </td>
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
	// When the "View" button is clicked
            $('.viewbtn').on('click', function () {
				 // Show the view modal
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>


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

<script>
$(document).ready(function() {
  $('#training_form').submit(function(event) {
    event.preventDefault(); // Prevent form from submitting normally
    var formData = new FormData(this); // Create new FormData object
    $.ajax({
      type: 'POST',
      url: 'insertcode.php', // Replace with the URL of the server-side script that will handle the form submission
      data: formData,
      processData: false,
      contentType: false,
      success: function(data) {
        // Handle success response
        console.log(data);
      },
      error: function(xhr, textStatus, errorThrown) {
        // Handle error response
        console.log(xhr.responseText);
      }
    });
  });
});
</script>



	
</body>
</html>