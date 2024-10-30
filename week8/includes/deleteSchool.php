<?php
// check form posted or not; if get - $_GET
// 'deleteSchool' is button name
if(isset($_GET['deleteSchool'])){
    $schoolID=$_GET['school_id'];
// form name attribute
// $schoolName=$_POST['schoolName'];
// //echo $schoolName;
// $schoolType=$_POST['schoolType'];
// $email=$_POST['email'];
// $phone=$_POST['phone'];

require('../resuables/connect.php');

$schoolID = mysqli_real_escape_string($connect, $schoolID);


$query = "DELETE FROM `schools` WHERE `id` = $schoolID";

// $schoolName = mysqli_real_escape_string($connect, $schoolName)

// mysqli_query($connect, $query) => pass 'add school' function
$school=mysqli_query($connect, $query);


// redirect to other page
if($school){

    // refresh the page

    header("Location: ../index.php");  
  //  echo "Deleted successfully";
    exit;
}
else{
    echo "There was an error adding the school: " . mysqli_error($connect);
}

}