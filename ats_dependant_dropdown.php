<?php 
include("connection_db.php");


 
if(isset($_POST['region_id']))
{
  $queryregionc=mysqli_query($connection,"select * from region_country where region='".$_POST['region_id']."'");
  $queryregionc1=mysqli_query($connection,"select * from region_country where region='".$_POST['region_id']."'");

 ?>
 <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Country</label>
                                                                                    <select name="emp_region2" id="emp_region2"  class="form-control">
                                                                                        <option value="" >Please Select Country</option>
                                                                                        <?php 
                                                                                        while($rowcountry=mysqli_fetch_array($queryregionc))
                                                                                        {
                                                                                        ?>
                                                                                        <option value="<?php echo $rowcountry[1]?>" ><?php echo $rowcountry[1]?></option>
                                                                                      <?php }?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Country</label>
                                                                                    <select name="emp_region3" id="emp_region3"  class="form-control">
                                                                                    <option value="" >Please Select Country</option>
                                                                                        <?php 

                                                                                        while($rowcountry1=mysqli_fetch_array($queryregionc1))
                                                                                        {
                                                                                        ?>
                                                                                        <option value="<?php echo $rowcountry1[1]?>" ><?php echo $rowcountry1[1]?></option>
                                                                                      <?php }?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Country</label>
                                                                                    <select name="emp_region4" id="emp_region4"  class="form-control">
                                                                                    <option value="" >Please Select Country</option>
                                                                                        <?php 
                                                               $queryregionc2=mysqli_query($connection,"select * from region_country where region='".$_POST['region_id']."'");

                                                                                        while($rowcountry2=mysqli_fetch_array($queryregionc2))
                                                                                        {
                                                                                        ?>
                                                                                        <option value="<?php echo $rowcountry2[1]?>" ><?php echo $rowcountry2[1]?></option>
                                                                                      <?php }?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Country</label>
                                                                                    <select name="emp_region5" id="emp_region5"  class="form-control">
                                                                                    <option value="" >Please Select Country</option>
                                                                                        <?php 
                                                                                                                                                                                  $queryregionc3=mysqli_query($connection,"select * from region_country where region='".$_POST['region_id']."'");

                                                                                        while($rowcountry3=mysqli_fetch_array($queryregionc3))
                                                                                        {
                                                                                        ?>
                                                                                        <option value="<?php echo $rowcountry3[1]?>" ><?php echo $rowcountry3[1]?></option>
                                                                                      <?php }?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
<?php 
}
 
if(isset($_POST['k_id']))
{
    $getslab=mysqli_query($connection,"select * from kobutsu_slab where countrycode='".$_POST['k_id']."'");
    $getslabrow=mysqli_fetch_row($getslab);
?>
<div class="position-relative "> 
                        <input type="text" value="<?php echo $getslabrow[3]  ?>" id="stock_country_slab"  name="stock_country_slab" class="form-control-sm form-control">
  </div>
  <?php }
  
if(isset($_POST['i_id']))
{
    
    $getslab2=mysqli_query($connection,"select * from kobutsu_slab where countrycode='".$_POST['i_id']."'");
   
?>
  <label class="form-control-label">Port</label><br/>
<div class="position-relative "> 
                   
                        <select id="stock_kobutsu_port" name="stock_kobutsu_port" class="form-control form-control-sm" onChange="getport(this.value);" > 
                                                                 
                                                              
                                                                        
                                                                        <option disabled selected>Please Select</option>
                                                                        <?php 
                                                                        while(  $getslabrow2=mysqli_fetch_array($getslab2)){
                                                                            ?>
                                                                         <option class="form-control" value="<?php echo $getslabrow2[0]?>"><?php echo $getslabrow2[4]?></option>

                                                                            <?php
                                                                        }
                                                                        ?>
                                                                 </select> 
                                                         
  </div>
  <?php }
   
  
if(isset($_POST['i_id']))
{
    
    $getslab2=mysqli_query($connection,"select * from kobutsu_slab where countrycode='".$_POST['i_id']."'");
   
?>
  <label class="form-control-label">Port</label><br/>
<div class="position-relative "> 
                   
                        <select id="stock_kobutsu_port" name="stock_kobutsu_port" class="form-control form-control-sm" onChange="getport(this.value);" > 
                                                                 
                                                              
                                                                        
                                                                        <option disabled selected>Please Select</option>
                                                                        <?php 
                                                                        while(  $getslabrow2=mysqli_fetch_array($getslab2)){
                                                                            ?>
                                                                         <option class="form-control" value="<?php echo $getslabrow2[0]?>"><?php echo $getslabrow2[4]?></option>

                                                                            <?php
                                                                        }
                                                                        ?>
                                                                 </select> 
                                                         
  </div>
  <?php }
   
if(isset($_POST['p_id']))
{
    
    $getfreight=mysqli_query($connection,"select * from kobutsu_slab where id='".$_POST['p_id']."'");
   $resultfreight=mysqli_fetch_row($getfreight);

?>
  <input  type="text" id="stock_freight_charges1"  value="<?php echo $resultfreight[5]?>"  placeholder="Enter Price" class="form-control-sm form-control" style="display:none">  <?php    
}
if(isset($_POST['ins_id']))
{
    
    $getslab3=mysqli_query($connection,"select * from inspection_charges where countrycodes='".$_POST['ins_id']."'");
    $count = mysqli_num_rows($getslab3);
?>

                        <select id="stock_inspection_charges" name="stock_inspection_charges"  class="form-control"> 
                                                                 
                                                              
                                                                        
                                                                        <option disabled selected>Please Select</option>
                                                                        <?php 
                                                                        if($count){

                                                                        while(  $getslabrow3=mysqli_fetch_array($getslab3)){
                                                                            ?>
                                                                            
                                                                         <option class="form-control" value="<?php echo $getslabrow3[0]?>"><?php echo $getslabrow3[2]."-".$getslabrow3[3] ?></option>

                                                                            <?php
                                                                          }
                                                                        }
                                                                          else
                                                                          {
                                                                            ?>
                                                                                <option class="form-control" value="-----">---</option>
                                                                            <?php
                                                                          
                                                                        }
                                                                        ?>
                                                                 </select> 
                                                         

  <?php }
  if(isset($_POST['agent_id_dhl']))
  {
    $q_cust_name=mysqli_query($connection,"select * from ats_customer where ats_customer_sell_person='".$_POST['agent_id_dhl']."'");
    ?>
<div class="position-relative form-group">
<label class="">Customer Name</label>
<select name="get_dhl_request_customer_name" id="get_dhl_request_customer_name" required class="form-control "  onChange="customerchange(this.value)">
<option value="">CustomerTable</option>
<?php 
while($row_q_cust_name=mysqli_fetch_array($q_cust_name))
{
 echo "<option value='$row_q_cust_name[1]'>$row_q_cust_name[3]</option>";
}
?>

</select>
</div>
    <?php
  }
  if(isset($_POST['agent_id_dhl_2']))
  {
    $q_cust_adress=mysqli_fetch_row(mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$_POST['agent_id_dhl_2']."'"));

   ?>
<div class="position-relative form-group">
<label class="">Customer Address</label>
<input name="get_dhl_request_cus_address" id="get_dhl_request_cus_address"  type="text" class="form-control" value="<?php echo $q_cust_adress[13]?>">
</div>
   <?php 
  }
  if(isset($_POST['agent_id_dhl_3']))
  {
    $q_cust_phone=mysqli_fetch_row(mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$_POST['agent_id_dhl_3']."'"));

   ?>
<div class="position-relative form-group">
<label class="">Phone</label>
<input name="get_dhl_customer_phone" id="get_dhl_customer_phone"  type="" class="form-control" value="<?php echo $q_cust_phone[17]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_1']))
  {
    $q_car_maker=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_1']."'"));
    $q_car_maker_name=mysqli_fetch_row(mysqli_query($connection,"select * from car_make where id='".$q_car_maker[3]."'"));
    $q_car_model_name=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$q_car_maker_name[0]."'"));
   ?>
<div class="input-group">
<label class="text-left col-form-label">Maker / Model &nbsp;</label>
<input name="dhl_stock_maker_modal" id="dhl_stock_maker_modal" class="form-control" type="text" value="<?php echo $q_car_maker_name[1]."/".$q_car_model_name[2]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_2']))
  {
    $q_car_maker_2=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_2']."'"));
    
   ?>
<div class="input-group">
<label class=" text-left col-form-label">Chassis ID #&nbsp;</label>
<input class="form-control" id="dhl_stock_chassis_id" name="dhl_stock_chassis_id" type="text" value="<?php echo $q_car_maker_2[2]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_3']))
  {
    $q_car_maker_3=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_3']."'"));
    
   ?>
<div class="input-group">
<label class=" text-left col-form-label">Year &nbsp;</label>
<input class="form-control" name="dhl_stock_man_year" id="dhl_stock_man_year" type="text" value="<?php echo $q_car_maker_3[6]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_4']))
  {
    $q_car_maker_4=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_4']."'"));
    $q_car_maker_name_4=mysqli_fetch_row(mysqli_query($connection,"select * from car_make where id='".$q_car_maker_4[3]."'"));
    $q_car_model_name_4=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$q_car_maker_name_4[0]."'"));
   ?>
<div class="input-group">
<label class="text-left col-form-label">Maker / Model &nbsp;</label>
<input name="dhl_stock_maker_modal_2" id="dhl_stock_maker_modal_2" class="form-control" type="text" value="<?php echo $q_car_maker_name_4[1]."/".$q_car_model_name_4[2]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_5']))
  {
    $q_car_maker_5=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_5']."'"));
    
   ?>
<div class="input-group">
<label class=" text-left col-form-label">Chassis ID #&nbsp;</label>
<input class="form-control" id="dhl_stock_chassis_id_2" name="dhl_stock_chassis_id_2" type="text" value="<?php echo $q_car_maker_5[2]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_6']))
  {
    $q_car_maker_6=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_6']."'"));
    
   ?>
<div class="input-group">
<label class=" text-left col-form-label">Year &nbsp;</label>
<input class="form-control" name="dhl_stock_man_year_2" id="dhl_stock_man_year_2" type="text" value="<?php echo $q_car_maker_6[6]?>">
</div>
   <?php 
  }
  
  if(isset($_POST['make_model_7']))
  {
    $q_car_maker_7=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_7']."'"));
    $q_car_maker_name_7=mysqli_fetch_row(mysqli_query($connection,"select * from car_make where id='".$q_car_maker_7[3]."'"));
    $q_car_model_name_7=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$q_car_maker_name_7[0]."'"));
   ?>
<div class="input-group">
<label class="text-left col-form-label">Maker / Model &nbsp;</label>
<input name="dhl_stock_maker_modal_3" id="dhl_stock_maker_modal_3" class="form-control" type="text" value="<?php echo $q_car_maker_name_7[1]."/".$q_car_model_name_7[2]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_8']))
  {
    $q_car_maker_8=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_8']."'"));
    
   ?>
<div class="input-group">
<label class=" text-left col-form-label">Chassis ID #&nbsp;</label>
<input class="form-control" id="dhl_stock_chassis_id_3" name="dhl_stock_chassis_id_3" type="text" value="<?php echo $q_car_maker_8[2]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_9']))
  {
    $q_car_maker_9=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_9']."'"));
    
   ?>
<div class="input-group">
<label class=" text-left col-form-label">Year &nbsp;</label>
<input class="form-control" name="dhl_stock_man_year_3" id="dhl_stock_man_year_3" type="text" value="<?php echo $q_car_maker_9[6]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_10']))
  {
    $q_car_maker_10=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_10']."'"));
    $q_car_maker_name_10=mysqli_fetch_row(mysqli_query($connection,"select * from car_make where id='".$q_car_maker_10[3]."'"));
    $q_car_model_name_10=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$q_car_maker_name_10[0]."'"));
   ?>
<div class="input-group">
<label class="text-left col-form-label">Maker / Model &nbsp;</label>
<input name="dhl_stock_maker_modal_4" id="dhl_stock_maker_modal_4" class="form-control" type="text" value="<?php echo $q_car_maker_name_10[1]."/".$q_car_model_name_10[2]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_11']))
  {
    $q_car_maker_11=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_11']."'"));
    
   ?>
<div class="input-group">
<label class=" text-left col-form-label">Chassis ID #&nbsp;</label>
<input class="form-control" id="dhl_stock_chassis_id_4" name="dhl_stock_chassis_id_4" type="text" value="<?php echo $q_car_maker_11[2]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_12']))
  {
    $q_car_maker_12=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_12']."'"));
    
   ?>
<div class="input-group">
<label class=" text-left col-form-label">Year &nbsp;</label>
<input class="form-control" name="dhl_stock_man_year_4" id="dhl_stock_man_year_4" type="text" value="<?php echo $q_car_maker_12[6]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_13']))
  {
    $q_car_maker_13=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_13']."'"));
    $q_car_maker_name_13=mysqli_fetch_row(mysqli_query($connection,"select * from car_make where id='".$q_car_maker_13[3]."'"));
    $q_car_model_name_13=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$q_car_maker_name_13[0]."'"));
   ?>
<div class="input-group">
<label class="text-left col-form-label">Maker / Model &nbsp;</label>
<input name="dhl_stock_maker_modal_5" id="dhl_stock_maker_modal_5" class="form-control" type="text" value="<?php echo $q_car_maker_name_13[1]."/".$q_car_model_name_13[2]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_14']))
  {
    $q_car_maker_14=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_14']."'"));
    
   ?>
<div class="input-group">
<label class=" text-left col-form-label">Chassis ID #&nbsp;</label>
<input class="form-control" id="dhl_stock_chassis_id_5" name="dhl_stock_chassis_id_5" type="text" value="<?php echo $q_car_maker_14[2]?>">
</div>
   <?php 
  }
  if(isset($_POST['make_model_15']))
  {
    $q_car_maker_15=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$_POST['make_model_15']."'"));
    
   ?>
<div class="input-group">
<label class=" text-left col-form-label">Year &nbsp;</label>
<input class="form-control" name="dhl_stock_man_year_5" id="dhl_stock_man_year_5" type="text" value="<?php echo $q_car_maker_15[6]?>">
</div>
   <?php 
  }
  ?>




