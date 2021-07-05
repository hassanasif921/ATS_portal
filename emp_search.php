
<?php
include("top.php");
include("connection_db.php");
$query=mysqli_query($connection,"select * from ats_employee");

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
                                                    <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Employee Name</label>
                                                </div>
                                                <div class="col-sm-2 ">
                                                    <input style="margin-left: -40%;" name="get_emp_middle_name" id="get_emp_middle_name" onkeyup="myFunction2()" type="text" class="form-control form-control-sm">
                                                </div>
                                                <div style="margin-left: -5%;" class="col-sm-1">
                                                    <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">ID #</label>
                                                </div>
                                                <div  class="col-sm-2">
                                                    <input name="get_emp_id_ag" id="get_emp_id_ag" style="margin-left: -35%;" class=" form-control-sm form-control text-left "
                                                   onkeyup="myFunction1()">
                                                </div>
                                                <div style="margin-left: -6%;" class="col-sm-1">
                                                    <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Department</label>
                                                </div>
                                                <div class="col-sm-2 ">
                                                    <input name="emp_department" id="emp_department"  type="text" onkeyup="myFunction()" class="form-control form-control-sm">

                                                </div>
                                                <div style="margin-left: 5%;" class="col-sm-2">
                                                    <input style="width: 100px;" type="reset" name="stock_add_btn" class="mb-2 mr-2 btn btn-gradient-primary  " value="Refresh"> 

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
                                                        <div class="table-responsive table-hover">
                                                            <table style="font-size: 10px; height:400px;" class="table table-responsive" id="myTable">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                        <th>Select&nbsp;all<br/><input  type="checkbox" onclick="toggle(this);" /></th>
                                                                        <th>ID #</th>
                                                                        <th>Name</th>
                                                                        <th>City</th>
                                                                        <th>Cell Phn #</th>
                                                                        <th>Email</th>
                                                                        <th>Designation</th>
                                                                        <th>Department</th>
                                                                        <th>Project</th>
                                                                        <th>Timing</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php 
                                                                while($row=mysqli_fetch_array($query))
                                                                {

                                                                ?>
                                                                    <tr>
                                                                        <td><input type="checkbox" /></td>
                                                                        <td>ATS-<?php echo $row['ats_employee_id']?></td>
                                                                        <td><?php ECHO $row['ats_employee_firstName']." ".$row['ats_employee_middleName']." ".$row['ats_employee_lastName']?></td>
                                                                        <td><?php ECHO $row['ats_employee_city']?></td>
                                                                        <td><?php ECHO $row['ats_employee_cellPhoneNumber']?></td>
                                                                        <td><?php ECHO $row['ats_employee_email']?></td>
                                                                        <td><?php ECHO $row['ats_employee_designation']?></td>
                                                                        <td><?php ECHO $row['ats_employee_department']?></td>
                                                                        <td><?php ECHO $row['ats_employee_project']?></td>
                                                                        <td><?php ECHO $row['ats_employee_timing']; echo' To '; ECHO $row['emp_timing_till']?></td>
                                                                        <td><?php ECHO $row['ats_employee_status']?></td>
                                                                        <td><a href="view-emp.php?empid=<?php echo $row['ats_employee_id']?>">View </a> || <a href="emp-edit.php?empid=<?php echo $row['ats_employee_id']?>">EDIT </a> </td>
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
     $('#phone').mask('(ATS) ');
            function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}

           
</script>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("emp_department");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[7];
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
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("get_emp_id_ag");
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
  input = document.getElementById("get_emp_middle_name");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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