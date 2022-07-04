<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="web2";

$conn = mysqli_connect($server,$username,$password,$database);
$sqlquery =mysqli_query($conn,"SELECT * FROM students");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- All our code. write here   -->
	<div class="header">
		<img src="images/zalegoimage.png" alt="zalego"height="50"width="50px"class="rounded-circle">
		<a href="#"class="navbar-trigger"><span></span></a>

	</div>
	<div class="sidebar">
		<nav>
			<ul>
				<li>
					<a href="students.html">
						<span> <i class="fa fa-group"></i></span>
						<span>students</span>
					</a>
				</li>
				<li>
					<a href="">
						<span> <i class="fa fa-folder-open"></i></span>
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="">
						<span> <i class="fa fa-graduation-cap"></i></span>
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>

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
										<td><?php echo $fetchrecords['email']?></td>
										<td><?php echo $fetchrecords['phonenumber']?></td>
										
									</tr>

								<?php }?>
								
							</tbody>
						</table>
					</div>
				</div>
			
			
		</div>
	</div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<tr>
									<td>1.</td>
									<td>Yusufhashim</td>
									<td>+254723457242</td>
									<td>yusufhahim@gmail.com</td>
									<td>male</td>
									<td>web design</td>
									<td>23 june 2022</td>
									<td>
										<a href="#" class="btn btn-primary btn-sm">
										<i class="fa fa-edit"></i>
										</a>
										<a href="#" class="btn btn-info btn-sm">
											<i class="fa fa-eye"></i>
										</a>
										<a href="#" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
										</a>
									</td>
								</tr>