<?php
include("top.php");
include("connection_db.php");
$querycupdate="select * from ats_customer where ats_customer_ATS_ID='".$_GET['id']."'";
$resultcupdate=mysqli_query($connection,$querycupdate);
$rowcupdate=mysqli_fetch_row($resultcupdate);
$querycountry="select * from countryports ORDER BY name ASC ";
$resultports=mysqli_query($connection,$querycountry);
$queryport="select * from arrivalports where country='".$rowcupdate[8]."' ORDER BY name ASC ";
$resultportcountry=mysqli_query($connection,$queryport);
$querycust = "SHOW TABLE STATUS LIKE 'ats_customer'";
$resultcust = mysqli_query($connection,$querycust);
$rowcust = mysqli_fetch_assoc($resultcust);

?>
  
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div class="col-lg-12 mt-4">
                            <div style="margin-top: -2%" class="card">
                                <div class="card-header"><strong>Customer Registration Form</strong></div>
                                    <div class="card-body">
                                        <form action="" method="post">    
                                            <div style="margin-top: -1%" class="row form-group">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                    <label class="form-control-label">Customer ID</label>
                                                    <input type="text" id="cus_company_id" name="cus_company_id" value="ATS-CUS<?php  echo $rowcupdate[1]?>" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-control-label">Project</label>
                                                   
                                                    <input type="text" id="cus_project" name="cus_project" value="<?php  echo $rowcupdate[2]?>" class="form-control form-control-sm" style="pointer-events: none">
                                                       
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Dealership Name</label>
                                                    <input type="text" id="cus_dealership_name" name="cus_dealership_name" value="<?php  echo $rowcupdate[3]?>"   placeholder="Enter Dealership Name" class="form-control form-control-sm" required style="pointer-events: none"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-control-label">Sell Person</label>
                                                       
                                                                    
                                                                    <?php
                                                                         $query_sell = mysqli_query($connection,"select * from ats_sell_person");
                                                                         $count_sell = mysqli_num_rows($query_sell);
                                                                         while($row = mysqli_fetch_array($query_sell))
                                                                         {
                                                                            if($rowcupdate[4]==$row['Sell_person'])
                                                                            {
                                                                         ?>
                                                                        
                                                                         <input type="text"  value="<?php echo($row['Sell_person']) ?>" class="form-control form-control-sm"  style="pointer-events: none" required>
                                                                         <?php
                                                                         }
                                                                       
                                        
                                                                             
                                                                         }                                             
                                                                        ?>      
                                                      
                                                </div>
                                            </div> 
                                            <div style="margin-top: -2%" class="row form-group">
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Username</label><input type="text" id="cus_username" name="cus_username"   value="<?php echo $rowcupdate[5];?>"  class="form-control form-control-sm" style="pointer-events: none" ></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                    <label class="form-control-label">Password</label><input type="text" id="cus_password" name="cus_password"   value="<?php echo $rowcupdate[6];?>" class="form-control form-control-sm"  style="pointer-events: none" required></div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label class="form-control-label">Access</label>
                                                    <input type="text" id="cus_dealership_name" name="cus_dealership_name" value="<?php  echo $rowcupdate[7]?>"   placeholder="Enter Dealership Name" class="form-control form-control-sm" required style="pointer-events: none">
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group"><label class="form-control-label">Country</label>
                                                        
                                                            <?php 
                                                            while($rowcountry=mysqli_fetch_array($resultports))
                                                            {
                                                                if($rowcupdate[8]== $rowcountry[0])
                                                                {
                                                                ?>
                                                                <input type="text" id="cus_dealership_name" name="cus_dealership_name" value="<?php  echo $rowcountry[1]?>"   placeholder="Enter Dealership Name" class="form-control form-control-sm" required style="pointer-events: none">
                                                                
                                                                <?php
                                                                }
                                                                
                                                            }
                                                            ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-2" id="test">
                                                    <label class="form-control-label">Arrival Port</label>
                                                        
                                                        <?php 
                                                            while($rowports=mysqli_fetch_array($resultportcountry))
                                                            {
                                                                if($rowcupdate[9]== $rowports[0])
                                                                {
                                                                ?>
                                                                <input type="text" id="cus_dealership_name" name="cus_dealership_name" value="<?php  echo $rowports[1]?>"   placeholder="Enter Dealership Name" class="form-control form-control-sm" required style="pointer-events: none">
                                                                
                                                                <?php
                                                                }
                                                               
                                                            }
                                                            ?>
                                                       
                                                </div>
                                            </div> 
                                            <div style="margin-top: -2%" class="row form-group">
                                                <div class="col-sm-2">
                                                    <label for="select" class="form-control-label">Currency</label>
                                                    <input type="text" id="cus_dealership_name" name="cus_dealership_name" value="<?php  echo $rowcupdate[10]?>"   placeholder="Enter Dealership Name" class="form-control form-control-sm" required style="pointer-events: none">

                                                </div>
                                                <div class="col-sm-2">
                                                    <label class="form-control-label">Freight</label>
                                                    <input type="text" id="cus_dealership_name" name="cus_dealership_name" value="<?php  echo $rowcupdate[11]?>"   placeholder="Enter Dealership Name" class="form-control form-control-sm" required style="pointer-events: none">
 
                                                </div> 
                                                <div class="col-sm-2">
                                                    <label class="form-control-label">BL</label>
                                                    <input type="text" id="cus_dealership_name" name="cus_dealership_name" value="<?php  echo $rowcupdate[12]?>"   placeholder="Enter Dealership Name" class="form-control form-control-sm" required style="pointer-events: none">
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label class="form-control-label">Address</label><input type="text" id="cus_address" name="cus_address" value="<?php echo $rowcupdate[13]?>"   placeholder="Enter Address" class="form-control form-control-sm" required style="pointer-events: none"></div>
                                                </div>
                                            </div>
                                            <div style="margin-top: -2%" class="row form-group">
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Company Phone Number #</label><label id="cus_company_phone" value=""  name="cus_company_phone" placeholder="Enter Company Phone #" class="form-control form-control-sm" required style="pointer-events: none"><?php echo $rowcupdate[14]?></label></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Home Phone #</label><input type="text" id="cus_home_phone" value="<?php echo $rowcupdate[15]?>"  name="cus_home_phone" placeholder="Enter Home Phone #" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Personal Phone #</label><input type="text" id="cus_personal_phone" value="<?php echo $rowcupdate[16]?>"   name="cus_personal_phone" placeholder="Enter Personal Phone #" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">FAX #</label><input type="text" id="cus_fax" name="cus_fax" value="<?php echo $rowcupdate[17]?>"  placeholder="Enter Fax Number #" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                </div>
                                            </div>
                                            <div style="margin-top: -2%" class="row form-group">
                                            <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Contact/Key Person 1</label><input type="text" name="cus_contact_key_1" id="cus_contact_phone_1" value="<?php echo $rowcupdate[30]?>" placeholder="Enter Person 1 Phone #" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Contact Person 1 Phone #</label><input type="text" name="cus_contact_phone_1" id="cus_contact_phone_1" value="<?php echo $rowcupdate[18]?>" placeholder="Enter Person 1 Phone #" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Contact Person 1 Email</label><input type="email" name="cus_contact_email_1" id="cus_contact_email_1" value="<?php echo $rowcupdate[19]?>" placeholder="Enter Person 1 Email" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                </div>
                                            </div>
                                            <div class="row form-group col-sm-12">
                                                <div style="width: 100%; margin-top: -2.5%" id="accordion_another_contact">
                                                    
                                                    <div style="width: 103%" >
                                                        <div class="row form-group mt-2 mb-0 ">
                                                            <div class="col-sm-4">
                                                            <div class="form-group"><label class="form-control-label">Contact/Key Person 2</label><input type="text" name="cus_contact_key_2" id="cus_contact_phone_2" value="<?php echo $rowcupdate[31]?>" placeholder="Enter Person 1 Phone #" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group"><label class="form-control-label">Contact Person 2 Phone #</label><input type="text" name="cus_contact_phone_2" id="cus_contact_phone_2" placeholder="Enter Person 2 Phone #" value="<?php echo $rowcupdate[20]?>" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group"><label class="form-control-label">Contact Person 2 Email</label><input type="email" name="cus_contact_email_2" id="cus_contact_email_2" value="<?php echo $rowcupdate[21]?>" placeholder="Enter Person 2 Email" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group"><label class="form-control-label">Contact/Key Person 3</label><input type="text" name="cus_contact_key_3" id="cus_contact_phone_3" value="<?php echo $rowcupdate[32]?>" placeholder="Enter Person 3 Phone #" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group"><label class="form-control-label">Contact Person 3 Phone #</label><input type="text" name="cus_contact_phone_3" id="cus_contact_phone_3" placeholder="Enter Person 3 Phone #" value="<?php echo $rowcupdate[22]?>" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group"><label class="form-control-label">Contact Person 3 Email</label><input type="email" name="cus_contact_email_3" id="cus_contact_email_3" value="<?php echo $rowcupdate[23]?>" placeholder="Enter Person 3 Email" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-top: -1.5%" class="row form-group">
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label class="form-control-label">Memo</label><input type="text"  value="<?php echo $rowcupdate[24]?>" name="cus_memo" id="cus_memo"  placeholder="Enter Memo Detail" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                </div>
                                                 <div class="col-sm-4">
                                                    <div class="form-group"> <label class="form-control-label">Profile Image</label>
                                                    <img style="width: 50px; height: 55px;  margin-left:4%;" id="emp_passport_image_print"  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rowcupdate[33]); ?>" /></div>  
                                                </div>
                                                <div class="col-sm-2">
                                                <a style="margin-top: 5%" type="submit" name="btn_cus" id="btn_cus" class="btn btn-primary float-right" value="Add Customer" href="form-customer-update.php?id=<?php echo $_GET['id']?>">Update Record</a>
                                                </div>
                                            </div>                 
                                        </form>
                                    </div>  
                                </div> 
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
<?php
include("bottom.php");
?>
 