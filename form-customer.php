<?php
include("top.php");
include("connection_db.php");
$querycountry="select * from countryports";
$resultports=mysqli_query($connection,$querycountry);
$querycust = "SHOW TABLE STATUS LIKE 'ats_customer'";
$resultcust = mysqli_query($connection,$querycust);
$rowcust = mysqli_fetch_assoc($resultcust);
if (isset($_POST["btn_cus"])) {
    if(is_uploaded_file($_FILES['cus_img']['tmp_name'])){
        $images1=$_FILES['cus_img']['tmp_name'];
        $cus_passport_image=addslashes(file_get_contents($images1));  
    }
    else {
        $cus_passport_image="";
    }
    $cus_company_id = $_POST["cus_company_id"];
    $cus_project = $_POST["cus_project"];
    $cus_dealership_name = $_POST["cus_dealership_name"];
    $cus_sell_person = $_POST["cus_sell_person"];
    $cus_username = $_POST["cus_username"];
    $cus_password = $_POST["cus_password"];
    $cus_access = $_POST["cus_access"];
    $cus_country = $_POST["cus_country"];
    $cus_arrival_port = $_POST["cus_arrival_port"];
    $cus_currency = $_POST["cus_currency"];
    $cus_freight = $_POST["cus_freight"];
    $cus_bl = $_POST["cus_bl"];
    $cus_address = $_POST["cus_address"];
    $cus_company_phone = $_POST["cus_company_phone"];
    $cus_home_phone = $_POST["cus_home_phone"];
    $cus_personal_phone = $_POST["cus_personal_phone"];
    $cus_fax = $_POST["cus_fax"];
    $cus_contact_phone_1 = $_POST["cus_contact_phone_1"];
    $cus_contact_email_1 = $_POST["cus_contact_email_1"];
    $cus_contact_phone_2 = $_POST["cus_contact_phone_2"];
    $cus_contact_email_2 = $_POST["cus_contact_email_2"];
    $cus_contact_phone_3 = $_POST["cus_contact_phone_3"];
    $cus_contact_email_3 = $_POST["cus_contact_email_3"];
    $cus_contact_key_1=$_POST["cus_contact_key_1"];
    $cus_contact_key_2=$_POST["cus_contact_key_2"];
    $cus_contact_key_3=$_POST["cus_contact_key_3"];
    $cus_memo = $_POST["cus_memo"];
    $cus_createdBy = "username";
    $cus_createdAt = time();
    $cus_updatedBy = "username";
    $cus_updatedAt = time();
    $cus_status ="active";
    $insert = "insert into ats_customer(ats_customer_ATS_ID,ats_customer_project,ats_customer_dealership_name,ats_customer_sell_person,ats_customer_username,ats_customer_password,ats_customer_access,ats_customer_country,ats_customer_arrival_port,ats_customer_currency,ats_customer_freight,ats_customer_BL,ats_customer_address,ats_customer_company_phone,ats_customer_home_phone,ats_customer_personal_phone,ats_customer_fax_no,ats_customer_contact_person_phone,ats_customer_contact_person_email,ats_customer_contact_person_phone_2,ats_customer_contact_person_email_2,ats_customer_contact_person_phone_3,ats_customer_contact_person_email_3,ats_customer_memo,ats_customer_createdBy,ats_customer_createdAt,ats_customer_updatedBy,ats_customer_updatedAt,ats_customer_status,ats_customer_contact_name_1,ats_customer_contact_name_2,ats_customer_contact_name_3,profile_image)values('$cus_company_id','$cus_project','$cus_dealership_name','$cus_sell_person','$cus_username','$cus_password','$cus_access','$cus_country','$cus_arrival_port','$cus_currency','$cus_freight','$cus_bl','$cus_address','$cus_company_phone','$cus_home_phone','$cus_personal_phone','$cus_fax','$cus_contact_phone_1','$cus_contact_email_1','$cus_contact_phone_2','$cus_contact_email_2','$cus_contact_phone_3',' $cus_contact_email_3','$cus_memo','$cus_createdBy','$cus_createdAt','$cus_updatedBy',' $cus_updatedAt',' $cus_status','$cus_contact_key_1','$cus_contact_key_2','$cus_contact_key_3','$cus_passport_image')";
    //$query = mysqli_query($connection,$insert) or die(mysqli_error($connection));
    //echo $query; 
    $query = mysqli_query($connection,$insert);
    if ($query){
        echo '<script type="text/javascript"> alert("Customer Register Successfully")</script>';
        echo '<script language="javascript">window.location.href ="cust_search.php"</script>';
    }
    else{
        echo mysqli_error($connection);
    }	
}
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div class="col-lg-12 mt-4">
                            <div style="margin-top: -2%" class="card">
                                <div class="card-header"><strong>Customer Registration Form</strong></div>
                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">    
                                            <div style="margin-top: -1%" class="row form-group">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Customer ID</label>
                                                        <div style="margin-bottom:-16px;" class="form-row">
                                                            <div class="col-sm-4">
                                                                <input type="text" value="ATS-CUS&nbsp; &nbsp;" style="font-size:12px;border:none;margin-top:12.5%;" disabled>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="cus_company_id" name="cus_company_id" value="<?php echo $rowcust['Auto_increment']; ?>" class="form-control-sm form-control" style="pointer-events: none">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-control-label">Project<span style="color:red">*</span></label>
                                                    <select name="cus_project" id="cus_project" class="form-control form-control-sm" required>
                                                        <option value="" selected disabled>Please Select</option>
                                                        <option value="MI-JAPAN">MI JAPAN</option>
                                                        <option value="ZMCL">ZMCL</option>
                                                        <option value="AL-TRADING">ALI TRADING</option>
                                                        <option value="BE-FORWARD">BE FORWARD</option>
                                                        <option value="HUSSIAN-TRADING">HUSSIAN TRADING</option>
                                                    </select> 
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Dealership Name<span style="color:red">*</span></label>
                                                    <input type="text" id="cus_dealership_name" name="cus_dealership_name" placeholder="Enter Dealership Name" class="form-control form-control-sm" required></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-control-label">Sell Person<span style="color:red">*</span></label>
                                                    <select name="cus_sell_person" id="cus_sell_person" class="form-control-sm form-control" required>
                                                        <option selected disabled>Please Select</option>
                                                        <?php
                                                            $query_sell = mysqli_query($connection,"select * from ats_sell_person");
                                                            $count_sell = mysqli_num_rows($query_sell);
                                                            while($row = mysqli_fetch_array($query_sell)){
                                                        ?>
                                                        <option value = "<?php echo($row['Sell_person'])?>"><?php echo($row['Sell_person']) ?>
                                                        </option>
                                                        <?php
                                                            }                                             
                                                        ?>      
                                                    </select> 
                                                </div>
                                            </div> 
                                            <div style="margin-top: -2%" class="row form-group">
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Username (Auto Generated)</label><input type="text" id="cus_username" name="cus_username" value="<?php echo"UN",(rand(100,1000000));?>" class="form-control form-control-sm"style="pointer-events: none"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                    <label class="form-control-label">Password (Auto Generated)</label><input type="text" id="cus_password" name="cus_password" value="<?php echo"PW",(rand(100,1000000));?>" class="form-control form-control-sm"style="pointer-events: none"></div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label class="form-control-label">Access</label>
                                                    <select name="cus_access" id="cus_access" class="form-control form-control-sm">
                                                        <option value="Yes">YES</option>
                                                        <option value="No">NO</option>
                                                    </select> 
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Country<span style="color:red">*</span></label>
                                                        <select name="cus_country" id="cus_country" class="form-control form-control-sm" onChange="getport(this.value);" required>
                                                            <option disabled selected>Please Select</option>
                                                            <?php 
                                                                while($rowcountry=mysqli_fetch_array($resultports)){
                                                            ?>
                                                            <option value="<?php echo $rowcountry[0]?>"><?php echo $rowcountry[1]?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select> 
                                                    </div>
                                                </div>
                                                <div class="col-sm-2" id="test">
                                                    <label class="form-control-label">Arrival Port<span style="color:red">*</span></label>
                                                    <select name="cus_arrival_port" id="cus_arrival_port" class="form-control form-control-sm" required>
                                                        <option disabled selected>Please Select</option>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div style="margin-top: -2%" class="row form-group">
                                                <div class="col-sm-2">
                                                    <label for="select" class="form-control-label">Currency<span style="color:red">*</span></label>
                                                    <select name="cus_currency" id="cus_currency" class="form-control form-control-sm" required>
                                                        <option value="---" selected disabled>Please Select</option>
                                                        <option value="$-USD">$ USD</option>
                                                        <option value="JAPANESE-YEN">¥ JAPANESE YEN</option>
                                                        <option value="GB£">GB£ (GREAT BRITISH POUND/STERLING)</option>
                                                    </select> 
                                                </div>
                                                <div class="col-sm-2">
                                                    <label class="form-control-label">Freight<span style="color:red">*</span></label>
                                                    <select name="cus_freight" id="cus_freight" class="form-control form-control-sm" required>
                                                        <option value="---" selected disabled>Please Select</option>
                                                        <option value="Collect">Collect</option>
                                                        <option value="Prepaid">Prepaid</option>
                                                    </select> 
                                                </div> 
                                                <div class="col-sm-2">
                                                    <label class="form-control-label">BL<span style="color:red">*</span></label>
                                                    <select name="cus_bl" id="cus_bl" class="form-control form-control-sm" required>
                                                        <option value="---" selected disabled>Please Select</option>
                                                        <option value="Combined">Combined</option>
                                                        <option value="Seperate">Separate</option>
                                                    </select> 
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label class="form-control-label">Address<span style="color:red">*</span></label><input type="text" id="cus_address" name="cus_address" placeholder="Enter Address" class="form-control form-control-sm" required></div>
                                                </div>
                                            </div>
                                            <div style="margin-top: -2%" class="row form-group">
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Company Phone Number #</label><input type="number" id="cus_company_phone" name="cus_company_phone" placeholder="Enter Company Phone #" class="form-control form-control-sm"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Home Phone #</label><input type="number" id="cus_home_phone" name="cus_home_phone" placeholder="Enter Home Phone #" class="form-control form-control-sm"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Personal Phone #<span style="color:red">*</span></label><input type="number" id="cus_personal_phone" name="cus_personal_phone" placeholder="Enter Personal Phone #" class="form-control form-control-sm" required></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">FAX #</label><input type="number" id="cus_fax" name="cus_fax" placeholder="Enter Fax Number #" class="form-control form-control-sm"></div>
                                                </div>
                                            </div>
                                            <div style="margin-top: -2%" class="row form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Contact/Key Person 1<span style="color:red">*</span></label><input type="text" name="cus_contact_key_1" id="cus_contact_phone_1" placeholder="Enter Person 1 Phone #" class="form-control form-control-sm" required></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Contact Person 1 Phone #<span style="color:red">*</span></label><input type="number" name="cus_contact_phone_1" id="cus_contact_phone_1" placeholder="Enter Person 1 Phone #" class="form-control form-control-sm" required></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Contact Person 1 Email<span style="color:red">*</span></label><input type="email" name="cus_contact_email_1" id="cus_contact_email_1" placeholder="Enter Person 1 Email" class="form-control form-control-sm" required></div>
                                                </div>
                                            </div>
                                            <div class="row form-group col-sm-12">
                                                <div style="width: 100%; margin-top: -2.5%" id="accordion_another_contact">
                                                    <div id="headingOne1">
                                                        <a href="" data-toggle="collapse" class="text-link" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne" class="text-left btn btn-link btn-block">
                                                            + Add another Contact Person Detail
                                                        </a>
                                                    </div>
                                                    <div style="width: 103%" data-parent="#accordion_another_contact" id="collapseOne3" aria-labelledby="headingOne1" class="collapse">
                                                        <div class="row form-group mt-2 mb-0">
                                                            <div class="col-sm-4">
                                                                <div class="form-group"><label class="form-control-label">Contact/Key Person 2</label><input type="text" name="cus_contact_key_2" id="cus_contact_phone_1" placeholder="Enter Person 2 Phone #" class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group"><label class="form-control-label">Contact Person 2 Phone #</label><input type="number" name="cus_contact_phone_2" id="cus_contact_phone_2" placeholder="Enter Person 2 Phone #" class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group"><label class="form-control-label">Contact Person 2 Email</label><input type="email" name="cus_contact_email_2" id="cus_contact_email_2" placeholder="Enter Person 2 Email" class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div style="width: 97%; margin-top: -0.8% ; margin-left: 1.5%" id="accordion_another_contact2">
                                                                <div id="headingOne12">
                                                                    <a href="" data-toggle="collapse" class="text-link" data-target="#collapseOne31" aria-expanded="true" aria-controls="collapseOne1" class="text-left btn btn-link btn-block"> + Add another Contact Person Detail
                                                                    </a>
                                                                </div>
                                                                <div data-parent="#accordion_another_contact2" id="collapseOne31" aria-labelledby="headingOne12" class="collapse ">
                                                                    <div class="row form-group mt-2">
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group"><label class="form-control-label">Contact/Key Person 3</label><input type="text" name="cus_contact_key_3" id="cus_contact_phone_1" placeholder="Enter Person 3 Phone #" class="form-control form-control-sm"></div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group"><label class="form-control-label">Contact Person 3 Phone #</label><input type="number" name="cus_contact_phone_3" id="cus_contact_phone_3" placeholder="Enter Person 3 Phone #" class="form-control form-control-sm"></div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group"><label class="form-control-label">Contact Person 3 Email</label><input type="email" name="cus_contact_email_3" id="cus_contact_email_3" placeholder="Enter Person 3 Email" class="form-control form-control-sm"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-top: -1.5%" class="row form-group">
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label class="form-control-label">Memo</label><input type="text" name="cus_memo" id="cus_memo" placeholder="Enter Memo Detail" class="form-control form-control-sm"></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Profile Image</label><input type="file" name="cus_img" id="cus_img"></div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input style="margin-top: 20%" type="submit" name="btn_cus" id="btn_cus" class="btn btn-primary float-right" value="Add Customer"> 
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
<script>
    function getport(val) {
        $.ajax({
            type: "POST",
            url: "regiondropdown.php",
            data:'country_id='+val,
            success: function(data){
                // alert(data);
                $("#test").html(data);
            }
        });
    }
</script>
<?php
include("bottom.php");
?>
 