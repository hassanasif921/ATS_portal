<?php
include("connection_db.php");

 $get_remittance_date_old     = $_POST['get_remittance_date'];
 $get_remittance_date= date("Y-m-d", strtotime($get_remittance_date_old));
 $get_remittance_date_till_0ld = $_POST['get_remittance_date_till'];
 $get_remittance_date_till =  date("Y-m-d", strtotime($get_remittance_date_till_0ld));

?>
<table class="table table-hover">
<thead>
                                                                <tr>
                                                                    <th>Slct all<br/><input type="checkbox" onclick="toggle(this);" /></th>
                                                                    <th>Agent Name</th>
                                                                    <th>Customer Name</th>
                                                                    <th>Customer Address</th>
                                                                    <th>Postal Code</th>
                                                                    <th>Phone</th>
                                                                    <th>Rec No. &nbsp;#</th>
                                                                    <th>Maker</th>
                                                                    <th>Model</th>
                                                                    <th style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chassis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                                    <th>Year</th>
                                                                    <th>BL Surrender</th>
                                                                </tr>
                                                            </thead>
                                                                <tbody >
                                                                <?php
                                                                    include("connection_db.php");

                                                                    $query = mysqli_query($connection,"SELECT * FROM ats_dhl WHERE ats_DHL_created_at BETWEEN '$get_remittance_date' AND '$get_remittance_date_till'");
                                                                    $count =mysqli_num_rows($query);
                                                                    if($count > 0)
                                                                    {
                                                                        while($queryresult = mysqli_fetch_array($query))
                                                                        {	    				   
                                                                ?>

                                                                <tr>
                                                                 
                                                                
                                                                    <td><input type="checkbox" /></td>
                                                                    <td><?php echo $queryresult[1]?></td>
                                                                    <td><?php echo $queryresult[2]?></td>
                                                                    <td><?php echo $queryresult[3]?></td>
                                                                    <td><?php echo $queryresult[4]?></td>
                                                                    <td><?php echo $queryresult[5]?></td>
                                                                    <td><?php echo $queryresult[6]?></td>
                                                                    <?php 
                                                                    $rowmakerid=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$queryresult[6]."'"));
                                                                    $carmake=mysqli_fetch_row(mysqli_query($connection,"select * from car_make where id='".$rowmakerid[3]."'"));
                                                                    $carmodel=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_model_id='".$rowmakerid[4]."'"));
                                                                    ?>
                                                                    <td><?php echo $carmake[1]?></td>
                                                                    <td><?php echo $carmodel[2]?></td>
                                                                    <td><?php echo $queryresult[8]?></td>

                                                                    <td><?php echo $queryresult[9]?></td>

                                                                    <td><?php echo $queryresult[10]?></td>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                                        }    
                                                                    }
                                                                ?>
                                                                </tbody>
                                                            </table>