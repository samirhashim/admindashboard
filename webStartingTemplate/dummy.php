<?php
require_once('logics/dbconnection.php');
$sqlquery =mysqli_query($conn,"SELECT * FROM students");

//echo $fetchrecords['fullname'].''.$fetchrecords['email'];
while ($fetchrecords = mysqli_fetch_array($sqlquery)) {
    # code...
    echo $fetchrecords['fullname'].''.$fetchrecords['email'];

}



?>