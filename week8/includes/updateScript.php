<?php
  include('function.php');
// check form posted or not; if get - $_GET
// 'updateSchool' is button name
if(isset($_POST['updateSchool'])){
$schoolID=$_POST['id'];
    // new values
// form name attribute
$schoolName=$_POST['schoolName'];
//echo $schoolName;
$schoolType=$_POST['schoolType'];
$email=$_POST['email'];
$phone=$_POST['phone'];

require('../resuables/connect.php');
// the difference of PHP with other language is '$schoolName', '$schoolType', '$phone','$email': even variables, we need quotes " ' " outside
// $query = "INSERT INTO schools (`School Name`, `School Type`, `Phone`,`Email`)
// VALUES ('$schoolName', '$schoolType', '$phone','$email' )";

// update on Oct-16
// $query = "UPDATE schools (`School Name`, `School Type`, `Phone`,`Email`) VALUES (
// '" . mysqli_real_escape_string($connect, $schoolName) . "',
// '" . mysqli_real_escape_string($connect, $schoolType) . "',
// '" . mysqli_real_escape_string($connect, $phone) . "',
// '" . mysqli_real_escape_string($connect, $email) . "',
// )";


// $schoolNameSanitized = mysqli_real_escape_string($connect, $schoolName)

$query = "UPDATE `schools` SET 
`School Name`= '" . mysqli_real_escape_string($connect, $schoolName) . "',
`School Type`= '" . mysqli_real_escape_string($connect, $schoolType) . "',
`Phone`= '" . mysqli_real_escape_string($connect, $phone) . "',
`Email`= '" . mysqli_real_escape_string($connect, $email) . "' WHERE `id` = '$schoolID'";

// $schoolName = mysqli_real_escape_string($connect, $schoolName)

// mysqli_query($connect, $query) => pass 'add school' function
$school=mysqli_query($connect, $query);

echo "updated successfully";

// redirect to other page
if($school){
    header("Location: ../index.php");  
    set_message('School was successfully updated', 'success');
    header("Location: ../index.php");
}
else{
    echo "There was an error adding the school: " . mysqli_error($connect);
}



}