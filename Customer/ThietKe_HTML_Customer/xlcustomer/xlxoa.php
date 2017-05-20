
<?php
	$idxoa = $_GET['idxoa'];
	mysql_connect("localhost","root","");
	mysql_select_db("customer");
	mysql_set_charset('set names "utf8"');
	
	$xoa = "delete from customers where id='$idxoa'";
	$rs = mysql_query($xoa);
	if($rs)
	{
		header('location:../customer.php');		
	}
	else
	{
		echo 'xoa khong thanh cong';
	}
?>