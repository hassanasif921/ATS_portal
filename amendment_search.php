<?php
include("top.php");
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div style="margin-top: -1.2%; box-shadow: none; margin-right:-111px; width:100%;" class="app-inner-layout__wrapper row-fluid no-gutters">
                            <div class="tab-content app-inner-layout__content card">
                                <div style="box-shadow: none;" id="car-search" role="tabpanel" class="tab-pane active container card">
                                    <form action="" method="">    
                                        <div style="background:darkgray; padding-top: 2%;" class="row">
                                            <div class="col-sm-1">
                                                <label style="font-weight: bold; margin-top: 5px;" class="form-control-label">Chassis&nbsp;ID&nbsp;#</label>
                                            </div>
                                            <div class="col-sm-1">  
                                                <input style="margin-left: -5px; width: 145px;" name="get_search_amendment_stock_chassis_id" id="get_search_amendment_stock_chassis_id" type="text" class="form-control form-control-sm">
                                            </div>
                                            <div class="col-sm-2">
                                                <label style="font-weight: bold; margin-top: 5px; margin-left: 60px;" class="form-control-label">Agent Name</label>
                                            </div>
                                            <div class="col-sm-1">
                                                <input name="get_" style="margin-left: -25px; width: 150px;" type="text" class="form-control form-control-sm">
                                            </div>
                                            <div class="col-sm-2">
                                                <label style="font-weight: bold; margin-top: 5px; margin-left: 45px;" class="form-control-label">Customer&nbsp;Name</label>
                                            </div>
                                            <div class="col-sm-1">
                                                <input name="get" style="margin-left: -20px; width: 150px;" type="text" class="form-control form-control-sm">
                                            </div>
                                            <div class="col-sm-2">
                                                <input style="width: 100px; margin-left: 80px;" type="reset" name="btn_reset" class="mb-2 mr-2 btn btn-gradient-primary btn-block" value="Refresh"> 
                                            </div>
                                            <div class="col-sm-2">
                                                <input style="width: 100px;margin-left: 30px;" type="submit" name="btn_search_amendment" id="btn_search_amendment" class="mb-2 mr-2 btn btn-gradient-success btn-block" value="Search"> 
                                            </div>
                                        </div>    
                                    </form>
                                </div>
                                <div style="background-color: gray; height: 1px;"></div>
                                <div class="card-body">
                                    <div style="margin-left: -71px;" class="container">
                                        <div class="row">
                                            <div style="margin-left:6.5%;" class="col-lg-12">
                                                <div class="main-card card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                        <th>Select all<br/><input type="checkbox" onclick="toggle(this);"/></th>
                                                                        <th>Rec No. #</th>
                                                                        <th>Maker/Model</th>
                                                                        <th>Chassis</th>
                                                                        <th>Year</th>
                                                                        <th>Consignee Name</th>
                                                                        <th>Consignee Address</th>
                                                                        <th>Consignee Phn #</th>
                                                                        <th>Consignee Fax #</th>
                                                                        <th>Notify Party Name</th>
                                                                        <th>Notify Party Address</th>
                                                                        <th>Notify Party Phn #</th>
                                                                        <th>Notify Party Fax #</th>       
                                                                        <th>Created At</th>    
                                                                        <th>Updated&nbsp;At</th>  
                                                                        <th>Status</th> 
                                                                        <th>Action</th>                             
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        include("connection_db.php");

                                                                        $query = mysqli_query($connection,"select * from ats_amendment");
                                                                        $count =mysqli_num_rows($query);
                                                                        if($count > 0)
                                                                        {
                                                                            while($row = mysqli_fetch_array($query))
                                                                            {	    				   
                                                                    ?>
                                                                    <tr>
                                                                        <td><input type="checkbox" /></td>
                                                                        <td><?php echo $row["ats_amendment_rec_no"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_maker"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_chassis"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_year"] ?></td> 
                                                                        <td><?php echo $row["ats_amendment_consignee_name"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_consignee_address"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_consignee_tel"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_consignee_fax"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_noti_party_name"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_notify_party_adres"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_party_tel"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_party_fax"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_created_at"] ?></td>
                                                                        <td><?php echo $row["ats_amendment_updated_at"] ?></td>
                                                                        <td><div class="mb-2 mr-2 badge badge-info"><?php echo $row["ats_amendment_status"] ?></div></td>
                                                                        <td><a style="padding:3px" href="<?php //echo $row["id"] ?>" class="btn btn-primary"><span class="fa fa-plus"></span></a></td>
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
</script>

           

