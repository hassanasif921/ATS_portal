<?php
include("top.php");
include("connection_db.php");

if (isset($_POST["btn_amendment_add"])) {
$get_amendment_stock_rec_no = $_POST["get_amendment_stock_rec_no"];
$get_amendment_stock_maker_modal = $_POST["get_amendment_stock_maker_modal"];
$get_amendment_stock_chassis_id = $_POST["get_amendment_stock_chassis_id"];
$get_amendment_stock_man_year = $_POST["get_amendment_stock_man_year"];
$amendment_consignee_name = $_POST["amendment_consignee_name"];
$amendment_consignee_address = $_POST["amendment_consignee_address"];
$amendment_consignee_phone_no = $_POST["amendment_consignee_phone_no"];
$amendment_consignee_fax_no = $_POST["amendment_consignee_fax_no"];
$amendment_consignee_notify_name = $_POST["amendment_consignee_notify_name"];
$amendment_consignee_notify_address = $_POST["amendment_consignee_notify_address"];
$amendment_consignee_notify_phone_no = $_POST["amendment_consignee_notify_phone_no"];
$amendment_consignee_notify_fax_no = $_POST["amendment_consignee_notify_fax_no"];
$amendment_consignee_createdAt = time();
$amendment_consignee_updatedAt = time();
$amendment_consignee_status = "active";

$insert = "insert into ats_amendment(ats_amendment_rec_no,
ats_amendment_maker,ats_amendment_chassis,ats_amendment_year,ats_amendment_consignee_name,
ats_amendment_consignee_address,ats_amendment_consignee_tel,ats_amendment_consignee_fax,ats_amendment_noti_party_name,
ats_amendment_notify_party_adres,ats_amendment_party_tel,ats_amendment_party_fax ,ats_amendment_created_at,ats_amendment_updated_at,
ats_amendment_status)values('$get_amendment_stock_rec_no','$get_amendment_stock_maker_modal','$get_amendment_stock_chassis_id','$get_amendment_stock_man_year',
 '$amendment_consignee_name','$amendment_consignee_address','$amendment_consignee_phone_no',
 '$amendment_consignee_fax_no','$amendment_consignee_notify_name','$amendment_consignee_notify_address',
 '$amendment_consignee_notify_phone_no','$amendment_consignee_notify_fax_no','$amendment_consignee_createdAt','$amendment_consignee_updatedAt','$amendment_consignee_status')";
$query = mysqli_query($connection,$insert);
if ($query)
{
    echo '<script type="text/javascript"> alert("Your Request Send Successfully")</script>';
    //echo '<script language="javascript">window.location.href ="form-amendment.php"</script>';
}
else
{
    echo '<script type="text/javascript"> alert("Something Wrong :(")</script>';
}	

}

?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div class="card-body">
                            <h5 class="card-title">S.O / B.L AMENDMENT REQUEST FORM</h5>
                            <form action="" method="post" onsubmit="return validateAmendmentForm();">
                                <div class="form-row">
                                    <h5 style="margin-top: 1.3%;" class=" text-uppercase">Car Detail</h5>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <label class="text-left col-form-label">Rec. No. &nbsp;</label><br/>
                                                <input name="get_amendment_stock_rec_no" id="get_amendment_stock_rec_no" class="form-control " type="text"   >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <label class="text-left col-form-label">Maker / Model &nbsp;</label>
                                                <input name="get_amendment_stock_maker_modal" id="get_amendment_stock_maker_modal" class="form-control " type="text"   >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <label class=" text-left col-form-label">Chassis &nbsp;</label>
                                                <input name="get_amendment_stock_chassis_id" id="get_amendment_stock_chassis_id" class="form-control" type="text"   >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <label class=" text-left col-form-label">Year &nbsp;</label>
                                                <input class="form-control" name="get_amendment_stock_man_year" id="get_amendment_stock_man_year" type="number"   >
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                                <h5 class="text-uppercase">Consignee Detail</h5>
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label class="">New Consignee Name</label>
                                            <input name="amendment_consignee_name" id="amendment_consignee_name"  type="text"    class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="position-relative form-group">
                                            <label class="">New Consignee Address</label>
                                            <input name="amendment_consignee_address" id="amendment_consignee_address"     type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <label class="">New Consignee Tel #</label>
                                            <input name="amendment_consignee_phone_no" id="amendment_consignee_phone_no"    type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <label class="">New Consignee Fax #</label>
                                            <input name="amendment_consignee_fax_no" id="amendment_consignee_fax_no"    type="number" class="form-control">
                                        </div>
                                    </div>  
                                    <div class="col-md-12">
                                        <input type="checkbox" class="checkbox text-warning">
                                        &nbsp; Notify Party is Same as Consignee.
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <br/>
                                            <label>Notify Party Name</label>
                                            <input name="amendment_consignee_notify_name" id="amendment_consignee_notify_name"    type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="position-relative form-group">
                                            <br/>
                                            <label class="">Notify Party Address</label>
                                            <input name="amendment_consignee_notify_address" id="amendment_consignee_notify_address"    type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <br/>
                                            <label class="">Notify Party Tel #</label>
                                            <input name="amendment_consignee_notify_phone_no" id="amendment_consignee_notify_phone_no"    type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <br/>
                                            <label class="">Notify Party Fax #</label>
                                            <input name="amendment_consignee_notify_fax_no" id="amendment_consignee_notify_fax_no"    type="number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <input style="width: 70px;" type="submit" name="btn_amendment_add" id="btn_amendment_add" class="mt-2 float-right btn btn-success" value="SEND">     

                            </form>
                        </div>
                    </div>
                </div>
            </div>
<script>
    function validateAmendmentForm() {
        var amendment_stock_rec_no = document.getElementById("get_amendment_stock_rec_no");
        var amendment_stock_maker_modal = document.getElementById("get_amendment_stock_maker_modal");
        var amendment_stock_chassis_id = document.getElementById("get_amendment_stock_chassis_id");
        var amendment_stock_man_year = document.getElementById("get_amendment_stock_man_year");
        var amendment_consignee_name = document.getElementById("amendment_consignee_name");
        var amendment_consignee_address = document.getElementById("amendment_consignee_address");
        var amendment_consignee_phone_no = document.getElementById("amendment_consignee_phone_no");
        var amendment_consignee_fax_no = document.getElementById("amendment_consignee_fax_no");
        var amendment_consignee_notify_name = document.getElementById("amendment_consignee_notify_name");
        var amendment_consignee_notify_address = document.getElementById("amendment_consignee_notify_address");
        var amendment_consignee_notify_phone_no = document.getElementById("amendment_consignee_notify_phone_no");
        var amendment_consignee_notify_fax_no = document.getElementById("amendment_consignee_notify_fax_no");

        if (amendment_stock_rec_no.value == "" || amendment_stock_maker_modal.value == "" || amendment_stock_chassis_id.value == "" || amendment_stock_man_year.value == "" || amendment_consignee_name.value == "" || amendment_consignee_address.value == "" || amendment_consignee_phone_no.value == "" || amendment_consignee_fax_no.value == "" || amendment_consignee_notify_name.value == "" || amendment_consignee_notify_address.value == "" || amendment_consignee_notify_phone_no.value == "" || amendment_consignee_notify_fax_no.value == "") {
         alert("Please Fill Out All Fields");
            return false;

        } else {
            return true;
        }
    }

</script>  
<?php
include("bottom.php");
?>
    