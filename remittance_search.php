<?php
include("top.php");
include("connection_db.php");
if(isset($_SESSION['agents_id'])){
    
    $resultsell=mysqli_query($connection,"select * from ats_employee where ats_employee_id='".$_SESSION['agents_id']."'");
}
else {
    $resultsell=mysqli_query($connection,"select * from ats_employee");
}


?>        
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                    <div style="margin-top: -1.2%; box-shadow: none; margin-right:-53px; width:100%;" class="app-inner-layout__wrapper row-fluid no-gutters">
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
                                                    <option value="<?php echo $rowsell[0]?>" ><?php echo $rowsell[1]?></option>
                                                    <?php   
                                                    }
                                                    ?>
                                                </select> 
                                            </div>
                                            <div class="col-sm-2" >
                                                <label style="margin-top: 3%; font-weight: bold;" class="form-control-label">Customer Name</label>
                                            </div>
                                            <div  class="col-sm-2" id="cust">
                                            <select name="remittance_customer_name" id="remittance_customer_name" class="form-control form-control-sm" onChange="getrecord2(this.value);">
                                            <option  selected value="">Please Select</option>
                                            <?php

                                            if(isset($_SESSION['agents_id']))
                                            {
                                                $querycust=mysqli_query($connection,"select * from ats_customer where ats_customer_sell_person='".$_SESSION['agents_id']."'");
                                                

                                            while($rowfetchcustomer=mysqli_fetch_array($querycust)){
                                            ?>
                                            <option value="<?php echo $rowfetchcustomer[1]?>"><?php echo $rowfetchcustomer[3]?></option>

                                            <?php
                                            }
                                            }
                                            ?></select>
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
                                <div style="background-color: gray;  height: 1px; "></div>
                                
                                <div style="margin-left: -18px;" class="container">
                                    <h5 class="text-center mt-2 text-primary">Remittance Results</h5>
                                    <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-card card">
                                                    <div class="card-body">
                                                    
                                                        <div class="table-responsive" id="table">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                        <th>Select all <br/><input type="checkbox" onclick="toggle(this);"/></th>
                                                                        <th>Remittance ID #</th>
                                                                        <?php if(!isset($_SESSION['agents_id'])){?>
                                                                        <th>Agent Name</th><?php 
                                                                            }?>
                                                                        <th>Customer Name</th>
                                                                        <th>Country</th>
                                                                        <th>Date</th>
                                                                        <th>Sender Name</th>
                                                                        <th>Amount</th>
                                                                        <th>Currency</th>
                                                                        <th>Conversion Rate</th>
                                                                        <th>Vendor Name</th>
                                                                        <th>Account #</th>
                                                                        <!-- <th>TT File</th>
                                                                        <th>Confirmation File</th> -->
                                                                        <?php if(!isset($_SESSION['agents_id'])){?>
                                                                        <th>Created At</th>
                                                                        <th>Updated At</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                        <?php }?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    include("connection_db.php");
                                                                    if(isset($_SESSION['agents_id'])){
                                                                        $query = mysqli_query($connection,"select * from ats_remittance where ats_remittance_agent_name='".$_SESSION['agents_id']."'");
                                                                    
                                                                    }
                                                                    else{
                                                                    $query = mysqli_query($connection,"select * from ats_remittance ORDER BY ats_remittance_id DESC");
                                                                }
                                                                    $count =mysqli_num_rows($query);
                                                                    if($count > 0)
                                                                    {
                                                                        while($row = mysqli_fetch_array($query))
                                                                        {	    				   
                                                                ?>
 
                                                                <tr>
                                                                    <td><input type="checkbox" /></td>
                                                                
                                                                    <td><?php echo $row["ats_remittance_Remittance_ID"] ?></td>
                                                                    <?php if(!isset($_SESSION['agents_id'])){?>
                                                                    <td><?php echo $row["ats_remittance_agent_name"]; } ?></td>
                                                                    <?php $queryc=mysqli_fetch_row(mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$row["ats_remittance_customer_name"]."'"))?>
                                                                    <td><?php echo $queryc[3] ?></td>
                                                                    <td><?php echo $row["ats_remittance_country"] ?></td> 
                                                                    <td><?php echo $row["ats_remittance_date"] ?></td>
                                                                    <td><?php echo $row["ats_remittance_sender_name"] ?></td>
                                                                    <td><?php echo $row["ats_remittance_amount"] ?></td>
                                                                    <td><?php echo $row["ats_remittance_currency"] ?></td>
                                                                    <td><?php echo $row["ats_remittance_con_rate"] ?></td>
                                                                    <?php $queryv=mysqli_fetch_row(mysqli_query($connection,"select * from ats_vendor where ats_vendor_id='".$row["ats_remittance_vendor_name"]."'"));?>
                                                                    <td><?php echo $queryv[1] ?></td>
                                                                    <td><?php echo $row["ats_remittance_account"] ?></td>
                                                                    <?php if(!isset($_SESSION['agents_id'])){?>
                                                                    <td><?php echo $row["ats_remittance_created_at"] ?></td>
                                                                    <td><?php echo $row["ats_remittance_updated_at"] ?></td>
                                                                    <td><div class="mb-2 mr-2 badge badge-info"><?php echo $row["ats_remittance_status"] ?></div></td>
                                                                    <td><a style="padding:3px" href="<?php //echo $row["id"] ?>" class="btn btn-primary"><span class="fa fa-plus"></span></a>
                                                                    
                                                                </td>
                                                                <?php }?>
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
            <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/masking-input.js" data-autoinit="true"></script>

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
function getrecord(val) {
 //alert(val);
	$.ajax({
	type: "POST",
	url: "remmitancesearch.php",
	data:'agent_id='+val,
	success: function(data){
		$("#table").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "remmitancesearch.php",
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
	url: "remmitancesearch.php",
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
        url: "remmitancesearch1.php",
        data:$(this).serialize(),
        success: function(data){
        $('#table').html(data);
     

    }});
});
</script>