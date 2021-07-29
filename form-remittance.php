<?php
include("top.php");
include("connection_db.php");
$resultsell=mysqli_query($connection,"select * from ats_sell_person");
$resultvendor=mysqli_query($connection,"select * from ats_vendor");

if (isset($_POST["btn_remittance_add"])) {

    $remittance_id_ag = $_POST["remittance_id_ag"];
    $remittance_agent_name = $_POST["remittance_agent_name"];
    $remittance_customer_name = $_POST["remittance_customer_name"];
    $get_customer_country = $_POST["get_customer_country"];
    $remittance_date = $_POST["remittance_date"];
    $remittance_sender_name = $_POST["remittance_sender_name"];
    $remittance_amount = $_POST["remittance_amount"];
    $remittance_currency = $_POST["remittance_currency"];
    $remittance_currency_con_rate = $_POST["remittance_currency_con_rate"];
    $remittance_vendor_name = $_POST["remittance_vendor_name"];
    $remittance_account_number = $_POST["remittance_account_number"];
    $remittance_created_at = time();
    $remittance_updated_at = time();
    $remittance_status = "active";
    $imagestt=$_FILES['remittance_tt_file']['tmp_name'];
    $remittance_tt_file=addslashes(file_get_contents($imagestt));
    $imagescf=$_FILES['remittance_confirmation_file']['tmp_name'];
    $remittance_confirmation_file=addslashes(file_get_contents($imagescf));
    $insert = "insert into ats_remittance(ats_remittance_Remittance_ID,ats_remittance_agent_name,ats_remittance_customer_name,ats_remittance_country,ats_remittance_date,ats_remittance_sender_name,ats_remittance_amount,ats_remittance_currency,ats_remittance_con_rate,ats_remittance_vendor_name, ats_remittance_account,ats_remittance_tt_file,ats_remittance_confirmation_file,ats_remittance_created_at,ats_remittance_updated_at,ats_remittance_status)
     values('$remittance_id_ag','$remittance_agent_name','$remittance_customer_name','$get_customer_country','$remittance_date','$remittance_sender_name','$remittance_amount','$remittance_currency','$remittance_currency_con_rate','$remittance_vendor_name','$remittance_account_number','$remittance_tt_file','$remittance_confirmation_file','$remittance_created_at','$remittance_updated_at','$remittance_status')";
    
     $query = mysqli_query($connection,$insert);
     if ($query)
     {
         $totalremittance=mysqli_query($connection,"select * from total_remmitance where customer_id='".$remittance_customer_name."'");
         $rowsofremittance=mysqli_num_rows($totalremittance);
         if($rowsofremittance)
         {
            $inserttotalremittance=mysqli_fetch_row(mysqli_query($connection,"select * from total_remmitance where customer_id='".$remittance_customer_name."'"));
            $updatedremittance=$inserttotalremittance[2]+$remittance_amount;
            $queryinserttotalremittance=mysqli_query($connection,"UPDATE total_remmitance SET amount='$updatedremittance' where customer_id='".$remittance_customer_name."'");
           
         }
         else{
            $inserttotalremittance=mysqli_query($connection,"INSERT INTO total_remmitance(customer_id, amount) VALUES ('$remittance_customer_name','$remittance_amount')");
           
         }
         echo '<script type="text/javascript"> alert("Inserted Inserted !!!")</script>';
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
                            <h5 class="card-title">Add Remittance</h5>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label class="form-control-label">Remittance ID #</label>
                                            <input name="remittance_id_ag" id="remittance_id_ag" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label class="">Agent Name</label>
                                            <select name="remittance_agent_name" id="remittance_agent_name" class="form-control" onChange="getCustomer(this.value);">
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
                                    </div>
                                    <div class="col-md-3" id="custlist">
                                        <div class="position-relative form-group">
                                            <label class="">Customer Name</label>
                                            <select name="remittance_customer_name" id="remittance_customer_name" class="form-control">
                                                <option>CustomerTable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3" id="customercountry">
                                        <div class="position-relative form-group">
                                            <label class="">Country</label>
                                            <input name="get_customer_country" id="get_customer_country" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label class="">Date</label>
                                            <input name="remittance_date" id="remittance_date" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label class="">Sender Name</label>
                                            <input name="remittance_sender_name" id="remittance_sender_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label class="">Amount</label>
                                            <input name="remittance_amount" id="remittance_amount" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="position-relative form-group">
                                            <label class="">Currency</label>
                                            <select name="remittance_currency" id="remittance_currency" class="form-control">
                                                <option>&yen;</option>
                                                <option>&dollar;</option>
                                                <option>PKR</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="position-relative form-group">
                                            <label class="">Con. Rate</label>
                                            <input name="remittance_currency_con_rate" id="remittance_currency_con_rate" type="text" class="form-control">
                                        </div>  
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label class="">Vendor Name</label>
                                            <select name="remittance_vendor_name" id="remittance_vendor_name" class="form-control" onChange="getacc(this.value);">
                                                    <?php 
                                                    while($rowvendor=mysqli_fetch_row($resultvendor))
                                                    {
                                                    ?>
                                                    <option value="<?php echo $rowvendor[0]?>" ><?php echo $rowvendor[1]?></option>
                                                    <?php   
                                                    }
                                                    ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="accno">
                                        <div class="position-relative form-group">
                                            <label class="">Account #</label>
                                            <input name="remittance_account_number" id="remittance_account_number" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">TT Upload<input style="position: absolute; border-radius: 20px; width: 100%; opacity: 0; right: 0; top: 0;" type="file" id="remittance_tt_file" name="remittance_tt_file"/>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Remittance / Confirmation<input style="position: absolute; border-radius: 20px; width: 100%; opacity: 0; right: 0; top: 0;" type="file" id="remittance_confirmation_file" name="remittance_confirmation_file"/>
                                        </div> 
                                    </div>
                                </div>
                                <input style="width: 70px;" type="submit" name="btn_remittance_add" id="btn_remittance_add" class="mt-2 float-right btn btn-success" value="Submit">     
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
include("bottom.php");
?>
<script>
       
       function getCustomer(val) {
          // alert(val);
           $.ajax({
           type: "POST",
           url: "remittancedd.php",
           data:'agent_id='+val,
           success: function(data){
               $("#custlist").html(data);
           }
           });
       }
</script>
<script>
       
function getConsignee(val) {

    $.ajax({
	type: "POST",
	url: "remittancedd.php",
	data:'cust_id2='+val,
	success: function(data){
		$("#customercountry").html(data);
	}
	});
  
}
</script>
<script>
       
function getacc(val) {

    $.ajax({
	type: "POST",
	url: "remittancedd.php",
	data:'vend_id='+val,
	success: function(data){
		$("#accno").html(data);
	}
	});
  
}
</script>