<?php
include("connection_db.php");

$countryid=$_POST['country_id'];
if(isset($_POST['make_id']))
{
?>

 <select name="stock_model" id="stock_make"   
               class="form-control">
                                                   <?php 
$query_get_model=mysqli_query($connection,"select * from ats_model_car where ats_model_id='".$_POST['make_id']."'");
                                                             
                                                                        ?>
                                                                            <option  selected value="">Please Select</option>

                                                                           <?php 
                                                                           while($rowfetchmodeldetails=mysqli_fetch_array($query_get_model)){
                                                                               ?>
                                                                            <option value="<?php echo $rowfetchmodeldetails[0]?>"><?php echo $rowfetchmodeldetails[2]?></option>

                                                                               <?php
                                                                           }
                                                                           ?>
                                                                        </select> 
<?php 
}
if(isset($_POST['country_id']))
{
    $querycountry="select * from arrivalports where country='".$countryid."'";
$resultports=mysqli_query($connection,$querycountry);
?>
 <label class="form-control-label">Arrival Port<span style="color:red">*</span></label>

<select name="cus_arrival_port" id="cus_arrival_port"   class="form-control form-control-sm" required>
<option selected disabled>Please Select option</option>         
<?php 
  while($rowfetchports=mysqli_fetch_array($resultports)){
    ?>
  <option value="<?php echo $rowfetchports[0]?>"><?php echo $rowfetchports[1]?></option>
   <?php
 }
   ?>
 </select> 
 <?php 
}
 ?>