<?php
include("connection_db.php");
if(isset($_POST['agent_id']))
{
$sellid=$_POST['agent_id'];
$query_get_cust=mysqli_query($connection,"select * from ats_customer where ats_customer_sell_person='".$_POST['agent_id']."'");

?>
<div class="position-relative form-group">
<label class="">Customer Name</label>
<select name="remittance_customer_name" id="remittance_customer_name" class="form-control" onChange="getConsignee(this.value);">
<option  selected value="">Please Select</option>
<?php 
while($rowfetchcustomer=mysqli_fetch_array($query_get_cust)){
?>
<option value="<?php echo $rowfetchcustomer[1]?>"><?php echo $rowfetchcustomer[3]?></option>
<?php
}
?>
</select>
</div>
<?php 
}
if(isset($_POST['cust_id2']))
{
$cp1=mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$_POST['cust_id2']."'");
$cp1=mysqli_fetch_row($cp1);
$querycountry="select * from countryports where id=".$cp1[8];
// ORDER BY name ASC
$resultports=mysqli_query($connection,$querycountry);
$rowcountry=mysqli_fetch_row($resultports);
?>
<div class="position-relative form-group">
<label class="">Country</label>
<input name="get_customer_country" id="get_customer_country" type="text" class="form-control" value="<?php echo $rowcountry[1]?>">
</div>
<?php
}
?>
<?php 

if(isset($_POST['vend_id']))
{
$vend_id=mysqli_query($connection,"select * from ats_vendor where ats_vendor_id='".$_POST['vend_id']."'");
$vend_id=mysqli_fetch_row($vend_id);
?>
<div class="position-relative form-group">

<label class="">Account #</label>
<input name="remittance_account_number" id="remittance_account_number" type="text" class="form-control" value="<?php echo $vend_id[28]?>">
</div>
<?php
}
?>