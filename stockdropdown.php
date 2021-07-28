<?php 
include("connection_db.php");
$querycountry="select * from countryports ORDER BY name ASC ";
$resultports=mysqli_query($connection,$querycountry);
if(isset($_POST['agent_id']))
{
$sellid=$_POST['agent_id'];

$query_get_cust=mysqli_query($connection,"select * from ats_customer where ats_customer_sell_person='".$_POST['agent_id']."'");

?>
<label class="form-control-label">Customer</label>
<select style=" padding: 0px; font-size: 11px;  margin-top: -8%; height: 20px;  width: 120px;" type="text" id="customername" name="customername" class="form-control" onChange="getConsignee(this.value);">
<option  selected value="">Please Select</option>

<?php 
while($rowfetchcustomer=mysqli_fetch_array($query_get_cust)){
?>
<option value="<?php echo $rowfetchcustomer[1]?>"><?php echo $rowfetchcustomer[3]?></option>

<?php
}
?>
<select>
<?php
}

if(isset($_POST['cust_id']))
{
$custid=$_POST['cust_id'];

$query_get_con=mysqli_query($connection,"select * from ats_consignee where ats_consignee_customer_name='".$_POST['cust_id']."'");

?>
<label class="form-control-label">Consignee&nbsp;Name</label>
<select style=" padding: 0px; font-size: 11px;  margin-top: -8%; height: 20px;  width: 120px;" type="text" id="customername" name="customername" class="form-control" onChange="getConsigneedetails(this.value);">
<option  selected value="">Please Select</option>

<?php 
while($rowfetchcon=mysqli_fetch_array($query_get_con)){
?>
<option value="<?php echo $rowfetchcon[0]?>"><?php echo $rowfetchcon[4]?></option>

<?php
}
?>
<select>
<?php
}


if(isset($_POST['consigneephone']))
{
$consigneephone=$_POST['consigneephone'];

$query_get_conp=mysqli_query($connection,"select * from ats_consignee where ats_consignee_id='".$_POST['consigneephone']."'");
$rowfetchconp=mysqli_fetch_row($query_get_conp)
?>
<label style="margin-left: 8%;" class="form-control-label">Consignee&nbsp;Phone</label>
<input style=" font-size: 11px; margin-left: 8%; margin-top: -8%; height: 20px;  width: 100px;" type="text" id="consigneephone" name="consigneephone" class="form-control" value="<?php echo $rowfetchconp[6]?>">
<?php
}

if(isset($_POST['notifyname']))
{
$query_get_notify=mysqli_query($connection,"select * from ats_consignee where ats_consignee_id='".$_POST['notifyname']."'");
$rowfetchnotify=mysqli_fetch_row($query_get_notify)
?>
<label class="form-control-label">Notify&nbsp;Name</label>
<input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="notifyname" class="form-control" value="<?php echo $rowfetchnotify[8]?>">
<?php
}
if(isset($_POST['notifyphone']))
{
$query_get_notifyphone=mysqli_query($connection,"select * from ats_consignee where ats_consignee_id='".$_POST['notifyphone']."'");
$rowfetchnotifyp=mysqli_fetch_row($query_get_notifyphone)
?>
<label class="form-control-label">Notify&nbsp;Phone</label>
<input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="notifyphone" class="form-control" value="<?php echo $rowfetchnotifyp[10]?>">
<?php
}
if(isset($_POST['consigneeadress']))
{
$consigneeadress=mysqli_query($connection,"select * from ats_consignee where ats_consignee_id='".$_POST['consigneeadress']."'");
$consigneeadress=mysqli_fetch_row($consigneeadress)
?>
<label class="form-control-label">Consignee&nbsp;Address</label>
<input style=" font-size: 11px; width: 232px; margin-top: -2%; height: 20px;  " type="text" id="username" name="stock_chassis_id" class="form-control" value="<?php echo $consigneeadress[5]?>">
<?php
}
if(isset($_POST['notifyadress']))
{
$notifyadress=mysqli_query($connection,"select * from ats_consignee where ats_consignee_id='".$_POST['notifyadress']."'");
$notifyadress=mysqli_fetch_row($notifyadress)
?>
<label class="form-control-label">Notify&nbsp;Address</label>
<input style=" font-size: 11px; width: 224px; margin-top: -2%; height: 20px;  " type="text" id="username" name="stock_chassis_id" class="form-control" value="<?php echo $notifyadress[9]?>">
<?php
}
if(isset($_POST['cust_id1']))
{
$cp=mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$_POST['cust_id1']."'");
$cp=mysqli_fetch_row($cp)
?>
<label style="margin-left: 8%;" class="form-control-label">Phone</label>
<input style=" font-size: 11px; margin-left: 8%; margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control" value="<?php echo $cp[16]?>">
<?php
}
if(isset($_POST['cust_id2']))
{
$cp1=mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$_POST['cust_id2']."'");
$cp1=mysqli_fetch_row($cp1)
?>
<label class="form-control-label">Country</label>
<?php 
while($rowcountry=mysqli_fetch_array($resultports))
{
if($cp1[8]== $rowcountry[0])
{
?>
<input style=" font-size: 11px; margin-left: 8%; margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control" value="<?php echo $rowcountry[1]?>">


<?php
}



}
?>
<?php
}
if(isset($_POST['cust_id3']))
{
$cp3=mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$_POST['cust_id3']."'");
$cp3=mysqli_fetch_row($cp3);
$queryport="select * from arrivalports";
$resultportcountry=mysqli_query($connection,$queryport);
?>
<label class="form-control-label">Destination&nbsp;Port</label>
<?php 

while($rowports=mysqli_fetch_array($resultportcountry))
{
if($cp3[9]== $rowports[0])
{
?>

<input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control" value="<?php echo $rowports[1]?>">

<?php
}
}
?>
<?php
}
if(isset($_POST['cust_id4']))
{
$cp6=mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$_POST['cust_id4']."'");
$cp6=mysqli_fetch_row($cp6)
?>
<label class="form-control-label" id="customeradress">Address</label>
<input style=" font-size: 11px; width: 472px; height: 20px;  margin-top: -2%; " type="text" id="username" name="stock_chassis_id" class="form-control" value="<?php echo $cp6[13]?>">
<?php
}
if(isset($_POST['shipment']))
{
$shipment=mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$_POST['shipment']."'");
$shipment=mysqli_fetch_row($shipment)
?>
<label class="form-control-label">Shipment</label>
<select style="padding: 0px; font-size: 11px;  margin-top: -8%; height: 20px;  width: 105px;" type="text" id="username" name="stock_chassis_id" class="form-control">
<option value="<?php echo $shipment[11]?>"><?php echo $shipment[11]?></option>

</select>
<?php
}
if(isset($_POST['currency']))
{
$currency=mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$_POST['currency']."'");
$currency=mysqli_fetch_row($currency)
?>
<label class="form-control-label">Currency</label>
<select style="padding: 0px; font-size: 11px;  margin-top: -8%; height: 20px;  width: 105px;" type="text" id="username" name="stock_chassis_id" class="form-control">
<option value="<?php echo $currency[10]?>"><?php echo $currency[10]?></option>

</select>
<?php
}
?>

