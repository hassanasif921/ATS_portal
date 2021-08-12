<?php
include("top.php");
include("connection_db.php");

$resultsell=mysqli_query($connection,"select * from ats_sell_person");

?>        
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                    <div style="margin-top: -1.2%; box-shadow: none; margin-right:-111px; width:100%;" class="app-inner-layout__wrapper row-fluid no-gutters">
                            <div  class="tab-content app-inner-layout__content card" >
                            <div style="box-shadow: none;" class="container card">
                                    <form id="userForm" method="POST">    
                                        <div style="background:darkgray;  padding-top: 2%; " class=" row">        
                                            <div class="col-sm-2">
                                                <label style="margin-top: 3%; font-weight: bold;" class="form-control-label">Agent Name</label>
                                            </div>
                                            <div  class="col-sm-2 ">
                                                <select name="get_remittance_agent_name" id="get_remittance_agent_name"  class="form-control form-control-sm" onChange="getrecord(this.value);">
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
                                            <div class="col-sm-2" >
                                                <label style="margin-top: 3%; font-weight: bold;" class="form-control-label">Customer Name</label>
                                            </div>
                                            <div  class="col-sm-2" id="cust">
                                                <select name="get_remittance_customer_name" id="get_remittance_customer_name"  class="form-control form-control-sm">
                                                    <option value="">CustomerTable</option>
                                                </select> 
                                            </div>
                                            <div class="col-sm-2">
                                                <label style="margin-top: 3%; font-weight: bold;" class="form-control-label">Remittance ID #</label>
                                            </div>
                                            <div class="col-sm-2 ">
                                               <input name="get_remittance_id_ag" id="get_remittance_id_ag" class="form-control form-control-sm" onkeyup="myFunction()">
                                            </div>
                                        </div> 
                                        <div style="background:darkgray; padding-top: 1%; " class="row">
                                            <div  class="col-sm-1">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Date</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="get_remittance_date" id="get_remittance_date" class=" form-control form-control-sm  input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" >
                                            </div>
                                            <div  class="col-sm-1">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Date Till</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="get_remittance_date_till" id="get_remittance_date_till" class=" form-control form-control-sm  input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" >
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
                                <div style="background-color: gray; height: 1px;"></div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-card card">
                                                    <div class="card-body">
                                                        <div style="height: 400px;" class="table-responsive" id="table">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                        <th>Select all<br/><input type="checkbox" onclick="toggle(this);" /></th>
                                                                        <th>Remittance ID #</th>
                                                                        <th>Agent Name</th>
                                                                        <th>Customer Name</th>
                                                                        <th>Refund Amount</th>
                                                                        <th>Sender Name</th>
                                                                        <th>Bank Name</th>
                                                                        <th>Branch Name</th>
                                                                        <th>Account Tittle</th>
                                                                        <th>Bank Address</th>
                                                                        <th>Swift Code</th>
                                                                        <th>Memo / Notify</th>
                                                                        <th>HOD Comments</th>
                                                                        <th>Created At</th>
                                                                        <th>Updated&nbsp;At</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody >
                                                                <?php
                                                                    include("connection_db.php");

                                                                    $query = mysqli_query($connection,"select * from ats_refund ORDER BY ats_refund_ID DESC");
                                                                    $count =mysqli_num_rows($query);
                                                                    if($count > 0)
                                                                    {
                                                                        while($row = mysqli_fetch_array($query))
                                                                        {	    				   
                                                                ?>

                                                                <tr>
                                                                    <td><input type="checkbox" /></td>
                                                                
                                                                    <td><?php echo $row["ats_refund_Remittance_ID"] ?></td>
                                                                    <td><?php echo $row["ats_refund_agent_name"] ?></td>
                                                                    
                                                                     <?php $queryc=mysqli_fetch_row(mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$row["ats_refund_customer_name"]."'"))?>
                                                                    <td><?php echo $queryc[3] ?></td>
                                                                    <td><?php echo $row["ats_refund_refund_amount"] ?></td>
                                                                    <td><?php echo $row["ats_refund_sender_name"] ?></td>
                                                                    <td><?php echo $row["ats_refund_bank_name"] ?></td>
                                                                    <td><?php echo $row["ats_refund_branch_name"] ?></td>
                                                                    <td><?php echo $row["ats_refund_aco_title"] ?></td>
                                                                    <td><?php echo $row["ats_refund_bank_address"] ?></td>
                                                                   
                                                                    <td><?php echo $row["ats_refund_swift_code"] ?></td>
                                                                    <td><?php echo $row["ats_refund_memo_notify"] ?></td>
                                                                    <td><?php echo $row["ats_refund_created_at"] ?></td>
                                                                    <td><?php echo $row["ats_refund_updated_at"] ?></td>
                                                                    <td><div class="mb-2 mr-2 badge badge-info"><?php echo $row["ats_refund_status"] ?></div></td>
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

           
<script>
function getrecord(val) {
 //alert(val);
	$.ajax({
	type: "POST",
	url: "refundsearch.php",
	data:'agent_id='+val,
	success: function(data){
		$("#table").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "refundsearch.php",
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
	url: "refundsearch.php",
	data:'cust_id='+val,
	success: function(data){
		$("#table").html(data);
	}
	});
}

</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("get_remittance_id_ag");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
$(document).on('submit','#userForm',function(e){
        e.preventDefault();
       
        $.ajax({
        method:"POST",
        url: "refundsearch1.php",
        data:$(this).serialize(),
        success: function(data){
        $('#table').html(data);
     

    }});
});
</script>
