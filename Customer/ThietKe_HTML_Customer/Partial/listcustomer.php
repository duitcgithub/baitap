<div class="row gridContainer customersTable show-hide-animation" >
                <div class="col-md-10">
                    <div>
                        <table class="table table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th >Name</th>
                                    <th >Location</th>
                                    <th >Orders</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
								mysql_connect("localhost","root","");
								mysql_select_db("customer");
								mysql_set_charset('set names "utf8"');
								$sql = "select * from customers";
								$rs = mysql_query($sql);
								while($row= mysql_fetch_array($rs))
								{
									echo '<tr class="repeat-animation">
                                <td><a href="customeredit"><img src="Content/images/'.$row['gender'].'.png" class="cardImage" alt="Customer Image" /></a></td>
                                <td><a href="Editcustomer">'.$row['fname']." ".$row['lname'].'</a></td>
                                <td>'.$row['state']." ,".$row['city'].'</td>
                                <td>
                                    <a href="customerorder" class="btn-link">
                                        99
                                        <span> 
                                        </span>
                                    </a>
                                </td>
                                <td><button class="btn btn-danger" "><a href="xlcustomer/xlxoa.php?idxoa='.$row['id'].'" style="text-decoration:none">Delete</a></button></td>
                             </tr>';	
								}
                             ?>
            </div>