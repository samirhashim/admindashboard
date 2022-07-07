<?php
require_once('logics/dbconnection.php');
$queryuser = mysqli_query($conn, "SELECT * FROM students WHERE id='".$_GET['id']."'");

while($fetchuser = mysqli_fetch_array($queryuser))
{
	$fullname = $fetchuser['fullname'];
	$phonenumber = $fetchuser['phonenumber'];
	$email = $fetchuser['email'];
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Edit student: </h4>
                        </div>
						<div class="card-body">
						<form action="enroll.php" method="POST">
                    <div class="row">
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                            <label for="fullname" class="form-label">Full name</label>
                            <input type="text" class="form-control" name="fullname"value="<?php echo $fullname?>" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                            <label for="phonenumber" class="form-label">Phone number</label>
                            <input type="tel" class="form-control"name="phonenumber"value="<?php $phonenumber?>" placeholder="+2547...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email"value="<?php $email?>" placeholder="Please enter your email">
                        </div>
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                            <label for="gender" class="form-label">What's your gender</label>
                            <select name="gender" class="form-control" aria-label="default select example">
                                <option >--Select your gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        
                        <div class="mb-3 col-lg-6">
                            <select name="course" class="form-control multiplchose_questiontypes" id="selector">
                                <option value="" >select course--</option>
                                <option value="web design">web design</option>
                                <option value="cyber security">cyber security</option>
                                <option value="android development">android development</option>

                            </select>
                         </div>
						
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                           Agree terms and condition
                        </label>
                        </div>
                    </div>           
                 <button type="submit" name="enroll" class="btn btn-outline-primary">Update Records</button>
            </div>
        </form>
		    </div>
                </div>

                </div>
            </div>
		</div>
		
	</div>
	
	
<?php require_once('includes/scripts.php')?>
</body>
</html>