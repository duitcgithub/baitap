

<?php
	// kn csdl
	mysql_connect("localhost","root","");
	mysql_select_db("customer");
	mysql_set_charset('set names "utf8"');
	
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	//truy van
	$sql = "insert into customers(fname,lname,gender,email,address,city,state,zip) values('$fname','$lname','$gender','$email','$address','$city','$state','$zip')";
	$rs = mysql_query($sql);
	if($rs)
	{
		header('location:../customer.php');	
	}else
	{
		header('location:../Createcustomer.php');
	}
?>