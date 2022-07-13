<?php
require_once('logics/dbconnection.php');

$sqldeletestudent= mysqli_query($conn,"DELETE FROM students WHERE id='".$_GET['id']."' ");
if($sqldeletestudents)
{
    echo "user records deleted";
}
else{
    echo"error occured";
    header('location:students.php');
}
?>