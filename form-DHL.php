<?php
include("top.php");
include("connection_db.php");
$queryagent=mysqli_query($connection,"select * from ats_sell_person");
if (isset($_POST["btn_dhl_request"])) {
    $get_dhl_request_agent_name = $_POST["get_dhl_request_agent_name"];
    $get_dhl_request_customer_name = $_POST["get_dhl_request_customer_name"];
    $get_dhl_request_cus_address = $_POST["get_dhl_request_cus_address"];
    $cus_postal_code = $_POST["cus_postal_code"];
    $get_dhl_customer_phone = $_POST["get_dhl_customer_phone"];
    $dhl_stock_rec_no = $_POST["dhl_stock_rec_no"];
    $dhl_stock_maker_modal = $_POST["dhl_stock_maker_modal"];
    $dhl_stock_chassis_id = $_POST["dhl_stock_chassis_id"];
    $dhl_stock_man_year = $_POST["dhl_stock_man_year"];
    $dhl_stock_bl_surrender_checked = isset($_POST['dhl_stock_bl_surrender_checked']) ? $_POST['dhl_stock_bl_surrender_checked'] : "no";
    $dhl_stock_rec_no_2 = $_POST["dhl_stock_rec_no_2"];
    $dhl_stock_maker_modal_2 = $_POST["dhl_stock_maker_modal_2"];
    $dhl_stock_chassis_id_2 = $_POST["dhl_stock_chassis_id_2"];
    $dhl_stock_man_year_2 = $_POST["dhl_stock_man_year_2"];
    $dhl_stock_bl_surrender_checked_2 = isset($_POST['dhl_stock_bl_surrender_checked_2']) ? $_POST['dhl_stock_bl_surrender_checked_2'] : "no";
    $dhl_stock_rec_no_3 = $_POST["dhl_stock_rec_no_3"];
    $dhl_stock_maker_modal_3 = $_POST["dhl_stock_maker_modal_3"];
    $dhl_stock_chassis_id_3 = $_POST["dhl_stock_chassis_id_3"];
    $dhl_stock_man_year_3 = $_POST["dhl_stock_man_year_3"];
    $dhl_stock_bl_surrender_checked_3 = isset($_POST['dhl_stock_bl_surrender_checked_3']) ? $_POST['dhl_stock_bl_surrender_checked_3'] : "no";
    $dhl_stock_rec_no_4 = $_POST["dhl_stock_rec_no_4"];
    $dhl_stock_maker_modal_4 = $_POST["dhl_stock_maker_modal_4"];
    $dhl_stock_chassis_id_4 = $_POST["dhl_stock_chassis_id_4"];
    $dhl_stock_man_year_4 = $_POST["dhl_stock_man_year_4"];
    $dhl_stock_bl_surrender_checked_4 = isset($_POST['dhl_stock_bl_surrender_checked_4']) ? $_POST['dhl_stock_bl_surrender_checked_4'] : "no";
    $dhl_stock_rec_no_5 = $_POST["dhl_stock_rec_no_5"];
    $dhl_stock_maker_modal_5 = $_POST["dhl_stock_maker_modal_5"];
    $dhl_stock_chassis_id_5 = $_POST["dhl_stock_chassis_id_5"];
    $dhl_stock_man_year_5 = $_POST["dhl_stock_man_year_5"];
    $dhl_stock_bl_surrender_checked_5 = isset($_POST['dhl_stock_bl_surrender_checked_5']) ? $_POST['dhl_stock_bl_surrender_checked_5'] : "no";
    $dhl_created_at = date("Y-m-d");

    $dhl_updated_at = time();
    $dhl_status = "active";
    $insert = "insert into ats_DHL(ats_DHL_agent_name,ats_DHL_customer_name,ats_DHL_customer_adress,ats_DHL_postal_code,ats_DHL_phone,ats_DHL_rec_no_1,ats_DHL_model_1,ats_DHL_chassis_id_1,ats_DHL_year_1,ats_DHL_BL_surrender_1,ats_DHL_rec_no_2,ats_DHL_model_2,ats_DHL_chassis_id_2,ats_DHL_year_2,ats_DHL_BL_surrender_2,ats_DHL_rec_no_3,ats_DHL_model_3,ats_DHL_chassis_id_3,ats_DHL_year_3,ats_DHL_BL_surrender_3,ats_DHL_rec_no_4,ats_DHL_model_4, ats_DHL_chassis_id_4,ats_DHL_year_4,ats_DHL_BL_surrender_4,ats_DHL_rec_no_5,ats_DHL_model_5,ats_DHL_chassis_id_5,ats_DHL_year_5,ats_DHL_BL_surrender_5,ats_DHL_created_at,ats_DHL_updated_at,ats_DHL_status)values('$get_dhl_request_agent_name','$get_dhl_request_customer_name','$get_dhl_request_cus_address','$cus_postal_code','$get_dhl_customer_phone','$dhl_stock_rec_no','$dhl_stock_maker_modal','$dhl_stock_chassis_id','$dhl_stock_man_year', '$dhl_stock_bl_surrender_checked','$dhl_stock_rec_no_2','$dhl_stock_maker_modal_2','$dhl_stock_chassis_id_2','$dhl_stock_man_year_2','$dhl_stock_bl_surrender_checked_2','$dhl_stock_rec_no_3','$dhl_stock_maker_modal_3','$dhl_stock_chassis_id_3','$dhl_stock_man_year_3', '$dhl_stock_bl_surrender_checked_3','$dhl_stock_rec_no_4','$dhl_stock_maker_modal_4','$dhl_stock_chassis_id_4', '$dhl_stock_man_year_4','$dhl_stock_bl_surrender_checked_4','$dhl_stock_rec_no_5','$dhl_stock_maker_modal_5','$dhl_stock_chassis_id_5','$dhl_stock_man_year_5','$dhl_stock_bl_surrender_checked_5','$dhl_created_at','$dhl_updated_at','$dhl_status')";
    $query = mysqli_query($connection,$insert) or die(mysqli_error($connection));
    echo $query; 
    // $query = mysqli_query($connection,$insert);
    // if ($query)
    // {
    //      echo '<script type="text/javascript"> alert("Employee Register Successfully")</script>';
    //      echo '<script language="javascript">window.location.href ="employee-records.php"</script>';
    // }
    // else{
    //     echo '<script type="text/javascript"> alert("Employee Not Register")</script>';
    // }	
}
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div class="card-body">
                            <h5 class="card-title">DHL Request</h5>
                            <br/>
                            <h5 class="text-uppercase">Customer Detail</h5>
                            <form action="" method="post">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label class="">Agent Name</label>
                                            <select name="get_dhl_request_agent_name" id="get_dhl_request_agent_name" required class="form-control" onChange="getcustomer(this.value)">
                                                <option value="">Agent / User Table</option>
                                                <?php while($rowagent=mysqli_fetch_array($queryagent))
                                                {?>
                                                <option value="<?php echo $rowagent[1]?>"><?php echo $rowagent[1]?></option>
                                                <?php 
                                                }
                                                ?>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-md-3" id="customer_name">
                                        <div class="position-relative form-group">
                                            <label class="">Customer Name</label>
                                            <select name="get_dhl_request_customer_name" id="get_dhl_request_customer_name" required class="form-control " onChange="customerchange(this.value)">
                                                <option value="">CustomerTable</option>
                                                <option value="BUNGALI">BUNGALI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2" id="customer_adress">
                                        <div class="position-relative form-group">
                                            <label class="">Customer Address</label>
                                            <input name="get_dhl_request_cus_address" id="get_dhl_request_cus_address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2" id="customer_postal">
                                        <div class="position-relative form-group">
                                            <label class="">Postal Code</label>
                                            <input name="cus_postal_code" id="cus_postal_code" type="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2" id="customer_phone">
                                        <div class="position-relative form-group">
                                            <label class="">Phone</label>
                                            <input name="get_dhl_customer_phone" id="get_dhl_customer_phone" type="tel" class="form-control">
                                        </div>
                                    </div>
                                    <div style="background: grey; width: 100%; height: 1px;"></div>
                                    <h5 style="margin-top: 1.3%;" class="text-uppercase">Car Detail</h5>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <label class="text-left col-form-label">Rec. No. &nbsp;</label>
                                                <input name="dhl_stock_rec_no" id="dhl_stock_rec_no" class="form-control" type="text" onkeyup="carrecord(this.value)">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-3" id="make_model_1">
                                            <div class="input-group">
                                                <label class="text-left col-form-label">Maker / Model &nbsp;</label>
                                                <input name="dhl_stock_maker_modal" id="dhl_stock_maker_modal" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-3" id="make_model_2">
                                            <div class="input-group">
                                                <label class=" text-left col-form-label">Chassis ID #&nbsp;</label>
                                                <input class="form-control" id="dhl_stock_chassis_id" name="dhl_stock_chassis_id" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-2" id="make_model_3">
                                            <div class="input-group">
                                                <label class=" text-left col-form-label">Year &nbsp;</label>
                                                <input class="form-control" name="dhl_stock_man_year" id="dhl_stock_man_year" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <input name="dhl_stock_bl_surrender_checked" style="margin-top: 8%;" value="yes" type="checkbox"> &nbsp;BL Surrender
                                        </div>
                                        <div class="col-md-12 mt-0">
                                            <div id="accordion_another_car">
                                                <div style="background: transparent; box-shadow: none;" class="card">
                                                    <div id="headingOne1" class="clk">
                                                        <a href="" data-toggle="collapse" data-target="#collapseOne-car-2" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                            <i class="fa fa-plus-circle"></i> Add another Car
                                                        </a>
                                                    </div>
                                                    <div data-parent="#accordion_another_car" id="collapseOne-car-2" aria-labelledby="headingOne1" class="collapse ">
                                                        <div class="row mt-3">
                                                            <div class="col-md-2">
                                                                <div class="input-group">
                                                                    <label class=" text-left col-form-label">Rec. No. &nbsp;</label>
                                                                    <input name="dhl_stock_rec_no_2" id="dhl_stock_rec_no_2" class="form-control" type="text" onkeyup="carrecord_2(this.value)">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3" id="make_model_4">
                                                                <div class="input-group" >
                                                                    <label class=" text-left col-form-label">Maker / Model &nbsp;</label>
                                                                    <input name="dhl_stock_maker_modal_2" id="dhl_stock_maker_modal_2" class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="input-group" id="make_model_5">
                                                                    <label class=" text-left col-form-label">Chassis ID #&nbsp;</label>
                                                                    <input class="form-control" id="dhl_stock_chassis_id_2" name="dhl_stock_chassis_id_2" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2" id="make_model_6">
                                                                <div class="input-group">
                                                                    <label class=" text-left col-form-label">Year &nbsp;</label>
                                                                    <input class="form-control" name="dhl_stock_man_year_2" id="dhl_stock_man_year_2" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <input name="dhl_stock_bl_surrender_checked_2" value="yes" id="dhl_stock_bl_surrender_checked_2" style="margin-top: 8%;" type="checkbox"> &nbsp;BL Surrender
                                                            </div>
                                                        </div>
                                                        <div id="accordion_another_car-3">
                                                            <div style="background: transparent; box-shadow: none;" class="card">
                                                                <div id="headingOne1" class="clk">
                                                                    <a href="" data-toggle="collapse" data-target="#collapseOne-car-3" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                        <i class="fa fa-plus-circle"></i> Add another Car
                                                                    </a>
                                                                </div>
                                                                <div data-parent="#accordion_another_car-3" id="collapseOne-car-3" aria-labelledby="headingOne1" class="collapse ">
                                                                    <div class="row mt-3">
                                                                        <div class="col-md-2">
                                                                            <div class="input-group">
                                                                                <label class=" text-left col-form-label">Rec. No. &nbsp;</label>
                                                                                <input name="dhl_stock_rec_no_3" id="dhl_stock_rec_no_3" class="form-control" type="text" onkeyup="carrecord_3(this.value)">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="input-group" id="make_model_7">
                                                                                <label class=" text-left col-form-label">Maker / Model &nbsp;</label>
                                                                                <input name="dhl_stock_maker_modal_3" id="dhl_stock_maker_modal_3" class="form-control" type="text">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3" id="make_model_8">
                                                                            <div class="input-group">
                                                                                <label class="text-left col-form-label">Chassis ID #&nbsp;</label>
                                                                                <input class="form-control" id="dhl_stock_chassis_id_3" name="dhl_stock_chassis_id_3" type="text">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2" id="make_model_9">
                                                                            <div class="input-group">
                                                                                <label class=" text-left col-form-label">Year &nbsp;</label>
                                                                                <input class="form-control" name="dhl_stock_man_year_3" id="dhl_stock_man_year_3" type="text">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <input name="dhl_stock_bl_surrender_checked_3" id="dhl_stock_bl_surrender_checked_3" value="yes" style="margin-top: 8%;" type="checkbox"> &nbsp;BL Surrender
                                                                        </div>
                                                                    </div>
                                                                    <div id="accordion_another_car-4">
                                                                        <div style="background: transparent; box-shadow: none;" class="card">
                                                                            <div id="headingOne1" class="clk">
                                                                                <a href="" data-toggle="collapse" data-target="#collapseOne-car-4" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                                    <i class="fa fa-plus-circle"></i> Add another Car
                                                                                </a>
                                                                            </div>
                                                                            <div data-parent="#accordion_another_car-4" id="collapseOne-car-4" aria-labelledby="headingOne1" class="collapse ">
                                                                                <div class="row mt-3">
                                                                                    <div class="col-md-2">
                                                                                        <div class="input-group">
                                                                                            <label class=" text-left col-form-label">Rec. No. &nbsp;</label>
                                                                                            <input name="dhl_stock_rec_no_4" id="dhl_stock_rec_no_4" class="form-control" type="text" onkeyup="carrecord_4(this.value)">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3" id="make_model_10">
                                                                                        <div class="input-group">
                                                                                            <label class="text-left col-form-label">Maker / Model &nbsp;</label>
                                                                                            <input name="dhl_stock_maker_modal_4" id="dhl_stock_maker_modal_4" class="form-control" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3" id="make_model_11">
                                                                                        <div class="input-group">
                                                                                            <label class="text-left col-form-label">Chassis ID #&nbsp;</label>
                                                                                            <input class="form-control" id="dhl_stock_chassis_id_4" name="dhl_stock_chassis_id_4" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2" id="make_model_12">
                                                                                        <div class="input-group">
                                                                                            <label class="text-left col-form-label">Year &nbsp;</label>
                                                                                            <input class="form-control" name="dhl_stock_man_year_4" id="dhl_stock_man_year_4" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <input name="dhl_stock_bl_surrender_checked_4" id="dhl_stock_bl_surrender_checked_4" value="yes" style="margin-top: 8%;" type="checkbox"> &nbsp;BL Surrender
                                                                                    </div>
                                                                                </div>
                                                                                <div id="accordion_another_car-5">
                                                                                    <div style="background: transparent; box-shadow: none;" class="card">
                                                                                        <div id="headingOne1" class="clk">
                                                                                            <a href="" data-toggle="collapse" data-target="#collapseOne-car-5" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                                                <i class="fa fa-plus-circle"></i> Add another Car
                                                                                            </a>
                                                                                        </div>
                                                                                        <div data-parent="#accordion_another_car-5" id="collapseOne-car-5" aria-labelledby="headingOne1" class="collapse ">
                                                                                            <div class="row mt-3">
                                                                                                <div class="col-md-2">
                                                                                                    <div class="input-group">
                                                                                                        <label class=" text-left col-form-label">Rec. No. &nbsp;</label>
                                                                                                        <input name="dhl_stock_rec_no_5" id="dhl_stock_rec_no_5" class="form-control" type="text" onkeyup="carrecord_5(this.value)">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3" id="make_model_13">
                                                                                                    <div class="input-group">
                                                                                                        <label class="text-left col-form-label">Maker / Model &nbsp;</label>
                                                                                                        <input name="dhl_stock_maker_modal_5" id="dhl_stock_maker_modal_5" class="form-control" type="text">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-3" id="make_model_14">
                                                                                                    <div class="input-group">
                                                                                                        <label class="text-left col-form-label">Chassis ID #&nbsp;</label>
                                                                                                        <input class="form-control" id="dhl_stock_chassis_id_5" name="dhl_stock_chassis_id_5" type="text">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-2" id="make_model_15">
                                                                                                    <div class="input-group">
                                                                                                        <label class="text-left col-form-label">Year &nbsp;</label>
                                                                                                        <input class="form-control" name="dhl_stock_man_year_5" id="dhl_stock_man_year_5" type="text">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-2">
                                                                                                    <input name="dhl_stock_bl_surrender_checked_5" value="yes" id="dhl_stock_bl_surrender_checked_5" style="margin-top: 8%;" type="checkbox"> &nbsp;BL Surrender
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
                                            </div>    
                                        </div>
                                        <div class="col-md-12">
                                            <input style="width: 70px;" type="submit" name="btn_dhl_request" id="btn_dhl_request" class="mt-4 float-right btn btn-success" value="Submit">     
                                        </div>
                                    </div>
                                </div>
                            </form>       
                        </div>
                    </div>
                </div>
            </div>
<script>
   function getcustomer(val)
    {
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'agent_id_dhl='+val,
	success: function(data){
		$("#customer_name").html(data);
	}
	});
   
    }
    </script>
    <script>
   function customerchange(val)
    {
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'agent_id_dhl_2='+val,
	success: function(data){
		$("#customer_adress").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'agent_id_dhl_3='+val,
	success: function(data){
		$("#customer_phone").html(data);
	}
	});
    }
    </script>
    <script>
function carrecord(val)
{
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_1='+val,
	success: function(data){
		$("#make_model_1").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_2='+val,
	success: function(data){
		$("#make_model_2").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_3='+val,
	success: function(data){
		$("#make_model_3").html(data);
	}
	});
}
    </script>
        <script>
function carrecord_2(val)
{
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_4='+val,
	success: function(data){
		$("#make_model_4").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_5='+val,
	success: function(data){
		$("#make_model_5").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_6='+val,
	success: function(data){
		$("#make_model_6").html(data);
	}
	});
}
    </script>
    <script>
function carrecord_3(val)
{
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_7='+val,
	success: function(data){
		$("#make_model_7").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_8='+val,
	success: function(data){
		$("#make_model_8").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_9='+val,
	success: function(data){
		$("#make_model_9").html(data);
	}
	});
}
    </script>
    <script>
function carrecord_4(val)
{
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_10='+val,
	success: function(data){
		$("#make_model_10").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_11='+val,
	success: function(data){
		$("#make_model_11").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_12='+val,
	success: function(data){
		$("#make_model_12").html(data);
	}
	});
}
    </script>
        <script>
function carrecord_5(val)
{
  
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_13='+val,
	success: function(data){
      
		$("#make_model_13").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_14='+val,
	success: function(data){
		$("#make_model_14").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'make_model_15='+val,
	success: function(data){
		$("#make_model_15").html(data);
	}
	});
}
    </script>
<?php
include("bottom.php");
?>