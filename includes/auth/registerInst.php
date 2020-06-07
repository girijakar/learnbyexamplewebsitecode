<?php

echo "Redirecting...";

#---------------
// if(isset($_POST['name']) && is_set($_POST['email']) && isset($_POST['password']) && isset($_POST['institute']))

// {

//condition ends here



$name = $_POST['name'];
$pass = $_POST['password'];
$Email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$interest = $_POST['interest'];
#$date = date('Y-m-d');

if(!empty($name) && !empty($Email) && !empty($pass) && !empty($interest) && !empty($age) && !empty($gender))

{

#-------------


$con = mysqli_connect('localhost','learn7sd','Learn@2019#');
if($con){
	#echo "Successfully Signed In.";
// 	echo "<script>
// alert('Registration Successful.');
// window.location.href='../../portal';
// </script>";

}
else{
	echo "no connection";
}


mysqli_select_db($con,'learn7sd_lbe');

#------------
$q = " select * from instructors where name = '$name' && password = '$pass' && email='$Email' ";
$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);
if($num==1){
	echo "<script>
alert('The details you have entered already exist.');
window.location.href='www.learnbyexample.in/registration/index.html';
</script>";
 }
else{
	$qy = " insert into instructors(name,password,email,gender,area_of_interest,age) values ('$name','$pass','$Email','$gender','$interest','$age')";
    mysqli_query($con,$qy);
    echo "<script>alert('Registration Successful');
    window.location.href='../../portal';
    </script>";
// 	session_start();
// header('loction:login1.php');

}

 }

else{
	echo "<script>
alert('You have not filled all the details. Please Try Again.');
window.location.href='../../index.php';
</script>";
}

// }





// #---------



// //Added if condtion to check whether input is given or not.









?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	function F1(){
		window.alert(Fill all the boxes.);
	}
</script>
</body>
</html>