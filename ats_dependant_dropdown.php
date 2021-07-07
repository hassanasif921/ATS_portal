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
    $getslab=mysqli_query($connection,"select * from kobutsu_slab where id='".$_POST['k_id']."'");
    $getslabrow=mysqli_fetch_row($getslab);
?>
<div class="position-relative "> 
                        <input type="text" value="<?php echo $getslabrow[3]  ?>" id="stock_country_slab"  name="stock_country_slab" class="form-control-sm form-control">
  </div>
  <?php }?>