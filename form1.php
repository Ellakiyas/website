<?php
$fname=$_POST['name'];
$femail=$_POST['email'];
$fsubject=$_POST['subject'];
$fmessage=$_POST['message'];

//database connection
$conn=new mysqli('localhost','root','','contact');
if($conn->connect_error){
	die('connection failed :'$conn->connect_error);
}else{
	$stmt=$conn->prepare("insert into user(name,email,subject,message) values (?,?,?,?)");
	$stmt->bind_param("ssss",$fname,$femail,$fsubject,$fmessage);
	$stmt->execute();
	echo "CONTACT FORM SENT SUCCESSFULLY";
	$stmt->close();
	$conn->close();
	
	

?>
