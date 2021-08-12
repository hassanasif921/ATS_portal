<?php
include("top.php");
include("connection_db.php");
$query_reserved=mysqli_query($connection,"select * from ats_stock_reservation where sold_status<>''  ORDER BY id DESC");

?>
            
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div style="margin-top: -1.2%; box-shadow: none; margin-right:-53px; width:100%;" class="app-inner-layout__wrapper row-fluid no-gutters">
                            <div class="tab-content app-inner-layout__content card">
                                <div style="box-shadow: none;" class="container card">
                                <form action="" method="POST" id="userForm">     
                                        <div style="background:darkgray; padding-top: 2%; padding-bottom: 0.5%;" class="row">
                                            <div class="col-sm-2">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Agent Name</label>
                                            </div>
                                            <div style="margin-left: -8%; "class="col-sm-1">
                                                <select style="width: 160px;" name="get_all_reserved_reports_agent_name" id="get_all_reserved_reports_agent_name" type="text" class="form-control form-control-sm" onChange="getcustomer(this.value);">
                                                <?php
                                                $query_sell = mysqli_query($connection,"select * from ats_sell_person");
                                               
                                                while($row = mysqli_fetch_array($query_sell))
                                                {
                                               
                                                
                                                ?>
                                                <option value = "<?php echo($row['Sell_person'])?>" >
                                                    <?php echo($row['Sell_person']) ?>
                                                </option>
                                                <?php
                                                
                                            
                                                }                                             
                                                ?>  
                                                </select>
                                            </div>
                                            <div style="margin-left: 8%;" class="col-sm-2">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Customer Name</label>
                                            </div>
                                            <div style="margin-left: -6%;" class="col-sm-1 " id="getcustomer_reserved">
                                                <select style="width: 160px;" name="get_all_reserved_reports_customer_name" id="get_all_reserved_reports_customer_name" type="text" class="form-control form-control-sm">
                                                   
                                                </select>
                                            </div>
                                            <div style="margin-left: 8%;" class="col-sm-1">
                                                <label style="font-weight: bold; margin-top: 5px;" class="form-control-label">Country</label>
                                            </div>
                                            <div style="margin-left: -2%;" class="col-sm-2">
                                                <select  name="get_all_reserved_reports_country_name" id="get_all_reserved_reports_country_name" required class="form-control form-control-sm">
                                                    <option value="---">Select Country...</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AG">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AG">Antigua &amp; Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AA">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BL">Bonaire</option>
                                                    <option value="BA">Bosnia &amp; Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="BC">British Indian Ocean Ter</option>
                                                    <option value="BN">Brunei</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="IC">Canary Islands</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CD">Channel Islands</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CI">Christmas Island</option>
                                                    <option value="CS">Cocos Island</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="CC">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CT">Cote D'Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CB">Curacao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="TM">East Timor</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FA">Falkland Islands</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="FS">French Southern Ter</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GB">Great Britain</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HW">Hawaii</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IA">Iran</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IR">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="NK">Korea North</option>
                                                    <option value="KS">Korea South</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Laos</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macau</option>
                                                    <option value="MK">Macedonia</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="ME">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="MI">Midway Islands</option>
                                                    <option value="MD">Moldova</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Nambia</option>
                                                    <option value="NU">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="AN">Netherland Antilles</option>
                                                    <option value="NL">Netherlands (Holland, Europe)</option>
                                                    <option value="NV">Nevis</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NW">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau Island</option>
                                                    <option value="PS">Palestine</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PO">Pitcairn Island</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="ME">Republic of Montenegro</option>
                                                    <option value="RS">Republic of Serbia</option>
                                                    <option value="RE">Reunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="NT">St Barthelemy</option>
                                                    <option value="EU">St Eustatius</option>
                                                    <option value="HE">St Helena</option>
                                                    <option value="KN">St Kitts-Nevis</option>
                                                    <option value="LC">St Lucia</option>
                                                    <option value="MB">St Maarten</option>
                                                    <option value="PM">St Pierre &amp; Miquelon</option>
                                                    <option value="VC">St Vincent &amp; Grenadines</option>
                                                    <option value="SP">Saipan</option>
                                                    <option value="SO">Samoa</option>
                                                    <option value="AS">Samoa American</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome &amp; Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="OI">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syria</option>
                                                    <option value="TA">Tahiti</option>
                                                    <option value="TW">Taiwan</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad &amp; Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TU">Turkmenistan</option>
                                                    <option value="TC">Turks &amp; Caicos Is</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States of America</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VS">Vatican City State</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="VB">Virgin Islands (Brit)</option>
                                                    <option value="VA">Virgin Islands (USA)</option>
                                                    <option value="WK">Wake Island</option>
                                                    <option value="WF">Wallis &amp; Futana Is</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZR">Zaire</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select> 
                                            </div>
                                            <div style="background:darkgray; padding-top: 1%; " class="row">
                                            <div  class="col-sm-1">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Date</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="get_remittance_date" id="get_remittance_date" class=" form-control form-control-sm  input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" required>
                                            </div>
                                            <div  class="col-sm-1">
                                                <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Date Till</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="get_remittance_date_till" id="get_remittance_date_till" class=" form-control form-control-sm  input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <input style="width: 147px;" type="submit" id="btn_remittance_search" name="btn_remittance_search" class="mb-2 mr-2 btn btn-gradient-primary  " value="Search"> 
                                            </div>
                                            <div  class="col-sm-2">
                                                <input style="width: 147px;" type="reset" name="stock_add_btn" class="mb-2 mr-2 btn btn-gradient-success  " value="Refresh"> 
                                            </div>                                                
                                        </div>          
                                        </div>     
                                </form>
                                </div>
                                <div style="background-color: gray; height: 1px; "></div>
                                <div style="margin-left: -19px;" class="container">
                                    <h5 class="text-center mt-2 text-primary">All SOLD</h5>
                                    <div class="row">
                                        <div style="margin-left:6.5%;" class="col-lg-12">
                                            <div class="main-card card">
                                                <div class="card-body">
                                                    <div class="table-responsive" id="table">
                                                    <table style="font-size: 8px;" class="table" id="myTable">
                                                            <thead>

                                                                <tr>
                                                                    <th>Slct all<input type="checkbox" onclick="toggle(this);" /></th>
                                                                    <th>Rec#</th>
                                                                    <th >agent name</th>
                                                                   <th >customer name</th>
                                                                    
                                                                    <th>Kbtsu</th>
                                                                    <th>Chassis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                                    <th>Make</th>
                                                                    <th>Model</th>
                                                                    <th>Year</th>
                                                                    <th>Month</th>
                                                                    <th>Color</th>
                                                                    <th>Shift</th>
                                                                    <th>Feul</th>
                                                                    <th>Door</th>
                                                                    <th>CC</th>
                                                                    <th style="text-align: center;">Opt.</th>
                                                                    <th>FOB</th>
                                                                    <th>Grd</th>
                                                                    <th>Mileage</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
                                                                    while($rowreserved=mysqli_fetch_array($query_reserved))
                                                                    {
                                                                        $querycar=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$rowreserved[1]."'"));

                                                                        if($querycar >0)
                                                                        {
                                                                ?>
                                                                <tr>
                                                                    <?php 
                                                                   
                                                                    ?>
                                                                    <td><input type="checkbox" /></td>
                                                                    <td><?php echo $rowreserved[1]?></td>
                                                                    <td ><?php echo $rowreserved[12]?></td>
                                                                    <td ><?php echo $rowreserved[4]?></td>

                                                                    <td><?php echo $querycar[14]?></td>
                                                                    <td><?php echo $querycar[2]?></td>
                                                                    <td><?php echo $querycar[3]?></td>
                                                                    <td><?php echo $querycar[4]?></td>
                                                                    <td><?php echo $querycar[6]?></td>
                                                                    <td><?php echo $querycar[14]?></td>
                                                                    <td><?php echo $querycar[8]?></td>
                                                                    <td><?php echo $querycar[9]?></td>
                                                                    <td><?php echo $querycar[10]?></td>
                                                                    <td><?php echo $querycar[11]?></td>
                                                                    <td><?php echo $querycar[13]?></td>
                                                                    <td>
                                                                    <?php 
                                                                        for($i=32;$i<48;$i++)
                                                                        {
                                                                            if(trim($querycar[$i]))
                                                                            {
                                                                                $y=$i+1;
                                                                                echo $querycar[$i].",";
                                                                                
                                                                               
                                                                                
                                                                            }
                                                                        }
                                                                    ?>
                                                                    </td>
                                                                    <td><?php echo $querycar[66]?></td>
                                                                    <td><?php echo $querycar[12]?></td>
                                                                    <td><?php echo $querycar[17]?></td>
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
            <script>
function getcustomer(val)
{
    $.ajax({
	type: "POST",
	url: "reportsajax.php",
	data:'getcustomer_reserved='+val,
	success: function(data){
       // alert(data);
		$("#getcustomer_reserved").html(data);
	}
	});
    var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("get_all_reserved_reports_agent_name");
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

<script>
function getcustomerreserved(val)
{
    
    var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("get_all_reserved_reports_customer_name");
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
<script>
$(document).on('submit','#userForm',function(e){
  
        e.preventDefault();
       
        $.ajax({
        method:"POST",
        url: "allsold.php",
        data:$(this).serialize(),
        success: function(data){
         
        $('#table').html(data);
     

    }});
});
</script>
<?php
include("bottom.php");
?> 
        
