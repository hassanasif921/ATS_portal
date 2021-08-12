<?php
include("top.php");
include("connection_db.php");
$id=$_GET['empid'];

$queryemp=mysqli_query($connection,"select * from ats_employee where ats_employee_id='".$id."'");
$rowemp=mysqli_fetch_assoc($queryemp);
$queryupdateregion=mysqli_query($connection,"select * from regions");
$next=0;
if (isset($_POST["btnsubmit"])) {
    
    //   if(isset($_POST["emp_id_ag"])){
    //     echo '<script language="javascript">';
    //     echo 'alert("Please Upload Employee Id")';
    //     echo '</script>';
    //     $emp_id_ag = $_POST["emp_id_ag"];
    //   }
    //   else{
        
    //   }
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
   // $emp_degree_status_3 = $_POST["emp_degree_status_3"];
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
    $emp_region = $_POST["emp_region"];

    $emp_region2 = $_POST["emp_region2"];

    $emp_region3 = $_POST["emp_region3"];

    $emp_region4 = $_POST["emp_region4"];

    $emp_region5 = $_POST["emp_region5"];
    $emp_profit_share_percentage = $_POST["emp_profit_share_percentage"];
    $emp_commision_per_unit = $_POST["emp_commision_per_unit"];
    $emp_category = $_POST["emp_category"];
$emp_shift = $_POST["emp_shift"];
    $emp_timing = $_POST["emp_timing"];
    $emp_status = $_POST["emp_status"];
    $emp_last_working_date = $_POST["emp_last_working_date"];
    $emp_project = $_POST["emp_project"];
    $totalfiles = count($_FILES['file']['name']);
    $totalfilesres = count($_FILES['fileres']['name']);
    $totalfilesedu = count($_FILES['fileedu']['name']);
    $totalfilesexp = count($_FILES['fileexp']['name']);
    $totalfilesother = count($_FILES['fileother']['name']);
    $emp_username=$_POST['emp_username'];
$emp_password=$_POST['emp_password'];
if($totalfiles>0){
    $insert1del = "delete FROM employeecnic WHERE image_type='NIC-Pic' AND ats_emp_id=".$id;
              
    $iquerydel = mysqli_query($connection,$insert1del);
    for($i=0;$i<$totalfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
     
       // Upload files and store in database
       if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'upload/'.$filename)){
               // Image db insert sql
              $insert1 = "INSERT INTO `employeecnic`(`image_type`, `ats_emp_id`, `imagename`) VALUES ('NIC-Pic','$id','$filename')";
              
              $iquery = mysqli_query($connection,$insert1);
     
     }
              
     
              
           else{
               echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
           }
     
        }
}
        //residential documents pics uploding
        if($totalfilesres>0){
            $insert2del = "delete FROM employeecnic WHERE image_type='Res-Pic' AND ats_emp_id=".$id;
                      
            $rquerydel = mysqli_query($connection,$insert2del);
        for($f=0;$f<$totalfilesres;$f++){
         $filename1 = $_FILES['fileres']['name'][$f];
      
        // Upload files and store in database
        if(move_uploaded_file($_FILES["fileres"]["tmp_name"][$f],'upload/'.$filename1)){
                // Image db insert sql
               $insertres = "INSERT INTO `employeecnic`(`image_type`, `ats_emp_id`, `imagename`) VALUES ('Res-Pic','$id','$filename1')";
               
               $iqueryres = mysqli_query($connection,$insertres);      
            }else{
                echo 'Error in uploading file - '.$_FILES['fileres']['name'][$f].'<br/>';
            }
      
         }
        }
         //educational docs
         if($totalfilesedu>0){
            $insert3del = "delete FROM employeecnic WHERE image_type='Edu-Pic' AND ats_emp_id=".$id;
                      
            $equerydel = mysqli_query($connection,$insert3del);
         for($e=0;$e<$totalfilesedu;$e++){
             $filename2 = $_FILES['fileedu']['name'][$e];
          
            // Upload files and store in database
            if(move_uploaded_file($_FILES["fileedu"]["tmp_name"][$e],'upload/'.$filename2)){
                    // Image db insert sql
                   $insertedu = "INSERT INTO `employeecnic`(`image_type`, `ats_emp_id`, `imagename`) VALUES ('Edu-Pic','$id','$filename2')";
                   
                   $iqueryedu = mysqli_query($connection,$insertedu);      
                }else{
                    echo 'Error in uploading file - '.$_FILES['fileedu']['name'][$e].'<br/>';
                }
          
             }
             
            }
            if($totalfilesexp>0){
                $insert4del = "delete FROM employeecnic WHERE image_type='Exp-Pic' AND ats_emp_id=".$id;
                          
                $exquerydel = mysqli_query($connection,$insert4del);
             //experience documents
             for($ex=0;$ex<$totalfilesexp;$ex++){
                 $filename3 = $_FILES['fileexp']['name'][$ex];
              
                // Upload files and store in database
                if(move_uploaded_file($_FILES["fileexp"]["tmp_name"][$ex],'upload/'.$filename3)){
                        // Image db insert sql
                       $insertexp = "INSERT INTO `employeecnic`(`image_type`, `ats_emp_id`, `imagename`) VALUES ('Exp-Pic','$id','$filename3')";
                       
                       $iqueryexp = mysqli_query($connection,$insertexp);      
                    }else{
                        echo 'Error in uploading file - '.$_FILES['fileexp']['name'][$ex].'<br/>';
                    }
              
                 }
                }
                if($totalfilesother>0){
                    $insert5del = "delete FROM employeecnic WHERE image_type='Other-Pic' AND ats_emp_id=".$id;
                              
                    $othquerydel = mysqli_query($connection,$insert4del);
                 for($od=0;$od<$totalfilesexp;$od++){
                     $filename4 = $_FILES['fileother']['name'][$od];
                  
                    // Upload files and store in database
                    if(move_uploaded_file($_FILES["fileother"]["tmp_name"][$od],'upload/'.$filename4)){
                            // Image db insert sql
                           $insertod = "INSERT INTO `employeecnic`(`image_type`, `ats_emp_id`, `imagename`) VALUES ('Other-Pic','$id','$filename4')";
                           
                           $iqueryod = mysqli_query($connection,$insertod);      
                        }else{
                            echo 'Error in uploading file - '.$_FILES['fileother']['name'][$od].'<br/>';
                        }
                  
                     }
                    } 
if(is_uploaded_file($_FILES['emp_passport_image']['tmp_name'])){
    $images1=$_FILES['emp_passport_image']['tmp_name'];
    $emp_passport_image=addslashes(file_get_contents($images1));

    $insert = "UPDATE ats_employee SET ats_employee_firstName='$emp_first_name',ats_employee_middleName='$emp_middle_name',ats_employee_lastName='$emp_last_name',
    ats_employee_address='$emp_address',ats_employee_city='$emp_city',ats_employee_state='$emp_state',ats_employee_phoneNumber='$emp_phone',
    ats_employee_cellPhoneNumber='$emp_cell_phone',ats_employee_alternateNumber='$emp_alt_phone',ats_employee_dob='$emp_date_of_birth',
    ats_employee_pob='$emp_place_of_birth',ats_employee_nationality='$emp_nationality',ats_employee_cnicNo='$emp_cnic_no'
    ,ats_employee_cnicExpiry='$emp_cnic_expiry',ats_employee_email='$emp_email',ats_employee_relation='$emp_relationship_status'
    ,ats_employee_image='$emp_passport_image',ats_employee_gender='$emp_gender',ats_employee_image='$emp_passport_image',ats_employee_emergencyContact1_name='$emp_emergency_contact_person_name',
    ats_employee_emergencyContact1_phone='$emp_emergency_contact_person_phone',ats_employee_emergencyContact1_relation='$emp_emergency_contact_person_relation'
    ,ats_employee_emergencyContact2_name='$emp_emergency_contact_person_name_2',ats_employee_emergencyContact2_phone='$emp_emergency_contact_person_phone_2'
    ,ats_employee_emergencyContact2_relation='$emp_emergency_contact_person_relation_2'
    ,ats_employee_education1_name='$emp_institute_name',ats_employee_education1_degree='$emp_degree',ats_employee_education1_year='$emp_degree_year',
    ats_employee_education1_status='$emp_degree_status',ats_employee_education2_name='$emp_institute_name_2',ats_employee_education2_degree='$emp_degree_2'
    ,ats_employee_education2_year='$emp_degree_year_2',ats_employee_education2_status='$emp_degree_status_2',ats_employee_education3_name='$emp_institute_name_2'
    ,ats_employee_education3_degree='$emp_degree_2',ats_employee_education3_year='$emp_degree_year_3',ats_employee_education3_status=''
    ,ats_employee_Institute1_name='$emp_certification_institute_name',ats_employee_Institute1_level='$emp_level',ats_employee_Institute1_year='$emp_level_year'
    ,ats_employee_Institute1_status='$emp_certification_status',ats_employee_Institute2_name='$emp_certification_institute_name_2',ats_employee_Institute2_level='$emp_level_year_2'
    ,ats_employee_Institute2_year='$emp_level_year_2',ats_employee_Institute2_status='$emp_certification_status_2'
    ,ats_employee_Institute3_name='$emp_certification_institute_name_3',ats_employee_Institute3_level='$emp_level_year_2',ats_employee_Institute3_year='$emp_level_year_2',
    ats_employee_Institute3_status='$emp_certification_status_3',ats_employee_experience1_company='$emp_experience_company_name'
    ,ats_employee_experience1_position='$emp_experience_position',ats_employee_experience1_year='$emp_experience_year'
    ,ats_employee_experience1_department='$emp_experience_department',ats_employee_experience2_company='$emp_experience_company_name_2',
    ats_employee_experience2_position='$emp_experience_position',ats_employee_experience2_year='$emp_experience_year',
    ats_employee_experience2_department='$emp_experience_department_2',ats_employee_experience3_company='$emp_experience_company_name_3'
    ,ats_employee_experience3_position='$emp_experience_position_3',ats_employee_experience3_year='$emp_experience_year_3',
    ats_employee_experience3_department='$emp_experience_department_3',ats_employee_designation='$emp_designation'
    ,ats_employee_department='$emp_department',ats_employee_dateOfJoin='$emp_date_of_joining',ats_employee_type='$emp_type'
    ,ats_employee_payroll='$emp_payroll',ats_employee_basicSalary='$emp_basic_salary'
    ,ats_employee_profit='$emp_profit_share_percentage',ats_employee_comission='$emp_commision_per_unit',ats_employee_project='$emp_project'
    ,ats_employee_region='$emp_region'
    ,ats_employee_category='$emp_category',ats_employee_shift='$emp_shift',ats_employee_timing='$emp_timing'
    ,ats_employee_status='$emp_status',ats_employee_lastWorkingDate='$emp_last_working_date',region2='$emp_region2',region3='$emp_region3',region4='$emp_region4',region5='$emp_region5',username='$emp_username',password='$emp_password' WHERE ats_employee_id='".$id."'";
   $query = mysqli_query($connection,$insert);
          
                 if ($query)
                 {
                     echo '<script type="text/javascript"> alert("Employee image Register Successfully")</script>';
                     echo '<script language="javascript">window.location.href ="emp_search.php"</script>';

                 }
                 else
                 {
                     $err= mysqli_error($connection);
                     echo $err;
                 }

                }
                else {
                    $insert = "UPDATE ats_employee SET ats_employee_firstName='$emp_first_name',ats_employee_middleName='$emp_middle_name',ats_employee_lastName='$emp_last_name',
                    ats_employee_address='$emp_address',ats_employee_city='$emp_city',ats_employee_state='$emp_state',ats_employee_phoneNumber='$emp_phone',
                    ats_employee_cellPhoneNumber='$emp_cell_phone',ats_employee_alternateNumber='$emp_alt_phone',ats_employee_dob='$emp_date_of_birth',
                    ats_employee_pob='$emp_place_of_birth',ats_employee_nationality='$emp_nationality',ats_employee_cnicNo='$emp_cnic_no'
                    ,ats_employee_cnicExpiry='$emp_cnic_expiry',ats_employee_email='$emp_email',ats_employee_relation='$emp_relationship_status'
                    ,ats_employee_gender='$emp_gender',ats_employee_image='$emp_passport_image',ats_employee_emergencyContact1_name='$emp_emergency_contact_person_name',
                    ats_employee_emergencyContact1_phone='$emp_emergency_contact_person_phone',ats_employee_emergencyContact1_relation='$emp_emergency_contact_person_relation'
                    ,ats_employee_emergencyContact2_name='$emp_emergency_contact_person_name_2',ats_employee_emergencyContact2_phone='$emp_emergency_contact_person_phone_2'
                    ,ats_employee_emergencyContact2_relation='$emp_emergency_contact_person_relation_2'
                    ,ats_employee_education1_name='$emp_institute_name',ats_employee_education1_degree='$emp_degree',ats_employee_education1_year='$emp_degree_year',
                    ats_employee_education1_status='$emp_degree_status',ats_employee_education2_name='$emp_institute_name_2',ats_employee_education2_degree='$emp_degree_2'
                    ,ats_employee_education2_year='$emp_degree_year_2',ats_employee_education2_status='$emp_degree_status_2',ats_employee_education3_name='$emp_institute_name_2'
                    ,ats_employee_education3_degree='$emp_degree_2',ats_employee_education3_year='$emp_degree_year_3',ats_employee_education3_status=''
                    ,ats_employee_Institute1_name='$emp_certification_institute_name',ats_employee_Institute1_level='$emp_level',ats_employee_Institute1_year='$emp_level_year'
                    ,ats_employee_Institute1_status='$emp_certification_status',ats_employee_Institute2_name='$emp_certification_institute_name_2',ats_employee_Institute2_level='$emp_level_year_2'
                    ,ats_employee_Institute2_year='$emp_level_year_2',ats_employee_Institute2_status='$emp_certification_status_2'
                    ,ats_employee_Institute3_name='$emp_certification_institute_name_3',ats_employee_Institute3_level='$emp_level_year_2',ats_employee_Institute3_year='$emp_level_year_2',
                    ats_employee_Institute3_status='$emp_certification_status_3',ats_employee_experience1_company='$emp_experience_company_name'
                    ,ats_employee_experience1_position='$emp_experience_position',ats_employee_experience1_year='$emp_experience_year'
                    ,ats_employee_experience1_department='$emp_experience_department',ats_employee_experience2_company='$emp_experience_company_name_2',
                    ats_employee_experience2_position='$emp_experience_position',ats_employee_experience2_year='$emp_experience_year',
                    ats_employee_experience2_department='$emp_experience_department_2',ats_employee_experience3_company='$emp_experience_company_name_3'
                    ,ats_employee_experience3_position='$emp_experience_position_3',ats_employee_experience3_year='$emp_experience_year_3',
                    ats_employee_experience3_department='$emp_experience_department_3',ats_employee_designation='$emp_designation'
                    ,ats_employee_department='$emp_department',ats_employee_dateOfJoin='$emp_date_of_joining',ats_employee_type='$emp_type'
                    ,ats_employee_payroll='$emp_payroll',ats_employee_basicSalary='$emp_basic_salary'
                    ,ats_employee_profit='$emp_profit_share_percentage',ats_employee_comission='$emp_commision_per_unit',ats_employee_project='$emp_project'
                    ,ats_employee_region='$emp_region'
                    ,ats_employee_category='$emp_category',ats_employee_shift='$emp_shift',ats_employee_timing='$emp_timing'
                    ,ats_employee_status='$emp_status',ats_employee_lastWorkingDate='$emp_last_working_date',region2='$emp_region2',region3='$emp_region3',region4='$emp_region4',region5='$emp_region5' WHERE ats_employee_id='".$id."'";
                   $query = mysqli_query($connection,$insert);
                   if ($query)
                   {
                       echo '<script type="text/javascript"> alert("Employee  Register Successfully")</script>';
                      echo '<script language="javascript">window.location.href ="employee-records.php"</script>';
  
                   }
                   else
                   {
                       $err= mysqli_error($connection);
                       echo $err;
                   }
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
                                            <form method="post"  enctype="multipart/form-data">
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

                                                                                <input name="emp_id_ag" id="emp_id_ag" type="text" class="form-control" required value="<?php echo $rowemp['ats_employee_id'] ?>">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label><span>first name</span></label>
                                                                    <input name="emp_first_name" id="emp_first_name" placeholder="First Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_firstName'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Middle Name</label>
                                                                    <input name="emp_middle_name" id="emp_middle_name" placeholder="Middle Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_middleName'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Last Name</label>
                                                                    <input name="emp_last_name" id="emp_last_name" placeholder="Last Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_lastName'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label>Address </label>
                                                                    <input name="emp_address" id="emp_address" placeholder="Apartment, Studio, or Floor" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_address'] ?>"> 
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>City</label>
                                                                    <input name="emp_city" id="emp_city" placeholder="City Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_city'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>State</label>
                                                                    <input name="emp_state" id="emp_state" placeholder="State Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_state'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Phone Number</label>
                                                                    <input name="emp_phone" id="emp_phone" placeholder="0312-3456789" type="number" class="form-control" value="<?php echo $rowemp['ats_employee_phoneNumber'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Cell Phone Number</label>
                                                                    <input name="emp_cell_phone" id="emp_cell_phone" placeholder="0312-3456789" type="number" class="form-control" value="<?php echo $rowemp['ats_employee_cellPhoneNumber'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Alternate Number</label>
                                                                    <input name="emp_alt_phone" id="emp_alt_phone" placeholder="0312-3456789" type="number" class="form-control" value="<?php echo $rowemp['ats_employee_alternateNumber'] ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label style="font-weight: bold;" for="exampleEmail" class="text-dark">Date Of Birth</label>
                                                                    <input type="text"  class="form-control input-mask-trigger" name="emp_date_of_birth" id="emp_date_of_birth" value="<?php echo $rowemp['ats_employee_dob'] ?>"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Place of Birth</label>
                                                                    <input name="emp_place_of_birth" id="emp_place_of_birth" placeholder="Enter Place of Birth" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_pob'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>Nationality</label>
                                                                    <input name="emp_nationality" placeholder="Enter Nationality" id="emp_nationality" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_nationality'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label>CNIC No.</label>
                                                                    <input id="emp_cnic_no" name="emp_cnic_no" placeholder="XXXXX-XXXXXXX-X" class="form-control masked" 
                                                                data-charset="XXXXX-XXXXXXX-X"  type="text" value="<?php echo $rowemp['ats_employee_cnicNo'] ?>"/>                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label style="font-weight: bold;" class="text-dark">CNIC Expiry</label>
                                                                    <input type="text" class="form-control mask-trigger"  name="emp_cnic_expiry" id="emp_cnic_expiry" value="<?php echo $rowemp['ats_employee_cnicExpiry'] ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label>Email</label>
                                                                    <input name="emp_email" id="emp_email" type="email" placeholder="someone@abc.com" class="form-control" value="<?php echo $rowemp['ats_employee_email'] ?>" onkeyup="sync()">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label>Relationship Status</label>
                                                                                <?php 

                                                                                    if($rowemp['ats_employee_relation']=="Single"){
                                                                                ?>
                                                                                  <select name="emp_relationship_status" id="emp_relationship_status" class="form-control" >

                                                                                    <option value="Single" selected>Single</option>
                                                                                    <option value="Married">Married</option>
                                                                                    <option value="Widowed">Widowed</option>
                                                                                    <option value="Separated">Separated</option>
                                                                                    <option value="Divorced">Divorced </option>
                                                                                </select>
                                                                                <?php 
                                                                                    }
                                                                                ?>
                                                                                <?php 

                                                                                    if($rowemp['ats_employee_relation']=="Married"){
                                                                                    ?>
                                                                                    <select name="emp_relationship_status" id="emp_relationship_status" class="form-control" >

                                                                                    <option value="Single">Single</option>
                                                                                    <option value="Married" selected>Married</option>
                                                                                    <option value="Widowed">Widowed</option>
                                                                                    <option value="Separated">Separated</option>
                                                                                    <option value="Divorced">Divorced </option>
                                                                                    </select>
                                                                                    <?php 
                                                                                    }
                                                                                    ?>
                                                                                     <?php 

                                                                                        if($rowemp['ats_employee_relation']=="Widowed"){
                                                                                        ?>
                                                                                        <select name="emp_relationship_status" id="emp_relationship_status" class="form-control" >

                                                                                        <option value="Single">Single</option>
                                                                                        <option value="Married" >Married</option>
                                                                                        <option value="Widowed" selected>Widowed</option>
                                                                                        <option value="Separated">Separated</option>
                                                                                        <option value="Divorced">Divorced </option>
                                                                                        </select>
                                                                                        <?php 
                                                                                        }
                                                                                        ?>
                                                                                        <?php 

                                                                                        if($rowemp['ats_employee_relation']=="Separated"){
                                                                                        ?>
                                                                                        <select name="emp_relationship_status" id="emp_relationship_status" class="form-control" >

                                                                                        <option value="Single">Single</option>
                                                                                        <option value="Married" >Married</option>
                                                                                        <option value="Widowed" >Widowed</option>
                                                                                        <option value="Separated" selected>Separated</option>
                                                                                        <option value="Divorced">Divorced </option>
                                                                                        </select>
                                                                                        <?php 
                                                                                        }
                                                                                        ?>
                                                                                        <?php 

                                                                                        if($rowemp['ats_employee_relation']=="Divorced"){
                                                                                        ?>
                                                                                        <select name="emp_relationship_status" id="emp_relationship_status" class="form-control" >

                                                                                        <option value="Single">Single</option>
                                                                                        <option value="Married" >Married</option>
                                                                                        <option value="Widowed" >Widowed</option>
                                                                                        <option value="Separated" >Separated</option>
                                                                                        <option value="Divorced" selected>Divorced </option>
                                                                                        </select>
                                                                                        <?php 
                                                                                        }
                                                                                        ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label>Gender</label>
                                                                    <?php 

                                                                    if($rowemp['ats_employee_gender']=="Male"){
                                                                    ?>
                                                                    <select name="emp_gender" id="emp_gender" class="form-control">
                                                                        <option value="Male" selected>Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                    <?php 
                                                                    }
                                                                    else
                                                                    {
                                                                    ?>
                                                                    <select name="emp_gender" id="emp_gender" class="form-control">
                                                                        <option value="Male" >Male</option>
                                                                        <option value="Female" selected>Female</option>
                                                                    </select>
                                                                    <?php 
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div  class="position-relative form-group">
                                                                    <label>Username <span style="font-size: 11px; color: grey;"></span></label>
                                                                    <input name="emp_username" id="emp_username" value="<?php echo $rowemp['username']?>" type="text" required  class="form-control">
                                                                </div>
                                                            </div>
                                                             <div class="col-md-6">
                                                                <div  class="position-relative form-group">
                                                                    <label>Password <span style="font-size: 11px; color: grey;"></span></label>
                                                                    <input name="emp_password" id="emp_password" value="<?php echo $rowemp['password']?>" type="text" required  class="form-control">
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="col-md-4">
                                                                <div  class="position-relative form-group">
                                                                    <label>Photo<span style="color:red">*</span><span style="font-size: 11px; color: grey;">(Please Upload Passport Size Picture)</span></label>
                                                                    <input name="emp_passport_image" id="emp_passport_image" type="file" onchange="loadFile(event)" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label>CNIC<span style="color:red">*</span> <span style="font-size: 11px; color: grey;">(Please Upload CNIC Picture Front and Back side)</span></label> <br/>
                                                                    <input  multiple="multiple" name="file[]" id="emp_cnic_pic_both_side" type="file" >
                                                                    <br/>
                                                                    <p id="clear-btn">Delete File</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label>Residential Docs <span style="color:red">*</span><span style="font-size: 11px; color: grey;">(Please Upload Picture of Utility Bills)</span></label>
                                                                    <input  multiple="multiple" name="fileres[]" id="emp_res_docs" type="file" >
                                                                    <br/>
                                                                    <p id="clear-btn2">Delete File</p>
                                                                </div>
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
                                                                <input name="emp_emergency_contact_person_name" id="emp_emergency_contact_person_name" placeholder="Contact Person Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_emergencyContact1_name'] ?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label class="text-dark">Phone No.</label>
                                                                    <input name="emp_emergency_contact_person_phone" id="emp_emergency_contact_person_phone" placeholder="Contact Person Phone No." type="text" class="form-control" value="<?php echo $rowemp['ats_employee_emergencyContact1_phone'] ?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label >Relation</label>
                                                                    <input name="emp_emergency_contact_person_relation" id="emp_emergency_contact_person_relation" placeholder="Contact Person Relation" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_emergencyContact1_relation'] ?>">
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
                                                                                        <input name="emp_emergency_contact_person_name_2" id="emp_emergency_contact_person_name_2" placeholder="Contact Person Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_emergencyContact2_name'] ?>">
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="position-relative form-group">
                                                                                            <label class="text-dark">Phone No.</label>
                                                                                            <input name="emp_emergency_contact_person_phone_2" id="emp_emergency_contact_person_phone_2" placeholder="Contact Person Phone No." type="text" class="form-control"  value="<?php echo $rowemp['ats_employee_emergencyContact2_phone'] ?>"/>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="position-relative form-group">
                                                                                            <label >Relation</label>
                                                                                            <input name="emp_emergency_contact_person_relation_2" id="emp_emergency_contact_person_relation_2" placeholder="Contact Person Relation" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_emergencyContact2_relation'] ?>">
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
                                                                                    <input name="emp_institute_name" id="emp_institute_name" type="text" placeholder="Enter Institue Name" class="form-control" value="<?php echo $rowemp['ats_employee_education1_name'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Degree</label>
                                                                                    <input name="emp_degree" id="emp_degree"  placeholder="Enter Degree Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_education1_degree'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_degree_year" id="emp_degree_year"  placeholder="Enter Degree Year" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_education1_year'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Status</label>
                                                                                    <select name="emp_degree_status" id="emp_degree_status" class="form-control" value="<?php   ?>">
                                                                                        <option value="Cleared" <?php if($rowemp['ats_employee_education1_status']=="Cleared") echo 'selected="selected"'; ?>>Cleared</option>
                                                                                        <option value="Inprogress" <?php if($rowemp['ats_employee_education1_status']=="Inprogress") echo 'selected="selected"'; ?>>Inprogress</option>
                                                                                        <option value="Dropout" <?php if($rowemp['ats_employee_education1_status']=="Dropout") echo 'selected="selected"'; ?>>Dropout</option>
                                                                                        <option value="Awaiting-for-Result" <?php if($rowemp['ats_employee_education1_status']=="Awaiting-for-Result") echo 'selected="selected"'; ?>>Awaiting for Result</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Intitute Name</label>
                                                                                    <input name="emp_institute_name_2" id="emp_institute_name_2" type="text" placeholder="Enter Institue Name" class="form-control" value="<?php echo $rowemp['ats_employee_education2_name'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Degree</label>
                                                                                    <input name="emp_degree_2" id="emp_degree_2"  placeholder="Enter Degree Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_education2_degree'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_degree_year_2" id="emp_degree_year_2"  placeholder="Enter Degree Year" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_education2_year'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Status</label>
                                                                                    <select name="emp_degree_status_2" id="emp_degree_status_2" class="form-control">
                                                                                    <option value="Cleared" <?php if($rowemp['ats_employee_education2_status']=="Cleared") echo 'selected="selected"'; ?>>Cleared</option>
                                                                                        <option value="Inprogress" <?php if($rowemp['ats_employee_education2_status']=="Inprogress") echo 'selected="selected"'; ?>>Inprogress</option>
                                                                                        <option value="Dropout" <?php if($rowemp['ats_employee_education2_status']=="Dropout") echo 'selected="selected"'; ?>>Dropout</option>
                                                                                        <option value="Awaiting-for-Result" <?php if($rowemp['ats_employee_education2_status']=="Awaiting-for-Result") echo 'selected="selected"'; ?>>Awaiting for Result</option>
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
                                                                                                        <input name="emp_institute_name_3" id="emp_institute_name_3" type="text" placeholder="Enter Institue Name" class="form-control" value="<?php echo $rowemp['ats_employee_education3_name'] ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Degree</label>
                                                                                                        <input name="emp_degree_3" id="emp_degree_3"  placeholder="Enter Degree Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_education3_degree'] ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Year</label>
                                                                                                        <input name="emp_degree_year_3" id="emp_degree_year_3"  placeholder="Enter Degree Year" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_education3_year'] ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Status</label>
                                                                                                        <select name="emp_degree_status_3" id="emp_degree_status_3" class="form-control">
                                                                                    <option value="Cleared" <?php if($rowemp['ats_employee_education3_status']=="Cleared") echo 'selected="selected"'; ?>>Cleared</option>
                                                                                        <option value="Inprogress" <?php if($rowemp['ats_employee_education3_status']=="Inprogress") echo 'selected="selected"'; ?>>Inprogress</option>
                                                                                        <option value="Dropout" <?php if($rowemp['ats_employee_education3_status']=="Dropout") echo 'selected="selected"'; ?>>Dropout</option>
                                                                                        <option value="Awaiting-for-Result" <?php if($rowemp['ats_employee_education3_status']=="Awaiting-for-Result") echo 'selected="selected"'; ?>>Awaiting for Result</option>
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
                                                                                    <input name="emp_certification_institute_name" id="emp_certification_institute_name" type="text" placeholder="Enter Institue Name" class="form-control" value="<?php echo $rowemp['ats_employee_Institute1_name'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Level</label>
                                                                                    <input name="emp_level" id="emp_level"  placeholder="Enter Degree Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_Institute1_level'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_level_year" id="emp_level_year"  placeholder="Enter Degree Year" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_Institute1_year'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Status</label>
                                                                                    <select name="emp_certification_status" id="emp_certification_status" class="form-control" value="<?php echo $rowemp['ats_employee_emergencyContact2_relation'] ?>">
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
                                                                                    <input name="emp_certification_institute_name_2" id="emp_certification_institute_name_2" type="text" placeholder="Enter Institue Name" class="form-control" value="<?php echo $rowemp['ats_employee_Institute2_name'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Level</label>
                                                                                    <input name="emp_level_2" id="emp_level_2"  placeholder="Enter Degree Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_Institute2_level'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_level_year_2" id="emp_level_year_2"  placeholder="Enter Degree Year" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_Institute2_year'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Status</label>
                                                                                    <select name="emp_certification_status_2" id="emp_certification_status_2" class="form-control"value="<?php echo $rowemp['ats_employee_emergencyContact2_relation'] ?>" >
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
                                                                                                        <input name="emp_certification_institute_name_3" id="emp_certification_institute_name_3" type="text" placeholder="Enter Institue Name" class="form-control" value="<?php echo $rowemp['ats_employee_Institute3_name'] ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Level</label>
                                                                                                        <input name="emp_level_3" id="emp_level_3"  placeholder="Enter Degree Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_Institute3_level'] ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Year</label>
                                                                                                        <input name="emp_level_year_3" id="emp_level_year_3"  placeholder="Enter Degree Year" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_Institute3_year'] ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Status</label>
                                                                                                        <select name="emp_certification_status_3" id="emp_certification_status_3" class="form-control" value="<?php echo $rowemp['ats_employee_Institute3_year'] ?>">
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
                                                                                    <input name="emp_experience_company_name" id="emp_experience_company_name" placeholder="Enter Company Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience1_company'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Position</label>
                                                                                    <input name="emp_experience_position" id="emp_experience_position" placeholder="Enter Position" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience1_position'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_experience_year" id="emp_experience_year" placeholder="Enter Year" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience1_year'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Department</label>
                                                                                    <input name="emp_experience_department" id="emp_experience_department" placeholder="Department Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience1_department'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Company Name</label>
                                                                                    <input name="emp_experience_company_name_2" id="emp_experience_company_name_2" placeholder="Enter Company Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience2_company'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Position</label>
                                                                                    <input name="emp_experience_position_2" id="emp_experience_position_2" placeholder="Enter Position" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience2_position'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Year</label>
                                                                                    <input name="emp_experience_year_2" id="emp_experience_year_2" placeholder="Enter Year" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience2_year'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Department</label>
                                                                                    <input name="emp_experience_department_2" id="emp_experience_department_2" placeholder="Department Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience2_department'] ?>">
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
                                                                                                        <input name="emp_experience_company_name_3" id="emp_experience_company_name_3" placeholder="Enter Company Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience3_company'] ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Position</label>
                                                                                                        <input name="emp_experience_position_3" id="emp_experience_position_3" placeholder="Enter Position" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience3_position'] ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Year</label>
                                                                                                        <input  name="emp_experience_year_3" id="emp_experience_year_3" placeholder="Enter Year" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience3_year'] ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <div class="position-relative form-group">
                                                                                                        <label >Department</label>
                                                                                                        <input  name="emp_experience_department_3" id="emp_experience_department_3" placeholder="Department Name" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_experience3_department'] ?>">
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
                                                                                    <input name="emp_designation" id="emp_designation" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_designation'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Department</label>
                                                                                    <select name="emp_department" id="emp_department" class="form-control" required>
                                                                                        <option <?php if($rowemp['ats_employee_department'] =="---") echo 'selected="selected"'; ?> value="---">Please Select Department</option>
                                                                                        <option <?php if($rowemp['ats_employee_department'] =="Customer-Care-Department") echo 'selected="selected"'; ?> value="Customer-Care-Department">Customer Care Department</option>
                                                                                        <option <?php if($rowemp['ats_employee_department'] =="Sales-Department") echo 'selected="selected"'; ?> value="Sales-Department">Sales Department</option>
                                                                                        <option <?php if($rowemp['ats_employee_department'] =="IT-Department") echo 'selected="selected"'; ?> value="IT-Department">IT Department</option>
                                                                                        <option <?php if($rowemp['ats_employee_department'] =="Admin-Department") echo 'selected="selected"'; ?> value="Admin-Department">Admin Department</option>
                                                                                        <option <?php if($rowemp['ats_employee_department'] =="Customer-Service-Department") echo 'selected="selected"'; ?> value="Customer-Service-Department">Customer Service Department</option>
                                                                                        <option <?php if($rowemp['ats_employee_department'] =="HR-Department") echo 'selected="selected"'; ?> value="HR-Department">HR Department</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="position-relative form-group">
                                                                                    <label class="text-dark">Date Of joining</label>
                                                                                    <input type="text" class="form-control input-mask-trigger" id="emp_date_of_joining" name="emp_date_of_joining" required value="<?php echo $rowemp['ats_employee_dateOfJoin'] ?>"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" required/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                        <label >Employment Type</label>
                                                                                        <select name="emp_type" id="emp_type" class="form-control" required>
                                                                                            <option <?php if($rowemp['ats_employee_type'] =="---") echo 'selected="selected"'; ?> value="---">Please Select Type</option>
                                                                                            <option  <?php if($rowemp['ats_employee_type'] =="Full-Time") echo 'selected="selected"'; ?> value="Full-Time">Full Time</option>
                                                                                            <option <?php if($rowemp['ats_employee_type'] =="Part-Time") echo 'selected="selected"'; ?> value="Part-Time">Part Time</option>
                                                                                            <option <?php if($rowemp['ats_employee_type'] =="Freelance") echo 'selected="selected"'; ?> value="Freelance">Freelance</option>
                                                                                            <option <?php if($rowemp['ats_employee_type'] =="Work-From-Home") echo 'selected="selected"'; ?> value="Work-From-Home">Work From Home</option>
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                        <label >Payroll / Income</label>
                                                                                        <select name="emp_payroll" id="emp_payroll" class="form-control" required>
                                                                                            <option  value="---">Please Select</option>
                                                                                            <option <?php if($rowemp['ats_employee_payroll'] =="Salaried") echo 'selected="selected"'; ?> value="Salaried">Salaried</option>
                                                                                            <option <?php if($rowemp['ats_employee_payroll'] =="Profit-Sharing") echo 'selected="selected"'; ?> value="Profit-Sharing">Profit Sharing</option>
                                                                                            <option <?php if($rowemp['ats_employee_payroll'] =="Salaried+Commission") echo 'selected="selected"'; ?> value="Salaried+Commission">Salaried + Commission</option>
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Basic Salary</label>
                                                                                    <input name="emp_basic_salary" id="emp_basic_salary" placeholder="Enter Basic Salary" type="text" required class="text-left form-control input-mask-trigger" value="<?php echo $rowemp['ats_employee_basicSalary'] ?>" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" im-insert="true"  >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Profit Share %</label>
                                                                                    <input name="emp_profit_share_percentage" id="emp_profit_share_percentage" placeholder="Enter Profit Share %" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_profit'] ?>"> 
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Commission / Unit</label>
                                                                                    <input name="emp_commision_per_unit" id="emp_commision_per_unit" placeholder="Enter Commission / Unit" type="text" class="form-control" value="<?php echo $rowemp['ats_employee_comission'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Project</label>
                                                                                    <select name="emp_project" id="emp_project"  class="form-control" >
                                                                                            <option  <?php if($rowemp['ats_employee_project'] =="Auto-Trading") echo 'selected="selected"'; ?> value="Auto-Trading">Auto Trading</option>
                                                                                            <option  <?php if($rowemp['ats_employee_project'] =="IT-Software") echo 'selected="selected"'; ?> value="IT-Software">IT & Software</option>
                                                                                            <option  <?php if($rowemp['ats_employee_project'] =="Asia") echo 'selected="selected"'; ?> value="Amazon">Amazon</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Employment Category</label>
                                                                                    <select name="emp_category" id="emp_category" class="form-control">
                                                                                        <option  value="---">Please Select Category</option>
                                                                                        <option <?php if($rowemp['ats_employee_category'] =="Permanent") echo 'selected="selected"'; ?> value="Permanent">Permanent</option>
                                                                                        <option <?php if($rowemp['ats_employee_category'] =="Contract") echo 'selected="selected"'; ?>  value="Contract">Contract</option>
                                                                                        <option <?php if($rowemp['ats_employee_category'] =="Probation") echo 'selected="selected"'; ?> value="Probation">Probation</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label >Shift</label>
                                                                                    <select name="emp_shift" id="emp_shift" class="form-control">
                                                                                        <option value="---" disabled>Please Select Shift</option>
                                                                                        <option <?php if($rowemp['ats_employee_shift'] =="Day") echo 'selected="selected"'; ?> value="day">Day</option>

                                                                                        <option <?php if($rowemp['ats_employee_shift'] =="Evening") echo 'selected="selected"'; ?> value="evening">Evening</option>
                                                                                        <option <?php if($rowemp['ats_employee_shift'] =="Night") echo 'selected="selected"'; ?> value="night">Night</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Region</label>
                                                                                    <select name="emp_region" id="emp_region" class="form-control" onChange="getport(this.value);">
                                                                                        <option value="---" disabled>Please Select Region</option>
                                                                                        <?php 
                                                            while($rowcregion=mysqli_fetch_array($queryupdateregion))
                                                            {
                                                                if($rowemp['ats_employee_region']== $rowcregion['name'])
                                                                {
                                                                ?>
                                                                <option value="<?php echo $rowcregion[1]?>" selected><?php echo $rowcregion[1]?> </option>
                                                                
                                                                <?php
                                                                }
                                                                else{
                                                                    ?>
                                                                              <option value="<?php echo $rowcregion[1]?>" ><?php echo $rowcregion[1]?> </option>

                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        <div class="row" id="regiondb">
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Country</label>
                                                                                    <select name="emp_region2" id="emp_region" class="form-control">
                                                                                        <option value="---" disabled>Please Select Region</option>
                                                                                       <?php 
                                                                                       $querycountryr="select * from region_country where region='".$rowemp['ats_employee_region']."'";
                                                                                       $rowcountryr=mysqli_query($connection,$querycountryr);
                                                                                       while($resultr=mysqli_fetch_array($rowcountryr))
                                                                                       {
                                                                                        if($rowemp['region2']== $resultr['name'])
                                                                                        {
                                                                                       ?>
                                                                                       
                                                                                 <option value="<?php echo $resultr[1]?>" selected><?php echo $resultr[1]?> </option>

                                                                                       <?php
                                                                                        }
                                                                                        else{
                                                                                               ?>
                                                                                        <option value="<?php echo $resultr[1]?>"><?php echo $resultr[1]?> </option>

                                                                                               <?php 
                                                                                       }
                                                                                    }
                                                                                       ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Country</label>
                                                                                    <select name="emp_region3" id="emp_region" class="form-control">
                                                                                        <option value="---" disabled>Please Select Region</option>
                                                                                        <?php 
                                                                                       $querycountryr1="select * from region_country where region='".$rowemp['ats_employee_region']."'";
                                                                                       $rowcountryr1=mysqli_query($connection,$querycountryr1);
                                                                                       while($resultr1=mysqli_fetch_array($rowcountryr1))
                                                                                       {
                                                                                        if($rowemp['region3']== $resultr1['name'])
                                                                                        {
                                                                                       ?>
                                                                                       
                                                                                 <option value="<?php echo $resultr1[1]?>" selected><?php echo $resultr1[1]?> </option>

                                                                                       <?php
                                                                                        }
                                                                                        else{
                                                                                               ?>
                                                                                        <option value="<?php echo $resultr1[1]?>"><?php echo $resultr1[1]?> </option>

                                                                                               <?php 
                                                                                       }
                                                                                    }
                                                                                       ?>
                                                                                      
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Country</label>
                                                                                    <select name="emp_region4" id="emp_region" class="form-control">
                                                                                    <?php 
                                                                                       $querycountryr2="select * from region_country where region='".$rowemp['ats_employee_region']."'";
                                                                                       $rowcountryr2=mysqli_query($connection,$querycountryr2);
                                                                                       while($resultr2=mysqli_fetch_array($rowcountryr2))
                                                                                       {
                                                                                        if($rowemp['region4']== $resultr2['name'])
                                                                                        {
                                                                                       ?>
                                                                                       
                                                                                 <option value="<?php echo $resultr2[1]?>" selected><?php echo $resultr2[1]?> </option>

                                                                                       <?php
                                                                                        }
                                                                                        else{
                                                                                               ?>
                                                                                        <option value="<?php echo $resultr2[1]?>"><?php echo $resultr2[1]?> </option>

                                                                                               <?php 
                                                                                       }
                                                                                    }
                                                                                       ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Country</label>
                                                                                    <select name="emp_region5" id="emp_region" class="form-control">
                                                                                    <?php 
                                                                                       $querycountryr3="select * from region_country where region='".$rowemp['ats_employee_region']."'";
                                                                                       $rowcountryr3=mysqli_query($connection,$querycountryr3);
                                                                                       while($resultr3=mysqli_fetch_array($rowcountryr3))
                                                                                       {
                                                                                        if($rowemp['region5']== $resultr3['name'])
                                                                                        {
                                                                                       ?>
                                                                                       
                                                                                 <option value="<?php echo $resultr3[1]?>" selected><?php echo $resultr3[1]?> </option>

                                                                                       <?php
                                                                                        }
                                                                                        else{
                                                                                               ?>
                                                                                        <option value="<?php echo $resultr3[1]?>"><?php echo $resultr3[1]?> </option>

                                                                                               <?php 
                                                                                       }
                                                                                    }
                                                                                       ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                            <div class="col-md-4">
                                                                                <label>Timing</label>
                                                                                <div class="position-relative form-group row">
                                                                                    
                                                                                    <div class="col-md-6">
                                                                                        <input style="width:160px;" name="emp_timing" id="emp_timing" type="time" class="form-control" required value="<?php echo $rowemp['ats_employee_timing'] ?>">
                                                                                        <p class="text-muted" >&nbsp;From</span>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <input name="emp_timing1" id="emp_timing1" type="time" class="form-control" required  value="<?php echo $rowemp['emp_timing_till'] ?>>
                                                                                        <small class="text-muted" >&nbsp;Till</small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label>Status</label>
                                                                                    <select name="emp_status" id="emp_status" class="form-control">
                                                                                        <option <?php if($rowemp['ats_employee_status'] =="On-Duty") echo 'selected="selected"'; ?> value="On-Duty">On duty</option>
                                                                                        <option <?php if($rowemp['ats_employee_status'] =="Terminated") echo 'selected="selected"'; ?> value="Terminated" >Terminated</option>
                                                                                        <option <?php if($rowemp['ats_employee_status'] =="Resigned") echo 'selected="selected"'; ?> value="Resigned" >Resigned</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group" id="lastworking">
                                                                                    <label>Last Working Date</label>
                                                                                    
                                                                                    <input type="text" class="form-control input-mask-trigger" name="emp_last_working_date" id="emp_last_working_date" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowemp['ats_employee_lastWorkingDate'] ?>"/>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <input type="submit"  class="btn-shadow btn-wide float-right btn-hover-shine btn btn-info mb-2" value="Update" name="btnsubmit">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="clearfix">
                                                <input type="reset" id="reset-btn2" class="btn-shadow float-left btn btn-link" value="Reset">
                                                <a  id="next-btn2" name="next-btn2"  class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary text-white">NEXT</a>
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
$(document).ready(function(){
   

    $('#emp_status').on('change', function() {

      if ( this.value == 'On-Duty')
      {
        $("#lastworking").hide();
      }
      else
      {
        $("#lastworking").show();
      }
    });
});
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
$("# emp_profit_share_percentage").keyup(function() {
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
  var n1 = document.getElementById('emp_email');
  var n2 = document.getElementById('emp_username');
  n2.value = n1.value;
}
</script>
<script>
function getport(val) {
    
	$.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'region_id='+val,
	success: function(data){
   
		$("#regiondb").html(data);
	}
	});
}

</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/masking-input.js" data-autoinit="true"></script>

            <?php
include("bottom.php");
?>
