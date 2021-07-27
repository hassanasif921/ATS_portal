<?php 
include("top.php");
include("connection_db.php");

$querys="select * from ats_vendor where ats_vendor_id=".$_GET['id'];
$result=mysqli_query($connection,$querys);
$row=mysqli_fetch_row($result);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div  class="container">
                            <div class="mt-3">
                                        <div class=" mb-3 ">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 style=" margin-left:40%;">Vendor Information</h5>
                                                </div>
                                                <div>
                                                    <div style="background: transparent; box-shadow: none;" class="container ">
                                                       
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
                                                                                    <h4 class="timeline-title" id="ven_business_name_print"><?php echo $row[1]?></h4>
                                                                                    <span class="vertical-timeline-element-date">Name</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>    
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_business_address_print"><?php echo $row[2]?></h4>
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
                                                                                    <h4 class="timeline-title" id="ven_phone_print"><?php echo $row[10]?></h4>
                                                                                    <span class="vertical-timeline-element-date">Phone</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title text-success" id="ven_email_print"><?php echo $row[46]?></h4>
                                                                                    <span class="vertical-timeline-element-date">Email</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title text-success" id="ven_business_reg_no_print"><?php echo $row[3]?></h4>
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
                                                                                    <h4 class="timeline-title" id="ven_website_url_print"><?php echo $row[15]?></h4>
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
                                                                            <input style="margin-left: 23%;" type="button" data-toggle="modal" data-target="#exampleModalLong-incorporation" id="ven_national_identity_image" name="ven_national_identity_image" value="Show">
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
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_name_print" ><?php echo $row[1]?></h4>
                                                                                    <span class="vertical-timeline-element-date">Name</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_address_print"><?php echo $row[48]?></h4>
                                                                                    <span class="vertical-timeline-element-date">Address 2</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                                    <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_phone_2_print"></h4>
                                                                                    <span class="vertical-timeline-element-date">Phone</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title text-success" id="ven_email_2_print" ></h4>
                                                                                    <span class="vertical-timeline-element-date">Email</span>
                                                                                </div>
                                                                            </div>
                                                                        </div> -->
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in"></span>
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
                                                                            <input style="margin-left: 23%;" type="button" data-toggle="modal" data-target="#exampleModalLong-aucpics" id="ven_national_identity_image" name="ven_national_identity_image" Value="show ">
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
                                                                                    <h4 class="timeline-title" id="ven_name_of_bank_print" ><?php echo $row[22]?></h4>
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
                                                                                    <h4 class="timeline-title" id="ven_address_of_bank_print"><?php echo $row[23]?></h4>
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
                                                                                    <h4 class="timeline-title" id="ven_bank_account_tittle_print"><?php echo $row[27]?></h4>
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
                                                                                    <h4 class="timeline-title" id="ven_bank_account_no_print"><?php echo $row[28]?></h4>
                                                                                    <span class="vertical-timeline-element-date">Account #</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in">    
                                                                                </span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title text-success" id="ven_name_of_bank_branch_print"><?php echo $row[25]?></h4>
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
                                                                                    <h4 class="timeline-title" id="ven_bank_swift_code"><?php echo $row[29]?></h4>
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
                                                                                    <h4 class="timeline-title" id="ven_name_of_bank_locally"><?php echo $row[30]?></h4>
                                                                                    <span class="vertical-timeline-element-date">Name</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title" id="ven_address_of_bank_locally"><?php echo $row[32]?></h4>
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
                                                                                    <h4 class="timeline-title" id="ven_bank_account_tittle_jp_locally"><?php echo $row[35]?></h4>
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
                                                                                    <h4 class="timeline-title" id="ven_bank_account_no_locally"><?php echo $row[36]?></h4>
                                                                                    <span class="vertical-timeline-element-date">Account #</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div>
                                                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title text-success" id="ven_name_of_bank_branch_jp_locally"><?php echo $row[33]?></h4>
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
                                                                                    <h4 class="timeline-title" id="ven_bank_account_type_locally"><?php echo $row[37]?></h4>
                                                                                    <span class="vertical-timeline-element-date">Type</span>
                                                                                </div>
                                                                            </div>
                                                                            <br/>
                                                                        </div>    
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <!-- <label>
                                                                <input type="checkbox">&nbsp; I Agree with this <a href="#">terms and Conditions</a> and <a href="#">privacy policy</a>.
                                                            </label>    -->
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
            
<?php
include("bottom.php");
?> 
<!-- Modals -->

<div class="modal fade" id="exampleModalLong-aucpics" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Auction Pictures</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                    <div class="lightbox-gallery">
                                    <div class="container">
                                        
                                                <div class="row photos">
                                                    <?php 
                                                    $queryimg=mysqli_query($connection,"select * from vendorimages where uniqueid='".$row[45]."' ");
                                                    
                                                    while($resultimg=mysqli_fetch_array($queryimg))
                                                    {
                                                    ?>
                                                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="vendordocuments/<?php echo $resultimg[1]?>" data-lightbox="photos"><img class="img-fluid" src="vendordocuments/<?php echo $resultimg[1]?>"></a></div>
                                                <?php }?>
                                                </div>
                                     </div>
                                </div>
                                              
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="btn_exp_commission" id="btn_exp_commission" class="btn btn-primary">Add +</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-incorporation" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">TT Copy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-12">
                            <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[38]); ?>" class="img-fluid">
                        </div>
                                              
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>
<!-- Modals -->
<script>
            $(document).ready(function(){
            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
            });   
</script>