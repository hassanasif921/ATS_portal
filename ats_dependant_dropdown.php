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
      <select name="emp_region2" id="emp_region2" class="form-control">
        <option value="">Please Select Country</option>
          <?php 
              while($rowcountry=mysqli_fetch_array($queryregionc)){
          ?>
        <option value="<?php echo $rowcountry[1]?>"><?php echo $rowcountry[1]?></option>
        <?php }?>
      </select>
    </div>
  </div>
  <div class="col-md-3">
    <div class="position-relative form-group">
      <label>Country</label>
      <select name="emp_region3" id="emp_region3" class="form-control">
        <option value="">Please Select Country</option>
          <?php 
            while($rowcountry1=mysqli_fetch_array($queryregionc1)){
          ?>
          <option value="<?php echo $rowcountry1[1]?>"><?php echo $rowcountry1[1]?></option>
        <?php 
            }
        ?>
      </select>
    </div>
  </div>
  <div class="col-md-3">
    <div class="position-relative form-group">
      <label>Country</label>
        <select name="emp_region4" id="emp_region4" class="form-control">
          <option value="">Please Select Country</option>
            <?php 
              $queryregionc2=mysqli_query($connection,"select * from region_country where region='".$_POST['region_id']."'");
              while($rowcountry2=mysqli_fetch_array($queryregionc2)){
            ?>
          <option value="<?php echo $rowcountry2[1]?>"><?php echo $rowcountry2[1]?></option>
          <?php 
              }
          ?>
        </select>
    </div>
  </div>
  <div class="col-md-3">
    <div class="position-relative form-group">
      <label>Country</label>
        <select name="emp_region5" id="emp_region5" class="form-control">
          <option value="">Please Select Country</option>
          <?php 
            $queryregionc3=mysqli_query($connection,"select * from region_country where region='".$_POST['region_id']."'");
            while($rowcountry3=mysqli_fetch_array($queryregionc3)){
          ?>
          <option value="<?php echo $rowcountry3[1]?>"><?php echo $rowcountry3[1]?></option>
          <?php 
            }
          ?>
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
      <input type="text" value="<?php echo $getslabrow[3] ?>" id="stock_country_slab" name="stock_country_slab" class="form-control-sm form-control">
    </div>
    <?php }
    if(isset($_POST['i_id']))
    {
      $getslab2=mysqli_query($connection,"select * from kobutsu_slab where countrycode='".$_POST['i_id']."'"); 
    ?>
    <label class="form-control-label">Port</label><br/>
    <div class="position-relative"> 
      <select id="stock_kobutsu_port" name="stock_kobutsu_port" class="form-control form-control-sm" onChange="getport(this.value);"> 
        <option disabled selected>Please Select</option>
          <?php 
            while($getslabrow2=mysqli_fetch_array($getslab2)){
          ?>
        <option class="form-control" value="<?php echo $getslabrow2[0]?>"><?php echo $getslabrow2[4]?></option>
          <?php
            }
          ?>
      </select>                                                     
    </div>
    <?php 
    }
      if(isset($_POST['p_id']))
      {  
        $getfreight=mysqli_query($connection,"select * from kobutsu_slab where id='".$_POST['p_id']."'");
        $resultfreight=mysqli_fetch_row($getfreight);
    ?>
    <input type="text" id="stock_freight_charges1" value="<?php echo $resultfreight[5]?>" placeholder="Enter Price" class="form-control-sm form-control" style="display:none">  
    <?php    
      }
    if(isset($_POST['ins_id']))
    {
      $getslab3=mysqli_query($connection,"select * from inspection_charges where countrycodes='".$_POST['ins_id']."'");
      $count = mysqli_num_rows($getslab3);
    ?>
    <select id="stock_inspection_charges" name="stock_inspection_charges" class="form-control"> 
      <option disabled selected>Please Select</option>
      <?php 
      if($count){
        while($getslabrow3=mysqli_fetch_array($getslab3)){
      ?>
      <option class="form-control" value="<?php echo $getslabrow3[0]?>"><?php echo $getslabrow3[2]."-".$getslabrow3[3] ?></option>
      <?php
        }
      }
      else{
      ?>
      <option class="form-control" value="---">---</option>
      <?php
          }
      ?>
    </select>
  </div>
<?php 
}