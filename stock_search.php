<?php
include("connection_db.php");

if(isset($_POST['getcustomer_reserved']))
{

    $getcustomer_reserved=mysqli_query($connection,"select * from ats_customer where ats_customer_sell_person='".$_POST['getcustomer_reserved']."'");
?>
<?php 
    
  echo""; 
?>
 <div class="input-group-prepend">
<span class="input-group-text">Customer</span>
</div>
<select style="font-size: 12px;" name="get_stock_customer_name" id="get_stock_customer_name" type="text" class="form-control">
<option value="">Please Select</option> 

<?php while($rowcustomer_reserved=mysqli_fetch_array($getcustomer_reserved))
{
?>
<option value="<?php echo $rowcustomer_reserved[1]?>"><?php echo $rowcustomer_reserved[3]?></option>  
<?php
}
?>
</select> 
<?php
}
?>