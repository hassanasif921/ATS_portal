<form action="" method="POST" onsubmit="return validateProduct();">
</form>

function validateVendorForm() {
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
            
        if (productName.value === "" || productUnit.value === "" || productPrice.value === "" || productCategory
            .value === "" || productImage.value === "" || productDescription.value === "") {
            document.getElementById("alert").innerHTML =
                "<div id='notify' class='failed'><i class='fa fa-times' onclick='hideAlert()'></i>Please Fill Out All Fields <i class='fa fa-exclamation-triangle'></i></div>";
            return false;

        } 
        else {
            return true;
        }
}
<?php 

$Filename = $_FILES["fileupload"]["name"];
$temp_name = $_FILES["fileupload"]["tmp_name"];
$docname = $_FILES['emp_docs']['name'];
$temp_name = $_FILES['emp_docs']['tmp_name'];

$Location = "images/";
$filename_call=implode(",",$docname);
///////////

if (!empty($_FILES["fileupload"]["name"]) )
{
    foreach ($docname as $key => $val) {
        $targetFilePath = $Location . $val;
        move_uploaded_file($_FILES["emp_docs"]["tmp_name"],[$key],$targetFilePath);
        }

            $insert = "insert into emplyee_table(emp_id,username,emp_pass,first_name,last_name,emp_status,address,city,state,zip,phn_number,alt_num,emp_email,cnic,department,designation,doj,cont_num1,name1,relation1,cont_num2,name2,relation2,latest_qual,latest_inst,latest_year,prev_qual,prev_inst,prev_year,image,documents) 
                 values('$empid','$emp_user_id','$emp_user_pass','$emp_f_name','$emp_l_name','$emp_stts','$emp_addrs','$emp_cty','$emp_stt','$emp_zp','$emp_personal','$emp_alternate','$emp_email_ad','$emp_nic','$emp_dept','$emp_desig','$emp_date_oj','$emp_emer_phn1','$emp_emer_name1','$emp_emer_rel1','$emp_emer_phn2','$emp_emer_name2','$emp_emer_rel2','$emp_lst_ql','$emp_lst_ql_ins','$emp_lst_ql_yr','$emp_prv_ql','$emp_prv_ql_ins','$emp_prv_ql_yr','$Filename','$filename_call')";
            $query = mysqli_query($connection,$insert);
            if ($query)
            {
                echo '<script type="text/javascript"> alert("Your File has been Uploaded and record also Inserted")</script>';
            }
            else
            {
                echo '<script type="text/javascript"> alert("Your File has been not Uploaded")</script>';
            }
        
    
                                        
}
    
?>
<?php	

include("connection_db.php");

if(isset($_POST["btn_login"]))
{

	mysqli_select_db($connection,"ats_databasenew");
	$user_name = $_POST["username"];
	$user_password = $_POST["password"];
	
	$query = mysqli_query($connection,"select * from ats_customer_signup where ats_customer_signup_name ='$user_name'");
	$row = mysqli_fetch_array($query);
	
	if($row ["ats_customer_signup_name"] == $user_name && $row ["ats_customer_signup_password"] == $user_password)
	{
		
		header("Location:index.php");
		
	}
	else
	{
		//echo '<script type="text/javascript"> alert("Invalid UserName or Password")</script>';
	}
	
}

?>