<?php
include("top.php");
include("connection_db.php");
$id=$_GET['empid'];
$query=mysqli_query($connection,"select * from ats_employee where ats_employee_id='".$id."'");
$row=mysqli_fetch_assoc($query);
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
                                            <div class="forms-wizard-alt">
                                              
                                                        
                                                
                                                        <div id="accordion" class="accordion-wrapper mb-3">
                                                            <div class="card">
                                                            <?php 
                                                            
                                                            ?>
                                                                <div data-parent="#accordion" id="collapseTwo" class="collapse show">
                                                                    <div style="font-family: Arial, Helvetica, sans-serif; border: 3px solid #ff9900; " class="card mb-4">
                                                                            <div style="height: auto; padding-top: 1%; padding-bottom: 1%; background: linear-gradient(135deg, #ff9900 0%, #ffff 100%)" class="card-header">
                                                                                <div class="media flex-wrap w-100 align-items-center">
                                                                            
                                                                                    <img style="width: 80px; height: 90px; margin-left: -1%;" id="emp_passport_image_print"  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['ats_employee_image']); ?>" /> 

                                                                                    <div class="media-body ml-3">
                                                                                        <label for="fname" style="color: white; margin-bottom: 0px; text-shadow: 3px 3px 7px #000;" ><?php echo $row['ats_employee_firstName']." ".$row['ats_employee_lastName'] ?><span></span></label><br/>
                                                                                        <label for="designation" style="margin-bottom: 0px;" id="emp_designation_print" ><span><?php echo $row['ats_employee_designation']?></span></label><br/>
                                                                                        <label for="emp_dept" style="margin-bottom: 0px;" id="emp_department_print" ><span><?php echo $row['ats_employee_department']?></span></label><br/>
                                                                                        <label for="region" style="margin-bottom: 0px;"><span style="font-weight: bold;" id="emp_region_print" ><?php echo $row['ats_employee_region']." ( ".$row['region2']." , ".$row['region3']." , ".$row['region4']." , ".$row['region5']?></span></label>
                                                                                    </div>
                                                                                    <div style="margin-top:4rem;" >
                                                                                        <label for="doj" style="color: black;font-size:12px; font-weight:lighter; ">D.O.J : <span style="color: black;text-transform:lowercase;" id="emp_doj" ><?php echo $row['ats_employee_dateOfJoin']?></span>&nbsp;&nbsp;</label><br/>
                                                                                        <label for="email" style="margin-bottom: 0px; "><a style="color: black;font-size:12px;text-transform:lowercase; font-weight:lighter; margin-top:-12%;" id="emp_email_print"   href=" mailto:<?php echo $row['ats_employee_email']?>"><?php echo $row['ats_employee_email']?></a>&nbsp;&nbsp;</label><br/>
                                                                                        
                                                                                    </div>
                                                                              
                                                                                    <img  style="height:90px; width: 90px; opacity: 0.4; " src="assets/images/logo-inverse2.png" /> 

                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="card-body ">
                                                                                <div class="row ">
                                                                                    <div style="background:linear-gradient(to right, white, #bebebe, #bebebe, white); padding-top: 0.7%;" class="col-md-12">
                                                                                        <h4 class="text-white" style="font-weight: bold; text-align: center; text-transform: uppercase;">Personal Information</h4>
                                                                                    </div>
                                                                                    <div style=" margin-top: 0.5%; border-right: 2px solid lightgray;" class="col-md-6">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <label >Employee ID : <span style="font-weight: bold;"></span></label><br/>
                                                                                                <label >Address : </label><br/>
                                                                                                <label for="city">City : </label><br/>
                                                                                                <label for="phone">Phone Number : </label><br/>
                                                                                                <label id="dob" for="dob">Date of Birth : </label><br/>
                                                                                                <label for="pob">Place of Birth : </label><br/>
                                                                                            </div>
                                                                                            <div class="col-md-8">
                                                                                                <label style="font-weight: bold;">ATS-<?php echo $row['ats_employee_id']?><span style="font-weight: bold;"></span></label><br/>
                                                                                                <label for="add"><span style="font-weight: bold;" id="emp_address_print"><?php echo $row['ats_employee_address']?></span></label><br/>
                                                                                                <label for="city"><span style="font-weight: bold;" id="emp_city_print"><?php echo $row['ats_employee_city'] ?></span></label><br/>
                                                                                                <label for="phone"><span style="font-weight: bold;" id="emp_cell_phone_print"><?php echo $row['ats_employee_phoneNumber'] ?></span></label><br/>
                                                                                                <label for="dob"><span style="font-weight: bold;" id="emp_date_of_birth_print"><?php echo $row['ats_employee_dob'] ?></span></label><br/>
                                                                                                <label for="pob"><span style="font-weight: bold;" id="emp_place_of_birth_print" ><?php echo $row['ats_employee_pob'] ?></span></label><br/>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div style="margin-top: 0.5%;" class="col-md-6">
                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <label >Nationality : </label><br/>
                                                                                                <label >CNIC No. : </label><br/>
                                                                                                <label >CNIC Expiry : </label><br/>
                                                                                                <label >Email : </label><br/>
                                                                                                <label >Martial Status : </label><br/>
                                                                                                <label >Gender : </label><br/>
                                                                                        
                                                                                            </div>
                                                                                            <div class="col-md-7">
                                                                                            <label for="nationality"><span style="font-weight: bold; " id="emp_natinality_print"><?php echo $row['ats_employee_nationality'] ?></span></label><br/>
                                                                                    <label for="nic"><span style="font-weight: bold;" id="emp_cnic_no_print" ><?php echo $row['ats_employee_cnicNo'] ?></span></label><br/>
                                                                                    <label for="nicexpiry"> <span style="font-weight: bold;" id="emp_cnic_expiry_print" ><?php echo $row['ats_employee_cnicExpiry'] ?></span></label><br/>
                                                                                    <label for="email"><span style="font-weight: bold;" id="emp_email_print" ><span><?php echo $row['ats_employee_email'] ?></span></label><br/>
                                                                                    <label for="relationshipstatus"><span style="font-weight: bold;" id="ats_employee_relation" ><?php echo $row['ats_employee_pob'] ?></span></label><br/>
                                                                                    <label for="gender"><span style="font-weight: bold;" id="emp_gender_print" ><?php echo $row['ats_employee_gender'] ?></span></label><br/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12" >

                                                                                        <div style="height: 5px; background: #ffd17a;  margin-top: 1%;"></div>
                                                                                    </div>

                                                                                    <div style="background:linear-gradient(to right, white, #bebebe, #bebebe, white); padding-top: 0.7%; margin-top: 1%;" class="col-md-12">
                                                                                        <h4 class="text-white" style="font-weight: bold; text-align: center; text-transform: uppercase;">Education</h4>
                                                                                    </div>
                                                                                    <div style=" margin-top: 0.5%; border-right: 2px solid lightgrey;" class="col-md-6">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <label>Institute Name : </label><br/>
                                                                                                <label>Degree : </label><br/>
                                                                                                <label>Year : </label><br/>
                                                                                                <label>Status : </label><br/>
                                                                                            </div>
                                                                                            <div class="col-md-8">
                                                                                            <label for="iname"><span style="font-weight: bold;" id="emp_institute_name_print"><?php echo $row['ats_employee_education1_name'] ?></span></label><br/>
                                                                                    <label for="idegree"><span style="font-weight: bold;" id="emp_degree_print" ><?php echo $row['ats_employee_education1_degree'] ?></span></label><br/>
                                                                                    <label for="idegreeyear"><span style="font-weight: bold;" id="emp_degree_year_print" ><?php echo $row['ats_employee_education1_year'] ?></span></label><br/>
                                                                                    <label for="idegreestatus"><span style="font-weight: bold;" id="emp_degree_status_print" ><?php echo $row['ats_employee_education1_status'] ?></span></label><br/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div style=" margin-top: 0.5%;" class="col-md-6">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <label>Institute Name : </label><br/>
                                                                                                <label>Degree : </label><br/>
                                                                                                <label>Year : </label><br/>
                                                                                                <label>Status : </label><br/>
                                                                                            </div>
                                                                                            <div class="col-md-8">
                                                                                                <label for="iname1"><span style="font-weight: bold;" id="emp_institute_name_print"><?php echo $row['ats_employee_education2_name'] ?></span></label><br/>
                                                                                                <label for="idegree1"><span style="font-weight: bold;" id="emp_degree_print" ></span><?php echo $row['ats_employee_education2_degree'] ?></label><br/>
                                                                                                <label for="idegreeyear1"><span style="font-weight: bold;" id="emp_degree_year_print" ><?php echo $row['ats_employee_education2_year'] ?></span></label><br/>
                                                                                                <label for="idegreestatus1"><span style="font-weight: bold;" id="emp_degree_status_print" ><?php echo $row['ats_employee_education2_status'] ?></span></label><br/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12" >
                                                                                        <div style="height: 5px; background: #ffd17a;  margin-top: 1%;"></div>
                                                                                    </div>
                                                                                    <div style="background:linear-gradient(to right, white, #bebebe, #bebebe, white); padding-top: 0.7%; margin-top: 1%;" class="col-md-12">
                                                                                        <h4 class="text-white" style="font-weight: bold; text-align: center; text-transform: uppercase;">Professional Experience</h4>
                                                                                    </div>
                                                                                    <div style=" margin-top: 0.5%; border-right: 2px solid lightgrey;" class="col-md-6">
                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <label>Company Name : </label><br/>
                                                                                                <label>Position : </label><br/>
                                                                                                <label>Year : </label><br/>
                                                                                                <label>Department : </label><br/>
                                                                                            </div>
                                                                                            <div class="col-md-7">
                                                                                                <label for="cn"><span style="font-weight: bold;" id="emp_experience_company_name_print"><?php echo $row['ats_employee_experience1_company'] ?></span></label><br/>
                                                                                                <label for="position"><span style="font-weight: bold;" id="emp_experience_position_print" ><?php echo $row['ats_employee_experience1_position'] ?></span></label><br/>
                                                                                                <label for="year"><span style="font-weight: bold;" id="emp_experience_year_print"><?php echo $row['ats_employee_experience1_year'] ?></span></label><br/>
                                                                                                <label for="dept"><span style="font-weight: bold;" id="emp_experience_department_print"><?php echo $row['ats_employee_experience1_department'] ?></span></label><br/>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                    <div style=" margin-top: 0.5%;" class="col-md-6">
                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <label>Company Name : </label><br/>
                                                                                                <label>Position : </label><br/>
                                                                                                <label>Year : </label><br/>
                                                                                                <label>Department : </label><br/>
                                                                                            </div>
                                                                                            <div class="col-md-7">
                                                                                            <label for="cn1"> <span style="font-weight: bold;" id="emp_experience_company_name_print"><?php echo $row['ats_employee_experience2_company'] ?></span></label><br/>
                                                                                            <label for="position1"><span style="font-weight: bold;" id="emp_experience_position_print" ><?php echo $row['ats_employee_experience2_position'] ?></span></label><br/>
                                                                                            <label for="year1"><span style="font-weight: bold;" id="emp_experience_year_print"><?php echo $row['ats_employee_experience2_year'] ?></span></label><br/>
                                                                                            <label for="dept1"><span style="font-weight: bold;" id="emp_experience_department_print"><?php echo $row['ats_employee_experience2_department'] ?></span></label><br/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12" >
                                                                                        <div style="height: 5px; background: #ffd17a;  margin-top: 1%;"></div>
                                                                                    </div>
                                                                                    <div style="background:linear-gradient(to right, white, #bebebe, #bebebe, white); padding-top: 0.7%; margin-top: 1%;" class="col-md-12">
                                                                                        <h4 class="text-white" style="font-weight: bold; text-align: center; text-transform: uppercase;">Employment Details</h4>
                                                                                    </div>
                                                                                    <div style=" margin-top: 0.5%; border-right: 2px solid lightgrey;" class="col-md-6">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <label>Department : </label><br/>
                                                                                                <label>Employment Type : </label><br/>
                                                                                                <label>Payroll / Income : </label><br/>
                                                                                                <label>Basic Salary : </label><br/>
                                                                                                <label>Profit Share % : </label><br/>
                                                                                                <label>Commission / Unit : </label><br/>
                                                                                    
                                                                                            </div>
                                                                                            <div class="col-md-8">
                                                                                            <label for="emp_dept"><span style="font-weight: bold;"><?php echo $row['ats_employee_department'] ?></span></label><br/>
                                                                                            <label for="emp_type"><span style="font-weight: bold;" id="emp_type_print"><?php echo $row['ats_employee_type'] ?></span></label><br/>
                                                                                            <label for="emp_payroll"><span style="font-weight: bold;" id="emp_payroll_print"><?php echo $row['ats_employee_payroll'] ?></span></label><br/>
                                                                                            <label for="emp_salary" > <span style="font-weight: bold;" id="emp_basic_salary_print" ><?php echo $row['ats_employee_basicSalary'] ?></span></label><br/>
                                                                                            <label for="emp_profit%"> <span style="font-weight: bold;" id="emp_profit_share_percentage_print"><?php echo $row['ats_employee_profit'] ?></span></label><br/>
                                                                                            <label for="emp_commission"><span style="font-weight: bold;" id="emp_commision_per_unit" ><?php echo $row['ats_employee_comission'] ?></span></label><br/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div style=" margin-top: 0.5%;" class="col-md-6">
                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <label>Project : </label><br/>
                                                                                                <label>Region : </label><br/>
                                                                                                <label>Employment Category : </label><br/>
                                                                                                <label>Shift : </label><br/>
                                                                                                <label>Timing : </label><br/>
                                                                                                <label>Status : </label><br/>
                                                                                            </div>
                                                                                            <div class="col-md-7">
                                                                                            <label for="project"><span style="font-weight: bold;" id="emp_project_print" ><?php echo $row['ats_employee_project'] ?></span></label><br/>
                                                                                            <label for="region"><span style="font-weight: bold;" id="emp_region_print" ><?php echo $row['ats_employee_region'] ?></span></label><br/>
                                                                                            <label for="ec"><span style="font-weight: bold;" id="emp_category_print" ><?php echo $row['ats_employee_category'] ?></span></label><br/>
                                                                                            <label for="shift"><span style="font-weight: bold;" id="emp_shift_print" ><?php echo $row['ats_employee_shift'] ?></span></label><br/>
                                                                                            <label for="timing"><span style="font-weight: bold;" id="emp_timing_print" ><?php echo $row['ats_employee_timing']." "."TO ".$row['emp_timing_till'] ?></span></label><br/>
                                                                                            <label for="status"><span style="font-weight: bold;" id="emp_status_print" ><?php echo $row['ats_employee_status'] ?></span></label><br/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12" >
                                                                                        <div style="height: 5px; background: #ffd17a;  margin-top: 1%;"></div>
                                                                                    </div>
                                                                                    <div style="background:linear-gradient(to right, white, #bebebe, #bebebe, white); padding-top: 0.7%; margin-top: 1%;" class="col-md-12">
                                                                                        <h4 class="text-white" style="font-weight: bold; text-align: center; text-transform: uppercase;">Upload Documents</h4>
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <label style="padding-top: 7px;">CNIC :<span style="font-size: 11px; color: grey;"></span></label><br/>
                                                                                            
                                                                                            <label style="padding-top: 7px;">Residential documents :<span style="font-size: 11px; color: grey;"></span></label><br/>
                                                                                            
                                                                                            <label style="padding-top: 7px;">Educational Documents : </label><br/>
                                                                                            
                                                                                            <label style="padding-top: 7px;">Experience Letter :</label><br/>
                                                                                            
                                                                                            <label style="padding-top: 7px;">Other Documents :</label><br/>
                                                                                            
                                                                                        </div>
                                                                                        <div style=" margin-top: 0.5%; " class="col-md-6">
                                                                                                <div id="dvPreview" class="col-md-12">
                                                                                                <?php 
                                                                                      $querycnic=mysqli_query($connection,"select * from employeecnic where ats_emp_id='".$id."' AND image_type='NIC-Pic'");
                                                                                      while($rowcnic=mysqli_fetch_array($querycnic)){
                                                                                          ?>
                                                                                          
                                                                                          <img width="50" height="50px" src="upload/<?php echo $rowcnic[3]; ?>" >
                                                                                        
                                                                                          <?php 
                                                                                      }
                                                                                      ?>
                                                                                                </div>
                                                                                                <div id="dvPreviewres" class="col-md-12">
                                                                                                <?php 
                                                                                      $queryres=mysqli_query($connection,"select * from employeecnic where ats_emp_id='".$id."' AND image_type='Res-Pic'");
                                                                                      while($rowres=mysqli_fetch_array($queryres)){
                                                                                          if($rowres){
                                                                                          ?>

                                                                                          <img  width="50" height="50px" src="upload/<?php echo $rowres[3]; ?>">
                                                                                          <?php 
                                                                                          }
                                                                                      }
                                                                                      ?>
                                                                                                </div>
                                                                                                
                                                                                                <div id="dvPreviewedu" class="col-md-12">
                                                                                                <?php 
                                                                                                 $queryedu=mysqli_query($connection,"select * from employeecnic where ats_emp_id='".$id."' AND image_type='Edu-Pic'");
                                                                                                 while($rowedu=mysqli_fetch_array($queryedu)){
                                                                                                      if($rowedu){
                                                                                                ?>

                                                                                                <img  width="50" height="50px" src="upload/<?php echo $rowedu[3]; ?>">
                                                                                                 <?php 
                                                                                                 }
                                                                                                    }
                                                                                                    ?>
                                                                                                </div>
                                                                                                
                                                                                                <div id="dvPreviewexp" class="col-md-12">
                                                                                                <?php 
                                                                                                 $queryexp=mysqli_query($connection,"select * from employeecnic where ats_emp_id='".$id."' AND image_type='Exp-Pic'");
                                                                                                 while($rowexp=mysqli_fetch_array($queryexp)){
                                                                                                    if($rowexp){
                                                                                                    ?>

                                                                                                 <img  width="50" height="50px" src="upload/<?php echo $rowexp[3]; ?>">
                                                                                                 <?php 
                                                                                                  }
                                                                                                 }
                                                                                                 ?>
                                                                                                </div>
                                                                                                
                                                                                                <div id="dvPreviewodc" class="col-md-12">
                                                                                                <?php 
                                                                               $queryoth=mysqli_query($connection,"select * from employeecnic where ats_emp_id='".$id."' AND image_type='Other-Pic'");
                                                                               while($rowoth=mysqli_fetch_array($queryoth)){
                                                                                   if($rowoth){
                                                                                   ?>
                                                                                    <a href="wwww.google.com>">
                                                                                   <img  width="50" height="50px" src="upload/<?php echo $rowoth[3]; ?>">
                                                                                   </a>
                                                                                   <?php 
                                                                                   }
                                                                               }
                                                                               ?>
                                                                                                </div>
                                                                                        </div> 
                                                                                    </div>
                
                                                                                </div>
                                                                            </div>
                                                                            <div style="text-align: center; margin-bottom: 1%">
                                                                                <a onclick="window.print()" class="text-white btn btn-primary">Print</a>
                                                                                <a class="text-white btn btn-success">Save as PDF</a>
                                                                                <input type="submit" class="btn-shadow btn-wide float-right btn-hover-shine btn btn-info" name="btnsubmit" onclick="myFunction()" value="ADD">
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                               
                                                <div class="divider"></div>
                                                <div class="clearfix">
                                                    <input type="reset" id="reset-btn2" class="btn-shadow float-left btn btn-link" value="Reset">
                                                    <a  id="next-btn2" name="next-btn2" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary text-white">NEXT</a>
                                                    <a id="prev-btn2" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary" >Previous</a>
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
            </div>
 
            <?php
include("bottom.php");
?>