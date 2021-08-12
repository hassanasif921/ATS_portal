<?php
include("top.php");
include("connection_db.php");
$querycupdate="select * from ats_customer where ats_customer_ATS_ID='".$_GET['id']."'";
$resultcupdate=mysqli_query($connection,$querycupdate);
$rowcupdate=mysqli_fetch_row($resultcupdate);
$querycountry="select * from countryports ORDER BY name ASC ";
$resultports=mysqli_query($connection,$querycountry);
$querycountry1="select * from countryports ORDER BY name ASC ";
$resultports1=mysqli_query($connection,$querycountry1);
if (isset($_POST["btn_consignee_add"])) {
    $consignee_agent_name = $_POST["consignee_agent_name"];
    $consignee_customer_name = $_POST["consignee_customer_name"];
    $consignee_country = $_POST["consignee_country"];
    $consignee_name = $_POST["consignee_name"];
    $consignee_address = $_POST["consignee_address"];
    $consignee_phone_no = $_POST["consignee_phone_no"];
    $consignee_fax_no = $_POST["consignee_fax_no"];
    $consignee_notify_name = $_POST["consignee_notify_name"];
    $consignee_notify_address = $_POST["consignee_notify_address"];
    $consignee_notify_phone_no = $_POST["consignee_notify_phone_no"];
    $consignee_notify_fax_no = $_POST["consignee_notify_fax_no"];
    $consignee_email=$_POST['consignee_email'];
    $cus_country=$_POST['cus_country'];
    $cus_arrival_port=$_POST['cus_arrival_port'];
    $consignee_created_At = time();
    $consignee_status = "active";
    $insert = "insert into ats_consignee(ats_consignee_agent_name,ats_consignee_customer_name,ats_consignee_country,ats_consignee_consignee_nme,ats_consignee_consignee_adress,ats_consignee_consignee_tel,ats_consignee_consignee_fax,ats_consignee_notify_party_name,ats_consignee_notify_party_adress,ats_consignee_notify_party_tel,ats_consignee_notify_fax,ats_consignee_created_at,ats_consignee_status,consignee_email,consignee_c,consignee_port)values('$consignee_agent_name','$consignee_customer_name','$consignee_country','$consignee_name','$consignee_address','$consignee_phone_no','$consignee_fax_no','$consignee_notify_name','$consignee_notify_address','$consignee_notify_phone_no','$consignee_notify_fax_no','$consignee_created_At','$consignee_status','$consignee_email','$cus_country','$cus_arrival_port')";
    $query = mysqli_query($connection,$insert);
    if ($query)
    {
        echo '<script type="text/javascript"> alert("Consignee Add Successfully")</script>';
        //echo '<script language="javascript">window.location.href ="employee-records.php"</script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("something Wrong :(")</script>';
    }	
}
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div class="card-body">
                            <h5 class="card-title">Add Consignee</h5>
                            <form action="" method="post" onsubmit="return validateConsigneeForm();">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label class="">Agent Name</label>
                                            <select name="consignee_agent_name" id="consignee_agent_name" class="form-control">
                                            <?php
                                                $query_sell = mysqli_query($connection,"select * from ats_sell_person");
                                                $count_sell = mysqli_num_rows($query_sell);
                                                while($row = mysqli_fetch_array($query_sell)){
                                                    if($rowcupdate[4]==$row['Sell_person']){
                                            ?>
                                                <option value = "<?php echo($row['Sell_person'])?>" selected><?php echo($row['Sell_person']) ?></option>
                                            <?php
                                                    }
                                                }                                             
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label class="">Customer Name</label>
                                            <select name="consignee_customer_name" id="consignee_customer_name" class="form-control">
                                                <option value="<?php echo $rowcupdate[1]?>"><?php echo $rowcupdate[3]?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label class="">Country</label>
                                            <select name="consignee_country" id="consignee_country" class="form-control">
                                            <?php 
                                                while($rowcountry=mysqli_fetch_array($resultports)){
                                                    if($rowcupdate[8]== $rowcountry[0]){
                                            ?>
                                                <option value="<?php echo $rowcountry[0]?>" selected><?php echo $rowcountry[1]?></option>
                                            <?php
                                                    }
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label class="">Consignee Name</label>
                                            <input name="consignee_name" id="consignee_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="position-relative form-group">
                                            <label class="">Consignee Address</label>
                                            <input name="consignee_address" id="consignee_address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <label class="">Consignee Tel #</label>
                                            <input name="consignee_phone_no" id="consignee_phone_no" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <label class="">Consignee Fax #</label>
                                            <input name="consignee_fax_no" id="consignee_fax_no" type="text" class="form-control">
                                        </div>
                                    </div>      
                                </div>
                                <div class="form-row">    
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">    
                                            <label>Consignee Email</label>
                                            <input name="consignee_email" id="consignee_email" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">    
                                            <label class="">Consignee Country</label>
                                            <select name="cus_country" id="cus_country" class="form-control" onChange="getport(this.value);" required>
                                                <option disabled selected>Please Select</option>
                                                <?php 
                                                    while($rowcountry1=mysqli_fetch_array($resultports1)){
                                                ?>
                                                <option value="<?php echo $rowcountry1[0]?>"><?php echo $rowcountry1[1]?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="test">
                                        <div class="position-relative form-group">
                                            <label class="">Consignee Port</label>
                                            <input name="consignee_port" id="consignee_port" type="text" class="form-control">
                                        </div>
                                    </div>    
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <input type="checkbox" id="consignee_notify_same_as_consignee_chacked" name="consignee_notify_same_as_consignee_chacked" class="checkbox text-warning">
                                        &nbsp; Notify Party is Same as Consignee.
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <br/>
                                            <label>Notify Party Name</label>
                                            <input name="consignee_notify_name" id="consignee_notify_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="position-relative form-group">
                                            <br/>
                                            <label class="">Notify Party Address</label>
                                            <input name="consignee_notify_address" id="consignee_notify_address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <br/>
                                            <label class="">Notify Party Tel #</label>
                                            <input name="consignee_notify_phone_no" id="consignee_notify_phone_no" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <br/>
                                            <label class="">Notify Party Fax #</label>
                                            <input name="consignee_notify_fax_no" id="consignee_notify_fax_no" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <input style="width: 70px;" type="submit" name="btn_consignee_add" id="btn_consignee_add" class="mt-2 float-right btn btn-success" value="Add">     
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<script>
    function validateConsigneeForm() {
        var consignee_agent_name = document.getElementById("consignee_agent_name");
        var consignee_customer_name = document.getElementById("consignee_customer_name");
        var consignee_country = document.getElementById("consignee_country");
        var consignee_name = document.getElementById("consignee_name");
        var consignee_address = document.getElementById("consignee_address");
        var consignee_phone_no = document.getElementById("consignee_phone_no");
        var consignee_fax_no = document.getElementById("consignee_fax_no");
        var consignee_notify_name = document.getElementById("consignee_notify_name");
        var consignee_notify_address = document.getElementById("consignee_notify_address");
        var consignee_notify_phone_no = document.getElementById("consignee_notify_phone_no");
        var consignee_notify_fax_no = document.getElementById("consignee_notify_fax_no");

        if (consignee_agent_name.value == "" || consignee_customer_name.value == "" || consignee_country.value == "" || consignee_name.value == "" || consignee_address.value == "" || consignee_phone_no.value == "" || consignee_fax_no.value == "" || consignee_notify_name.value == "" || consignee_notify_address.value == "" ||consignee_notify_phone_no.value == "" || consignee_notify_fax_no.value == "") {
            alert("Please Fill Out All Fields");
            return false;
        } 
        else {
            return true;
        }
    }
    $(document).ready(function () {
        $('#consignee_notify_same_as_consignee_chacked').click(function () {
            $('#consignee_notify_name').val($('#consignee_name').val());
            $('#consignee_notify_address').val($('#consignee_address').val());
            $('#consignee_notify_phone_no').val($('#consignee_phone_no').val());
            $('#consignee_notify_fax_no').val($('#consignee_fax_no').val());
        });
    });
</script> 
<script>
function getport(val) {
	$.ajax({
	    type: "POST",
	    url: "regiondropdown.php",
	    data:'country_id='+val,
	    success: function(data){
            // alert(data);
		    $("#test").html(data);
	    }
	});
}
</script>
<?php
include("bottom.php");
?>
<div class="modal hide fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content container">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Changes on Customer Table</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table style="height:450px;" class="table table-responsive table-hover mt-3">
                    <thead>
                        <tr>
                            <th class="text-center">Record id</th>
                            <th class="text-center">Changed Fields</th>
                            <th class="text-center">Changed&nbsp;By</th>
                            <th class="text-center">Changed At</th>
                            <th class="text-center">User ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query="select * from changes_record where tablename='Customer'";
                            $result=mysqli_query($connection,$query);
                            while($row=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row[6]?></td>
                            <td><?php echo $row[1]?></td>
                            <td><?php echo $row[2]?></td>
                            <td><?php echo $row[3]?></td>
                            <td><?php echo $row[5]?></td>
                        </tr>
                        <?php 
                            }
                        ?>                                    
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>