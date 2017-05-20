

<?php 
	$idload = $_GET['idorder'];
	mysql_connect("localhost","root","");
	mysql_select_db("customer");
	mysql_set_charset('set names "utf8"');
	$loadorder = "select * from orders where id_customer ='$idload'";
	
	$rs =mysql_query($loadorder);
	if($rs)
	{
		header('location:Customerorder.php');	
	}else
	{
		
		header('location:../customer.php');
	}
?>