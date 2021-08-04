<?php
include("connection_db.php");

if(isset($_POST['make_model_1']))
{
  $q_car_maker=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_1']."'"));
  $q_car_maker_name=mysqli_fetch_row(mysqli_query($connection,"select * from car_make where id='".$q_car_maker[3]."'"));
  $q_car_model_name=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$q_car_maker_name[0]."'"));
 ?>
<div class="input-group">
<label class="text-left col-form-label">Maker / Model &nbsp;</label>
<input name="get_amendment_stock_maker_modal" id="get_amendment_stock_maker_modal" class="form-control " type="text"  value="<?php echo $q_car_maker_name[1]."/".$q_car_model_name[2]?>" >
</div>
 <?php 
}
if(isset($_POST['make_model_2']))
{
  $q_car_maker_2=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_2']."'"));
  
 ?>
<div class="input-group">
<label class=" text-left col-form-label">Chassis &nbsp;</label>
<input name="get_amendment_stock_chassis_id" id="get_amendment_stock_chassis_id" class="form-control" type="text"  value="<?php echo $q_car_maker_2[2]?>" >
</div>
 <?php 
}
if(isset($_POST['make_model_3']))
{
  $q_car_maker_3=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_3']."'"));
  
 ?>

<div class="input-group">
<label class=" text-left col-form-label">Year &nbsp;</label>
<input class="form-control" name="get_amendment_stock_man_year" id="get_amendment_stock_man_year" type="number"   value="<?php echo $q_car_maker_3[6]?>">
</div>
 <?php 
}
?>