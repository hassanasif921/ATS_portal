<?php 
include("connection_db.php");

$countryid=$_POST['c_id'];
$buying=$_POST['bp'];


$query=mysqli_query($connection,"select * from slabcharges where countrycode='".$_POST['c_id']."' AND $buying>= buyingprice AND $buying<=buyingprice_end
");
$row=mysqli_fetch_row($query);
 ?>


   <div class="position-relative "> 
 <input style="margin-left:2.5%;" type="text" id="stock_country_slab"  name="stock_country_slab" class="form-control-sm form-control" value="<?php echo $row[4]?>">
   </div>
     