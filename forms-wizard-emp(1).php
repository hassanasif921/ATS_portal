<?php
include("top.php");
include("connection_db.php");
$next=0;
if (isset($_POST["btnsubmit"])) {

    $images1=$_FILES['emp_passport_image']['tmp_name'];
  $emp_passport_image=addslashes(file_get_contents($images1));

    $emp_id_ag = $_POST["emp_id_ag"];
    $emp_first_name = $_POST["emp_first_name"];
    $emp_middle_name = $_POST["emp_middle_name"];
    $emp_last_name = $_POST["emp_last_name"];
    $emp_address = $_POST["emp_address"];
    $emp_city = $_POST["emp_city"];
    $emp_state = $_POST["emp_state"];
    $emp_phone = $_POST["emp_phone"];
    $emp_cell_phone = $_POST["emp_cell_phone"];
    $emp_alt_phone = $_POST["emp_alt_phone"];
    $emp_date_of_birth = $_POST["emp_date_of_birth"];
    $emp_place_of_birth = $_POST["emp_place_of_birth"];
    $emp_nationality = $_POST["emp_nationality"];
    $emp_cnic_no = $_POST["emp_cnic_no"];
    $emp_cnic_expiry = $_POST["emp_cnic_expiry"];
    $emp_email = $_POST["emp_email"];
    $emp_relationship_status = $_POST["emp_relationship_status"];
    $emp_gender = $_POST["emp_gender"];
  //  $emp_passport_image = $_POST["emp_passport_image"];
    $emp_emergency_contact_person_name = $_POST["emp_emergency_contact_person_name"];
    $emp_emergency_contact_person_phone = $_POST["emp_emergency_contact_person_phone"];
    $emp_emergency_contact_person_relation = $_POST["emp_emergency_contact_person_relation"];
    $emp_emergency_contact_person_name_2 = $_POST["emp_emergency_contact_person_name_2"];
    $emp_emergency_contact_person_phone_2 = $_POST["emp_emergency_contact_person_phone_2"];
    $emp_emergency_contact_person_relation_2 = $_POST["emp_emergency_contact_person_relation_2"];
    $emp_institute_name = $_POST["emp_institute_name"];
    $emp_degree = $_POST["emp_degree"];
    $emp_degree_year = $_POST["emp_degree_year"];
    $emp_degree_status = $_POST["emp_degree_status"];
    $emp_institute_name_2 = $_POST["emp_institute_name_2"];
    $emp_degree_2 = $_POST["emp_degree_2"];
    $emp_degree_year_2 = $_POST["emp_degree_year_2"];
    $emp_degree_status_2 = $_POST["emp_degree_status_2"];
    $emp_institute_name_3 = $_POST["emp_institute_name_3"];
    $emp_degree_3 = $_POST["emp_degree_3"];
    $emp_degree_year_3 = $_POST["emp_degree_year_3"];
    $emp_degree_status_3 = $_POST["emp_degree_status_3"];
    $emp_certification_institute_name = $_POST["emp_certification_institute_name"];
    $emp_level = $_POST["emp_level"];
    $emp_level_year = $_POST["emp_level_year"];
    $emp_certification_status = $_POST["emp_certification_status"];
    $emp_certification_institute_name_2 = $_POST["emp_certification_institute_name_2"];
    $emp_level_2 = $_POST["emp_level_2"];
    $emp_level_year_2 = $_POST["emp_level_year_2"];
    $emp_certification_status_2 = $_POST["emp_certification_status_2"];
    $emp_certification_institute_name_3 = $_POST["emp_certification_institute_name_3"];
    $emp_level_3 = $_POST["emp_level_3"];
    $emp_level_year_3 = $_POST["emp_level_year_3"];
    $emp_certification_status_3 = $_POST["emp_certification_status_3"];
    $emp_experience_company_name = $_POST["emp_experience_company_name"];
    $emp_experience_position = $_POST["emp_experience_position"];
    $emp_experience_year = $_POST["emp_experience_year"];
    $emp_experience_department = $_POST["emp_experience_department"];
    $emp_experience_company_name_2 = $_POST["emp_experience_company_name_2"];
    $emp_experience_position_2 = $_POST["emp_experience_position_2"];
    $emp_experience_year_2 = $_POST["emp_experience_year_2"];
    $emp_experience_department_2 = $_POST["emp_experience_department_2"];
    $emp_experience_company_name_3 = $_POST["emp_experience_company_name_3"];
    $emp_experience_position_3 = $_POST["emp_experience_position_3"];
    $emp_experience_year_3 = $_POST["emp_experience_year_3"];
    $emp_experience_department_3 = $_POST["emp_experience_department_3"];
    $emp_designation = $_POST["emp_designation"];
    $emp_department = $_POST["emp_department"];
    $emp_date_of_joining = $_POST["emp_date_of_joining"];
    $emp_type = $_POST["emp_type"];
    $emp_payroll = $_POST["emp_payroll"];
    $emp_basic_salary = $_POST["emp_basic_salary"];
    $emp_profit_share_percentage = $_POST["emp_profit_share_percentage"];
    $emp_commision_per_unit = $_POST["emp_commision_per_unit"];
    $emp_project = $_POST["emp_project"];
    $emp_region = $_POST["emp_region"];
    $emp_region2 = $_POST["emp_region2"];

    $emp_region3 = $_POST["emp_region3"];

    $emp_region4 = $_POST["emp_region4"];

    $emp_region5 = $_POST["emp_region5"];

    $emp_category = $_POST["emp_category"];
    $emp_shift = $_POST["emp_shift"];
    $emp_timing = $_POST["emp_timing"];
    $emp_status = $_POST["emp_status"];
    $emp_last_working_date = $_POST["emp_last_working_date"];
    $emp_createdBy = "test ";
    $emp_createdAt = time();
    $emp_updatedBy = "test";
    $emp_updatedAt = time();
    $totalfiles = count($_FILES['file']['name']);
    $totalfilesres = count($_FILES['fileres']['name']);
    $totalfilesedu = count($_FILES['fileedu']['name']);
    $totalfilesexp = count($_FILES['fileexp']['name']);
    $totalfilesother = count($_FILES['fileother']['name']);


   // Looping over all files
   for($i=0;$i<$totalfiles;$i++){
   $filename = $_FILES['file']['name'][$i];

  // Upload files and store in database
  if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'upload/'.$filename)){
          // Image db insert sql
         $insert1 = "INSERT INTO `employeecnic`(`image_type`, `ats_emp_id`, `imagename`) VALUES ('NIC-Pic','$emp_id_ag','$filename')";
         
         $iquery = mysqli_query($connection,$insert1);

}
         

         
      else{
          echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
      }

   }
   //residential documents pics uploding
   for($f=0;$f<$totalfilesres;$f++){
    $filename1 = $_FILES['fileres']['name'][$f];
 
   // Upload files and store in database
   if(move_uploaded_file($_FILES["fileres"]["tmp_name"][$f],'upload/'.$filename1)){
           // Image db insert sql
          $insertres = "INSERT INTO `employeecnic`(`image_type`, `ats_emp_id`, `imagename`) VALUES ('Res-Pic','$emp_id_ag','$filename1')";
          
          $iqueryres = mysqli_query($connection,$insertres);      
       }else{
           echo 'Error in uploading file - '.$_FILES['fileres']['name'][$f].'<br/>';
       }
 
    }
    //educational docs
    for($e=0;$e<$totalfilesedu;$e++){
        $filename2 = $_FILES['fileedu']['name'][$e];
     
       // Upload files and store in database
       if(move_uploaded_file($_FILES["fileedu"]["tmp_name"][$e],'upload/'.$filename2)){
               // Image db insert sql
              $insertedu = "INSERT INTO `employeecnic`(`image_type`, `ats_emp_id`, `imagename`) VALUES ('Edu-Pic','$emp_id_ag','$filename2')";
              
              $iqueryedu = mysqli_query($connection,$insertedu);      
           }else{
               echo 'Error in uploading file - '.$_FILES['fileedu']['name'][$e].'<br/>';
           }
     
        }
        //experience documents
        for($ex=0;$ex<$totalfilesexp;$ex++){
            $filename3 = $_FILES['fileexp']['name'][$ex];
         
           // Upload files and store in database
           if(move_uploaded_file($_FILES["fileexp"]["tmp_name"][$ex],'upload/'.$filename3)){
                   // Image db insert sql
                  $insertexp = "INSERT INTO `employeecnic`(`image_type`, `ats_emp_id`, `imagename`) VALUES ('Exp-Pic','$emp_id_ag','$filename3')";
                  
                  $iqueryexp = mysqli_query($connection,$insertexp);      
               }else{
                   echo 'Error in uploading file - '.$_FILES['fileexp']['name'][$ex].'<br/>';
               }
         
            }
            for($od=0;$od<$totalfilesexp;$od++){
                $filename4 = $_FILES['fileother']['name'][$od];
             
               // Upload files and store in database
               if(move_uploaded_file($_FILES["fileother"]["tmp_name"][$od],'upload/'.$filename4)){
                       // Image db insert sql
                      $insertod = "INSERT INTO `employeecnic`(`image_type`, `ats_emp_id`, `imagename`) VALUES ('Other-Pic','$emp_id_ag','$filename4')";
                      
                      $iqueryod = mysqli_query($connection,$insertod);      
                   }else{
                       echo 'Error in uploading file - '.$_FILES['fileother']['name'][$od].'<br/>';
                   }
             
                }
        //other docs
  if($emp_id_ag != "" && $emp_first_name != ""){
 $insert = "insert into ats_employee(ats_employee_id,ats_employee_firstName,ats_employee_middleName,ats_employee_lastName,ats_employee_address,ats_employee_city,ats_employee_state,ats_employee_phoneNumber,ats_employee_cellPhoneNumber,ats_employee_alternateNumber,ats_employee_dob,ats_employee_pob,ats_employee_nationality,ats_employee_cnicNo,ats_employee_cnicExpiry,ats_employee_email,ats_employee_relation,ats_employee_gender,ats_employee_image,ats_employee_emergencyContact1_name	,ats_employee_emergencyContact1_phone,ats_employee_emergencyContact1_relation,ats_employee_emergencyContact2_name,ats_employee_emergencyContact2_phone,ats_employee_emergencyContact2_relation,ats_employee_education1_name,ats_employee_education1_degree,ats_employee_education1_year,ats_employee_education1_status,ats_employee_education2_name,ats_employee_education2_degree,ats_employee_education2_year ,ats_employee_education2_status ,ats_employee_education3_name,ats_employee_education3_degree,ats_employee_education3_year ,ats_employee_education3_status ,ats_employee_Institute1_name ,ats_employee_Institute1_level ,ats_employee_Institute1_status ,ats_employee_Institute2_name, ats_employee_Institute2_level, 
 ats_employee_Institute2_year ,ats_employee_Institute2_status ,ats_employee_Institute3_name ,ats_employee_Institute3_level ,ats_employee_Institute3_year, ats_employee_Institute3_status ,ats_employee_experience1_company ,ats_employee_experience1_position ,ats_employee_experience1_year ,ats_employee_experience1_department ,ats_employee_experience2_company, ats_employee_experience2_position ,ats_employee_experience2_year ,ats_employee_experience2_department ,ats_employee_experience3_company, ats_employee_experience3_position ,ats_employee_experience3_year ,ats_employee_experience3_department ,ats_employee_designation, ats_employee_department ,ats_employee_dateOfJoin, ats_employee_type ,ats_employee_payroll ,ats_employee_basicSalary, ats_employee_profit ,ats_employee_comission ,ats_employee_project, ats_employee_region, ats_employee_category ,ats_employee_shift, ats_employee_timing ,ats_employee_status, ats_employee_lastWorkingDate, ats_employee_cnic_pics,ats_employee_createdBy ,ats_employee_createdAt ,ats_employee_updatedBy ,ats_employee_updatedAt,region2,region3,region4,region5 )
  values('$emp_id_ag','$emp_first_name','$emp_middle_name','$emp_last_name','$emp_address','$emp_city','$emp_state','$emp_phone','$emp_cell_phone','$emp_alt_phone','$emp_date_of_birth','$emp_place_of_birth','$emp_nationality','$emp_cnic_no','$emp_cnic_expiry','$emp_email','$emp_relationship_status','$emp_gender','$emp_passport_image','$emp_emergency_contact_person_name','$emp_emergency_contact_person_phone','$emp_emergency_contact_person_relation','$emp_emergency_contact_person_name_2','$emp_emergency_contact_person_phone_2','$emp_emergency_contact_person_relation_2','$emp_institute_name','$emp_degree','$emp_degree_year','$emp_degree_status','$emp_institute_name_2','$emp_degree_2','$emp_degree_year_2' , '$emp_degree_status_2' '$emp_institute_name_3','$emp_degree_3','$emp_degree_year_3', '$emp_degree_status_3',
 '$emp_certification_institute_name','$emp_level','$emp_level_year','$emp_certification_status','$emp_certification_institute_name_2','$emp_level_2','$emp_level_year_2', '$emp_certification_status_2','$emp_certification_institute_name_3','$emp_level_3','$emp_level_year_3', '$emp_certification_status_3', '$emp_experience_company_name','$emp_experience_position','$emp_experience_year', '$emp_experience_department','$emp_experience_company_name_2',
 '$emp_experience_position_2','$emp_experience_year_2', '$emp_experience_department_2','$emp_experience_company_name_3','$emp_experience_position_3','$emp_experience_year_3', '$emp_experience_department_3','$emp_designation','$emp_department','$emp_date_of_joining', '$emp_type','$emp_payroll' , '$emp_basic_salary' , '$emp_profit_share_percentage', '$emp_commision_per_unit' ,'$emp_project' , '$emp_region' ,'$emp_category', 
 '$emp_shift','$emp_timing','$emp_status','$emp_last_working_date','','$emp_createdBy','$emp_createdAt','$emp_updatedBy','$emp_updatedAt','$emp_region2','$emp_region3','$emp_region4','$emp_region5')";
 $query = mysqli_query($connection,$insert);
  }
  else{
          echo '<script type="text/javascript"> alert("Please Fill All The fields")</script>';

  }
 
 
            // if ($query)
                  if ($query)
                  {
                      echo '<script type="text/javascript"> alert("Employee Register Successfully")</script>';
                      echo '<script language="javascript">window.location.href ="emp_search.php"</script>';

                  }
                  else
                  {
                  
                  }
             
            }
?>

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                            <div class="row">

                                <div class="col-md-12 ">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <form name="myForm" method="post"  enctype="multipart/form-data" onsubmit="return validateForm()">
                                            <div id="smartwizard2" class="forms-wizard-alt">
                                                <ul class="forms-wizard">
                                                    <li>
                                                        <a href="#step-12">
                                                            <em>1</em><span>Personal Information</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-22">
                                                            <em>2</em><span>Edu. & Exp. Information</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-32">
                                                            <em>3</em><span>Employment Information</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-42">
                                                            <em>4</em><span>Form Review</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-52">
                                                            <em>5</em><span>Finish Wizard</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="form-wizard-content">
                                                    <div id="step-12">
                                                        <div class="form-row">
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Employee ID (Auto Generated)</label>
                                                                    <div class="row">
                                                                            <div class="col-md-3">

                                                                                <input  type="text" class="" value="ATS- " style="margin-left:20px;font-size:18px;border:none;margin-top:3px" readonly disabled>
                                                                            </div>
                                                                            <div class="col-md-9">

                                                                                <input name="emp_id_ag" id="emp_id_ag" type="text" class="form-control" required>
                                                                                <p id="plsinsertid" style="color:red;text-decoration:bold">Please insert id</p>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label><span>First name</span></label>
                                                                    <input name="emp_first_name" id="emp_first_name" placeholder="First Name" type="text" class="form-control">
                                                                    <p id="plsinsertfname" style="color:red;text-decoration:bold">Please insert First name</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Middle Name</label>
                                                                    <input name="emp_middle_name" id="emp_middle_name" placeholder="Middle Name" type="text" class="form-control">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Last Name</label>
                                                                    <input name="emp_last_name" id="emp_last_name" placeholder="Last Name" type="text" class="form-control">
                                                                    <p id="plsinsertlname" style="color:red;text-decoration:bold">Please insert Last name</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label>Address </label>
                                                                    
                                                                    <input name="emp_address" id="emp_address" placeholder="Apartment, Studio, or Floor" type="text" class="form-control">
                                                                    <p id="plsinsertadd" style="color:red;text-decoration:bold">Please insert Address</p>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>City</label>
                                                                    <input name="emp_city" id="emp_city" placeholder="City Name" type="text" class="form-control">
                                                                    <p id="plsinsertcity" style="color:red;text-decoration:bold">Please insert City</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>State</label>
                                                                    <input name="emp_state" id="emp_state" placeholder="State Name" type="text" class="form-control">
                                                                    <p id="plsinsertstate" style="color:red;text-decoration:bold">Please insert State</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label >Phone Number</label>
                                                                    <input name="emp_phone" id="emp_phone" placeholder="XXX-XXX-XXXXXXX" class="form-control masked" 
                                                                    data-charset="XXX-XXX-XXXXXXX" type="text" >
                                                                    <p id="plsinsertpno" style="color:red;text-decoration:bold">Please insert Phone </p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label >Cell Phone Number</label>
                                                                    <input name="emp_cell_phone" id="emp_cell_phone" placeholder="0312-3456789" type="number" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label >Alternate Number</label>
                                                                    <input name="emp_alt_phone" id="emp_alt_phone" placeholder="0312-3456789" type="number" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label style="font-weight: bold;" for="exampleEmail" class="text-dark">Date Of Birth</label>
                                                                    <input type="date" value="10/01/2001" class="form-control" name="emp_date_of_birth" id="emp_date_of_birth" value=""/>
                                                                    <p id="plsinsertdob" style="color:red;text-decoration:bold">Please insert D.O.B</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Place of Birth</label>
                                                                    <input name="emp_place_of_birth" id="emp_place_of_birth" placeholder="Enter Place of Birth" type="text" class="form-control">
                                                                    <p id="plsinsertpob" style="color:red;text-decoration:bold">Please insert P.O.B</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Nationality</label>
                                                                    
                                                                    <input name="emp_nationality" placeholder="Enter Nationality" id="emp_nationality" type="text" class="form-control">
                                                                    <p id="plsinsertnationality" style="color:red;text-decoration:bold">Please insert Nationality</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>CNIC No.</label>
                                                                    <input id="emp_cnic_no" name="emp_cnic_no" placeholder="XXXXX-XXXXXXX-X" class="form-control masked" 
                                                                data-charset="XXXXX-XXXXXXX-X"  type="text" />          
                                                                <p id="plsinsertcnic" style="color:red;text-decoration:bold">Please insert NIC</p>
                                                      </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label style="font-weight: bold;" class="text-dark">CNIC Expiry</label>
                                                                    <input type="date" class="form-control" name="emp_cnic_expiry" id="emp_cnic_expiry" />
                                                                    <p id="plsinsertcnicexpiry" style="color:red;text-decoration:bold">Please insert CNIC EXPIRY</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label >Email</label>
                                                                  
                                                                    <input name="emp_email" id="emp_email" type="email" placeholder="someone@abc.com" class="form-control">
                                                                    <p id="plsinsertemail" style="color:red;text-decoration:bold">Please insert EMAIL</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="position-relative form-group">
                                                                    <label>Relationship Status</label>
                                                                    <select name="emp_relationship_status" id="emp_relationship_status" class="form-control">
                                                                        <option value="" selected disabled>SELECT</option>
                                                                        <option value="Single">Single</option>
                                                                        <option value="Married">Married</option>
                                                                        <option value="Widowed">Widowed</option>
                                                                        <option value="Separated">Separated</option>
                                                                        <option value="Divorced">Divorced </option>
                                                                    </select>
                                                                    <p id="plsinsertrstatus" style="color:red;text-decoration:bold">Please SELECT</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="position-relative form-group">
                                                                    <label>Gender</label>
                                                                    <select name="emp_gender" id="emp_gender" class="form-control">
                                                                    <option value="" selected disabled>SELECT</option>

                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                    <p id="plsinsertgender" style="color:red;text-decoration:bold">Please Select</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div style="margin-left: 10%;" class="position-relative form-group">
                                                                    <label>Photo (Passport Size)</label>
                                                                   <input name="emp_passport_image" id="emp_passport_image" type="file" onchange="loadFile(event)" required>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-2">
                                                                <div style="margin-left: 10%;" class="position-relative form-group">
                                                                    <label>CNIC </label>
                                                                    <input  multiple="multiple" name="file[]" id="emp_cnic_pic_both_side" type="file" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div style="margin-left: 10%;" class="position-relative form-group">
                                                                    <label>Residential Docs</label>
                                                                    <input  multiple="multiple" name="fileres[]" id="emp_res_docs" type="file" required>
                                                                </div>
                                                            </div>

                                                        <div class="divider"></div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <h6 style="font-weight: bold; color: black;">Emergency Contacts <span style="color: grey;">(Only Blood Relation)</span></h6>
                                                            </div>

                                                           <div class="col-md-4">
                                                            <div class="position-relative form-group">
                                                                <label>Name</label>
                                                              
                                                                <input name="emp_emergency_contact_person_name" id="emp_emergency_contact_person_name" placeholder="Contact Person Name" type="text" class="form-control" required>
                                                                <p id="plsinsertename" style="color:red;text-decoration:bold">Please insert Name</p>

                                                            </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label class="text-dark">Phone No.</label>
                                                                    <input name="emp_emergency_contact_person_phone" id="emp_emergency_contact_person_phone" placeholder="Contact Person Phone No." type="text" class="form-control"  required/>
                                                                    <p id="plsinsertephone" style="color:red;text-decoration:bold">Please insert Phone #</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label >Relation</label>
                                                                    <input name="emp_emergency_contact_person_relation" id="emp_emergency_contact_person_relation" placeholder="Contact Person Relation" type="text" class="form-control" required>
                                                                    <p id="plsinserterelation" style="color:red;text-decoration:bold">Please insert Relation</p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div id="accordion_contact" >
                                                                    <div style="background: transparent; box-shadow: none;" class="card">
                                                                        <div id="headingOne1" class="clk">
                                                                            <a href=""  data-toggle="collapse" data-target="#collapseOne10" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                            <i class="fa fa-plus-circle"></i> Add another Contact
                                                                            </a>
                                                                        </div>
                                                                        <div  data-parent="#accordion_contact" id="collapseOne10" aria-labelledby="headingOne1" class="collapse ">
                                                                            <div class="card-body row">
                                                                                <div class="col-md-4">
                                                                                    <div class="position-relative form-group">
                                                                                        <label>Name</label>
                                                                                        <input name="emp_emergency_contact_person_name_2" id="emp_emergency_contact_person_name_2" placeholder="Contact Person Name" type="text" class="form-control">
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="position-relative form-group">
                                                                                            <label class="text-dark">Phone No.</label>
                                                                                            <input name="emp_emergency_contact_person_phone_2" id="emp_emergency_contact_person_phone_2" placeholder="Contact Person Phone No." type="text" class="form-control"  />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="position-relative form-group">
                                                                                            <label >Relation</label>
                                                                                            <input name="emp_emergency_contact_person_relation_2" id="emp_emergency_contact_person_relation_2" placeholder="Contact Person Relation" type="text" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div id="step-22">
                                                        <div id="accordion" class="accordion-wrapper mb-3">
                                                            <div class="card">

                                                                <div data-parent="#accordion" id="collapseTwo"
                                                                    class="collapse show">
                                                                    <div class="card-body">
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <h6 style="font-weight: bold; color: black;">Education</h6>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Intitute Name</label>
                                                                                    <input name="emp_institute_name" id="emp_institute_name" type="text" placeholder="Enter Institue Name" class="form-control" required>
                                                                                    <p id="plsinsertiname" style="color:red;text-decoration:bold">Please insert institute name</p>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Degree</label>
                                                                                    <input name="emp_degree" id="emp_degree"  placeholder="Enter Degree Name" type="text" class="form-control" required>
                                                                                    <p id="plsinsertdegree" style="color:red;text-decoration:bold">Please insert Degree</p>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_degree_year" id="emp_degree_year"  placeholder="Enter Degree Year" type="text" class="form-control" required>
                                                                                    <p id="plsinsertdyear" style="color:red;text-decoration:bold">Please insert Year</p>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Status</label>
                                                                                    <select name="emp_degree_status" id="emp_degree_status" class="form-control" required>
                                                                                    <option value="" selected disabled>Select</option>

                                                                                        <option value="Cleared">Cleared</option>
                                                                                        <option value="Inprogress">Inprogress</option>
                                                                                        <option value="Dropout">Dropout</option>
                                                                                        <option value="Awaiting-for-Result">Awaiting for Result</option>
                                                                                    </select>
                                                                                    <p id="plsinsertdstatus" style="color:red;text-decoration:bold">Please insert status</p>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Intitute Name</label>
                                                                                    <input name="emp_institute_name_2" id="emp_institute_name_2" type="text" placeholder="Enter Institue Name" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Degree</label>
                                                                                    <input name="emp_degree_2" id="emp_degree_2"  placeholder="Enter Degree Name" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_degree_year_2" id="emp_degree_year_2"  placeholder="Enter Degree Year" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Status</label>
                                                                                    <select name="emp_degree_status_2" id="emp_degree_status_2" class="form-control">
                                                                                        <option value="Cleared">Cleared</option>
                                                                                        <option value="Inprogress">Inprogress</option>
                                                                                        <option value="Dropout">Dropout</option>
                                                                                        <option value="Awaiting-for-Result">Awaiting for Result</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div id="accordion_education" >
                                                                                    <div style="background: transparent; box-shadow: none;" class="card">
                                                                                        <div id="headingOne1" class="clk">
                                                                                            <a href="" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                                            <i class="fa fa-plus-circle"></i> Add another Field
                                                                                            </a>
                                                                                        </div>
                                                                                        <div data-parent="#accordion_education" id="collapseOne1" aria-labelledby="headingOne1" class="collapse ">
                                                                                            <div class="card-body row">
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Intitute Name</label>
                                                                                                        <input name="emp_institute_name_3" id="emp_institute_name_3" type="text" placeholder="Enter Institue Name" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Degree</label>
                                                                                                        <input name="emp_degree_3" id="emp_degree_3"  placeholder="Enter Degree Name" type="text" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Year</label>
                                                                                                        <input name="emp_degree_year_3" id="emp_degree_year_3"  placeholder="Enter Degree Year" type="text" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Status</label>
                                                                                                        <select name="emp_degree_status_3" id="emp_degree_status_3" class="form-control">
                                                                                                            <option value="Cleared">Cleared</option>
                                                                                                            <option value="Inprogress">Inprogress</option>
                                                                                                            <option value="Dropout">Dropout</option>
                                                                                                            <option value="Awaiting-for-Result">Awaiting for Result</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="divider"></div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <h6 style="font-weight: bold; color: black;">Extra Certification</h6>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Intitute Name</label>
                                                                                    <input name="emp_certification_institute_name" id="emp_certification_institute_name" type="text" placeholder="Enter Institue Name" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Level</label>
                                                                                    <input name="emp_level" id="emp_level"  placeholder="Enter Degree Name" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_level_year" id="emp_level_year"  placeholder="Enter Degree Year" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Status</label>
                                                                                    <select name="emp_certification_status" id="emp_certification_status" class="form-control">
                                                                                        <option value="Cleared">Cleared</option>
                                                                                        <option value="Inprogress">Inprogress</option>
                                                                                        <option value="Dropout">Dropout</option>
                                                                                        <option value="Awaiting-for-Result">Awaiting for Result</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Intitute Name</label>
                                                                                    <input name="emp_certification_institute_name_2" id="emp_certification_institute_name_2" type="text" placeholder="Enter Institue Name" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Level</label>
                                                                                    <input name="emp_level_2" id="emp_level_2"  placeholder="Enter Degree Name" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_level_year_2" id="emp_level_year_2"  placeholder="Enter Degree Year" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Status</label>
                                                                                    <select name="emp_certification_status_2" id="emp_certification_status_2" class="form-control">
                                                                                        <option value="Cleared">Cleared</option>
                                                                                        <option value="Inprogress">Inprogress</option>
                                                                                        <option value="Dropout">Dropout</option>
                                                                                        <option value="Awaiting-for-Result">Awaiting for Result</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div id="accordion_certification" >
                                                                                    <div style="background: transparent; box-shadow: none;" class="card">
                                                                                        <div id="headingOne1" class="clk">
                                                                                            <a href=""  data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                                            <i class="fa fa-plus-circle"></i> Add another Field
                                                                                            </a>
                                                                                        </div>
                                                                                        <div data-parent="#accordion_certification" id="collapseOne2" aria-labelledby="headingOne1" class="collapse ">
                                                                                            <div class="card-body row">
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Intitute Name</label>
                                                                                                        <input name="emp_certification_institute_name_3" id="emp_certification_institute_name_3" type="text" placeholder="Enter Institue Name" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Level</label>
                                                                                                        <input name="emp_level_3" id="emp_level_3"  placeholder="Enter Degree Name" type="text" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Year</label>
                                                                                                        <input name="emp_level_year_3" id="emp_level_year_3"  placeholder="Enter Degree Year" type="text" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Status</label>
                                                                                                        <select name="emp_certification_status_3" id="emp_certification_status_3" class="form-control">
                                                                                                            <option value="Cleared">Cleared</option>
                                                                                                            <option value="Inprogress">Inprogress</option>
                                                                                                            <option value="Dropout">Dropout</option>
                                                                                                            <option value="Awaiting-for-Result">Awaiting for Result</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                <div style="margin-left: 10%;" class="position-relative form-group">
                                                                    <label>Educational Docs</label>
                                                                    <input  multiple="multiple" name="fileedu[]" id="emp_edu_docs" type="file">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div style="margin-left: 10%;" class="position-relative form-group">
                                                                    <label>Experience letter Docs</label>
                                                                    <input  multiple="multiple" name="fileexp[]" id="emp_exp_docs" type="file">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div style="margin-left: 10%;" class="position-relative form-group">
                                                                    <label>Other Docs</label>
                                                                    <input  multiple="multiple" name="fileother[]" id="emp_other" type="file">
                                                                </div>
                                                            </div>
                                                                                </div>
                                                                            </div>

                                                                        
                                                                        
                                                                        </div>
                                                                        <div class="divider"></div>
                                                                        <p> WANT TO ADD PROFESSIONAL EXPERIENCE
                                                                        </p>
                                                                        <input type="radio" name="mycheckbox" id="mycheckbox" value="0" checked/>NO
                                                                        <input type="radio" name="mycheckbox" id="mycheckbox" value="1" />Yes

                                                                        <div class="form-row" id="proexp">
                                                                            <div class="col-md-12">
                                                                                <h6 style="font-weight: bold; color: black;">Professional Experience</h6>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Company Name</label>
                                                                                    <input name="emp_experience_company_name" id="emp_experience_company_name" placeholder="Enter Company Name" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Position</label>
                                                                                    <input name="emp_experience_position" id="emp_experience_position" placeholder="Enter Position" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_experience_year" id="emp_experience_year" placeholder="Enter Year" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Department</label>
                                                                                    <input name="emp_experience_department" id="emp_experience_department" placeholder="Department Name" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Company Name</label>
                                                                                    <input name="emp_experience_company_name_2" id="emp_experience_company_name_2" placeholder="Enter Company Name" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Position</label>
                                                                                    <input name="emp_experience_position_2" id="emp_experience_position_2" placeholder="Enter Position" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_experience_year_2" id="emp_experience_year_2" placeholder="Enter Year" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Department</label>
                                                                                    <input name="emp_experience_department_2" id="emp_experience_department_2" placeholder="Department Name" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div id="accordion_experience" >
                                                                                    <div style="background: transparent; box-shadow: none;" class="card">
                                                                                        <div id="headingOne1" class="clk">
                                                                                            <a href=""  data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                                            <i class="fa fa-plus-circle"></i> Add another Field
                                                                                            </a>
                                                                                        </div>
                                                                                        <div data-parent="#accordion_experience" id="collapseOne3" aria-labelledby="headingOne1" class="collapse ">
                                                                                            <div class="card-body row">
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label>Company Name</label>
                                                                                                        <input name="emp_experience_company_name_3" id="emp_experience_company_name_3" placeholder="Enter Company Name" type="text" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Position</label>
                                                                                                        <input name="emp_experience_position_3" id="emp_experience_position_3" placeholder="Enter Position" type="text" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Year</label>
                                                                                                        <input  name="emp_experience_year_3" id="emp_experience_year_3" placeholder="Enter Year" type="text" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Department</label>
                                                                                                        <input  name="emp_experience_department_3" id="emp_experience_department_3" placeholder="Department Name" type="text" class="form-control">
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
                                                        </div>
                                                    </div>
                                                    <div id="step-32">
                                                        <div id="accordion" class="accordion-wrapper mb-3">
                                                            <div class="card">

                                                                <div data-parent="#accordion" id="collapseTwo"
                                                                    class="collapse show">
                                                                    <div class="card-body">
                                                                        <div class="form-row">

                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Designation</label>
                                                                                    <input name="emp_designation" id="emp_designation" type="text" class="form-control" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Department</label>
                                                                                    <select name="emp_department" id="emp_department" class="form-control" required>
                                                                                        <option value="---">Please Select Department</option>
                                                                                        <option value="Customer-Care-Department">Customer Care Department</option>
                                                                                        <option value="Sales-Department">Sales Department</option>
                                                                                        <option value="IT-Department">IT Department</option>
                                                                                        <option value="Admin-Department">Admin Department</option>
                                                                                        <option value="Customer-Service-Department">Customer Service Department</option>
                                                                                        <option value="HR-Department">HR Department</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="position-relative form-group">
                                                                                    <label class="text-dark">Date Of joining</label>
                                                                                    <input type="date" class="form-control" id="emp_date_of_joining" name="emp_date_of_joining" required value=""/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                        <label >Employment Type</label>
                                                                                        <select name="emp_type" id="emp_type" class="form-control" required>
                                                                                            <option value="---">Please Select Type</option>
                                                                                            <option value="Full-Time">Full Time</option>
                                                                                            <option value="Part-Time">Part Time</option>
                                                                                            <option value="Freelance">Freelance</option>
                                                                                            <option value="Work-From-Home">Work From Home</option>
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                        <label >Payroll / Income</label>
                                                                                        <select name="emp_payroll" id="emp_payroll" class="form-control" required>
                                                                                            <option value="---">Please Select</option>
                                                                                            <option value="Salaried">Salaried</option>
                                                                                            <option value="Profit-Sharing">Profit Sharing</option>
                                                                                            <option value="Salaried+Commission">Salaried + Commission</option>
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Basic Salary</label>
                                                                                    <input name="emp_basic_salary" id="emp_basic_salary" placeholder="Enter Basic Salary" type="text" required class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Profit Share %</label>
                                                                                    <input name="emp_profit_share_percentage" id="emp_profit_share_percentage" placeholder="Enter Profit Share %" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Commission / Unit</label>
                                                                                    <input name="emp_commision_per_unit" id="emp_commision_per_unit" placeholder="Enter Commission / Unit" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Project</label>
                                                                                    <select name="emp_project" id="emp_project" class="multiselect-dropdown form-control">
                                                                                            <option value="Auto-Trading">Auto Trading</option>
                                                                                            <option value="IT-Software">IT & Software</option>
                                                                                            <option value="Amazon">Amazon</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Region</label>
                                                                                    <select name="emp_region" id="emp_region"  class="form-control">
                                                                                        <option value="---" >Please Select Region</option>
                                                                                        <option value="Asia" >Asia</option>
                                                                                        <option value="Africa">Africa</option>
                                                                                        <option value="Europe">Europe</option>
                                                                                        <option value="Caribbean">Caribbean</option>
                                                                                        <option value="South-America">South America</option>
                                                                                        <option value="North-America" >North America</option>
                                                                                        <option value="Oceania">Oceania</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Region</label>
                                                                                    <select name="emp_region2" id="emp_region"  class="form-control">
                                                                                        <option value="---" >Please Select Region</option>
                                                                                        <option value="Asia" >Asia</option>
                                                                                        <option value="Africa">Africa</option>
                                                                                        <option value="Europe">Europe</option>
                                                                                        <option value="Caribbean">Caribbean</option>
                                                                                        <option value="South-America">South America</option>
                                                                                        <option value="North-America" >North America</option>
                                                                                        <option value="Oceania">Oceania</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Region</label>
                                                                                    <select name="emp_region3" id="emp_region"  class="form-control">
                                                                                        <option value="---" >Please Select Region</option>
                                                                                        <option value="Asia" >Asia</option>
                                                                                        <option value="Africa">Africa</option>
                                                                                        <option value="Europe">Europe</option>
                                                                                        <option value="Caribbean">Caribbean</option>
                                                                                        <option value="South-America">South America</option>
                                                                                        <option value="North-America" >North America</option>
                                                                                        <option value="Oceania">Oceania</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Region</label>
                                                                                    <select name="emp_region4" id="emp_region"  class="form-control">
                                                                                        <option value="---" >Please Select Region</option>
                                                                                        <option value="Asia" >Asia</option>
                                                                                        <option value="Africa">Africa</option>
                                                                                        <option value="Europe">Europe</option>
                                                                                        <option value="Caribbean">Caribbean</option>
                                                                                        <option value="South-America">South America</option>
                                                                                        <option value="North-America" >North America</option>
                                                                                        <option value="Oceania">Oceania</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Region</label>
                                                                                    <select name="emp_region5" id="emp_region"  class="form-control">
                                                                                        <option value="---" >Please Select Region</option>
                                                                                        <option value="Asia" >Asia</option>
                                                                                        <option value="Africa">Africa</option>
                                                                                        <option value="Europe">Europe</option>
                                                                                        <option value="Caribbean">Caribbean</option>
                                                                                        <option value="South-America">South America</option>
                                                                                        <option value="North-America" >North America</option>
                                                                                        <option value="Oceania">Oceania</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Employment Category</label>
                                                                                    <select name="emp_category" id="emp_category" class="form-control">
                                                                                        <option value="---">Please Select Category</option>
                                                                                        <option value="Permanent">Permanent</option>
                                                                                        <option value="Contract">Contract</option>
                                                                                        <option value="Probation">Probation</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Shift</label>
                                                                                    <select name="emp_shift" id="emp_shift" class="form-control">
                                                                                        <option value="---" >Please Select Shift</option>
                                                                                        <option value="Day">Day</option>
                                                                                        <option value="Evening">Evening</option>
                                                                                        <option value="Night">Night</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Timing</label>
                                                                                    <input name="emp_timing" id="emp_timing" type="time" class="form-control">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Status</label>
                                                                                    <select name="emp_status" id="emp_status" class="form-control">
                                                                                        <option value="On-Duty">On duty</option>
                                                                                        <option value="Terminated" >Terminated</option>
                                                                                        <option value="Resigned" >Resigned</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Last Working Date</label>
                                                                                    <input type="date" class="form-control" name="emp_last_working_date" id="emp_last_working_date"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="step-42">
                                                        <div id="accordion" class="accordion-wrapper mb-3">
                                                            <div class="card">
                                                            <?php 
                                                            
                                                            ?>
                                                                <div data-parent="#accordion" id="collapseTwo"
                                                                    class="collapse show">
                                                                    <div style="font-family: Arial, Helvetica, sans-serif; border: 3px solid #ff9900; " class="card mb-4">
                                                                        <div style="height: auto; padding-top: 1%; padding-bottom: 1%; background: linear-gradient(135deg, #ff9900 0%, #ffff 100%)" class="card-header">
                                                                            <div  class="media flex-wrap w-100 align-items-center">
                                                                           
                                                                                 <img style="width: 80px; height: auto;" id="emp_passport_image_print" /> 

                                                                                    
                                                                                <div  class="media-body ml-3">
                                                                                    <label for="fname" style="color: white;" id="emp_full_name_print" ><span></span></label><br/>
                                                                                    <label for="designation" class="text-muted small" id="emp_designation_print" ><span></span></label><br/>
                                                                                    <label for="emp_dept"  class="text-muted small" id="emp_department_print" ><span></span></label>
                                                                                </div>
                                                                                <div class="">
                                                                                
                                                                                    <div class="btn-hover-shine">

                                                                                    <img  class="btn-hover-shine" src="assets/images/logo-inverse2.png"></div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body ">
                                                                            <div class="row ">
                                                                                <div style="background:linear-gradient(to right, white, #bebebe, #bebebe, white); padding-top: 0.7%;" class="col-md-12">
                                                                                    <h4 class="text-white" style="font-weight: bold; text-align: center; text-transform: uppercase;">Personal Information</h4>
                                                                                </div>
                                                                                <div style=" margin-top: 0.5%; border-right: 2px solid lightgray;" class="col-md-6">
                                                                                    <label for="empid">Employee ID : <span style="font-weight: bold;"></span></label><br/>
                                                                                    <label for="add">Address : <span style="font-weight: bold;" id="emp_address_print"></span></label><br/>
                                                                                    <label for="city">City : <span style="font-weight: bold;" id="emp_city_print"></span></label><br/>
                                                                                    <label for="phone">Phone Number : <span style="font-weight: bold;" id="emp_cell_phone_print"></span></label><br/>
                                                                                    <label id="dob" for="dob">Date of Birth : <span style="font-weight: bold;" id="emp_date_of_birth_print"></span></label><br/>
                                                                                    <label for="pob">Place of Birth : <span style="font-weight: bold;" id="emp_place_of_birth_print" ></span></label><br/>

                                                                                </div>
                                                                                <div style="margin-top: 0.5%;"  class="col-md-6">

                                                                                    <label for="nationality">Nationality : <span style="font-weight: bold; " id="emp_natinality_print"></span></label><br/>
                                                                                    <label for="nic">CNIC No. : <span style="font-weight: bold;" id="emp_cnic_no_print" ></span></label><br/>
                                                                                    <label for="nicexpiry">CNIC Expiry : <span style="font-weight: bold;" id="emp_cnic_expiry_print" ></span></label><br/>
                                                                                    <label for="email">Email : <span style="font-weight: bold;" id="emp_email_print" ></span></label><br/>
                                                                                    <label for="relationshipstatus"> Relationship Status : <span style="font-weight: bold;" id="emp_relationship_status_print" ></span></label><br/>
                                                                                    <label for="gender">Gender : <span style="font-weight: bold;" id="emp_gender_print" ></span></label><br/>
                                                                                    <!-- <label>Photo : <span ><input type="file"></span></label><br/>  -->


                                                                                </div>
                                                                                <div class="col-md-12" >

                                                                                    <div style="height: 5px; background: #ffd17a;  margin-top: 1%;"></div>
                                                                                </div>

                                                                                <div style="background:linear-gradient(to right, white, #bebebe, #bebebe, white); padding-top: 0.7%; margin-top: 1%;" class="col-md-12">
                                                                                    <h4 class="text-white" style="font-weight: bold; text-align: center; text-transform: uppercase;">Education</h4>
                                                                                </div>
                                                                                <div style=" margin-top: 0.5%; border-right: 2px solid lightgrey;" class="col-md-6">
                                                                                    <label for="iname">Intitute Name : <span style="font-weight: bold;" id="emp_institute_name_print"></span></label><br/>
                                                                                    <label for="idegree">Degree : <span style="font-weight: bold;" id="emp_degree_print" ></span></label><br/>
                                                                                    <label for="idegreeyear">Year : <span style="font-weight: bold;" id="emp_degree_year_print" ></span></label><br/>
                                                                                    <label for="idegreestatus">Status : <span style="font-weight: bold;" id="emp_degree_status_print" ></span></label><br/>
                                                                                </div>
                                                                                <div style=" margin-top: 0.5%; border-right: 2px solid lightgrey;" class="col-md-6">
                                                                                    <label for="iname1">Intitute Name : <span style="font-weight: bold;" id="emp_institute_name_print"></span></label><br/>
                                                                                    <label for="idegree1">Degree : <span style="font-weight: bold;" id="emp_degree_print" ></span></label><br/>
                                                                                    <label for="idegreeyear1">Year : <span style="font-weight: bold;" id="emp_degree_year_print" ></span></label><br/>
                                                                                    <label for="idegreestatus1">Status : <span style="font-weight: bold;" id="emp_degree_status_print" ></span></label><br/>
                                                                                </div>
                                                                                <div class="col-md-12" >
                                                                                    <div style="height: 5px; background: #ffd17a;  margin-top: 1%;"></div>
                                                                                </div>
                                                                                <div style="background:linear-gradient(to right, white, #bebebe, #bebebe, white); padding-top: 0.7%; margin-top: 1%;" class="col-md-12">
                                                                                    <h4 class="text-white" style="font-weight: bold; text-align: center; text-transform: uppercase;">Professional Experience</h4>
                                                                                </div>
                                                                                <div style=" margin-top: 0.5%; border-right: 2px solid lightgrey;" class="col-md-6">
                                                                                    <label for="cn">Company Name : <span style="font-weight: bold;" id="emp_experience_company_name_print"></span></label><br/>
                                                                                    <label for="position">Position : <span style="font-weight: bold;" id="emp_experience_position_print" ></span></label><br/>
                                                                                    <label for="year">Year : <span style="font-weight: bold;" id="emp_experience_year_print"></span></label><br/>
                                                                                    <label for="dept">Department : <span style="font-weight: bold;" id="emp_experience_department_print"></span></label><br/>
                                                                                </div>
                                                                                <div style=" margin-top: 0.5%;" class="col-md-6">
                                                                                <label for="cn1">Company Name : <span style="font-weight: bold;" id="emp_experience_company_name_print"></span></label><br/>
                                                                                    <label for="position1">Position : <span style="font-weight: bold;" id="emp_experience_position_print" ></span></label><br/>
                                                                                    <label for="year1">Year : <span style="font-weight: bold;" id="emp_experience_year_print"></span></label><br/>
                                                                                    <label for="dept1">Department : <span style="font-weight: bold;" id="emp_experience_department_print"></span></label><br/>
                                                                                </div>
                                                                                <div class="col-md-12" >
                                                                                    <div style="height: 5px; background: #ffd17a;  margin-top: 1%;"></div>
                                                                                </div>
                                                                                <div style="background:linear-gradient(to right, white, #bebebe, #bebebe, white); padding-top: 0.7%; margin-top: 1%;" class="col-md-12">
                                                                                    <h4 class="text-white" style="font-weight: bold; text-align: center; text-transform: uppercase;">Employment Details</h4>
                                                                                </div>
                                                                                <div style=" margin-top: 0.5%; border-right: 2px solid lightgrey;" class="col-md-6">
                                                                                    <label for="emp_dept">Department : <span style="font-weight: bold;"></span></label><br/>
                                                                                    <label for="emp_type">Employment Type : <span style="font-weight: bold;" id="emp_type_print"></span></label><br/>
                                                                                    <label for="emp_payroll">Payroll / Income : <span style="font-weight: bold;" id="emp_payroll_print"></span></label><br/>
                                                                                    <label for="emp_salary" >Basic Salary : <span style="font-weight: bold;" id="emp_basic_salary_print" ></span></label><br/>
                                                                                    <label for="emp_profit%">Profit Share % : <span style="font-weight: bold;" id="emp_profit_share_percentage_print"></span></label><br/>
                                                                                    <label for="emp_commission">Commission / Unit : <span style="font-weight: bold;" id="emp_commision_per_unit" ></span></label><br/>
                                                                                </div>
                                                                                <div style=" margin-top: 0.5%;" class="col-md-6">
                                                                                    <label for="project">Project : <span style="font-weight: bold;" id="emp_project_print" ></span></label><br/>
                                                                                    <label for="region">Region : <span style="font-weight: bold;" id="emp_region_print" ></span></label><br/>
                                                                                    <label for="ec">Employment Category : <span style="font-weight: bold;" id="emp_category_print" ></span></label><br/>
                                                                                    <label for="shift">Shift : <span style="font-weight: bold;" id="emp_shift_print" ></span></label><br/>
                                                                                    <label for="timing">Timing : <span style="font-weight: bold;" id="emp_timing_print" ></span></label><br/>
                                                                                    <label for="status">Status : <span style="font-weight: bold;" id="emp_status_print" ></span></label><br/>
                                                                                </div>
                                                                                <div class="col-md-12" >
                                                                                    <div style="height: 5px; background: #ffd17a;  margin-top: 1%;"></div>
                                                                                </div>
                                                                                <div style="background:linear-gradient(to right, white, #bebebe, #bebebe, white); padding-top: 0.7%; margin-top: 1%;" class="col-md-12">
                                                                                    <h4 class="text-white" style="font-weight: bold; text-align: center; text-transform: uppercase;">Upload Documents</h4>
                                                                                </div>
                                                                                <label style="padding-top: 9px;">CNIC :<span style="font-size: 11px; color: grey;"></span></label><br/>

                                                                                <div id="dvPreview" class="col-md-12">
                                                                               
                                                                                    </div>
                                                                                    <br/>
                                                                                    <label style="padding-top: 9px;">Residential documents :<span style="font-size: 11px; color: grey;"></span></label><br/>

                                                                                    <div id="dvPreviewres" class="col-md-12">
                                                                                    </div>
                                                                                   
                                                                                    <label style="padding-top: 9px;">Educational Documents : <span style="font-size: 11px; color: grey;">(Pleaes upload picture of your Educational Documents)</span></label><br/>
                                                                                    <div id="dvPreviewedu" class="col-md-12">
                                                                                    </div>
                                                                                    <label style="padding-top: 9px;">Experience Letter : <span style="font-size: 11px; color: grey;">(Pleaes upload your work experience documnets)</span></label><br/>
                                                                                    <div id="dvPreviewexp" class="col-md-12">
                                                                                    </div>
                                                                                    <label style="padding-top: 9px;">Other Documents :<span style="font-size: 11px; color: grey;">(Pleaes upload your extra skills certificates or other documents)</span></label><br/>
                                                                                    <div id="dvPreviewodc" class="col-md-12">
                                                                                    </div>
                                                                                </div>
                                                                                <div style=" margin-top: 0.5%; " class="col-md-6">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                              
                                                                    <div style="text-align: center; margin-bottom: 1%">
                                                                        <a onclick="window.print()" class="text-white btn btn-primary">Print</a>
                                                                        <a class="text-white btn btn-success">Save as PDF</a>
                                                                        <input type="submit"  class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary" name="btnsubmit" value="Next">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="step-52">
                                                        <div class="no-results">
                                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                <span class="swal2-success-line-tip"></span>
                                                                <span class="swal2-success-line-long"></span>
                                                                <div class="swal2-success-ring"></div>
                                                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                            </div>
                                                            <div class="results-subtitle mt-4">Finished!</div>
                                                            <div class="results-title">You Profile has been Successfully Submitted</div>
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
                                                <input type="reset" id="reset-btn2" class="btn-shadow float-left btn btn-link" value="Reset">
                                                <a  id="next-btn2" name="next-btn2" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">NEXT</a>
                                                <a id="prev-btn2" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary" >Previous</a>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>

            </div>
         
<script>
    // function validateEmployeeForm() {

    //     var emp_id_ag = document.getElementById("emp_id_ag");
    //     var emp_first_name = document.getElementById("emp_first_name");
    //     var emp_middle_name = document.getElementById("emp_middle_name");
    //     var emp_last_name = document.getElementById("emp_last_name");
    //     var emp_address = document.getElementById("emp_address");
    //     var emp_city = document.getElementById("emp_city");
    //     var emp_state = document.getElementById("emp_state");
    //     var emp_phone = document.getElementById("emp_phone");
    //     var emp_cell_phone = document.getElementById("emp_cell_phone");
    //     var emp_alt_phone = document.getElementById("emp_alt_phone");
    //     var emp_date_of_birth = document.getElementById("emp_date_of_birth");
    //     var emp_place_of_birth = document.getElementById("emp_place_of_birth");
    //     var emp_nationality = document.getElementById("emp_nationality");
    //     var emp_cnic_no = document.getElementById("emp_cnic_no");
    //     var emp_cnic_expiry = document.getElementById("emp_cnic_expiry");
    //     var emp_email = document.getElementById("emp_email");
    //     var emp_relationship_status = document.getElementById("emp_relationship_status");
    //     var emp_gender = document.getElementById("emp_gender");
    //     var emp_passport_image = document.getElementById("emp_passport_image");
    //     var emp_emergency_contact_person_name = document.getElementById("emp_emergency_contact_person_name");
    //     var emp_emergency_contact_person_phone = document.getElementById("emp_emergency_contact_person_phone");
    //     var emp_emergency_contact_person_relation = document.getElementById("emp_emergency_contact_person_relation");
    //     var emp_emergency_contact_person_name_2 = document.getElementById("emp_emergency_contact_person_name_2");
    //     var emp_emergency_contact_person_phone_2 = document.getElementById("emp_emergency_contact_person_phone_2");
    //     var emp_emergency_contact_person_relation_2 = document.getElementById("emp_emergency_contact_person_relation_2");

    //     var emp_institute_name = document.getElementById("emp_institute_name");
    //     var emp_degree = document.getElementById("emp_degree");
    //     var emp_degree_year = document.getElementById("emp_degree_year");
    //     var emp_degree_status = document.getElementById("emp_degree_status");
    //     var emp_institute_name_2 = document.getElementById("emp_institute_name_2");
    //     var emp_degree_2 = document.getElementById("emp_degree_2");
    //     var emp_degree_year_2 = document.getElementById("emp_degree_year_2");
    //     var emp_degree_status_2 = document.getElementById("emp_degree_status_2");
    //     var emp_institute_name_3 = document.getElementById("emp_institute_name_3");
    //     var emp_degree_3 = document.getElementById("emp_degree_3");
    //     var emp_degree_year_3 = document.getElementById("emp_degree_year_3");
    //     var emp_degree_status_3 = document.getElementById("emp_degree_status_3");

    //     var emp_certification_institute_name = document.getElementById("emp_certification_institute_name");
    //     var emp_level = document.getElementById("emp_level");
    //     var emp_level_year = document.getElementById("emp_level_year");
    //     var emp_certification_status = document.getElementById("emp_certification_status");
    //     var emp_certification_institute_name_2 = document.getElementById("emp_certification_institute_name_2");
    //     var emp_level_2 = document.getElementById("emp_level_2");
    //     var emp_level_year_2 = document.getElementById("emp_level_year_2");
    //     var emp_certification_status_2 = document.getElementById("emp_certification_status_2");
    //     var emp_certification_institute_name_3 = document.getElementById("emp_certification_institute_name_3");
    //     var emp_level_3 = document.getElementById("emp_level_3");
    //     var emp_level_year_3 = document.getElementById("emp_level_year_3");
    //     var emp_certification_status_3 = document.getElementById("emp_certification_status_3");

    //     var emp_experience_company_name = document.getElementById("emp_experience_company_name");
    //     var emp_experience_position = document.getElementById("emp_experience_position");
    //     var emp_experience_year = document.getElementById("emp_experience_year");
    //     var emp_experience_department = document.getElementById("emp_experience_department");
    //     var emp_experience_company_name_2 = document.getElementById("emp_experience_company_name_2");
    //     var emp_experience_position_2 = document.getElementById("emp_experience_position_2");
    //     var emp_experience_year_2 = document.getElementById("emp_experience_year_2");
    //     var emp_experience_department_2 = document.getElementById("emp_experience_department_2");
    //     var emp_experience_company_name_3 = document.getElementById("emp_experience_company_name_3");
    //     var emp_experience_position_3 = document.getElementById("emp_experience_position_3");
    //     var emp_experience_year_3 = document.getElementById("emp_experience_year_3");
    //     var emp_experience_department_3 = document.getElementById("emp_experience_department_3");

    //     var emp_designation = document.getElementById("emp_designation");
    //     var emp_department = document.getElementById("emp_department");
    //     var emp_date_of_joining = document.getElementById("emp_date_of_joining");
    //     var emp_type = document.getElementById("emp_type");
    //     var emp_payroll = document.getElementById("emp_payroll");
    //     var emp_basic_salary = document.getElementById("emp_basic_salary");
    //     var emp_profit_share_percentage = document.getElementById("emp_profit_share_percentage");
    //     var emp_commision_per_unit = document.getElementById("emp_commision_per_unit");

    //     var emp_project = document.getElementById("emp_project");
    //     var emp_region = document.getElementById("emp_region");
    //     var emp_category = document.getElementById("emp_category");
    //     var emp_shift = document.getElementById("emp_shift");
    //     var emp_timing = document.getElementById("emp_timing");
    //     var emp_status = document.getElementById("emp_basic_salary");
    //     var emp_last_working_date = document.getElementById("emp_last_working_date");

    //     var emp_cnic_pic_both_side = document.getElementById("emp_cnic_pic_both_side");
    //     var emp_residential_docs = document.getElementById("emp_residential_docs");
    //     var emp_educational_docs = document.getElementById("emp_educational_docs");
    //     var emp_experience_letter_docs = document.getElementById("emp_experience_letter_docs");
    //     var emp_other_docs = document.getElementById("emp_other_docs")

    //  if (emp_id_ag.value == "" || emp_first_name.value == "" || emp_middle_name.value == "" || emp_last_name.value == "" || emp_address.value == "" || emp_city.value == "" || emp_state.value == "" || emp_phone.value == "" || emp_cell_phone.value == "" || emp_alt_phone.value == "" || emp_date_of_birth.value == "" || emp_place_of_birth.value == "" || emp_nationality.value == "" || emp_cnic_no.value == "" || emp_cnic_expiry.value == "" || emp_email.value == "" || emp_relationship_status.value == "" || emp_relationship_status.value == "" || emp_gender.value == "" || emp_passport_image.value == "" || emp_emergency_contact_person_name.value == "" || emp_emergency_contact_person_phone.value == "" || emp_emergency_contact_person_relation.value == "" || emp_emergency_contact_person_name_2.value == "" || emp_emergency_contact_person_relation_2.value == "" || emp_institute_name.value == "" || emp_degree.value == "" || emp_degree_year.value == "" || emp_degree_status.value == "" || emp_institute_name_2.value == "" || emp_degree_2.value == "" || emp_degree_year_2.value == "" || emp_degree_status_2.value == "" || emp_institute_name_3.value == "" || emp_degree_3.value == "" || emp_degree_year_3.value == "" || emp_degree_status_3.value == "" || emp_certification_institute_name.value == "" || emp_level.value == "" || emp_level_year.value == "" || emp_certification_status.value == "" || emp_certification_institute_name_2.value == "" || emp_level_2.value == "" || emp_level_year_2.value == "" || emp_certification_status_2.value == "" || emp_certification_institute_name_3.value == "" || emp_level_3.value == "" || emp_level_year_3.value == "" || emp_certification_status_3.value == "" || emp_experience_company_name.value == "" || emp_experience_position.value == "" || emp_experience_year.value == "" || emp_experience_department.value == "" || emp_experience_company_name_2.value == "" || emp_experience_position_2.value == "" || emp_experience_year_2.value == "" || emp_experience_department_2.value == "" || emp_experience_company_name_3.value == "" || emp_experience_position_3.value == "" || emp_experience_year_3.value == "" || emp_experience_department_3.value == "" || emp_designation.value == "" || emp_department.value == "" || emp_date_of_joining.value == "" || emp_type.value == "" || emp_payroll.value == "" || emp_basic_salary.value == "" || emp_profit_share_percentage.value == "" || emp_commision_per_unit.value == "" || emp_project.value == "" || emp_region.value == "" || emp_category.value == "" || emp_shift.value == "" || emp_timing.value == "" || emp_status.value == "" || emp_last_working_date.value == "" || emp_cnic_pic_both_side.value == "" || emp_residential_docs.value == "" || emp_educational_docs.value == "" || emp_experience_letter_docs.value == "" || emp_other_docs.value == "" ) {
    //   alert("Please Fill Out All Fields");
    //           return false;

    //      } else {
    //          return true;
    //       }
    // }

</script>
<script>
$("#emp_id_ag").keyup(function() {

  $('label[for="empid"] span').text($(this).val());
  var empid = this.value;
if(empid == "")
  $("#plsinsertid").show();
  else{
    $("#plsinsertid").hide();

  }
});
$("#emp_first_name").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertfname").show();
else{
  $("#plsinsertfname").hide();

}
});
$("#emp_middle_name").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertmname").show();
else{
  $("#plsinsertmname").hide();

}
});
$("#emp_last_name").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertlname").show();
else{
  $("#plsinsertlname").hide();

}
});
$("#emp_phone").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertpno").show();
else{
  $("#plsinsertpno").hide();

}
});

$("#emp_address").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertadd").show();
else{
  $("#plsinsertadd").hide();

}
});
$("#emp_city").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertcity").show();
else{
  $("#plsinsertcity").hide();

}
});
$("#emp_state").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertstate").show();
else{
  $("#plsinsertstate").hide();

}
});
//
$("#emp_date_of_birth").change(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertdob").show();
else{
  $("#plsinsertdob").hide();

}
});
$("#emp_place_of_birth").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertpob").show();
else{
  $("#plsinsertpob").hide();

}

});
$("#emp_nationality").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertnationality").show();
else{
  $("#plsinsertnationality").hide();

}
});
$("#emp_cnic_no").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertcnic").show();
else{
  $("#plsinsertcnic").hide();

}
});
$("#emp_cnic_expiry").change(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertcnicexpiry").show();
else{
  $("#plsinsertcnicexpiry").hide();

}
});
$("#emp_email").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertemail").show();
else{
  $("#plsinsertemail").hide();

}
});
$("#emp_relationship_status").change(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertrstatus").show();
else{
  $("#plsinsertrstatus").hide();

}
});
$("#emp_gender").change(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertgender").show();
else{
  $("#plsinsertgender").hide();

}
});
$("#emp_emergency_contact_person_name").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertename").show();
else{
  $("#plsinsertename").hide();

}
});
$("#emp_emergency_contact_person_phone").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertephone").show();
else{
  $("#plsinsertephone").hide();

}
});
$("#emp_emergency_contact_person_relation").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinserterelation").show();
else{
  $("#plsinserterelation").hide();

}
});
$("#emp_institute_name").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertiname").show();
else{
  $("#plsinsertiname").hide();

}
});
$("#emp_degree").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertdegree").show();
else{
  $("#plsinsertdegree").hide();

}
});
$("#emp_degree_year").keyup(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertdyear").show();
else{
  $("#plsinsertdyear").hide();

}
});
$("#emp_degree_status").change(function() {

var empid = this.value;
if(empid == "")
$("#plsinsertdstatus").show();
else{
  $("#plsinsertdstatus").hide();

}
});
$("#emp_first_name").keyup(function() {
  $('label[for="fname"] span').text($(this).val());
});
$("#emp_last_name").keyup(function() {
  $('label[for="lname"] span').text($(this).val());
});
$("#emp_designation").keyup(function() {
  $('label[for="designation"] span').text($(this).val());
});
$("#emp_address").keyup(function() {
  $('label[for="add"] span').text($(this).val());
});

$("#emp_city").keyup(function() {
  $('label[for="city"] span').text($(this).val());
});
$("#emp_phone").keyup(function() {
  $('label[for="phone"] span').text($(this).val());
});

$("#emp_date_of_birth").change(function() {
  $('label[for="dob"] span').text($(this).val());
});
$("#emp_place_of_birth").keyup(function() {
  $('label[for="pob"] span').text($(this).val());
});
$("#emp_nationality").keyup(function() {
  $('label[for="nationality"] span').text($(this).val());
});
$("#emp_cnic_no").keyup(function() {
  $('label[for="nic"] span').text($(this).val());
});
$("#emp_cnic_expiry").change(function() {
  $('label[for="nicexpiry"] span').text($(this).val());
});
$("#emp_email").keyup(function() {
  $('label[for="email"] span').text($(this).val());
});
$("#emp_relationship_status").change(function() {
  $('label[for="relationshipstatus"] span').text($(this).val());
});
$("#emp_gender").keyup(function() {
  $('label[for="gender"] span').text($(this).val());
});

$("#emp_institute_name").keyup(function() {
  $('label[for="iname"] span').text($(this).val());
});
$("#emp_degree").keyup(function() {
  $('label[for="idegree"] span').text($(this).val());
});
$("#emp_degree_year").keyup(function() {
  $('label[for="idegreeyear"] span').text($(this).val());
});
$("#emp_degree_status").change(function() {
  $('label[for="idegreestatus"] span').text($(this).val());
});

$("#emp_institute_name_2").keyup(function() {
  $('label[for="iname1"] span').text($(this).val());
});
$("#emp_degree_2").keyup(function() {
  $('label[for="idegree1"] span').text($(this).val());
});
$("#emp_degree_year_2").keyup(function() {
  $('label[for="idegreeyear1"] span').text($(this).val());
});
$("#emp_degree_status_2").change(function() {
  $('label[for="idegreestatus1"] span').text($(this).val());
});
$("#emp_experience_company_name").keyup(function() {
  $('label[for="cn"] span').text($(this).val());
});
$("#emp_experience_position").keyup(function() {
  $('label[for="position"] span').text($(this).val());
});
$("#emp_experience_year").keyup(function() {
  $('label[for="year"] span').text($(this).val());
});
$("#emp_experience_department").keyup(function() {
  $('label[for="dept"] span').text($(this).val());
});
$("#emp_experience_company_name_2").keyup(function() {
  $('label[for="cn1"] span').text($(this).val());
});
$("#emp_experience_position_2").keyup(function() {
  $('label[for="position1"] span').text($(this).val());
});
$("#emp_experience_year_2").keyup(function() {
  $('label[for="year1"] span').text($(this).val());
});
$("#emp_experience_department_2").keyup(function() {
  $('label[for="dept1"] span').text($(this).val());
});
$("#emp_experience_department_2").keyup(function() {
  $('label[for="dept1"] span').text($(this).val());
});
$("#emp_department").change(function() {
  $('label[for="emp_dept"] span').text($(this).val());
});
$("#emp_type").change(function() {
  $('label[for="emp_type"] span').text($(this).val());
});
$("#emp_payroll").change(function() {
  $('label[for="emp_payroll"] span').text($(this).val());
});
$("#emp_basic_salary ").keyup(function() {
  $('label[for="emp_salary"] span').text($(this).val());
});
$("#emp_profit_share_percentage").keyup(function() {
  $('label[for="emp_profit%"] span').text($(this).val());
});
$("#emp_commision_per_unit").keyup(function() {
  $('label[for="emp_commission"] span').text($(this).val());
});
$("#emp_project").change(function() {
  $('label[for="project"] span').text($(this).val());
});
$("#emp_region").keyup(function() {
  $('label[for="region"] span').text($(this).val());
});
$("#emp_category").change(function() {
  $('label[for="ec"] span').text($(this).val());
});
$("#emp_shift").change(function() {
  $('label[for="shift"] span').text($(this).val());
});
$("#emp_timing").change(function() {
  $('label[for="timing"] span').text($(this).val());
});
$("#emp_status").change(function() {
  $('label[for="status"] span').text($(this).val());
});
function sync()
{
  var n1 = document.getElementById('emp_id_ag');
  
  var n1_2 = document.getElementById('emp_first_name');
  n1_2.value = n1.value;
}
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/masking-input.js" data-autoinit="true"></script>

<script language="javascript" type="text/javascript">
$(function () {
    $("#emp_cnic_pic_both_side").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = $("#dvPreview");
            dvPreview.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("style", "height:90px;width: 80px");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    dvPreview.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });
});
</script> 
<script language="javascript" type="text/javascript">
$(function () {
    $("#emp_res_docs").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreviewres = $("#dvPreviewres");
            dvPreviewres.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("style", "height:90px;width: 80px");
                        img.attr("src", e.target.result);
                        dvPreviewres.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    dvPreviewres.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });
});
</script>
<script language="javascript" type="text/javascript">
$(function () {
    $("#emp_edu_docs").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreviewedu = $("#dvPreviewedu");
            dvPreviewedu.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("style", "height:90px;width: 80px");
                        img.attr("src", e.target.result);
                        dvPreviewedu.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    dvPreviewedu.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });
});
</script>
<script language="javascript" type="text/javascript">
$(function () {
    $("#emp_exp_docs").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreviewexp = $("#dvPreviewexp");
            dvPreviewexp.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("style", "height:90px;width: 80px");
                        img.attr("src", e.target.result);
                        dvPreviewexp.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    dvPreviewexp.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });
});
</script>
<script language="javascript" type="text/javascript">
$(function () {
    $("#emp_other").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreviewodc = $("#dvPreviewodc");
            dvPreviewodc.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("style", "height:90px;width: 80px");
                        img.attr("src", e.target.result);
                        dvPreviewodc.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    dvPreviewodc.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });
});
</script>
<script>
$(document).ready(function(){
    $("#proexp").hide();

    $('input[type="radio"]').click(function(){
    	var demovalue = $(this).val(); 
        if(demovalue == 0)
        {
            $("#proexp").hide();

        }
        if(demovalue == 1)
        {
            $("#proexp").show();

        }
    });
});
</script>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('emp_passport_image_print');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
            <?php
include("bottom.php");
?>
