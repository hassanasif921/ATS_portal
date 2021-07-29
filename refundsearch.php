<?php
include("connection_db.php");
?>
<?php

if(isset($_POST['agent_id1']))
{
    $querycust=mysqli_query($connection,"select * from ats_customer where ats_customer_sell_person='".$_POST['agent_id1']."'");
    
?>
<div class="position-relative form-group">
<select name="remittance_customer_name" id="remittance_customer_name" class="form-control form-control-sm" onChange="getrecord2(this.value);">
<option  selected value="">Please Select</option>

<?php 
while($rowfetchcustomer=mysqli_fetch_array($querycust)){
?>
<option value="<?php echo $rowfetchcustomer[1]?>"><?php echo $rowfetchcustomer[3]?></option>

<?php
}
?></select>
</div>
<?php
}
if(isset($_POST['agent_id']))
{
    ?>
        <table class="table table-hover" >
                                                                <thead>
                                                                    <tr>
                                                                        <th>Select all <input  type="checkbox" onclick="toggle(this);" /></th>
                                                                        <th>Remittance ID #</th>
                                                                        <th>Agent Name</th>
                                                                        <th>Customer Name</th>
                                                                        <th>Refund Amount</th>
                                                                        <th>Sender Name</th>
                                                                        <th>Bank Name</th>
                                                                        <th>Branch Name</th>
                                                                        <th>Account Tittle</th>
                                                                        <th>Bank Address</th>
                                                                        <th>Swift Code</th>
                                                                        <th>Memo / Notify</th>
                                                                        <th>HOD Comments</th>
                                                                        <th>Created At</th>
                                                                        <th>Updated&nbsp;At</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody >
                                                                <?php
                                                                    include("connection_db.php");

                                                                    $query = mysqli_query($connection,"select * from ats_refund where ats_refund_agent_name='".$_POST['agent_id']."'");
                                                                    $count =mysqli_num_rows($query);
                                                                    if($count > 0)
                                                                    {
                                                                        while($row = mysqli_fetch_array($query))
                                                                        {	    				   
                                                                ?>

                                                                <tr>
                                                                    <td><input type="checkbox" /></td>
                                                                
                                                                    <td><?php echo $row["ats_refund_Remittance_ID"] ?></td>
                                                                    <td><?php echo $row["ats_refund_agent_name"] ?></td>
                                                                    <?php $queryc=mysqli_fetch_row(mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$row["ats_refund_customer_name"]."'"))?>
                                                                    <td><?php echo $queryc[3] ?></td>
                                                                    <td><?php echo $row["ats_refund_refund_amount"] ?></td>
                                                                    <td><?php echo $row["ats_refund_sender_name"] ?></td>
                                                                    <td><?php echo $row["ats_refund_bank_name"] ?></td>
                                                                    <td><?php echo $row["ats_refund_branch_name"] ?></td>
                                                                    <td><?php echo $row["ats_refund_aco_title"] ?></td>
                                                                    <td><?php echo $row["ats_refund_bank_address"] ?></td>
                                                                   
                                                                    <td><?php echo $row["ats_refund_swift_code"] ?></td>
                                                                    <td><?php echo $row["ats_refund_memo_notify"] ?></td>
                                                                    <td><?php echo $row["ats_refund_created_at"] ?></td>
                                                                    <td><?php echo $row["ats_refund_updated_at"] ?></td>
                                                                    <td><div class="mb-2 mr-2 badge badge-info"><?php echo $row["ats_refund_status"] ?></div></td>
                                                                    <td><a style="padding:3px" href="<?php //echo $row["id"] ?>" class="btn btn-primary"><span class="fa fa-plus"></span></a>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                                        }    
                                                                    }
                                                                ?>
                                                                </tbody>
                                                            </table>
<?php 
}

if(isset($_POST['cust_id']))
{
?>
  <table class="table table-hover" >
                                                                <thead>
                                                                    <tr>
                                                                        <th>Select all <input  type="checkbox" onclick="toggle(this);" /></th>
                                                                        <th>Remittance ID #</th>
                                                                        <th>Agent Name</th>
                                                                        <th>Customer Name</th>
                                                                        <th>Refund Amount</th>
                                                                        <th>Sender Name</th>
                                                                        <th>Bank Name</th>
                                                                        <th>Branch Name</th>
                                                                        <th>Account Tittle</th>
                                                                        <th>Bank Address</th>
                                                                        <th>Swift Code</th>
                                                                        <th>Memo / Notify</th>
                                                                        <th>HOD Comments</th>
                                                                        <th>Created At</th>
                                                                        <th>Updated&nbsp;At</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody >
                                                                <?php
                                                                    include("connection_db.php");

                                                                    $query = mysqli_query($connection,"select * from ats_refund where ats_refund_customer_name='".$_POST['cust_id']."'");
                                                                    $count =mysqli_num_rows($query);
                                                                    if($count > 0)
                                                                    {
                                                                        while($row = mysqli_fetch_array($query))
                                                                        {	    				   
                                                                ?>

                                                                <tr>
                                                                    <td><input type="checkbox" /></td>
                                                                
                                                                    <td><?php echo $row["ats_refund_Remittance_ID"] ?></td>
                                                                    <td><?php echo $row["ats_refund_agent_name"] ?></td>
                                                                    <?php $queryc=mysqli_fetch_row(mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$row["ats_refund_customer_name"]."'"))?>
                                                                    <td><?php echo $queryc[3] ?></td>
                                                                    
                                                                    <td><?php echo $row["ats_refund_refund_amount"] ?></td>
                                                                    <td><?php echo $row["ats_refund_sender_name"] ?></td>
                                                                    <td><?php echo $row["ats_refund_bank_name"] ?></td>
                                                                    <td><?php echo $row["ats_refund_branch_name"] ?></td>
                                                                    <td><?php echo $row["ats_refund_aco_title"] ?></td>
                                                                    <td><?php echo $row["ats_refund_bank_address"] ?></td>
                                                                   
                                                                    <td><?php echo $row["ats_refund_swift_code"] ?></td>
                                                                    <td><?php echo $row["ats_refund_memo_notify"] ?></td>
                                                                    <td><?php echo $row["ats_refund_created_at"] ?></td>
                                                                    <td><?php echo $row["ats_refund_updated_at"] ?></td>
                                                                    <td><div class="mb-2 mr-2 badge badge-info"><?php echo $row["ats_refund_status"] ?></div></td>
                                                                    <td><a style="padding:3px" href="<?php //echo $row["id"] ?>" class="btn btn-primary"><span class="fa fa-plus"></span></a>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                                        }    
                                                                    }
                                                                ?>
                                                                </tbody>
                                                            </table>
<?php 

}
?>