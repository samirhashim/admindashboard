<?php
require_once('logics/dbconnection.php');
$sqlquery =mysqli_query($conn,"SELECT * FROM students");


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
			<div class="row pt-3">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>students</span>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover table-responsive">
							<thead>
								<tr>
									<th>No.</th>
									<th>Full name</th>
									<th>Phone number</th>
									<th>Email</th>
									<th>Gender</th>
									<th>Courses</th>
								    <th>Enrolled on</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php while($fetchrecords = mysqli_fetch_array($sqlquery)) {?>
									<tr>
										<td><?php echo $fetchrecords['id']?></td>
										<td><?php echo $fetchrecords['fullname']?></td>
										<td><?php echo $fetchrecords['phonenumber']?></td>
										<td><?php echo $fetchrecords['email']?></td>
										<td><?php echo $fetchrecords['gender']?></td>
										<td><?php echo $fetchrecords['courses']?></td>
										<td><?php echo $fetchrecords['created_at']?></td>
										<td>										
											<a href="edit-enrollment.php?id=<?php echo $fetchrecords['id']?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
											<a href="view-enrollment.php?id=<?php echo $fetchrecords['id']?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
											<a href="delete-enrollment.php?id=<?php echo $fetchrecords['id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											
										</td>
										
									</tr>

								<?php }?>
								
							</tbody>
						</table>
					</div>
				</div>
			
			
		</div>
	</div>
	
<?php require_once('includes/scripts.php')?>
</body>
</html>
