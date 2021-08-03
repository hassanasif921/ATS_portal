<?php
include("top.php");
include("connection_db.php");
$resultsell=mysqli_query($connection,"select * from ats_sell_person");
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div  style="margin-top: -1.2%; box-shadow: none; " class="app-inner-layout__wrapper row-fluid no-gutters">
                            <div class="tab-content app-inner-layout__content card">
                                <div style="box-shadow: none;" class="container card">
                                    <form action="" method="POST" id="userForm">    
                                        <div style="background:darkgray; padding-top: 2%; padding-bottom: 0.5%;" class="row">
                                            <div class="col-sm-2">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Agent Name</label>
                                            </div>
                                            <div style="margin-left: -8%; "class="col-sm-1">
                                                <select style="width: 140px;" name="get_search_dhl_request_agent_name" id="get_search_dhl_request_agent_name" type="text" class="form-control form-control-sm" onChange="getrecord(this.value);">
                                                <?php 
                                                    while($rowsell=mysqli_fetch_row($resultsell))
                                                    {
                                                    ?>
                                                    <option value="<?php echo $rowsell[1]?>" ><?php echo $rowsell[1]?></option>
                                                    <?php   
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div style="margin-left: 8%;" class="col-sm-2">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Customer Name</label>
                                            </div>
                                            <div style="margin-left: -6%;" class="col-sm-1 " id="cust">
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
\
                                        </div>
                                        <div style="background:darkgray; padding-top: 1%; " class="row">
                                            <div  class="col-sm-1">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Date</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="get_remittance_date" id="get_remittance_date" class=" form-control form-control-sm  input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" >
                                            </div>
                                            <div  class="col-sm-1">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Date Till</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="get_remittance_date_till" id="get_remittance_date_till" class=" form-control form-control-sm  input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" >
                                            </div>
                                            <div class="col-sm-2">
                                                <input style="width: 147px;" type="submit" id="btn_remittance_search" name="btn_remittance_search" class="mb-2 mr-2 btn btn-gradient-primary  " value="Search"> 
                                            </div>
                                            <div  class="col-sm-2">
                                                <input style="width: 147px;" type="reset" name="stock_add_btn" class="mb-2 mr-2 btn btn-gradient-success  " value="Refresh"> 
                                            </div>                                                
                                        </div>            
                                    </form>
                                </div>
                                <div style="background-color: gray; height: 1px; "></div>
                                <div style="margin-left: -71px;" class="container">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div style="margin-left: 60px;" class="main-card  card">
                                                <div class="card-body">
                                                    <div class="table-responsive" id="table">
                                                        <table style="font-size:11px;" >
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

           
<script>
function getrecord(val) {
 //alert(val);
	$.ajax({
	type: "POST",
	url: "dhlsearch.php",
	data:'agent_id='+val,
	success: function(data){
		$("#table").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "dhlsearch.php",
	data:'agent_id1='+val,
	success: function(data){
		$("#cust").html(data);
	}
	});
}
</script>
<script>
function getrecord2(val) {
 //alert(val);
	$.ajax({
	type: "POST",
	url: "dhlsearch.php",
	data:'cust_id='+val,
	success: function(data){
		$("#table").html(data);
	}
	});
}

</script>         

<script>
$(document).on('submit','#userForm',function(e){
        e.preventDefault();
       
        $.ajax({
        method:"POST",
        url: "dhldatesearch.php",
        data:$(this).serialize(),
        success: function(data){
        $('#table').html(data);
     

    }});
});
</script>