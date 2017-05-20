<div class="row cardContainer show-hide-animation">
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("customer");
		mysql_set_charset('set names "utf8"');
		$sql = "select * from customers";
		$rs = mysql_query($sql);
		while($row= mysql_fetch_array($rs))
		{
			echo ' <div class="col-sm-6 col-md-4 col-lg-3">    
        <div class="card">
           <a href="xlcustomer/xlxoa.php?idxoa='.$row['id'].'"> <button class="btn close cardClose" title="Delete Customer">&times;</button></a>
            <div class="cardHeader"><a href="Editcustomer" class="white">'.$row['fname']." ".$row['lname'].'<i class="icon-edit icon-white editIcon"></i></a></div>
            <div class="cardBody">
                <div class="clearfix">
                    <div class="pull-left cardBodyLeft">
                        <a href="#" class="white"><img src="Content/images/'.$row['gender'].'.png" class="cardImage" /></a>
                    </div>
                    <div class="pull-left cardBodyRight">
                        <div class="cardBodyContent">'.$row['state']." ,".$row['city'].'</div>
                        <div>
                            <a href="Customerorder?idorder='.$row['id'].'" class="btn-link">
                                99
                                <span>Orders</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
		}
	?>
   
 </div>