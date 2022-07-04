<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="web2";

$conn = mysqli_connect($server,$username,$password,$database);
$sqlquery =mysqli_query($conn,"SELECT * FROM students");

//echo $fetchrecords['fullname'].''.$fetchrecords['email'];
while ($fetchrecords = mysqli_fetch_array($sqlquery)) {
    # code...
    echo $fetchrecords['fullname'].''.$fetchrecords['email'];

}



?>