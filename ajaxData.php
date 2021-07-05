<?php include("top.php");
include("connection_db.php");
if(!empty($_POST["country_id"])){ 

$querycountry="select * from countryports where id>1";
$resultports=mysqli_query($connection,$querycountry);
}

?>
<select name="cus_arrival_port" id="cus_arrival_port"   class="form-control form-control-sm">
<option selected disabled>Please Select</option>
<option selected disabled>Please Select</option>
<option selected disabled>Please Select</option>
<option selected disabled>Please Select</option>
<option selected disabled>Please Select</option>
<option selected disabled>Please Select</option>
<option selected disabled>Please Select</option>
<option selected disabled>Please Select</option>
<option selected disabled>Please Select</option>

                   
               
 </select> 