

<?php
include("top.php");
include("connection_db.php");
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                    <div style="margin-top: -1.2%; box-shadow: none; margin-right:-111px; width:100%;" class="app-inner-layout__wrapper row-fluid no-gutters">
                            <div class="tab-content app-inner-layout__content card">
                                <div style="box-shadow: none;" id="car-search" role="tabpanel" class="tab-pane active container card">
                                    <form action="" method="">    
                                        <div style="background:darkgray; padding-top: 2%;" class="row">
                                            <div class="col-sm-2">
                                                <label style="font-weight: bold; margin-top: 5px;" class="form-control-label">Dealership Name</label>
                                            </div>
                                            <div class="col-sm-2">  
                                                <input name="get_customer_name" id="get_customer_name"   type="text" class="form-control form-control-sm" onkeyup="myFunction()">
                                            </div>
                                            <div class="col-sm-2">
                                                <label style="font-weight: bold; margin-top: 5px;" class="form-control-label">Country</label>
                                            </div>
                                            <div class="col-sm-2">
                                                <input name="get_customer_email" id="get_customer_email"   type="text" class="form-control form-control-sm" onkeyup="myFunction1()">
                                            </div>
                                            <div class="col-sm-2">
                                                <label style="font-weight: bold; margin-top: 5px;" class="form-control-label">Sell Person</label>
                                            </div>
                                            <div class="col-sm-2">
                                                <input name="get_agent" id="get_agent"  type="text" class="form-control form-control-sm" onkeyup="myFunction2()">
                                            </div>
                                            <div  class="col-sm-1">
                                                <input type="reset" name="stock_add_btn" class="mb-2 mr-2 btn btn-gradient-primary btn-block" value="Refresh"> 
                                            </div>
                                        </div>    
                                    </form>
                                </div>
                                <div style="background-color: gray; height: 1px;"></div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-card  card">
                                                    <div class="card-body">
                                                        <div style="height:370px;" class="table-responsive table-hover">
                                                            <table class="table" id="myTable">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                        <th>Mark&nbsp;all</br><input type="checkbox" onclick="toggle(this);" /></th>
                                                                        <th>Customer&nbsp;ID</th>
                                                                        <th>Project</th>
                                                                        <th>Dealership&nbsp;Name</th>
                                                                        <th>Sell&nbsp;Person</th>
                                                                        <th>Country</th>
                                                                        <th>Contact&nbsp;Key/Person&nbsp;</th>
                                                                        <th>Created&nbsp;By</th>
                                                                        <th>Updated&nbsp;By</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody >
                                                                <?php
                                                                    

                                                                    $query = mysqli_query($connection,"select * from ats_customer ORDER BY ats_customer_id DESC");
                                                                    $count =mysqli_num_rows($query);
                                                                    if($count > 0)
                                                                    {
                                                                        while($row = mysqli_fetch_array($query))
                                                                        {	    				   
                                                                ?>

                                                                <tr>
                                                                    <td><input type="checkbox" /></td>
                                                                
                                                                    <td>ATS-CUS<?php echo $row["ats_customer_ATS_ID"] ?></td>
                                                                    <td><?php echo $row["ats_customer_project"] ?></td>
                                                                    <td><?php echo $row["ats_customer_dealership_name"] ?></td>
                                                                    <td><?php echo $row["ats_customer_sell_person"] ?></td> 
                                                                    <?php 
                                                                    $querycountry="select * from countryports where id=".$row["ats_customer_country"];
                                                                    $resultports=mysqli_query($connection,$querycountry);
                                                                    $rowcountry=mysqli_fetch_row($resultports);
                                                                    ?>
                                                                    <td><?php echo $rowcountry[1] ?></td>
                                                                <?php
                                                               
                                                            ?>
                                                                   
                                                                    <td><?php echo $row["ats_customer_contact_name_1"] ?></td>
                                                                   
                                                                    <td><?php echo $row["ats_customer_createdBy"] ?></td>
                                                            
                                                                    <td><?php echo $row["ats_customer_updatedBy"] ?></td>
                                                                    
                                                                   
                                                                    <td><a style="padding:3px" href="cust-view.php?id=<?php echo $row["ats_customer_ATS_ID"] ?>" >View</a><button data-id="<?php echo $row['ats_customer_ATS_ID'] ?>" data-toggle="modal" data-target="#exampleModalLong" class='userinfo'>Changes</button>
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
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>
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
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("get_customer_name");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[3];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } 
                else {
                    tr[i].style.display = "none";
                }
            }       
        }
    }
</script>
<script>
    function myFunction1() {    
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("get_customer_email");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[5];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } 
                else {
                    tr[i].style.display = "none";
                }
            }       
        }
    }
</script>
<script>
function myFunction2() {
    
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("get_agent");
 
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
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
            function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>
<script>
$(document).ready(function(){

 $('.userinfo').click(function(){
   
   var userid = $(this).data('id');

   // AJAX request
   $.ajax({
    url: 'ajaxfile.php',
    type: 'post',
    data: {userid: userid},
    success: function(response){ 
      // Add response in Modal body
     // alert(response);
      $('.modal-body').html(response);

      // Display Modal
      $('#exampleModalLong').modal('show'); 
    }
   });
 });
});
    $(document).ready(function(){
        $('.userinfo').click(function(){
        var userid = $(this).data('id');
            // AJAX request
            $.ajax({
                url: 'ajaxfile.php',
                type: 'post',
                data: {userid: userid},
                success: function(response){ 
                    // Add response in Modal body
                    // alert(response);
                    $('.modal-body').html(response);
                    // Display Modal
                    $('#exampleModalLong').modal('show'); 
                }
            });
        });
    });           
</script>

           
