<?php
include("top.php");
include("connection_db.php");
    if (isset($_POST["btn_refund"])) {
        $get_remittance_refund_id_ag = $_POST["get_remittance_refund_id_ag"];
        $get_remittance_refund_agent_name = $_POST["get_remittance_refund_agent_name"];
        $refund_amount = $_POST["refund_amount"];
        $get_remittance_refund_customer_name = $_POST["get_remittance_refund_customer_name"];
        $get_remittance_refund_sender_name = $_POST["get_remittance_refund_sender_name"];
        $refund_bank_name = $_POST["refund_bank_name"];
        $refund_branch_name = $_POST["refund_branch_name"];
        $refund_account_tittle = $_POST["refund_account_tittle"];
        $refund_bank_address = $_POST["refund_bank_address"];
        $refund_swift_code = $_POST["refund_swift_code"];
        $refund_memo_notify = $_POST["refund_memo_notify"];
        $refund_created_at = time();
        $refund_updated_at = time();
        $refund_status = "active";
        $insert = "insert into ats_refund(ats_refund_Remittance_ID,ats_refund_agent_name,ats_refund_refund_amount,ats_refund_customer_name,ats_refund_sender_name,ats_refund_bank_name,ats_refund_branch_name,ats_refund_aco_title,ats_refund_bank_address,ats_refund_swift_code,ats_refund_memo_notify,ats_refund_created_at,ats_refund_updated_at,ats_refund_status)values('$get_remittance_refund_id_ag','$get_remittance_refund_agent_name','$refund_amount','$get_remittance_refund_customer_name','$get_remittance_refund_sender_name','$refund_bank_name','$refund_branch_name','$refund_account_tittle','$refund_bank_address','$refund_swift_code','$refund_memo_notify','$refund_created_at','$refund_updated_at','$refund_status')";
        $query = mysqli_query($connection,$insert);
        if ($query)
        {
            echo '<script type="text/javascript"> alert("Employee Register Successfully")</script>';
            //echo '<script language="javascript">window.location.href ="employee-records.php"</script>';
        }
        else
        {
            echo '<script type="text/javascript"> alert("Employee Not Register")</script>';
        }	
    }   
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div data-ng-app="" data-ng-init="refund=;amount=;" class="card-body">
                            <form action="" method="post" onsubmit="return validateRefundForm()">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="card-title">Refund Request</h5>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-3">
                                        <label class=" card-title">Available Amount :</label>
                                        <label style="float: right;" ng-model="amount" name="get_ven_available_balance" id="get_ven_available_balance" value="100000" class="text-danger card-title">{{ 100000 - refund }}</label>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <label class="">Remittance ID #</label>
                                            <input name="get_remittance_refund_id_ag" id="get_remittance_refund_id_ag" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <label class="">Agent Name</label>
                                            <select name="get_remittance_refund_agent_name" id="get_remittance_refund_agent_name" class="form-control">
                                                <option value="33">Agent / User Table</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <label class="">Refund Amount</label>
                                            <input ng-model="refund" id="refund_amount" name="refund_amount" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label class="">Customer Name</label>
                                            <select name="get_remittance_refund_customer_name" id="get_remittance_refund_customer_name" class="form-control ">
                                                <option value="---">CustomerTable</option>
                                                <?php
                                                    $query = mysqli_query($connection,"select ats_customer_dealership_name from ats_customer");
                                                    $count = mysqli_num_rows($query);
                                                    while($row = mysqli_fetch_array($query)){
                                                ?>
                                                <option value="<?php echo($row['ats_customer_dealership_name'])?>"><?php echo($row['ats_customer_dealership_name'])?></option>
                                                <?php
                                                    }                                             
                                                ?>                             
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label class="">Sender Name</label>
                                            <input name="get_remittance_refund_sender_name" id="get_remittance_refund_sender_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <label class="col-form-label">Bank Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <input class="form-control" name="refund_bank_name" id="refund_bank_name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <label class=" text-left col-form-label">Branch Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <input class="form-control" id="refund_branch_name" name="refund_branch_name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <label class="col-form-label">Account Tittle</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <input name="refund_account_tittle" id="refund_account_tittle" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div style="margin-top: 1%;" class="col-md-2">
                                        <div class="input-group">
                                            <br/>
                                            <label class="col-form-label">Bank Address</label>
                                        </div>
                                    </div>
                                    <div style="margin-top: 1%;" class="col-md-6">
                                        <div class="input-group">
                                            <br/>
                                            <input name="refund_bank_address" id="refund_bank_address" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div style="margin-top: 1%;" class="col-md-2">
                                        <div class="input-group">
                                            <label class=" col-form-label">Swift Code</label>
                                        </div>
                                    </div>
                                    <div style="margin-top: 1%;" class="col-md-2">
                                        <div class="input-group">
                                            <input name="refund_swift_code" id="refund_swift_code" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div style="margin-top: 1%;" class="col-md-2">
                                        <div class="input-group">
                                            <label class="col-form-label">Memo / Notify</label>
                                        </div>
                                    </div>
                                    <div style="margin-top: 1%;" class="col-md-10">
                                        <div class="input-group">
                                            <input name="refund_memo_notify" id="refund_memo_notify" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input style="width: 70px;" type="submit" name="btn_refund" id="btn_refund" class="mt-2 float-right btn btn-success" value="SEND">     
                                    </div>
                                </div>
                            </form>            
                        </div>
                    </div>
                </div>
            </div>
<script>
    function validateRefundForm() {
        var refund_remittance_id = document.getElementById("get_remittance_refund_id_ag");
        var refund_agent_name = document.getElementById("get_remittance_refund_agent_name");
        var refund_amount = document.getElementById("refund_amount");
        var refund_customer_name = document.getElementById("get_remittance_refund_customer_name");
        var refund_sender_name = document.getElementById("get_remittance_refund_sender_name");
        var refund_bank_name = document.getElementById("refund_bank_name");
        var refund_branch_name = document.getElementById("refund_branch_name");
        var refund_account_tittle = document.getElementById("refund_account_tittle");
        var refund_bank_address = document.getElementById("refund_bank_address");
        var refund_swift_code = document.getElementById("refund_swift_code");
        var refund_memo_notify = document.getElementById("refund_memo_notify");
        if (refund_remittance_id.value == "" || refund_agent_name.value == "" || refund_amount.value == "" || refund_customer_name.value == "" || refund_sender_name.value == "" || refund_bank_name.value == "" || refund_branch_name.value == "" || refund_account_tittle.value == "" || refund_bank_address.value == "" || refund_swift_code.value == "" || refund_memo_notify.value == "") {
            alert("Please Fill Out All Fields");
            return false;

        } 
        else {
            return true;
        }
    }
</script>  
<?php
include("bottom.php");
?>   