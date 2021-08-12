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
$c1="";
if (isset($_POST["btn_cus"])) {
    $cus_company_id = $_POST["cus_company_id"];
    $cus_project = $_POST["cus_project"];
    if($rowcupdate[2] !== $cus_project)
    {
        $c1="Project ,";
    } 
    $cus_dealership_name = $_POST["cus_dealership_name"];
    if($rowcupdate[3] !== $cus_dealership_name)
    {
        $c1.=" dealership name ,";
    } 
    $cus_sell_person = $_POST["cus_sell_person"];
    if($rowcupdate[4] !== $cus_sell_person)
    {
        $c1.=" Sell Person ,";
    } 
    $cus_username = $_POST["cus_username"];
    if($rowcupdate[5] !== $cus_username)
    {
        $c1.=" username ,";
    } 
    $cus_password = $_POST["cus_password"];
    if($rowcupdate[6] !== $cus_password)
    {
        $c1.=" Password ,";
    } 
    $cus_access = $_POST["cus_access"];
    if($rowcupdate[7] !== $cus_access)
    {
        $c1.=" Access ,";
    } 
    $cus_country = $_POST["cus_country"];
    if($rowcupdate[8] !== $cus_country)
    {
        $c1.=" Country ,";
    }
    $cus_arrival_port = $_POST["cus_arrival_port"];
    if($rowcupdate[9] !== $cus_arrival_port)
    {
        $c1.=" Arrival Port ,";
    }
    $cus_currency = $_POST["cus_currency"];
    if($rowcupdate[10] !== $cus_currency)
    {
        $c1.=" Currency ,";
    }
    $cus_freight = $_POST["cus_freight"];
    if($rowcupdate[11] !== $cus_freight)
    {
        $c1.=" freight ,";
    }
    $cus_bl = $_POST["cus_bl"];
    if($rowcupdate[12] !== $cus_bl)
    {
        $c1.=" BL ,";
    }
    $cus_address = $_POST["cus_address"];
    if($rowcupdate[13] !== $cus_address)
    {
        $c1.=" Address ,";
    }
    $cus_company_phone = $_POST["cus_company_phone"];
    if($rowcupdate[14] !== $cus_company_phone)
    {
        $c1.=" Company Phone ,";
    }
    $cus_home_phone = $_POST["cus_home_phone"];
    if($rowcupdate[15] !== $cus_home_phone)
    {
        $c1.=" Home Phone ,";
    }
    $cus_personal_phone = $_POST["cus_personal_phone"];
    if($rowcupdate[16] !== $cus_personal_phone)
    {
        $c1.=" Personal Phone ,";
    }
    $cus_fax = $_POST["cus_fax"];
    if($rowcupdate[17] !== $cus_fax)
    {
        $c1.=" Customer fax ,";
    }
    $cus_contact_phone_1 = $_POST["cus_contact_phone_1"];
    if($rowcupdate[18] !== $cus_contact_phone_1)
    {
        $c1.=" Customer Contact phone 1 ,";
    }
    $cus_contact_email_1 = $_POST["cus_contact_email_1"];
    if($rowcupdate[19] !== $cus_contact_email_1)
    {
        $c1.=" Customer Contact Email 1 ,";
    }
    $cus_contact_phone_2 = $_POST["cus_contact_phone_2"];
    if($rowcupdate[20] !== $cus_contact_phone_2)
    {
        $c1.=" Customer Contact phone 2,";
    }
    $cus_contact_email_2 = $_POST["cus_contact_email_2"];
    if($rowcupdate[21] !== $cus_contact_email_2)
    {
        $c1=" Customer Contact Email 2 ,";
    }
    $cus_contact_phone_3 = $_POST["cus_contact_phone_3"];
    if($rowcupdate[22] !== $cus_contact_phone_3)
    {
        $c1.=" Customer Contact Phone 3 ,";
    }
    $cus_contact_email_3 = $_POST["cus_contact_email_3"];
    if($rowcupdate[23] !== $cus_contact_email_3)
    {
        $c1.=" Customer Contact Email 3 ,";
    }
    $cus_contact_key_1=$_POST["cus_contact_key_1"];
    if($rowcupdate[30] !== $cus_contact_key_1)
    {
        $c1.=" Customer Contact Key1 ,";
    }
    $cus_contact_key_2=$_POST["cus_contact_key_2"];
    if($rowcupdate[31] !== $cus_contact_key_2)
    {
        $c1.=" Customer Contact Key 2 ,";
    }
    $cus_contact_key_3=$_POST["cus_contact_key_3"];
    if($rowcupdate[32] !== $cus_contact_key_3)
    {
        $c1.=" Customer Contact Key 3 ,";
    }
    $cus_memo = $_POST["cus_memo"];
    if($rowcupdate[24] !== $cus_memo)
    {
        $c1.=" Customer Memo ,";
    }
    $cus_createdBy = "username";
    $cus_createdAt = time();
    $cus_updatedBy = "username";
    $cus_updatedAt = time();
    $cus_status ="active";
    date_default_timezone_set('Asia/karachi');
    $changetime = date('d-m-y h:i:s');
    $id=$_GET['id'];
    $insertchanges="insert into changes_record(changed,changeat,changeby,tablename,userid,record_id) Values ('$c1','$changetime','Test','Customer','1','$id')";
    $queryinsert=mysqli_query($connection,$insertchanges);
    if(is_uploaded_file($_FILES['cus_img']['tmp_name'])){
        $images1=$_FILES['cus_img']['tmp_name'];
        $cus_passport_image=addslashes(file_get_contents($images1));
        $insert = "UPDATE ats_customer SET ats_customer_project='$cus_project',ats_customer_dealership_name='$cus_dealership_name',ats_customer_sell_person='$cus_sell_person',ats_customer_username='$cus_username',ats_customer_password='$cus_password',ats_customer_access='$cus_access',ats_customer_country='$cus_country',ats_customer_arrival_port='$cus_arrival_port',ats_customer_currency='$cus_currency',ats_customer_freight='$cus_freight',ats_customer_BL='$cus_bl',ats_customer_address='$cus_address',ats_customer_company_phone='$cus_company_phone',ats_customer_home_phone='$cus_home_phone',ats_customer_personal_phone='$cus_personal_phone',ats_customer_fax_no='$cus_fax',ats_customer_contact_person_phone='$cus_contact_phone_1',ats_customer_contact_person_email='$cus_contact_email_1',ats_customer_contact_person_phone_2='$cus_contact_phone_2',ats_customer_contact_person_email_2='$cus_contact_email_2',ats_customer_contact_person_phone_3='$cus_contact_phone_3',ats_customer_contact_person_email_3='$cus_contact_email_3',ats_customer_memo='$cus_memo',ats_customer_contact_name_1='$cus_contact_key_1',ats_customer_contact_name_2='$cus_contact_key_3',ats_customer_contact_name_3='$cus_contact_key_3',profile_image='$cus_passport_image' WHERE ats_customer_ATS_ID=".$_GET['id'];
        $query = mysqli_query($connection,$insert);
    }
    else{
        $insert = "UPDATE ats_customer SET ats_customer_project='$cus_project',ats_customer_dealership_name='$cus_dealership_name',ats_customer_sell_person='$cus_sell_person',ats_customer_username='$cus_username',ats_customer_password='$cus_password',ats_customer_access='$cus_access',ats_customer_country='$cus_country',ats_customer_arrival_port='$cus_arrival_port',ats_customer_currency='$cus_currency',ats_customer_freight='$cus_freight',ats_customer_BL='$cus_bl',ats_customer_address='$cus_address',ats_customer_company_phone='$cus_company_phone',ats_customer_home_phone='$cus_home_phone',ats_customer_personal_phone='$cus_personal_phone',ats_customer_fax_no='$cus_fax',ats_customer_contact_person_phone='$cus_contact_phone_1',ats_customer_contact_person_email='$cus_contact_email_1',ats_customer_contact_person_phone_2='$cus_contact_phone_2',ats_customer_contact_person_email_2='$cus_contact_email_2',ats_customer_contact_person_phone_3='$cus_contact_phone_3',ats_customer_contact_person_email_3='$cus_contact_email_3',ats_customer_memo='$cus_memo',ats_customer_contact_name_1='$cus_contact_key_1',ats_customer_contact_name_2='$cus_contact_key_3',ats_customer_contact_name_3='$cus_contact_key_3' WHERE ats_customer_ATS_ID=".$_GET['id'];
        $query = mysqli_query($connection,$insert);
    }
    if ($query){
        echo '<script type="text/javascript"> alert("Record Successfully changed")</script>';
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
                                                    <input type="text" id="cus_company_id" name="cus_company_id" value="<?php  echo $rowcupdate[1]?>" class="form-control form-control-sm" style="pointer-events: none"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-control-label">Project</label>
                                                    <select name="cus_project" id="cus_project" class="form-control form-control-sm" required>
                                                        <option value="" disabled>Please Select</option>
                                                        <option <?php if($rowcupdate[2]=="MI-JAPAN") echo 'selected="selected"'; ?> value="MI-JAPAN">M.I JAPAN</option>
                                                        <option value="ZMCL" <?php if($rowcupdate[2]=="ZMCL") echo 'selected="selected"'; ?>>ZMCL</option>
                                                        <option value="AL-TRADING" <?php if($rowcupdate[2]=="AL-TRADING") echo 'selected="selected"'; ?>>ALI TRADING</option>
                                                        <option value="BE-FORWARD" <?php if($rowcupdate[2]=="BE-FORWARD") echo 'selected="selected"'; ?>>BE FORWARD</option>
                                                        <option value="HUSSIAN-TRADING" <?php if($rowcupdate[2]=="HUSSIAN-TRADING") echo 'selected="selected"'; ?>>HUSSIAN TRADING</option>
                                                    </select> 
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Dealership Name</label>
                                                    <input type="text" id="cus_dealership_name" name="cus_dealership_name" value="<?php  echo $rowcupdate[3]?>" placeholder="Enter Dealership Name" class="form-control form-control-sm" required></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-control-label">Sell Person</label>
                                                    <select name="cus_sell_person" id="cus_sell_person" class="form-control-sm form-control" required>
                                                        <option value="">Please Select</option>
                                                        <?php
                                                            $query_sell = mysqli_query($connection,"select * from ats_sell_person");
                                                            $count_sell = mysqli_num_rows($query_sell);
                                                            while($row = mysqli_fetch_array($query_sell)){
                                                                if($rowcupdate[4]==$row['Sell_person']){
                                                        ?>
                                                        <option value = "<?php echo($row['Sell_person'])?>" selected><?php echo($row['Sell_person']) ?></option>
                                                        <?php
                                                                }
                                                                else{
                                                        ?>
                                                        <option value = "<?php echo($row['Sell_person'])?>"> <?php echo($row['Sell_person']) ?></option>
                                                        <?php
                                                                }
                                                            }                                             
                                                        ?>      
                                                    </select> 
                                                </div>
                                            </div> 
                                            <div style="margin-top: -2%" class="row form-group">
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Username (Auto Generated)</label><input type="text" id="cus_username" name="cus_username" value="<?php echo $rowcupdate[5];?>" class="form-control form-control-sm"style="pointer-events: none"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                    <label class="form-control-label">Password (Auto Generated)</label><input type="text" id="cus_password" name="cus_password" value="<?php echo $rowcupdate[6];?>" class="form-control form-control-sm" required></div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label class="form-control-label">Access</label>
                                                    <select name="cus_access" id="cus_access" class="form-control form-control-sm">
                                                        <option <?php if($rowcupdate[7]=="Yes") echo 'selected="selected"'; ?> value="Yes">YES</option>
                                                        <option <?php if($rowcupdate[7]=="No") echo 'selected="selected"'; ?> value="No">NO</option>
                                                    </select> 
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Country</label>
                                                        <select name="cus_country" id="cus_country" class="form-control form-control-sm" onChange="getport(this.value);">
                                                            <?php 
                                                                while($rowcountry=mysqli_fetch_array($resultports))
                                                                {
                                                                    if($rowcupdate[8]== $rowcountry[0]){
                                                            ?>
                                                            <option value="<?php echo $rowcountry[0]?>" selected><?php echo $rowcountry[1]?> </option>
                                                            <?php
                                                                    }
                                                                    else {
                                                            ?>
                                                            <option value="<?php echo $rowcountry[0]?>"><?php echo $rowcountry[1]?> </option>
                                                            <?php
                                                                    }
                                                                }
                                                            ?>
                                                        </select> 
                                                    </div>
                                                </div>
                                                <div class="col-sm-2" id="test">
                                                    <label class="form-control-label">Arrival Port</label>
                                                    <select name="cus_arrival_port" id="cus_arrival_port" class="form-control-sm form-control" >
                                                    <option disabled selected>Please Select</option>
                                                        <?php 
                                                        while($rowports=mysqli_fetch_array($resultportcountry))
                                                        {
                                                            if($rowcupdate[9]== $rowports[0])
                                                            {
                                                        ?>
                                                        <option value="<?php echo $rowports[0]?>" selected><?php echo $rowports[1]?> </option>
                                                        <?php
                                                            }
                                                            else {
                                                        ?>
                                                        <option value="<?php echo $rowports[0]?>"><?php echo $rowports[1]?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div style="margin-top: -2%" class="row form-group">
                                                <div class="col-sm-2">
                                                    <label for="select" class="form-control-label">Currency</label>
                                                    <select name="cus_currency" id="cus_currency" class="form-control form-control-sm">
                                                        <option value="$-USD" <?php if($rowcupdate[10]=="$-USD") echo 'selected="selected"'; ?>>$ USD</option>
                                                        <option value="¥-JAPANESE-YEN" <?php if($rowcupdate[10]=="JAPANESE-YEN") echo 'selected="selected"'; ?>>¥ JAPANESE YEN</option>
                                                        <option value="GB£" <?php if($rowcupdate[10]=="GB£") echo 'selected="selected"'; ?>>GB£ (GREAT BRITISH POUND/STERLING)</option>
                                                    </select> 
                                                </div>
                                                <div class="col-sm-2">
                                                    <label class="form-control-label">Freight</label>
                                                    <select name="cus_freight" id="cus_freight" class="form-control form-control-sm">
                                                        <option value="Null">Please Select</option>
                                                        <option value="Collect" <?php if($rowcupdate[11]=="Collect") echo 'selected="selected"'; ?>>Collect</option>
                                                        <option value="Prepaid" <?php if($rowcupdate[12]=="Prepaid") echo 'selected="selected"'; ?>>Prepaid</option>
                                                    </select> 
                                                </div> 
                                                <div class="col-sm-2">
                                                    <label class="form-control-label">BL</label>
                                                    <select name="cus_bl" id="cus_bl" class="form-control form-control-sm">
                                                        <option value="Null">Please Select</option>
                                                        <option value="Combined" <?php if($rowcupdate[12]=="Combined") echo 'selected="selected"'; ?>>Combined</option>
                                                        <option value="Seperate" <?php if($rowcupdate[12]=="Seperate") echo 'selected="selected"'; ?>>Separate</option>
                                                    </select> 
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label class="form-control-label">Address</label><input type="text" id="cus_address" name="cus_address" value="<?php echo $rowcupdate[13]?>" placeholder="Enter Address" class="form-control form-control-sm" required></div>
                                                </div>
                                            </div>
                                            <div style="margin-top: -2%" class="row form-group">
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Company Phone Number #</label><input type="number" id="cus_company_phone" value="<?php echo $rowcupdate[14]?>" name="cus_company_phone" placeholder="Enter Company Phone #" class="form-control form-control-sm" required></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Home Phone #</label><input type="number" id="cus_home_phone" value="<?php echo $rowcupdate[15]?>" name="cus_home_phone" placeholder="Enter Home Phone #" class="form-control form-control-sm" ></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">Personal Phone #</label><input type="number" id="cus_personal_phone" value="<?php echo $rowcupdate[16]?>" name="cus_personal_phone" placeholder="Enter Personal Phone #" class="form-control form-control-sm"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label class="form-control-label">FAX #</label><input type="number" id="cus_fax" name="cus_fax" value="<?php echo $rowcupdate[17]?>" placeholder="Enter Fax Number #" class="form-control form-control-sm"></div>
                                                </div>
                                            </div>
                                            <div style="margin-top: -2%" class="row form-group">
                                            <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Contact Person 1 Key</label><input type="text" name="cus_contact_key_1" id="cus_contact_phone_1" value="<?php echo $rowcupdate[30]?>" placeholder="Enter Person 1 Phone #" class="form-control form-control-sm"></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Contact Person 1 Phone #</label><input type="number" name="cus_contact_phone_1" id="cus_contact_phone_1" value="<?php echo $rowcupdate[18]?>" placeholder="Enter Person 1 Phone #" class="form-control form-control-sm"></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label class="form-control-label">Contact Person 1 Email</label><input type="email" name="cus_contact_email_1" id="cus_contact_email_1" value="<?php echo $rowcupdate[19]?>" placeholder="Enter Person 1 Email" class="form-control form-control-sm"></div>
                                                </div>
                                            </div>
                                            <div class="row form-group col-sm-12">
                                                <div style="width: 100%; margin-top: -2.5%" id="accordion_another_contact">
                                                    <div id="headingOne1">
                                                        <a href="" data-toggle="collapse" class="text-link" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne" class="text-left btn btn-link btn-block">
                                                            + Add another Contact Person Detail
                                                        </a>
                                                    </div>
                                                    <div style="width: 103%" data-parent="#accordion_another_contact" id="collapseOne3" aria-labelledby="headingOne1" class="collapse ">
                                                        <div class="row form-group mt-2 mb-0 ">
                                                            <div class="col-sm-4">
                                                            <div class="form-group"><label class="form-control-label">Contact Person 2 Key</label><input type="text" name="cus_contact_key_2" id="cus_contact_phone_2" value="<?php echo $rowcupdate[31]?>" placeholder="Enter Person 1 Phone #" class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group"><label class="form-control-label">Contact Person 2 Phone #</label><input type="number" name="cus_contact_phone_2" id="cus_contact_phone_2" placeholder="Enter Person 2 Phone #" value="<?php echo $rowcupdate[20]?>" class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group"><label class="form-control-label">Contact Person 2 Email</label><input type="email" name="cus_contact_email_2" id="cus_contact_email_2" value="<?php echo $rowcupdate[21]?>" placeholder="Enter Person 2 Email" class="form-control form-control-sm"></div>
                                                            </div>
                                                            <div style="width: 97%; margin-top: -1% ; margin-left: 1.5%" id="accordion_another_contact2">
                                                                <div id="headingOne12" >
                                                                    <a href="" data-toggle="collapse" class="text-link" data-target="#collapseOne31" aria-expanded="true" aria-controls="collapseOne1" class="text-left btn btn-link btn-block">+ Add another Contact Person Detail</a>
                                                                </div>
                                                                <div data-parent="#accordion_another_contact2" id="collapseOne31" aria-labelledby="headingOne12" class="collapse">
                                                                    <div class="row form-group mt-2">
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group"><label class="form-control-label">Contact Person 3 Key</label><input type="text" name="cus_contact_key_3" id="cus_contact_phone_3" value="<?php echo $rowcupdate[32]?>" placeholder="Enter Person 3 Phone #" class="form-control form-control-sm"></div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group"><label class="form-control-label">Contact Person 3 Phone #</label><input type="number" name="cus_contact_phone_3" id="cus_contact_phone_3" placeholder="Enter Person 3 Phone #" value="<?php echo $rowcupdate[22]?>" class="form-control form-control-sm"></div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group"><label class="form-control-label">Contact Person 3 Email</label><input type="email" name="cus_contact_email_3" id="cus_contact_email_3" value="<?php echo $rowcupdate[23]?>" placeholder="Enter Person 3 Email" class="form-control form-control-sm"></div>
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
                                                    <div class="form-group"><label class="form-control-label">Memo</label><input type="text" value="<?php echo $rowcupdate[24]?>" name="cus_memo" id="cus_memo" placeholder="Enter Memo Detail" class="form-control form-control-sm"></div>
                                                </div>
                                              <div class="col-sm-4">
                                                <div class="form-group"><label class="form-control-label">Profile Image</label><input type="file" name="cus_img" id="cus_img"></div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input style="margin-top: 19%" type="submit" name="btn_cus" id="btn_cus" class="btn btn-success float-right" value="Update Customer"> 
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
        //alert(val);
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