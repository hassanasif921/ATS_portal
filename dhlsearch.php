<?php
include("connection_db.php");
?>
<?php

if(isset($_POST['agent_id1']))
{
    $querycust=mysqli_query($connection,"select * from ats_customer where ats_customer_sell_person='".$_POST['agent_id1']."'");
    
?>

<select style="width: 140px;" name="remittance_customer_name" id="remittance_customer_name" type="text" class="form-control form-control-sm" onChange="getrecord2(this.value);">
<option  selected value="">Please Select</option>

<?php 
while($rowfetchcustomer=mysqli_fetch_array($querycust)){
?>
<option value="<?php echo $rowfetchcustomer[1]?>"><?php echo $rowfetchcustomer[3]?></option>

<?php
}
?></select>

<?php
}
if(isset($_POST['agent_id']))
{
    ?>
  <table style="font-size:11px;" >
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
                                                            <tbody>
                                                                <?php
                                                                $querysearch=mysqli_query($connection,"select * from ats_dhl where ats_DHL_agent_name='".$_POST['agent_id']."'") ;
                                                                while($queryresult=mysqli_fetch_array($querysearch))
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

                                                                </tr>
                                                              <?php 
                                                                }
                                                              ?>
                                                            </tbody>
                                                        </table>
                                                                
<?php 
}

if(isset($_POST['cust_id']))
{
?>

<table style="font-size:11px;">
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
                                                                <tbody>
                                                                <?php
                                                                $querysearch=mysqli_query($connection,"select * from ats_dhl where ats_DHL_customer_name='".$_POST['cust_id']."'") ;
                                                                while($queryresult=mysqli_fetch_array($querysearch))
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

                                                                </tr>
                                                              <?php 
                                                                }
                                                              ?>
                                                            </tbody>
                                                            </table>
<?php
}
?>