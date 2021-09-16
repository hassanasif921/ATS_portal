<?php
session_start();
include("connection_db.php");
 $get_remittance_date     = $_POST['get_remittance_date'];
 $get_remittance_date_till = $_POST['get_remittance_date_till'];
 
?>
<table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Select all  <input type="checkbox" onclick="toggle(this);"/></th>
                                                                        <th>Remittance ID #</th>
                                                                        <th>Agent Name</th>
                                                                        <th>CustomerName</th>
                                                                        <th>Country</th>
                                                                        <th>Date</th>
                                                                        <th>Sender Name</th>
                                                                        <th>Amount</th>
                                                                        <th>Currency</th>
                                                                        <th>Conversion Rate</th>
                                                                        <th>Vendor Name</th>
                                                                        <th>Account #</th>
                                                                        <!-- <th>TT File</th>
                                                                        <th>Confirmation File</th> -->
                                                                        <?php if(!isset($_SESSION['agents_id'])){?>
                                                                        <th>Created At</th>
                                                                        <th>Updated At</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                        <?php }?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody >
                                                                <?php
                                                                    include("connection_db.php");

                                                                    $query = mysqli_query($connection,"SELECT * FROM ats_remittance WHERE ats_remittance_date BETWEEN '$get_remittance_date' AND '$get_remittance_date_till'
                                                                    ");
                                                                    $count =mysqli_num_rows($query);
                                                                    if($count > 0)
                                                                    {
                                                                        while($row = mysqli_fetch_array($query))
                                                                        {	    				   
                                                                ?>

<tr>
                                                                    <td><input type="checkbox" /></td>
                                                                
                                                                    <td><?php echo $row["ats_remittance_Remittance_ID"] ?></td>
                                                                    <td><?php echo $row["ats_remittance_agent_name"] ?></td>
                                                                    <?php $queryc=mysqli_fetch_row(mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$row["ats_remittance_customer_name"]."'"))?>
                                                                    <td><?php echo $queryc[3] ?></td>
                                                                    <td><?php echo $row["ats_remittance_country"] ?></td> 
                                                                    <td><?php echo $row["ats_remittance_date"] ?></td>
                                                                    <td><?php echo $row["ats_remittance_sender_name"] ?></td>
                                                                    <td><?php echo $row["ats_remittance_amount"] ?></td>
                                                                    <td><?php echo $row["ats_remittance_currency"] ?></td>
                                                                    <td><?php echo $row["ats_remittance_con_rate"] ?></td>
                                                                    <?php $queryv=mysqli_fetch_row(mysqli_query($connection,"select * from ats_vendor where ats_vendor_id='".$row["ats_remittance_vendor_name"]."'"))?>
                                                                    <td><?php echo $queryv[1] ?></td>
                                                                    <?php if(!isset($_SESSION['agents_id'])){?>
                                                                    <td><?php echo $row["ats_remittance_created_at"] ?></td>
                                                                    <td><?php echo $row["ats_remittance_updated_at"] ?></td>
                                                                    <td><div class="mb-2 mr-2 badge badge-info"><?php echo $row["ats_remittance_status"] ?></div></td>
                                                                    <td><a style="padding:3px" href="<?php //echo $row["id"] ?>" class="btn btn-primary"><span class="fa fa-plus"></span></a>
                                                                        
                                                                    </td>
                                                                    <?php }?>
                                                                </tr>
                                                                <?php
                                                                        }    
                                                                    }
                                                                ?>
                                                                </tbody>
                                                            </table>