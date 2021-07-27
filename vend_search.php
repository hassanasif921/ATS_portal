<?php
include("top.php");
include("connection_db.php");

?>        
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div style="margin-top: -1.2%; box-shadow: none;" class="app-inner-layout__wrapper row-fluid no-gutters">
                            <div class="tab-content app-inner-layout__content card" >
                                <div style="box-shadow: none;" class=" container card">
                                    <form action="" method="">    
                                        <div style="background:darkgray; padding-top: 2%;" class="row">
                                                <div class="col-sm-2">
                                                    <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Business Name</label>
                                                </div>
                                                <div class="col-sm-3 ">
                                                    <input style="margin-left: -30%;" name="get_ven_business_name" id="get_ven_business_name" onkeyup="myFunction1()"  type="text" class="form-control form-control-sm">
                                                </div>
                                                <div style="margin-left: -5%;" class="col-sm-3">
                                                    <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Company Registration No.</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input style="margin-left: -40%;" name="get_ven_business_reg_no" id="get_ven_business_reg_no" onkeyup="myFunction2()"  type="text" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-sm-1">
                                                    <input style="width: 80px;" type="reset" name="btn_reset" class="mb-2 mr-2 btn btn-gradient-primary" value="Refresh"> 
                                                </div>
                                                <div class="col-sm-1">
                                                    <input style="width: 80px;" type="submit" name="ven_search_btn" id="ven_search_btn" class="mb-2 mr-2 btn btn-gradient-success" value="Search"> 
                                                </div>
                                        </div> 
                                    </form>
                                </div>
                                <div style="background-color: gray; height: 1px;"></div>
                                <div class="card-body">
                                    <div style="margin-left: -35px;" class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-card  card">
                                                    <div class="card-body">
                                                        <div class="table-responsive table-hover">
                                                            <table style="font-size: 10px;" class="table" id="myTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Select all<br/><input  type="checkbox" onclick="toggle(this);" /></th>
                                                                        <th>Business Name</th>
                                                                        <th>Business Location</th>
                                                                        <th>Company Registration Number</th>
                                                                        <th>Country</th>
                                                                        <th>City</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    $query="select * from ats_vendor";
                                                                    $result=mysqli_query($connection,$query);
                                                                    while($row=mysqli_fetch_array($result))
                                                                    {
                                                                    
                                                                    ?>
                                                                    <tr>
                                                                       
                                                                        <td><input type="checkbox" /></td>
                                                                        <td><?php echo $row[1]?></td>
                                                                        <td><?php echo $row[2]?></td>
                                                                        <td><?php echo $row[3]?></td>
                                                                        <td><?php echo $row[4]?></td>
                                                                        <td><?php echo $row[5]?></td>
                                                                        <td><a href="vendorview.php?id=<?php echo $row[0] ?>">View</a>| <a href="editvendor.php?id=<?php echo $row[0] ?>">Edit</a></td>
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
</script>

<script>
function myFunction1() {
    
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("get_ven_business_name");
 
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
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
function myFunction2() {
    
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("get_ven_business_reg_no");
 
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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