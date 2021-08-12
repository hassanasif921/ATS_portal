<?php
include("top.php");


?>        
                <div class="app-main__outer">
                    <div class="app-main__inner p-0">
                        <div class="app-inner-layout chat-layout">
                            <div style="margin-top: -1.2%; box-shadow: none; margin-right:-53px; width:100%;" class="app-inner-layout__wrapper row-fluid no-gutters">
                                <div class="tab-content app-inner-layout__content card">
                                    <div style="box-shadow: none;" class="container card">
                                        <form action="" method="">    
                                            <div style="background:darkgray; padding-top: 2%;" class="row">        
                                                <div class="col-sm-2">
                                                    <label style="margin-top: 3%; font-weight: bold;" class="form-control-label">Agent Name</label>
                                                </div>
                                                <div class="col-sm-2 ">
                                                    <select name="get_remittance_agent_name" id="get_remittance_agent_name" required class="form-control form-control-sm">
                                                        <option value="">Agent / User Table</option>
                                                    </select> 
                                                </div>
                                                <div class="col-sm-2">
                                                    <label style="margin-top: 3%; font-weight: bold;" class="form-control-label">Customer Name</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <select name="get_remittance_customer_name" id="get_remittance_customer_name" required class="form-control form-control-sm">
                                                        <option value="">CustomerTable</option>
                                                    </select> 
                                                </div>
                                                <div class="col-sm-2">
                                                    <label style="margin-top: 3%; font-weight: bold;" class="form-control-label">Remittance ID #</label>
                                                </div>
                                                <div class="col-sm-2 ">
                                                <input name="get_remittance_id_ag" id="get_remittance_id_ag" class="form-control form-control-sm">
                                                </div>
                                            </div> 
                                            <div style="background:darkgray; padding-top: 1%;" class="row">
                                                <div class="col-sm-1">
                                                    <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Date</label>
                                                </div>
                                                <div class="col-sm-7">
                                                    <input name="get_remittance_date" id="get_remittance_date" class=" form-control form-control-sm js-daterangepicker">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input style="width: 147px;" type="submit" id="btn_remittance_search" name="btn_remittance_search" class="mb-2 mr-2 btn btn-gradient-primary" value="Search"> 
                                                </div>
                                                <div class="col-sm-2">
                                                    <input style="width: 147px;" type="reset" name="stock_add_btn" class="mb-2 mr-2 btn btn-gradient-success" value="Refresh"> 
                                                </div>                                                
                                            </div>         
                                        </form>
                                    </div>
                                    <div style="background-color: gray; height: 1px;"></div>
                                    <div style="margin-left: -18px;" class="container">
                                        <h5 class="text-center mt-2 text-primary">Remittance Results</h5>
                                        <div class="row">
                                            <div style="margin-left:1.5%;" class="col-lg-12">
                                                <div class="main-card card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table style="font-size:9px;" class="table table-hover">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                        <th>Select all <br/><input type="checkbox" onclick="toggle(this);"/></th>
                                                                        <th>Remittance ID #</th>
                                                                        <th>Agent Name</th>
                                                                        <th>Customer Name</th>
                                                                        <th>Country</th>
                                                                        <th>Date</th>
                                                                        <th>Sender Name</th>
                                                                        <th>Amount</th>
                                                                        <th>Currency</th>
                                                                        <th>Conversion Rate</th>
                                                                        <th>Vendor Name</th>
                                                                        <th>Account #</th>
                                                                        <th>TT File</th>
                                                                        <th>Confirmation File</th>
                                                                        <th>Created At</th>
                                                                        <th>Updated At</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        include("connection_db.php");
                                                                        $query = mysqli_query($connection,"select * from ats_remittance");
                                                                        $count =mysqli_num_rows($query);
                                                                        if($count > 0){
                                                                            while($row = mysqli_fetch_array($query)){	    				   
                                                                    ?>
                                                                    <tr class="text-center">
                                                                        <td><input type="checkbox"/></td>
                                                                        <td><?php echo $row["ats_remittance_Remittance_ID"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_agent_name"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_customer_name"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_country"] ?></td> 
                                                                        <td><?php echo $row["ats_remittance_date"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_sender_name"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_amount"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_currency"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_con_rate"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_vendor_name"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_account"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_tt_file"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_confirmation_file"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_created_at"] ?></td>
                                                                        <td><?php echo $row["ats_remittance_updated_at"] ?></td>
                                                                        <td><div class="badge badge-info"><?php echo $row["ats_remittance_status"] ?></div></td>
                                                                        <td><a style="padding:3px" href="<?php //echo $row["id"] ?>" class="btn btn-primary"><span class="fa fa-plus"></span></a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                            }    
                                                                        }
                                                                    ?>
                                                                </tbody>
                                                            </table>
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
<?php
include("bottom.php");
?>              
<script>
    function toggle(source) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] != source)
                checkboxes[i].checked = source.checked;
        }  
    }
    $(document).on('ready', function () {
        // initialization of daterangepicker
        $('.js-daterangepicker').daterangepicker();
    });
</script>

           

