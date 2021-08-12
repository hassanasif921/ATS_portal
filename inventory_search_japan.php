<?php
include("top.php");
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div style="margin-top: -1.2%; box-shadow: none;" class="app-inner-layout__wrapper row-fluid no-gutters">
                            <div class="tab-content app-inner-layout__content card">
                                <div style="box-shadow: none;" class=" container card">
                                    <form action="" method="">    
                                        <div style="background:darkgray; padding-top: 2%;" class="row">
                                            <div class="col-sm-1">
                                                <label style="font-weight: bold; margin-top: 5px;" class="form-control-label">Make</label>
                                            </div>
                                            <div class="col-sm-2 ">
                                                <input style="margin-left: -20%;" name="get_stock_make_japan" id="get_stock_make_japan" type="text" class="form-control form-control-sm">
                                            </div>
                                            <div style="margin-left: -3%;" class="col-sm-1">
                                                <label style="font-weight: bold; margin-top: 5px;" class="form-control-label">Model</label>
                                            </div>
                                            <div class="col-sm-2">
                                                <input style="margin-left: -20%;" name="get_stock_modal_japan" id="get_stock_modal_japan" type="text" class="form-control form-control-sm">
                                            </div>
                                            <div style="margin-left: -3%;" class="col-sm-2">
                                                <label style="font-weight: bold; margin-top: 5px;" class="form-control-label">Chassis ID #</label>
                                            </div>
                                            <div style="margin-left: -8%;" class="col-sm-2">
                                                <input name="get_stock_chassis_id_japan" id="get_stock_chassis_id_japan" type="text" class="form-control form-control-sm">
                                            </div>
                                            <div style="margin-left: 2%;" class="col-sm-1">
                                                <input style="width: 100px;" type="reset" name="btn_reset" class="mb-2 mr-2 btn btn-gradient-primary" value="Refresh"> 
                                            </div>
                                            <div style="margin-left: 5%;" class="col-sm-1">
                                                <input style="width: 100px;" type="submit" name="japan_search_btn" id="japan_search_btn" class="mb-2 mr-2 btn btn-gradient-success" value="Search"> 
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
                                                        <div class="table-responsive table-hover">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                        <th>Select all<br/><input type="checkbox" onclick="toggle(this);" /></th>
                                                                        <th>ID #</th>
                                                                        <th>Name</th>
                                                                        <th>City</th>
                                                                        <th>Phone #</th>
                                                                        <th>Email</th>
                                                                        <th>Designation</th>
                                                                        <th>Department</th>
                                                                        <th>Project</th>
                                                                        <th>Timing</th>
                                                                        <th>Status</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input type="checkbox" /></td>
                                                                        <td>ATS-78697</td>
                                                                        <td>Adam Fandy</td>
                                                                        <td>ABC Company</td>
                                                                        <td>Babu2gmail.com</td>
                                                                        <td>Belgium</td>
                                                                        <td>87665665675</td>
                                                                        <td>6567fabc</td>
                                                                        <td>Babu2gmail.com</td>
                                                                        <td>Belgium</td>
                                                                        <td>87665665675</td>
                                                                        <td>6567fabc</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input type="checkbox" /></td>
                                                                        <td>ATS-78697</td>
                                                                        <td>Adam Fandy</td>
                                                                        <td>ABC Company</td>
                                                                        <td>Babu2gmail.com</td>
                                                                        <td>Belgium</td>
                                                                        <td>87665665675</td>
                                                                        <td>6567fabc</td>
                                                                        <td>Babu2gmail.com</td>
                                                                        <td>Belgium</td>
                                                                        <td>87665665675</td>
                                                                        <td>6567fabc</td>
                                                                    </tr>
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

           

