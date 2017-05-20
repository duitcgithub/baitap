
<?php 
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	$db = new PDO('mysql:host=localhost;dbname=customer','root','');
	
	$sql = "select hoten from user where email='$email' and password='$pass'";
			
	$rs = $db->query($sql);
	
	if($rs->rowCount()==1)
	{
		header('location:../customer.php');	
	}
?>