<?php
//database connection
require_once('logics/dbconnection.php');
$sqlfetchstudents = mysqli_query($conn, "SELECT * FROM students WHERE id='".$_GET['id']."' ");
while($fetchstudentsrecords =mysqli_fetch_array($sqlfetchstudents))
{
	$fullname = $fetchstudentsrecords['fullname'];
	$email = $fetchstudentsrecords['email'];
	$phonenumber = $fetchstudentsrecords['phonenumber'];
	$gender = $fetchstudentsrecords['gender'];
	$courses = $fetchstudentsrecords['courses'];
	$createdAt = $fetchstudentsrecords['created_at'];

}

?>


<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>

	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-tilte">personal information</h4>
                        </div>
                        <div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">full name: <span class="float-right badge badge-primary"><?php echo $fullname?></span></li>
								<li class="list-group-item">email: <span class="float-right badge badge-secondary"><?php echo $email?></span></li>
								<li class="list-group-item">phone number: <span class="float-right badge badge-danger"><?php echo $phonenumber?></span></li>

							</ul>
						</div>
                    </div>
                </div>
				<div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-tilte">other information</h4>
                        </div>
                        <div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">gender: <span class="float-right badge badge-primary"><?php echo $gender?></span></li>
								<li class="list-group-item">courses: <span class="float-right badge badge-secondary"><?php echo $courses?></span></li>
								<li class="list-group-item">enrolled on : <span class="float-right badge badge-danger"><?php echo $createdAt?></span></li>

							</ul>
						</div>
                    </div>
                </div>
            </div>
		</div>
		
	</div>
	
	
<?php require_once('includes/scripts.php')?>
</body>
</html>