<script> window.alert("Thank you for your response!"); </script> 
<?php
$fname="";
if(isset($_POST['fname'])){
	$fname=$_POST['fname'];
}

$lname="";
if(isset($_POST['lname'])){
	$lname=$_POST['lname'];
}

$date="";
if(isset($_POST['date'])){
	$date=$_POST['date'];
}

$addr="";
if(isset($_POST['addr'])){
	$addr=$_POST['addr'];
}

$moc="";
if(isset($_POST['moc'])){
	$moc=$_POST['moc'];
}

$por="";
if(isset($_POST['por'])){
	$por=$_POST['por'];
}



$link=mysqli_connect("localhost","root","","form");

$sql="insert into form (fname,lname,date,addr,moc,por) VALUES ('$fname','$lname','$date','$addr','$moc','$por')";

mysqli_query($link,$sql);

mysqli_close($link);

header('Location: html/home.html'); 

exit; 
?>

