<?php
include("top.php");
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div  style="margin-top: -1.2%; box-shadow: none; " class="app-inner-layout__wrapper row-fluid no-gutters">
                            <div class="tab-content app-inner-layout__content card">
                                <div style="box-shadow: none;" class="container card">
                                    <form action="" method="">    
                                        <div style="background:darkgray; padding-top: 2%; padding-bottom: 0.5%;" class="row">
                                            <div class="col-sm-2">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Agent Name</label>
                                            </div>
                                            <div style="margin-left: -8%; "class="col-sm-1">
                                                <select style="width: 140px;" name="get_search_dhl_request_agent_name" id="get_search_dhl_request_agent_name" type="text" class="form-control form-control-sm">
                                                    <option>Employee Table</option>
                                                </select>
                                            </div>
                                            <div style="margin-left: 8%;" class="col-sm-2">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Customer Name</label>
                                            </div>
                                            <div style="margin-left: -6%;" class="col-sm-1 ">
                                                <select style="width: 140px;" name="get_search_dhl_request_customer_name" id="get_search_dhl_request_customer_name" type="text" class="form-control form-control-sm">
                                                    <option>Customer Table</option>
                                                </select>
                                            </div>
                                            <div  class="col-sm-2">
                                                <label style=" margin-left: 64px; font-weight: bold; margin-top: 5px;" class="form-control-label">Tracking No.</label>
                                            </div>
                                            <div style="margin-left: -2%;" class="col-sm-1">
                                                <input style="width: 145px;" name="get_search_stock_tracking_number" id="get_search_stock_tracking_number" class="form-control form-control-sm">
                                            </div>
                                            <div style="margin-left: 80px;" class="col-sm-3">
                                                <input style="width:100px;" type="reset" name="btn_reset" class="mb-2 mr-2 btn btn-gradient-primary" value="Refresh"> 
                                                <input style="width: 100px;" type="submit" name="btn_search_dhl_request" id="btn_search_dhl_request" class="mb-2 mr-2 btn btn-gradient-success" value="Search"> 
                                            </div>
                                            <div class="col-sm-2"></div>
                                            <div  class="col-sm-2">
                                                <label style=" font-weight: bold; " class="form-control-label col-form-label">Select Date</label>
                                            </div>
                                            <div  class="col-sm-6">
                                                <input style="margin-left: -89px;" name="get_search_dhl_request_date" id="get_search_dhl_request_date" class="form-control form-control-sm js-daterangepicker"  >
                                            </div>
                                            <div class="col-sm-2"></div>    
                                        </div>     
                                    </form>
                                </div>
                                <div style="background-color: gray; height: 1px; "></div>
                                <div style="margin-left: -71px;" class="container">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div style="margin-left: 60px;" class="main-card  card">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table style="font-size:11px;" class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Slct all<br/><input type="checkbox" onclick="toggle(this);" /></th>
                                                                    <th>Agent Name</th>
                                                                    <th>Customer Name</th>
                                                                    <th>Customer Address</th>
                                                                    <th>Postal Code</th>
                                                                    <th>Phone</th>
                                                                    <th>Rec No. &nbsp;#</th>
                                                                    <th>Maker&nbsp;/&nbsp;Model</th>
                                                                    <th style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chassis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                                    <th>Year</th>
                                                                    <th>BL Surrender</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input type="checkbox" /></td>
                                                                    <td>4321</td>
                                                                    <td>KEN</td>
                                                                    <td>BHJ-25465456</td>
                                                                    <td>NISSAN</td>
                                                                    <td>Juke</td>
                                                                    <td>2020</td>
                                                                    <td>Apr</td>
                                                                    <td>Pearl White</td>
                                                                    <td>Dual</td>
                                                                    <td>Gasoline</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="checkbox" /></td>
                                                                    <td>4321</td>
                                                                    <td>KEN</td>
                                                                    <td>BHJY-25465676</td>
                                                                    <td>NISSAN</td>
                                                                    <td>Juke</td>
                                                                    <td>2020</td>
                                                                    <td>Apr</td>
                                                                    <td>Pearl White</td>
                                                                    <td>Dual</td>
                                                                    <td>Gasoline</td>
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
<?php
include("bottom.php");
?> 

<script>
    $(document).on('ready', function () {
          // initialization of daterangepicker
          $('.js-daterangepicker').daterangepicker();
        });
    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}           
</script>

           

