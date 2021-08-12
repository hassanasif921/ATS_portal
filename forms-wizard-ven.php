<?php
include("connection_db.php");
if (isset($_POST["btnsubmit"])) {

    $ven_business_name = $_POST["ven_business_name"];
    $ven_business_address = $_POST["ven_business_address"];
    $ven_business_reg_no = $_POST["ven_business_reg_no"];
    $ven_country = $_POST["ven_country"];
    $ven_city = $_POST["ven_city"];
    $ven_zip_code = $_POST["ven_zip_code"];
    $ven_street = $_POST["ven_street"];
    $ven_building = $_POST["ven_building"];
    $ven_suit_no = $_POST["ven_suit_no"];
    $ven_country_2 = $_POST["ven_country_2"];
    $ven_city_2 = $_POST["ven_city_2"];
    $ven_zip_code_2 = $_POST["ven_zip_code_2"];
    $ven_street_2 = $_POST["ven_street_2"];
    $ven_building_2 = $_POST["ven_building_2"];
    $ven_suit_no_2 = $_POST["ven_suit_no_2"];
    $ven_phone = $_POST["ven_phone"];
    $ven_btn_send_otp = "";
    $ven_otp = $_POST["ven_otp"];
    $ven_btn_submit_otp = "";
    $ven_primary_f_name = $_POST["ven_primary_f_name"];
    $ven_primary_m_name = $_POST["ven_primary_m_name"];
    $ven_primary_l_name = $_POST["ven_primary_l_name"];
    $images1=$_FILES['ven_business_logo']['tmp_name'];
    $ven_business_logo=addslashes(file_get_contents($images1));
   
    $ven_website_url = $_POST["ven_website_url"];
    $ven_country_citizenship = $_POST["ven_country_citizenship"];
    $ven_country_of_birth = $_POST["ven_country_of_birth"];
    $ven_date_of_birth = $_POST["ven_date_of_birth"];
    $ven_national_identity = $_POST["ven_national_identity"];
    $ven_id_expiration_date = $_POST["ven_id_expiration_date"];
    $ven_accept_and_checked_address = $_POST["ven_accept_and_checked_address"];
    $ven_accept_and_checked_number = $_POST["ven_accept_and_checked_number"];
    $ven_accept_and_checked_name = $_POST["ven_accept_and_checked_name"];
    $ven_accept_and_ownership_of_business = $_POST["ven_accept_and_ownership_of_business"];
    $ven_name_of_bank = $_POST["ven_name_of_bank"];
    $ven_address_of_bank = $_POST["ven_address_of_bank"];
    $ven_country_of_bank = $_POST["ven_country_of_bank"];
    $ven_name_of_bank_branch = $_POST["ven_name_of_bank_branch"];
    $ven_bank_branch_code = $_POST["ven_bank_branch_code"];
    $ven_bank_account_tittle = $_POST["ven_bank_account_tittle"];
    $ven_bank_account_no = $_POST["ven_bank_account_no"];
    $ven_bank_swift_code = $_POST["ven_bank_swift_code"];
    $ven_name_of_bank_locally = $_POST["ven_name_of_bank_locally"];
    $ven_address_of_bank_locally = $_POST["ven_address_of_bank_locally"];
    $ven_country_of_bank_locally = $_POST["ven_country_of_bank_locally"];
    $ven_name_of_bank_branch_jp_locally = $_POST["ven_name_of_bank_branch_jp_locally"];
    $ven_bank_branch_code_locally = $_POST["ven_bank_branch_code_locally"];
    $ven_bank_account_tittle_jp_locally = $_POST["ven_bank_account_tittle_jp_locally"];
    $ven_bank_account_no_locally = $_POST["ven_bank_account_no_locally"];
    $ven_bank_account_type_locally = $_POST["ven_bank_account_type_locally"];
    $ven_name_of_bank_intermidiary=$_POST['ven_name_of_bank_intermidiary'];
    $ven_address_of_bank_intermidiary=$_POST['ven_address_of_bank_intermidiary'];
    $ven_country_of_bank_intermidiary=$_POST['ven_country_of_bank_intermidiary'];
    $ven_name_of_bank_branch_intermidiary=$_POST['ven_name_of_bank_branch_intermidiary'];
    $ven_bank_branch_code_intermidiary=$_POST['ven_bank_branch_code_intermidiary'];
    $ven_bank_account_tittle_intermidiary=$_POST['ven_bank_account_tittle_intermidiary'];
    $ven_bank_account_no_intermidiary=$_POST['ven_bank_account_no_intermidiary'];
    $ven_bank_swift_code_intermidiary=$_POST['ven_bank_swift_code_intermidiary'];
    $ven_bank_intermidiary_code=$_POST['ven_bank_intermidiary_code'];
    $ven_fullName_paypal=$_POST['ven_fullName_paypal'];
    $ven_email_for_paypal=$_POST['ven_email_for_paypal'];
    $images2=$_FILES['ven_incorporation_certificate']['tmp_name'];
    $ven_incorporation_certificate=addslashes(file_get_contents($images2));
    $totalfiles = count($_FILES['ven_national_identity_image']['name']);
  $bussiness_email=$_POST['bussiness_email'];
    $ven_national_identity_image = "";
    $ven_status = "active";
    $ven_createdBy ="";
    $ven_createdAt = time();
    $ven_updatedBy ="";
    $ven_updatedAt = time();
    $ats_vendor_uid=$_POST['ats_vendor_uid'];
            $insert = "insert into ats_vendor(ats_vendor_bussiness_name,ats_vendor_bussiness_location,ats_vendor_company_registeration_number,ats_vendor_country
            ,ats_vendor_city,ats_vendor_zip_code,ats_vendor_street,
            ats_vendor_building,ats_vendor_suite_no,ats_vendor_number,ats_vendor_primary_contact_first_name,ats_vendor_primary_contact_middle_name,ats_vendor_primary_contact_last_name,
            ats_vendor_bussiness_logo,ats_vendor_bussiness_website, ats_vendor_citizenship_country,
            ats_vendor_birth_country,ats_vendor_dob,
            ats_vendor_passport_number, ats_vendor_passport_expiry,
            ats_vendor_bussiness_role,ats_vendor_bank_name_for_us,ats_vendor_bank_address_for_us, ats_vendor_bank_country_for_us,ats_vendor_bank_branch_name_for_us,
            ats_vendor_branch_code_for_us,ats_vendor_account_holder_for_us,ats_vendor_account_number_for_us,ats_vendor_swift_code_for_us,ats_vendor_bank_name_for_yen,ats_vendor_bank_address_for_yen,ats_vendor_bank_country_for_yen ,ats_vendor_branch_name_for_yen ,ats_vendor_branch_code_for_yen,
            ats_vendor_account_title_for_yen,ats_vendor_account_number_for_yen,ats_vendor_account_type_for_yen , ats_vendor_incorporation_certificate, ats_vendor_national_identity_image,
            ats_vendor_status ,ats_vendor_createdBy ,ats_vendor_createdAt,ats_vendor_updatedBy,ats_vendor_updatedAt,ats_vendor_uid,bussiness_email,ats_vendor_country_2
            ,ats_vendor_city_2,ats_vendor_zip_code_2,ats_vendor_street_2,
            ats_vendor_building_2,ats_vendor_suite_no_2,ven_name_of_bank_intermidiary, ven_address_of_bank_intermidiary, 
            ven_country_of_bank_intermidiary, ven_name_of_bank_branch_intermidiary, ven_bank_branch_code_intermidiary,
            ven_bank_account_tittle_intermidiary, ven_bank_account_no_intermidiary, ven_bank_swift_code_intermidiary,
            ven_bank_intermidiary_code,ven_fullName_paypal,ven_email_for_paypal) values('$ven_business_name','$ven_business_address','$ven_business_reg_no','$ven_country',
            '$ven_city', '$ven_zip_code','$ven_street','$ven_building','$ven_suit_no','$ven_phone','$ven_primary_f_name','$ven_primary_m_name','$ven_primary_l_name',
            '$ven_business_logo','$ven_website_url','$ven_country_citizenship',
            '$ven_country_of_birth','$ven_date_of_birth',
            '$ven_national_identity','$ven_id_expiration_date','',
            '$ven_name_of_bank','$ven_address_of_bank',
            '$ven_country_of_bank','$ven_name_of_bank_branch','$ven_bank_branch_code' ,
            '$ven_bank_account_tittle','$ven_bank_account_no','$ven_bank_swift_code','$ven_name_of_bank_locally', '$ven_address_of_bank_locally',
            '$ven_country_of_bank_locally','$ven_name_of_bank_branch_jp_locally',
            '$ven_bank_branch_code_locally','$ven_bank_account_tittle_jp_locally',
            '$ven_bank_account_no_locally','$ven_bank_account_type_locally', 
            '$ven_incorporation_certificate','$ven_national_identity_image','$ven_status','$ven_createdBy','$ven_createdAt','$ven_updatedBy','$ven_updatedAt','$ats_vendor_uid','$bussiness_email','$ven_country_2',
            '$ven_city_2', '$ven_zip_code_2','$ven_street_2','$ven_building_2','$ven_suit_no_2','$ven_name_of_bank_intermidiary','$ven_address_of_bank_intermidiary'
            ,'$ven_country_of_bank_intermidiary','$ven_name_of_bank_branch_intermidiary','$ven_bank_branch_code_intermidiary','$ven_bank_account_tittle_intermidiary'
            ,'$ven_bank_account_no_intermidiary','$ven_bank_swift_code_intermidiary'
            ,'$ven_bank_intermidiary_code','$ven_fullName_paypal','$ven_email_for_paypal')";
            $query = mysqli_query($connection,$insert);
            if ($query)
            {
                echo '<script type="text/javascript"> alert("Employee Register Successfully")</script>';
                echo '<script language="javascript">window.location.href ="employee-records.php"</script>';

            }
            else
            {
                echo '<script type="text/javascript"> alert("Employee Not Register")</script>';
                echo("Error description: " . mysqli_error($connection));

            }
            for($i=0;$i<$totalfiles;$i++){
                $filename = $_FILES['ven_national_identity_image']['name'][$i];
             
               // Upload files and store in database
               if(move_uploaded_file($_FILES["ven_national_identity_image"]["tmp_name"][$i],'vendordocuments/'.$filename)){
                       // Image db insert sql
                      $insert3 = "INSERT INTO vendorimages(images,uniqueid) VALUES ('$filename','$ats_vendor_uid')";
                      
                      $iquery = mysqli_query($connection,$insert3);
             
             }
                      
             
                      
                   else{
                       echo 'Error in uploading file - '.$_FILES['ven_national_identity_image']['name'][$i].'<br/>';
                   }
             
                }        
}
?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ATS DASHBOARD - For Employees and Vendors Only</title>
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link href="assets/images/logo-fav.png" rel="icon">
    <link href="main.d810cf0ae7f39f28f336.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src btn-hover-shine"></div>    
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-dots">
                         <div class="dropdown">
                            <button type="button" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-focus"></span>
                                    <span class="language-icon opacity-8 flag large DE"></span>
                                </span>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                        <div class="menu-header-image opacity-05" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                        <div class="menu-header-content text-center text-white">
                                            <h6 class="menu-header-subtitle mt-0"> Choose Language</h6>
                                        </div>
                                    </div>
                                </div>
                                <h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
                                <button type="button" tabindex="0" class="dropdown-item active">
                                    <span class="mr-3 opacity-8 flag large US"></span> USA
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large CH"></span> Japanese
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large FR"></span> France
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large ES"></span>Spain
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item ">
                                    <span class="mr-3 opacity-8 flag large DE"></span> Germany
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large IT"></span> Italy
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="">
            <div style="margin-top: 5%;" id="tab-content-2" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form action="" method="post" onsubmit="validateVendorForm();"  enctype="multipart/form-data">
                        <div id="smartwizard3" class="forms-wizard-vertical">
                            <ul class="forms-wizard">
                                <li>
                                    <a href="#step-122">
                                        <em>1</em><span>Business Information</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-222">
                                        <em>2</em><span>Contact Person Information</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-322">
                                        <em>3</em><span>Bank Informations</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-422">
                                        <em>4</em><span>Identity Verification</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-522">
                                        <em>5</em><span>Finish Wizard</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="form-wizard-content container">
                                
                                    <div id="step-122">
                                        <div class="card-body row">
                                            <div class="col-md-4 form-group">
                                                <label style="font-weight: bold;"  ><span class="text-danger">* </span>Business Name</label>
                                                <input type="text" name="ven_business_name" id="ven_business_name" class="form-control" >
                                                <input type="text" name="ats_vendor_uid" id="ats_vendor_uid" class="form-control" value="<?php echo rand(10,100000)?>" style="display:none">
                                            </div>
                                            <div class="col-md-4 position-relative form-group">
                                                <label style="font-weight: bold;" ><span class="text-danger">* </span>Business Location</label>
                                                <input type="text" name="ven_business_address" id="ven_business_address" class=" form-control" >
                                            </div>
                                            <div class="col-md-4 position-relative form-group">
                                                <label style="font-weight: bold;" ><span class="text-danger">* </span>Company Registration No.</label>
                                                <input type="text" class=" form-control" name="ven_business_reg_no" id="ven_business_reg_no" >
                                                </div>
                                            <div class="col-md-12">
                                                <label style="font-weight: bold;" class="text-dark"><span class="text-danger">* </span>Business Address</label>
                                                <div class="alert alert-secondary fade show" role="alert"><i style="font-size: 15px;" class="fa fa-exclamation-circle"></i>&nbsp; &nbsp; &nbsp;We may verify this address, Make sure your address is entered correctly.</div>
                                            </div>
                                            <div class="col-md-4 position-relative form-group">
                                                <select name="ven_country" id="ven_country" class="form-control" >
                                                <?php 
                                            $queryfetchdetails1=mysqli_query($connection,"select DISTINCT countrycode,countryname from kobutsu_slab");
                                            ?>
                                            <option disabled selected>Please Select</option>
                                            <?php 
                                                while($rowfetchdetails1=mysqli_fetch_array($queryfetchdetails1)){
                                            ?>
                                            <option class="form-control" value="<?php echo $rowfetchdetails1[0]?>"><?php echo $rowfetchdetails1[1]?></option>

                                            <?php
                                                }
                                            ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4 position-relative form-group">
                                                <input type="text" class=" form-control" name="ven_city" id="ven_city"  placeholder="City / Town" >
                                            </div>
                                            <div class="col-md-4 position-relative form-group">
                                                <input type="text" class=" form-control" name="ven_zip_code" id="ven_zip_code" placeholder="ZIP / Postal Code" >
                                                </div>
                                            <div class="col-md-4 position-relative form-group">
                                                <input type="text" class=" form-control" name="ven_street" id="ven_street" placeholder="Street" >
                                            </div>
                                            <div class="col-md-4 position-relative form-group">
                                                <input type="text" class=" form-control" name="ven_building" id="ven_building" placeholder="Building" >
                                            </div>
                                            <div class="col-md-4 position-relative form-group">
                                                <input type="text" class=" form-control" name="ven_suit_no" id="ven_suit_no" placeholder="Suite No." >
                                            </div>
                                            <div style="text-align: left;" class="col-md-12">
                                                <input type="checkbox" name="ven_accept_address" id="ven_accept_address" value="" class="" >
                                                &nbsp; &nbsp;I confirm my address is correct, and I understand that this information cannot be changed till address verification is completed.
                                            </div>
                                            <div class="divider"></div>
                                            <div style="text-align: left;" class="col-md-12">
                                                <label style="font-weight: bold;">Recieve PIN through</label><br/>
                                                <input type="radio" name="ven_opt" id="ven_opt_sms">&nbsp;SMS
                                                &nbsp; &nbsp; &nbsp;
                                                <input type="radio" name="ven_opt" id="ven_opt_call">&nbsp;CALL
                                            </div>
                                            <div class="col-md-6 ">
                                                <label><span class="text-danger">* </span>Phone number for verification</label>
                                                <div class="input-group">
                                                    <input type="tel" name="ven_phone" id="ven_phone" class="form-control" >
                                                    <div class="input-group-append">
                                                    <a name="ven_opt_call" id="ven_opt_call" class="btn btn-primary text-white">Send / Call</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="col-md-4 position-relative form-group">
                                                <label style="font-weight: bold;"><span class="text-danger">* </span>Enter OTP</label>
                                                <div class="input-group">
                                                    <input type="text" name="ven_otp" id="ven_otp" class="form-control" >
                                                    <div class="input-group-append">
                                                        <a class="btn btn-info text-white" name="ven_btn_submit_otp" id="ven_btn_submit_otp">Submit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="text-align: left;" class="col-md-12">
                                                <label style="font-weight: bold;"><span class="text-danger">* </span>Primary Contact Person</label><br/>
                                            </div>
                                            <div class="col-md-4 position-relative form-group">
                                                <input type="text" class="form-control" name="ven_primary_f_name" id="ven_primary_f_name" placeholder="First name ">
                                            </div>
                                            <div class="col-md-4 position-relative form-group">
                                                <input type="text" class=" form-control" name="ven_primary_m_name" id="ven_primary_m_name" placeholder="Middle name ">
                                            </div>
                                            <div class="col-md-4 position-relative form-group">
                                                <input type="text" class=" form-control" name="ven_primary_l_name" id="ven_primary_l_name" placeholder="Last name ">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="image-upload">
                                                    <label style="font-weight: bold;" class="form-control-label">Business Logo</label>
                                                        <label style="cursor: pointer;">
                                                        <input type="file" accept="image/*" name="ven_business_logo" id="ven_business_logo"/>
                                                    </label>
                                                </div>
                                                <p style="font-size:12px; color:black;">Upload png, jpg and jpeg files.</p>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="font-weight: bold;">Business Email</label>
                                                <input type="text" class="form-control" name="bussiness_email" id="bussiness_email" placeholder="www.abc.com">
                                            </div>
                                            <div class="col-md-4">
                                                <label style="font-weight: bold;">Business Website (Url)</label>
                                                <input type="text" class="form-control" name="ven_website_url" id="ven_website_url" placeholder="www.abc.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-222">
                                        <div id="accordion" class="accordion-wrapper mb-3">
                                            <div class="card">
                                                <div id="" class="b-radius-0 card-header">
                                                    <h5>Hello<span style="font-weight: bold;" class="text-dark" id="printhere"></span></h5>
                                                </div>
                                                <div data-parent="#accordion" id="collapseTwo" class="collapse show">
                                                    <div class="card-body row">
                                                        <div class="col-md-4">
                                                            <label style="font-weight: bold;"  class="text-dark">Country of citizenship</label>
                                                            <select name="ven_country_citizenship" id="ven_country_citizenship" class="form-control" >
                                                            <option disabled selected>Please Select</option>
                                                                    <?php 
                                                                    $queryfetchdetails2=mysqli_query($connection,"select DISTINCT countrycode,countryname from kobutsu_slab");
                                                                    while($rowfetchdetails2=mysqli_fetch_array($queryfetchdetails2)){
                                                                    ?>
                                                                    <option class="form-control" value="<?php echo $rowfetchdetails2[0]?>"><?php echo $rowfetchdetails2[1]?></option>

                                                                    <?php
                                                                        }
                                                                    ?>
                                                            </select>
                                                        </div>    
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Country of birth</label>
                                                            <select name="ven_country_of_birth" id="ven_country_of_birth" class="form-control" >
                                                            <option disabled selected>Please Select</option>
                                            <?php 
                                             $queryfetchdetails3=mysqli_query($connection,"select DISTINCT countrycode,countryname from kobutsu_slab");
                                            while($rowfetchdetails3=mysqli_fetch_array($queryfetchdetails3)){
                                            ?>
                                            <option class="form-control" value="<?php echo $rowfetchdetails3[0]?>"><?php echo $rowfetchdetails3[1]?></option>

                                            <?php
                                                }
                                            ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Date of birth</label>        
                                                            <input type="date" class="form-control" name="ven_date_of_birth" id="ven_country_of_birth" value=""/>       
                                                        </div>
                                                        <div class="col-md-6 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">National Identity / Passport Number</label>        
                                                            <input type="number" class="form-control" name="ven_national_identity" id="ven_national_identity" placeholder="National Identity / Passport Number"/>       
                                                        </div>
                                                        <div class="col-md-6 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Expiration Date</label>        
                                                            <input type="date" class="form-control" id="ven_id_expiration_date" name="ven_id_expiration_date" value="10/24/1984"/> 
                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                            <label style="font-weight: bold;"  class="text-dark">Residential address</label><br/>        
                                                            <input type="radio" class="" id="ven_accept_and_checked_address" name="ven_accept_and_checked_address" VALUE="ven_accept_and_checked_addresS"/><label for="ven_accept_and_checked_address"> ABC, Karachi, Pakistan ABC, Karachi, Pakistan</label>
                                                            <br/>
                                                            <div id="accordion_address">
                                                                <div style="background: transparent; box-shadow: none;" class="card">
                                                                    <div id="headingOne1" class="clk">
                                                                        <a href="" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                        <i class="fa fa-plus-circle"></i> Add another Address
                                                                        </a>
                                                                    </div>
                                                                    <div data-parent="#accordion_address" id="collapseOne1" aria-labelledby="headingOne1" class="collapse ">
                                                                        <div class="card-body row">
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <select name="ven_country_2" id="ven_country_2" class="form-control" >
                                                                               <option disabled selected>Please Select</option>
                                                                                <?php 
                                                                                $queryfetchdetails3=mysqli_query($connection,"select DISTINCT countrycode,countryname from kobutsu_slab");
                                                                                while($rowfetchdetails3=mysqli_fetch_array($queryfetchdetails3)){
                                                                                ?>
                                                                                <option class="form-control" value="<?php echo $rowfetchdetails3[0]?>"><?php echo $rowfetchdetails3[1]?></option>

                                                                                <?php
                                                                                    }
                                                                                ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <input type="text" class=" form-control" name="ven_city_2" id="ven_city_2"  placeholder="City / Town" >
                                                                            </div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <input type="text" class=" form-control" name="ven_zip_code_2" id="ven_zip_code_2" placeholder="ZIP / Postal Code" >
                                                                            </div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <input type="text" class=" form-control" name="ven_street_2" id="ven_street_2" placeholder="Street" >
                                                                            </div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <input type="text" class=" form-control" name="ven_building_2" id="ven_building_2" placeholder="Building" >
                                                                            </div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <input type="text" class=" form-control" name="ven_suit_no_2" id="ven_suit_no_2" placeholder="Suite No." >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="col-md-12 position-relative form-group">
                                                            <label style="font-weight: bold;"  class="text-dark">Mobile number</label><br/>        
                                                            <input type="radio" class="" name="ven_accept_and_checked_number" id="ven_accept_and_checked_number" value="ven_accept_and_checked_number"/> <label for="ven_phone">+92376378634</label>
                                                            <br/>
                                                            <div id="accordion_number">
                                                                <div style="background: transparent; box-shadow: none;" class="card">
                                                                    <div id="headingOne2" class="clk">
                                                                        <a href="" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                            <i class="fa fa-plus-circle"></i> Add another Number
                                                                        </a>
                                                                    </div>
                                                                    <div data-parent="#accordion_number" id="collapseOne2" aria-labelledby="headingOne2" class="collapse ">
                                                                        <div class="card-body row">
                                                                            <div style="text-align: left;" class="col-md-12">
                                                                                <label style="font-weight: bold;" >Recieve PIN through</label><br/>
                                                                                <input type="radio" name="ven_opt_sms_2" id="ven_opt_sms_2" >&nbsp;SMS
                                                                                &nbsp; &nbsp; &nbsp;
                                                                                <input type="radio" name="ven_opt_call_2" id="ven_opt_call_2" >&nbsp;CALL
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label><span class="text-danger">* </span>Phone number for verification</label>
                                                                                <div class="input-group">
                                                                                    <input type="tel" name="ven_phone_2" id="ven_phone_2" placeholder="Enter Your Phone" class="form-control" >
                                                                                    <div class="input-group-append">
                                                                                        <a name="ven_btn_send_otp_2" id="ven_btn_send_otp_2" class="btn btn-primary text-white" value="">Send / Call</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="divider"></div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <label style="font-weight: bold;"><span class="text-danger">* </span>Enter OTP</label>
                                                                                <div class="input-group">
                                                                                    <input type="text" name="ven_otp_2" id="ven_otp_2" class="form-control" >
                                                                                    <div class="input-group-append">
                                                                                        <a class="btn btn-info text-white" name="ven_btn_submit_otp_2" id="ven_btn_submit_otp_2">Submit</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="col-md-12 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Your name</label><br/>        
                                                            <input type="checkbox" class="" name="ven_accept_and_checked_name" id="ven_accept_and_checked_name" value=""/> is beneficial owner of the business
                                                            <br/>
                                                            <input type="checkbox" class="" name="ven_accept_and_checked_business" id="ven_accept_and_checked_business" value=""/> is a legal representative of the business
                                                        </div>
                                                        <div class="col-md-12 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">I have added all the Beneficial Owner of the Business.</label><br/>        
                                                            <input type="radio" class="" name="ven_accept_and_ownership_of_business" id="ven_accept_and_ownership_of_business_yes" value="YES"/> YES
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                            <input type="radio" class="" name="ven_accept_and_ownership_of_business" id="ven_accept_and_ownership_of_business_no" value="NO"/> NO
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-322">
                                        <div id="accordion" class="accordion-wrapper mb-3">
                                            <div class="card">
                                                <div id="" class="b-radius-0 card-header">
                                                    <h5>Add a Bank Account</h5>
                                                </div>
                                                <div data-parent="#accordion" id="collapseTwo" class="collapse show">
                                                    <div class="card-body row">
                                                        <div class="col-md-12">
                                                            <h4>For US $ / &yen; Yen INTERNATIONAL Transfers only</h4>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label style="font-weight: bold;"  class="text-dark">Name of Bank</label>
                                                            <input type="text" name="ven_name_of_bank" class="form-control" id="ven_name_of_bank">
                                                         
                                                        </div>
                                                        <br/>
                                                        <div class="col-md-8 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Bank Address</label>        
                                                            <input type="text" class="form-control" name="ven_address_of_bank" id="ven_address_of_bank" placeholder="Bank Address" />       
                                                        </div>
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;"  class="text-dark">Country</label>
                                                            <select name="ven_country_of_bank" id="ven_country_of_bank" class="form-control" >
                                                            <option disabled selected>Please Select</option>
                                            <?php 
                                             $queryfetchdetails4=mysqli_query($connection,"select DISTINCT countrycode,countryname from kobutsu_slab");
                                            while($rowfetchdetails4=mysqli_fetch_array($queryfetchdetails4)){
                                            ?>
                                            <option class="form-control" value="<?php echo $rowfetchdetails4[0]?>"><?php echo $rowfetchdetails4[1]?></option>

                                            <?php
                                                }
                                            ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Branch Name</label>        
                                                            <input type="text" class="form-control" name="ven_name_of_bank_branch" id="ven_name_of_bank_branch" placeholder="Branch Name" />
                                                               
                                                        </div>
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Branch Code</label>        
                                                            <input type="text" class="form-control" name="ven_bank_branch_code" id="ven_bank_branch_code" placeholder="Branch Code" />       
                                                        </div>
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Account Tittle</label>        
                                                            <input type="text" class="form-control" name="ven_bank_account_tittle" id="ven_bank_account_tittle" placeholder="Name as on bank documents" />       
                                                        </div>    
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Account Number</label><br/>        
                                                            <input type="number" class="form-control" name="ven_bank_account_no" id="ven_bank_account_no" value="" placeholder="Account No."/>
                                                        </div>
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Swift Code</label><br/>        
                                                            <input type="text" class="form-control" name="ven_bank_swift_code" id="ven_bank_swift_code" value="" placeholder="Swift Code"/>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <h4>For YEN JAPAN DOMESTIC Transfers only</h4>
                                                        </div>   
                                                        <div style="text-align: left;" class="col-md-12">
                                                            <label class="text-danger">Do you have domestic / local Japanese Account in this Same Bank?&nbsp; &nbsp;</label>
                                                            <input type="radio" class="radio" name="ven_same_bank_account" id="ven_same_bank_account_yes" value="YES">&nbsp;YES
                                                            &nbsp; &nbsp;
                                                            <input type="radio" class="radio" name="ven_same_bank_account" id="ven_same_bank_account_no" value="NO">&nbsp;NO
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label style="font-weight: bold;" class="text-dark">Name of Bank</label>
                                                            <input type="text" name="country" class="form-control" name="ven_name_of_bank_locally" id="ven_name_of_bank_locally">
                                                          
                                                        </div>
                                                        <br/>
                                                        <br/>
                                                        <div class="col-md-8 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Bank Address</label>        
                                                            <input type="text" class="form-control" name="ven_address_of_bank_locally" id="ven_address_of_bank_locally" placeholder="Bank Address"/>   
                                                        </div>
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;"  class="text-dark">Country</label>
                                                            <select name="ven_country_of_bank_locally" id="ven_country_of_bank_locally" class="form-control" >
                                                            <option disabled selected>Please Select</option>
                                            <?php 
                                             $queryfetchdetails6=mysqli_query($connection,"select DISTINCT countrycode,countryname from kobutsu_slab");
                                            while($rowfetchdetails6=mysqli_fetch_array($queryfetchdetails6)){
                                            ?>
                                            <option class="form-control" value="<?php echo $rowfetchdetails6[0]?>"><?php echo $rowfetchdetails6[1]?></option>

                                            <?php
                                                }
                                            ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Branch Name (JP)</label>        
                                                            <input type="text" class="form-control" name="ven_name_of_bank_branch_jp_locally" id="ven_name_of_bank_branch_jp_locally" placeholder="支店名" />
                                                               
                                                        </div>
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Branch Code</label>        
                                                            <input type="text" class="form-control" name="ven_bank_branch_code_locally" id="ven_bank_branch_code_locally" placeholder="Branch Code" />       
                                                        </div>
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Account Tittle (JP)</label>        
                                                            <input type="text" class="form-control" name="ven_bank_account_tittle_jp_locally" id="ven_bank_account_tittle_jp_locally" placeholder="アカウントのタイトル" />
                                                        </div>    
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Account Number</label><br/>        
                                                            <input type="number" class="form-control" name="ven_bank_account_no_locally" id="ven_bank_account_no_locally" value="" placeholder="Account No."/>
                                                        </div>
                                                        <div class="col-md-4 position-relative form-group">
                                                            <label style="font-weight: bold;" class="text-dark">Account Type</label><br/>        
                                                            <input type="text" class="form-control" name="ven_bank_account_type_locally" id="ven_bank_account_type_locally" value="" placeholder="Swift Code"/>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <h4>Other Information</h4>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <h6>Intermidiary Bank Information (Correspondence Bank)</h6>   
                                                            <div id="accordion_intermeidiary_bank">
                                                                <div style="background: transparent; box-shadow: none;" class="card">
                                                                    <div id="headingOne2" class="">
                                                                        <a href="" class="text-info" data-toggle="collapse" data-target="#collapseOne-intermidiary" aria-expanded="true" aria-controls="collapseOne2" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                            + Enter Intermidiary Details
                                                                        </a>
                                                                    </div>
                                                                    <div data-parent="#accordion_intermeidiary_bank" id="collapseOne-intermidiary" aria-labelledby="headingOne2" class="collapse ">
                                                                        <div class="card-body row">
                                                                            <div class="col-md-12 form-group">
                                                                                <input type="radio" class="" id="ven_same_details_for_intermidiary" name="ven_same_details_for_intermidiary" /> Same as US $ / ¥ Yen INTERNATIONAL Transfers?
                                                                                <br/>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label style="font-weight: bold;"  class="text-dark">Name of Bank</label>
                                                                                <input name="ven_name_of_bank_intermidiary" class="form-control" id="ven_name_of_bank_intermidiary">
                                                                                  
                                                                               
                                                                            </div>
                                                                            <br/>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <label style="font-weight: bold;" class="text-dark">Bank Address</label>        
                                                                                <input type="text" class="form-control" name="ven_address_of_bank_intermidiary" id="ven_address_of_bank_intermidiary" placeholder="Bank Address" />       
                                                                            </div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <label style="font-weight: bold;"  class="text-dark">Country</label>
                                                                                <select name="ven_country_of_bank_intermidiary" id="ven_country_of_bank_intermidiary" class="form-control" >
                                                                                <?php 
                                                                                    $queryfetchdetails8=mysqli_query($connection,"select DISTINCT countrycode,countryname from kobutsu_slab");
                                                                                    while($rowfetchdetails8=mysqli_fetch_array($queryfetchdetails8)){
                                                                                    ?>
                                                                                    <option class="form-control" value="<?php echo $rowfetchdetails8[0]?>"><?php echo $rowfetchdetails8[1]?></option>

                                                                                    <?php
                                                                                        }
                                                                                    ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <label style="font-weight: bold;" class="text-dark">Branch Name</label>        
                                                                                <input type="text" class="form-control" name="ven_name_of_bank_branch_intermidiary" id="ven_name_of_bank_branch_intermidiary" placeholder="Branch Name" />       
                                                                            </div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <label style="font-weight: bold;" class="text-dark">Branch Code</label>        
                                                                                <input type="text" class="form-control" name="ven_bank_branch_code_intermidiary" id="ven_bank_branch_code_intermidiary" placeholder="Branch Code" />       
                                                                            </div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <label style="font-weight: bold;" class="text-dark">Account Tittle</label>        
                                                                                <input type="text" class="form-control" name="ven_bank_account_tittle_intermidiary" id="ven_bank_account_tittle_intermidiary" placeholder="Name as on bank documents" />       
                                                                            </div>    
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <label style="font-weight: bold;" class="text-dark">Account Number</label><br/>        
                                                                                <input type="number" class="form-control" name="ven_bank_account_no_intermidiary" id="ven_bank_account_no_intermidiary" value="" placeholder="Account No."/>
                                                                            </div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <label style="font-weight: bold;" class="text-dark">Swift Code</label><br/>        
                                                                                <input type="text" class="form-control" name="ven_bank_swift_code_intermidiary" id="ven_bank_swift_code_intermidiary" value="" placeholder="Swift Code"/>
                                                                            </div>
                                                                            <div class="col-md-4 position-relative form-group">
                                                                                <label style="font-weight: bold;" class="text-dark">Intermidiary Code</label><br/>        
                                                                                <input type="text" class="form-control" name="ven_bank_intermidiary_code" id="ven_bank_intermidiary_code" value="" placeholder="Swift Code"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <br/>
                                                            <h6>PayPal Information</h6>
                                                            <div id="accordion_paypal_info">
                                                                <div style="background: transparent; box-shadow: none;" class="card">
                                                                    <div id="headingOne2" class="">
                                                                        <a href="" class="text-info" data-toggle="collapse" data-target="#collapseOnepaypal_info" aria-expanded="true" aria-controls="collapseOne2" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                            + Enter PayPal Details
                                                                        </a>
                                                                    </div>
                                                                    <div  data-parent="#accordion_paypal_info" id="collapseOnepaypal_info" aria-labelledby="headingOne2" class="collapse ">
                                                                        <div class="card-body row">
                                                                            <div class="col-md-6 position-relative form-group">
                                                                                <label style="font-weight: bold;"  class="text-dark">Full Name</label><br/>        
                                                                                <input type="text" class="form-control" name="ven_fullName_paypal" id="ven_fullName_paypal" value="" placeholder="Full Name"/>
                                                                            </div>
                                                                            <div class="col-md-6 position-relative form-group">
                                                                                <label style="font-weight: bold;" class="text-dark">Email Address (For PayPal)</label><br/>        
                                                                                <input type="text" class="form-control" name="ven_email_for_paypal" id="ven_email_for_paypal" value="" placeholder="Email Address"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-422" class="container">
                                        <div id="accordion" class="accordion-wrapper mb-3 ">
                                            <div class="card">
                                                <div id="" class="b-radius-0 card-header">
                                                    <h5>Identity Verification</h5>
                                                </div>
                                                <div data-parent="#accordion" id="collapseTwo" class="collapse show">
                                                    <div style="background: transparent; box-shadow: none;" class="container ">
                                                        <div class="container">
                                                            <p class="text-center ">I am the sole owner or point of contact for this account.</p>
                                                        </div> 
                                                        <div style="background: transparent; box-shadow: none;" class="main-card mb-3 card ">
                                                            <div class="row">
                                                                <div class="card-body col-md-6">
                                                                    <h5 class="card-title">Business Details</h5>
                                                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column ">
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_business_name_print">ABC School</h4>   
                                                                                    <span class="vertical-timeline-element-date">Name</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>    
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_business_address_print"></h4>    
                                                                                    <span class="vertical-timeline-element-date"> Address</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_phone_print"></h4>    
                                                                                    <span class="vertical-timeline-element-date">Phone</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>    
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title text-success" id="ven_email_print"></h4>    
                                                                                    <span class="vertical-timeline-element-date">Email</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>   
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title text-success" id="ven_business_reg_no_print"></h4>   
                                                                                    <span class="vertical-timeline-element-date">Reg. No.</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_website_url_print"></h4>    
                                                                                    <span class="vertical-timeline-element-date">Website</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <div class="vertical-timeline-element-content bounce-in">    
                                                                                    <span style="margin-top: 1%;" class="vertical-timeline-element-date text-danger">Identify</span>
                                                                                </div>    
                                                                            </div>
                                                                            <input style="margin-left: 23%;" name="ven_incorporation_certificate" id="ven_incorporation_certificate" type="file" >
                                                                        </div>
                                                                        <br/>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <label style="font-weight: bold; margin-top: -20px;" class="vertical-timeline-element-date">Please upload your incorporation certificate.</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body col-md-6">
                                                                    <h5 class="card-title">Contact Details</h5>
                                                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column ">
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                </span>
                                                                                        
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>    
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_address_print"></h4>
                                                                                    
                                                                                    <span class="vertical-timeline-element-date">Address-2</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">       
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title text-success" id="ven_national_identity_print"></h4>    
                                                                                    <span class="vertical-timeline-element-date">ID/Passport</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>    
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <span style="margin-top: 1%;" class="vertical-timeline-element-date text-danger">Identify </span>
                                                                                </div>
                                                                            </div>
                                                                            <input style="margin-left: 23%;" type="file" id="ven_national_identity_image" multiple="multiple" name="ven_national_identity_image[]">
                                                                        </div>
                                                                        <br/>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <label style="font-weight: bold; margin-top: -20px;" class="vertical-timeline-element-date">Please upload your Identity Card or Passport.</label>
                                                                                </div>
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                                <div class="card-body col-md-6">
                                                                    <h5 class="card-title">Bank Details (Internationaly)</h5>
                                                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column ">
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_name_of_bank_print"></h4>
                                                                                    <span class="vertical-timeline-element-date">Name</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i style="display: none;" class="badge badge-dot badge-dot-xl badge-success"> </i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_address_of_bank_print"></h4>
                                                                                    <span class="vertical-timeline-element-date"> Address</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_bank_account_tittle_print"></h4>
                                                                                    <span class="vertical-timeline-element-date">Tittle</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_bank_account_no_print"></h4>
                                                                                    <span class="vertical-timeline-element-date">Account #</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">       
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title text-success" id="ven_name_of_bank_branch_print"></h4>    
                                                                                    <span class="vertical-timeline-element-date">Branch</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_bank_swift_code_print" ></h4>
                                                                                    
                                                                                    <span class="vertical-timeline-element-date">Swift Code</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body col-md-6">
                                                                    <h5 class="card-title">Bank Details (Locally)</h5>
                                                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column ">
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_name_of_bank_locally_print"></h4>
                                                                                   
                                                                                    <span class="vertical-timeline-element-date">Name</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_address_of_bank_locally_print"></h4>
                                                                                    
                                                                                    <span class="vertical-timeline-element-date" > Address</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_bank_account_tittle_jp_locally_print"></h4>
                                                                                    
                                                                                    <span class="vertical-timeline-element-date">Tittle (JP)</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_bank_account_no_locally_print"></h4>
                                                                                    
                                                                                    <span class="vertical-timeline-element-date">Account #</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">        
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title text-success" id="ven_name_of_bank_branch_jp_locally_pint"></h4>
                                                                                    
                                                                                    <span class="vertical-timeline-element-date">Branch (JP)</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_bank_account_type_locally_print"></h4>
                                                                                    
                                                                                    <span class="vertical-timeline-element-date">Type</span>
                                                                                </div>
                                                                            </div>
                                                                            <br/>
                                                                        </div>   
                                                                    </div>   
                                                                </div>
                                                            </div>
                                                            <label>
                                                                <input  type="checkbox">&nbsp; I Agree with this <a href="#">terms and Conditions</a> and <a href="#">privacy policy</a>.
                                                            </label>   
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-522">
                                        <div class="no-results">
                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                <span class="swal2-success-line-tip"></span>
                                                <span class="swal2-success-line-long"></span>
                                                <div class="swal2-success-ring"></div>
                                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                            </div>
                                            <div class="results-subtitle mt-4">Thank You!</div>
                                            <div class="results-title">Your request is under review. You will get notified within 24 hours through email once it is approved</div>
                                            <div class="mt-3 mb-3"></div>
                                            <div class="text-center">
                                                <button class="btn-shadow btn-wide btn btn-success btn-lg">Finish</button>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="clearfix">
                                <input type="reset" id="reset-btn22" class="btn-shadow float-left btn btn-link" value="Reset">
                                <input type="submit" id="next-btn22" name="next-btn22" onclick="display()" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">
                                <a id="prev-btn22" class="btn-shadow float-right btn-wide btn-pill mr-3  btn-hover-shine btn btn-outline-secondary">Previous</a>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="clearfix">
                            <input type="reset" id="reset-btn22" class="btn-shadow float-left btn btn-link" value="Reset">
                            <input  id="next-btn22" name="next-btn22" onclick="display()" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary" Value="Next">
                            <input type="submit" id="next-btn22" name="btnsubmit" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary" Value="submit">
                            <a id="prev-btn22" class="btn-shadow float-right btn-wide btn-pill mr-3  btn-hover-shine btn btn-outline-secondary">Previous</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script type="text/javascript" src="assets/scripts/main.d810cf0ae7f39f28f336.js"></script></body>
    <script>
        ('.clk a').click(function(){
            (this).find('i').toggleClass('fa-plus-circle fa-minus-circle')
        });
        const phoneInputField = document.querySelector("#ven_phone_2");
        const phoneInput = window.intlTelInput(phoneInputField, { 
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
        function display(){
            //Assigning the variable to the user input
            var ven_primary_f_name = document.getElementById("ven_primary_f_name").value;
            var ven_primary_m_name = document.getElementById("ven_primary_m_name").value;
            var ven_primary_l_name = document.getElementById("ven_primary_l_name").value;
            // to print the input here
            document.getElementById("printhere").innerHTML = ven_primary_f_name + "&nbsp;" + ven_primary_m_name + "&nbsp;" +  ven_primary_l_name;
        }
        function validateVendorForm(){
            var ven_business_name = document.getElementById("ven_business_name");
            var ven_business_address = document.getElementById("ven_business_address");
            var ven_business_reg_no = document.getElementById("ven_business_reg_no");
            var ven_country = document.getElementById("ven_country");
            var ven_city = document.getElementById("ven_city");
            var ven_zip_code = document.getElementById("ven_zip_code");
            var ven_street = document.getElementById("ven_street");
            var ven_building = document.getElementById("ven_building");
            var ven_suit_no = document.getElementById("ven_suit_no");
            var ven_accept_address = document.getElementById("ven_accept_address");
            var ven_phone = document.getElementById("ven_phone");
            var ven_primary_f_name = document.getElementById("ven_primary_f_name");
            var ven_primary_m_name = document.getElementById("ven_primary_m_name");
            var ven_primary_l_name = document.getElementById("ven_primary_l_name");
            var ven_business_logo = document.getElementById("ven_business_logo");
            var ven_website_url = document.getElementById("ven_accept_address");
            var ven_country_citizenship = document.getElementById("ven_country_citizenship");
            var ven_country_of_birth = document.getElementById("ven_country_of_birth");
            var ven_date_of_birth = document.getElementById("ven_date_of_birth");
            var ven_national_identity = document.getElementById("ven_national_identity");
            var ven_id_expiration_date = document.getElementById("ven_id_expiration_date");
            var ven_accept_and_checked_address = document.getElementById("ven_accept_and_checked_address");
            var ven_country_2 = document.getElementById("ven_country_2");
            var ven_city_2 = document.getElementById("ven_city_2");
            var ven_zip_code_2 = document.getElementById("ven_zip_code_2");
            var ven_street_2 = document.getElementById("ven_street_2");
            var ven_building_2 = document.getElementById("ven_building_2");
            var ven_suit_no_2 = document.getElementById("ven_suit_no_2");
            var ven_phone_2 = document.getElementById("ven_phone_2");
            var ven_accept_and_checked_name = document.getElementById("ven_accept_and_checked_name");
            var ven_accept_and_checked_business = document.getElementById("ven_accept_and_checked_business");
            var ven_name_of_bank = document.getElementById("ven_name_of_bank");
            var ven_address_of_bank = document.getElementById("ven_address_of_bank");
            var ven_country_of_bank = document.getElementById("ven_country_of_bank");
            var ven_name_of_bank_branch = document.getElementById("ven_name_of_bank_branch");
            var ven_bank_branch_code = document.getElementById("ven_bank_branch_code");
            var ven_bank_account_tittle = document.getElementById("ven_bank_account_tittle");
            var ven_bank_account_no = document.getElementById("ven_bank_account_no");
            var ven_bank_swift_code = document.getElementById("ven_bank_swift_code");
            var ven_name_of_bank_locally = document.getElementById("ven_name_of_bank_locally");
            var ven_address_of_bank_locally = document.getElementById("ven_address_of_bank_locally");
            var ven_country_of_bank_locally = document.getElementById("ven_country_of_bank_locally");
            var ven_name_of_bank_branch_jp_locally = document.getElementById("ven_name_of_bank_branch");
            var ven_bank_branch_code_locally = document.getElementById("ven_bank_branch_code_locally");
            var ven_bank_account_tittle_jp_locally = document.getElementById("ven_bank_account_tittle");
            var ven_bank_account_no_locally = document.getElementById("ven_bank_account_no");
            var ven_bank_account_type_locally = document.getElementById("ven_bank_account_type_locally");
            var ven_name_of_bank_intermidiary = document.getElementById("ven_name_of_bank_intermidiary");
            var ven_address_of_bank_intermidiary = document.getElementById("ven_address_of_bank_intermidiary");
            var ven_country_of_bank_intermidiary = document.getElementById("ven_country_of_bank_intermidiary");
            var ven_name_of_bank_branch_intermidiary = document.getElementById("ven_name_of_bank_branch_intermidiary");
            var ven_bank_branch_code_intermidiary = document.getElementById("ven_bank_branch_code_intermidiary");
            var ven_bank_account_tittle_intermidiary = document.getElementById("ven_bank_account_tittle_intermidiary");
            var ven_bank_account_no_intermidiary = document.getElementById("ven_bank_account_no_intermidiary");
            var ven_bank_swift_code_intermidiary  = document.getElementById("ven_bank_swift_code_intermidiary");
            var ven_bank_intermidiary_code = document.getElementById("ven_bank_intermidiary_code");
            var ven_fullName_paypal  = document.getElementById("ven_fullName_paypal");
            var ven_email_for_paypal = document.getElementById("ven_email_for_paypal");
            var ven_incorporation_certificate  = document.getElementById("ven_incorporation_certificate");
            var ven_national_identity_image = document.getElementById("ven_national_identity_image");

            if (ven_business_name.value === "" || ven_business_address.value === "" || ven_business_reg_no.value === "" || ven_country.value === "" || ven_city.value === "" || ven_zip_code.value === "" || ven_street.value === "" || ven_building.value === "" || ven_suit_no.value === "" || ven_accept_address.value === "" || ven_phone.value === "" || ven_primary_f_name.value === "" || ven_primary_m_name.value == "" || ven_primary_l_name.value == "" || ven_business_logo.value == "" || ven_business_logo.value == "" || ven_website_url.value  == "" || ven_country_citizenship.value == "" || ven_country_of_birth.value == "" || ven_date_of_birth.value == "" || ven_national_identity.value == "" || ven_id_expiration_date.value == "" || ven_accept_and_checked_address.value == "" || ven_country_2.value == "" || ven_city_2.value == "" || ven_zip_code_2.value == "" || ven_street_2.value == "" || ven_building_2.value == "" || ven_suit_no_2.value == "" || ven_phone_2.value == "" || ven_accept_and_checked_name.value == "" || ven_accept_and_checked_business.value == "" || ven_name_of_bank.value == "" || ven_address_of_bank.value == "" || ven_country_of_bank.value == "" || ven_name_of_bank_branch.value == "" || ven_bank_branch_code.value == "" || ven_bank_account_tittle.value == "" || ven_bank_account_no.value == "" || ven_bank_swift_code.value == "" || ven_name_of_bank_locally.value == "" || ven_address_of_bank_locally.value == "" || ven_country_of_bank_locally.value == "" || ven_name_of_bank_branch_jp_locally.value == "" || ven_bank_branch_code_locally.value == "" || ven_bank_account_tittle_jp_locally.value == "" || ven_bank_account_no_locally.value == "" || ven_bank_account_type_locally.value == "" || ven_name_of_bank_intermidiary.value == "" || ven_address_of_bank_intermidiary.value == "" || ven_country_of_bank_intermidiary.value == "" || ven_name_of_bank_branch_intermidiary.value == "" || ven_bank_account_tittle_intermidiary.value == "" || ven_bank_account_no_intermidiary.value == "" || ven_bank_swift_code_intermidiary.value == "" || ven_bank_intermidiary_code.value == "" || ven_fullName_paypal.value == "" || ven_email_for_paypal.value == "" || ven_incorporation_certificate.value == "" || ven_national_identity_image.value == "") 
            {
                alert("Please Fill Out All Fields");
            return false;

            } 
            else {
                return true;
            }
        }
        
    </script>
<script>
    $(document).ready(function () {
    $('#ven_same_bank_account_yes').click(function () {
        
        $('#ven_name_of_bank_locally').val($('#ven_name_of_bank').val());
        $('#ven_address_of_bank_locally').val($('#ven_address_of_bank').val());
        $('#ven_country_of_bank_locally').val($('#ven_country_of_bank').val());
        $('#ven_bank_branch_code_locally').val($('#ven_bank_branch_code').val());
        $('#ven_name_of_bank_branch_jp_locally').val($('#ven_name_of_bank_branch').val());
        $('#ven_bank_account_tittle_jp_locally').val($('#ven_bank_account_tittle').val());
        $('#ven_bank_account_no_locally').val($('#ven_bank_account_no').val());
    });
});
    </script>
    <script>
    $(document).ready(function () {
    
    $('#ven_same_details_for_intermidiary').click(function () {
       
        $('#ven_name_of_bank_intermidiary').val($('#ven_name_of_bank').val());
        $('#ven_address_of_bank_intermidiary').val($('#ven_address_of_bank').val());
        $('#ven_country_of_bank_intermidiary').val($('#ven_country_of_bank').val());
        $('#ven_bank_branch_code_intermidiary').val($('#ven_bank_branch_code').val());
        $('#ven_name_of_bank_branch_intermidiary').val($('#ven_name_of_bank_branch').val());
        $('#ven_bank_account_tittle_intermidiary').val($('#ven_bank_account_tittle').val());
        $('#ven_bank_account_no_intermidiary').val($('#ven_bank_account_no').val());
        
    });
});
    </script>
    <script>
         $("#ven_country").change(function() {
            
             
              var country=$( "#ven_country option:selected" ).text();
              var city=$("#ven_city").val();
              var zip=$("#ven_zip_code").val();
              var street=$("#ven_street").val();
              var building=$("#ven_building").val();
              var suiteno=$("#ven_suit_no").val();

           var add= suiteno.concat(" ",building," ",street," ",zip," ",city," ",country);
           $('label[for=ven_accept_and_checked_address]').html(add);

});
        </script>
         <script>
         $("#ven_city").keyup(function() {
            
             
              var country=$( "#ven_country option:selected" ).text();
              var city=$("#ven_city").val();
              var zip=$("#ven_zip_code").val();
              var street=$("#ven_street").val();
              var building=$("#ven_building").val();
              var suiteno=$("#ven_suit_no").val();

           var add= suiteno.concat(" ",building," ",street," ",zip," ",city," ",country);
           $('label[for=ven_accept_and_checked_address]').html(add);

});
        </script>
         <script>
         $("#ven_zip_code").keyup(function() {
            
             
              var country=$( "#ven_country option:selected" ).text();
              var city=$("#ven_city").val();
              var zip=$("#ven_zip_code").val();
              var street=$("#ven_street").val();
              var building=$("#ven_building").val();
              var suiteno=$("#ven_suit_no").val();

           var add= suiteno.concat(" ",building," ",street," ",zip," ",city," ",country);
           $('label[for=ven_accept_and_checked_address]').html(add);

});
        </script>
        <script>
         $("#ven_street").keyup(function() {
            
             
              var country=$( "#ven_country option:selected" ).text();
              var city=$("#ven_city").val();
              var zip=$("#ven_zip_code").val();
              var street=$("#ven_street").val();
              var building=$("#ven_building").val();
              var suiteno=$("#ven_suit_no").val();

           var add= suiteno.concat(" ",building," ",street," ",zip," ",city," ",country);
           $('label[for=ven_accept_and_checked_address]').html(add);

});
        </script>
        <script>
         $("#ven_building").keyup(function() {
            
             
              var country=$( "#ven_country option:selected" ).text();
              var city=$("#ven_city").val();
              var zip=$("#ven_zip_code").val();
              var street=$("#ven_street").val();
              var building=$("#ven_building").val();
              var suiteno=$("#ven_suit_no").val();

           var add= suiteno.concat(" ",building," ",street," ",zip," ",city," ",country);
           $('label[for=ven_accept_and_checked_address]').html(add);

});
        </script>
        <script>
         $("#ven_suit_no").keyup(function() {
            
             
              var country=$( "#ven_country option:selected" ).text();
              var city=$("#ven_city").val();
              var zip=$("#ven_zip_code").val();
              var street=$("#ven_street").val();
              var building=$("#ven_building").val();
              var suiteno=$("#ven_suit_no").val();

           var add= suiteno.concat(" ",building," ",street," ",zip," ",city," ",country);
           $('label[for=ven_accept_and_checked_address]').html(add);

});
        </script>
        <script>
         $("#ven_phone").keyup(function() {
            
             
          
        
              var venphone=$("#ven_phone").val();

         
           $('label[for=ven_phone]').html(venphone);

});
        </script>
    <script>
         
        $("#ven_business_name").keyup(function() {
  $("#ven_business_name_print").text($(this).val());
});
$("#ven_business_address").keyup(function() {
  $("#ven_business_address_print").text($(this).val());
});
$("#ven_business_reg_no").keyup(function() {
  $("#ven_business_reg_no_print").text($(this).val());
});
$("#ven_website_url").keyup(function() {
  $("#ven_website_url_print").text($(this).val());
});
$("#bussiness_email").keyup(function() {
  $("#ven_email_print").text($(this).val());
});
$("#bussiness_email").keyup(function() {
  $("#ven_email_print").text($(this).val());
});
$("#ven_phone").keyup(function() {
  $("#ven_phone_print").text($(this).val());
});
$("#ven_name_of_bank").keyup(function() {
  $("#ven_name_of_bank_print").text($(this).val());
});
$("#ven_address_of_bank").keyup(function() {
  $("#ven_address_of_bank_print").text($(this).val());
});
$("#ven_bank_account_tittle").keyup(function() {
  $("#ven_bank_account_tittle_print").text($(this).val());
});
$("#ven_bank_account_no").keyup(function() {
  $("#ven_bank_account_no_print").text($(this).val());
});
$("#ven_name_of_bank_branch").keyup(function() {
  $("#ven_name_of_bank_branch_print").text($(this).val());
});
$("#ven_bank_swift_code").keyup(function() {
  $("#ven_bank_swift_code_print").text($(this).val());
});
$("#ven_name_of_bank_locally").change(function() {
    
  $("#ven_name_of_bank_locally_print").text($(this).val());
});
$("#ven_address_of_bank_locally").change(function() {
  $("#ven_address_of_bank_locally_print").text($(this).val());
});
$("#ven_bank_account_tittle_jp_locally").change(function() {
  $("#ven_bank_account_tittle_jp_locally_print").text($(this).val());
});
$("#ven_bank_account_no_locally").change(function() {
  $("#ven_bank_account_no_locally_print").text($(this).val());
});
$("#ven_name_of_bank_branch_jp_locally").change(function() {
  $("#ven_name_of_bank_branch_jp_locally_pint").text($(this).val());
});
$("#ven_bank_account_type_locally").change(function() {
  $("#ven_bank_account_type_locally_print").text($(this).val());
});
$('input[type=radio][name=ven_same_bank_account]').change(function() {
    if (this.value == 'YES') {
        $("#ven_name_of_bank_locally_print").text($("#ven_name_of_bank").val());
        $("#ven_address_of_bank_locally_print").text($("#ven_address_of_bank").val());
        $("#ven_bank_account_tittle_jp_locally_print").text($("#ven_bank_account_tittle").val());
        $("#ven_bank_account_no_locally_print").text($("#ven_bank_account_no").val());
        $("#ven_name_of_bank_branch_jp_locally_pint").text($("#ven_name_of_bank_branch").val());

    }
    else if (this.value == 'NO') {
        $("#ven_name_of_bank_locally_print").text($("#ven_name_of_bank_locally").val());
        $("#ven_address_of_bank_locally_print").text($("#ven_address_of_bank_locally").val());
        $("#ven_bank_account_tittle_jp_locally_print").text($("#ven_bank_account_tittle_jp_locally").val());
        $("#ven_bank_account_no_locally_print").text($("#ven_bank_account_no_locally").val());
        $("#ven_name_of_bank_branch_jp_locally_pint").text($("#ven_name_of_bank_branch_jp_locally").val());
    }
});

    </script>   
</html>