
<?php
include("top.php");
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <form action="indextest.php" method="POST">
                            <div style="background:darkgray; padding-top: 1%; width:101.4%;" class="row">        
                                <div class="col-sm-2">
                                    <label style="margin-top: 3%; margin-left: 10%; font-weight: bold;" class="form-control-label">Agent Name</label>
                                </div>
                                <div  style="margin-left: -6%;" class="col-sm-2">
                                    <select name="stock_agent_name" id="stock_agent_name" required class="form-control form-control-sm">
                                        <option value="">Agent / User Table</option>
                                    </select> 
                                </div>
                                <div class="col-sm-2">
                                    <label style="margin-top: 3%; font-weight: bold;" class="form-control-label">Country</label>
                                </div>
                                <div style="margin-left: -10%;" class="col-sm-2">
                                    <select name="stock_country" id="stock_country" class="form-control form-control-sm" required>
                                        <option value="---">Select Country</option>
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
                                <div class="col-sm-2">
                                    <input style="margin-left: 110%;" type="reset" name="btn-reset" class="mb-2 mr-2 btn btn-gradient-primary btn-block" value="Refresh"> 
                                </div>
                                <div class="col-sm-2">
                                    <input style="margin-left: 110%;" type="submit" name="stock_search_btn" id="stock_search_btn" class="btn mb-2 mr-2 btn btn-gradient-success btn-block" value="Search"> 
                                </div>
                                <!-- <div class="col-sm-2 ">
                                    <select style="margin-left: 20%;" name="stock_all_agent" id="stock_all_agent" required class="form-control form-control-sm">
                                            <option value="">All Cars</option>
                                    </select> 
                                </div>  -->
                            </div> 
                            <div style="box-shadow: none;" class="app-inner-layout__wrapper row-fluid no-gutters">
                                <div class="tab-content app-inner-layout__content card" >
                                    <div id="">
                                        <div class="card">
                                            <div class="card-body">
                                                <div style="margin-top: 0.5%;" class="row">
                                                    <div style="margin-right: -3%;"  class="col-sm-3 input-group input-group-sm">
                                                        <div  class="input-group-prepend">
                                                            <span class="input-group-text wd-70">Rec. No.</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_rec_no" id="get_stock_rec_no" type="text"  class="form-control form-control-sm">
                                                    </div>
                                                    <div style="margin-right: -3%;"  class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text wd-70">Chassis</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_chassis_id" id="get_stock_chassis_id" type="text"  class="form-control">
                                                    </div>
                                                    <div style="margin-right: -3%;" class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text wd-70">Kubotsu</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_kobutsu" id="get_stock_kobutsu" type="text" class="form-control">
                                                    </div>
                                                    <div  class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" style="width:80px">Customer</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_customer_name" id="get_stock_customer_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div style="margin-top: 0.4%;" class="row">
                                                    <div style="margin-right: -3%;" class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text wd-70">Make</span>
                                                        </div>
                                                        <select name="get_stock_make" id="get_stock_make" class="form-control form-control-sm" onChange="getState(this.value);">
                                                            <?php 
                                                                $queryfetchdetails=mysqli_query($connection,"select * from car_make");
                                                            ?>
                                                            <option selected value="">Please Select</option>
                                                                <?php 
                                                                    while($rowfetchdetails=mysqli_fetch_array($queryfetchdetails)){
                                                                ?>
                                                                <option value="<?php echo $rowfetchdetails[0]?>"><?php echo $rowfetchdetails[1]?></option>
                                                                <?php
                                                                    }
                                                                ?>
                                                        </select>                    
                                                    </div>
                                                    <div style="margin-right: -3%;" class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text wd-70">Model</span>
                                                        </div>
                                                        <select name="stock_model" id="model-list"  class="form-control form-control-sm">
                                                            <option  selected value="">Please Select</option>
                                                        </select>
                                                    </div>
                                                    <div style="margin-right: -1.5%;" class="col-sm-2 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text wd-70">Shift</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_shift" id="get_stock_shift" type="text" class="form-control">
                                                    </div>
                                                    <div style="margin-right: -1.5%;" class="col-sm-2 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text wd-70">Year</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_reg_year" id="get_stock_reg_year" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-sm-2 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Color</span>
                                                        </div>
                                                            <input style="font-size: 12px;" name="get_stock_color" id="get_stock_reg_year" type="text" class="form-control">
                                                    </div>
                                                    <h6 style="font-weight: bold;" name="" id="">Results</h6>    
                                                </div>
                                                <div style="margin-top: 0.4%;" class="row">
                                                    <div style="margin-right: -3%;" class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text wd-70">Fuel</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_fuel" id="get_stock_fuel" type="text" class="form-control">
                                                    </div>
                                                    <div style="margin-right: -3%;" class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text wd-70">Vessel</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_vessel_name" id="get_stock_vessel_name" type="text" class="form-control">
                                                    </div>
                                                    <div style="margin-right: -3%;" class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text wd-70">Voyage</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_voyage" id="get_stock_voyage" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"  style="width:80px;">BL No.</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_bl_no" id="get_stock_bl_no" type="text" class="form-control">
                                                    </div> 
                                                    <h6 style="font-weight: bold;" name="get_stock_total_results" id="get_stock_total_results" class="text-primary">1,009</h6>  
                                                </div>
                                                <div style="margin-top: 0.4%;" class="row">
                                                    <div style="margin-right: -2.1%;" class="col-sm-6 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width: 100px;" class="input-group-text">Buy Date</span>
                                                        </div>
                                                        <input name="get_stock_buying_date" id="get_stock_buying_date" style="background: #ff9900; " class="btn form-control form-control-sm js-daterangepicker"  >
                                                    </div>
                                                    <div class="col-sm-6 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width: 100px;" class="input-group-text">Rsrv Date</span>
                                                        </div>
                                                        <input style="background: #ff9900;" name="" id="" class="btn form-control form-control-sm js-daterangepicker"  >
                                                    </div>   
                                                </div>
                                                <div style="margin-top: 0.4%;" class="row">
                                                    <div style="margin-right: -2.1%;" class="col-sm-6 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width: 100px;" class="input-group-text">Ship Ok Date</span>
                                                        </div>
                                                        <input name="get_stock_ship_ok_date" id="get_stock_ship_ok_date" style="background: #ff9900;" class="btn form-control form-control-sm js-daterangepicker"  >
                                                    </div>
                                                    <div class="col-sm-6 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width: 100px;" class="input-group-text">Rel. OK Date</span>
                                                        </div>
                                                        <input name="get_stock_release_ok_date" id="get_stock_release_ok_date" style="background: #ff9900;" class="btn form-control form-control-sm js-daterangepicker"  >
                                                    </div>
                                                </div>
                                                <div style="margin-top: 0.4%; " class="row ">
                                                    <div style="margin-right: 5%;"  class="col-md-1">
                                                    </div>
                                                    <div class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Price</label> 
                                                        <select name="get_stock_buying_date" id="get_stock_buying_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div style="margin-left: -2.5%;" class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">InYard</label> 
                                                        <select name="get_stock_inyard_date" id="get_stock_inyard_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div style="margin-left: -2.5%;" class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Rsrv</label> 
                                                        <select name="get_stock_reserve_date" id="get_stock_reserve_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div style="margin-left: -2.5%;" class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Sure</label>
                                                        <select name="get_stock_sure_ok_date" id="get_stock_sure_ok_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>                                                            </select>
                                                    </div>
                                                    <div style="margin-left: -2.5%;" class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Sold</label> 
                                                        <select name="get_stock_sold_date" id="get_stock_sold_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div style="margin-left: -2.5%;" class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Paid</label> 
                                                        <select name="get_stock_payment_status" id="get_stock_payment_status" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>                                                            </select>
                                                    </div>
                                                    <div style="margin-left: -2.5%;" class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">ShipOK</label> 
                                                        <select name="get_stock_ship_ok_date" id="stock_ship_ok_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div style="margin-left: -2.5%;" class="col-md-1">
                                                        <label style="padding: 5px;" class="input-group-text">S/O</label> 
                                                        <select name="get_stock_shipping_order_file" id="get_stock_shipping_order_file" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div style="margin-left: -2.5%;" class="col-md-1">
                                                        <label style="padding: 5px;" class="input-group-text">B/L</label> 
                                                        <select name="get_stock_bl_date" id="get_stock_bl_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div style="margin-left: -2.5%;" class="col-md-1">
                                                        <label style="padding: 5px;" class="input-group-text">Rel-req</label> 
                                                        <select name="get_stock_bl_date" id="get_stock_bl_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div style="margin-left: -2.5%;" class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Rel OK</label> 
                                                        <select name="get_stock_release_ok_date" id="get_stock_release_ok_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div style="margin-left: -2.5%;" class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Rel</label> 
                                                        <select name="get_stock_dhl_date" id="get_stock_dhl_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div style="margin-top: 0.4%;" class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-8 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Select Dt.</span>
                                                        </div>
                                                        <input style="background: wheat;" name="get_stock_select_all_dates" id="get_stock_select_all_dates" class="btn form-control form-control-sm js-daterangepicker"  >
                                                    </div>
                                                    <div class="col-sm-2"></div> 
                                                </div>     
                                            </div> 
                                        </div>
                                        <div style="background-color: gray; height: 1px;"></div> 
                                        <!-- <div data-parent="#accordion" id="show-records" aria-labelledby="headingOne" class="collapse ">
                                            <div style="margin-left: -71px;" class="container">
                                                <div class="row ">
                                                    <div style="margin-left:6.5%;" class="col-lg-12 mt-3">
                                                        <a data-toggle="collapse" data-target="#back-to-search" aria-expanded="true" aria-controls="collapseOne" class="btn btn-primary text-center text-white">Back to Search</a>
                                                        <div class="main-card card mt-2">
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr class="text-center">
                                                                                <th>Select all </br><input type="checkbox" onclick="toggle(this);" /></th>
                                                                                <th>Price</th>
                                                                                <th>Inyrd</th>
                                                                                <th>Rsrv</th>
                                                                                <th>Sure</th>
                                                                                <th>Sold</th>
                                                                                <th>Ship ok</th>
                                                                                <th>Ship Invoice</th>
                                                                                <th>BL</th>
                                                                                <th>RL rq</th>
                                                                                <th>RL ok</th>
                                                                                <th>RL</th>
                                                                                <th>Certificate</th>
                                                                                <th>DHL</th>
                                                                                <th>Rec#</th>
                                                                                <th>Pics</th>
                                                                                <th>Kbtsu</th>
                                                                                <th>Chassis</th>
                                                                                <th>Make</th>
                                                                                <th>Model</th>
                                                                                <th>Year</th>
                                                                                <th>Mth</th>
                                                                                <th>Color</th>
                                                                                <th>Sft</th>
                                                                                <th>Feul</th>
                                                                                <th>Door</th>
                                                                                <th>CC</th>
                                                                                <th>Opt.</th>
                                                                                <th>FOB</th>
                                                                                <th>Grd</th>
                                                                                <th>Mileage</th>
                                                                            </tr> 
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><input type="checkbox"/></td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td>4321</td>
                                                                                <td>5</td>
                                                                                <td>KEN</td>
                                                                                <td>BHJ-25465456</td>
                                                                                <td>NISSAN</td>
                                                                                <td>Juke</td>
                                                                                <td>2020</td>
                                                                                <td>Apr</td>
                                                                                <td>Pearl White</td>
                                                                                <td>Dual</td>
                                                                                <td>Gasoline</td>
                                                                                <td>4</td>
                                                                                <td>1400cc</td>
                                                                                <td>PS,NV,AC,WAB,RS,TV,RR,ABS,LS,PW,SR,FOG,AB,GG,BT,LS</td>
                                                                                <td>9,80,000</td>
                                                                                <td>4</td>
                                                                                <td>98,000KM</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="checkbox"/></td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td>4321</td>
                                                                                <td>5</td>
                                                                                <td>KEN</td>
                                                                                <td>BHJ-25465456</td>
                                                                                <td>NISSAN</td>
                                                                                <td>Juke</td>
                                                                                <td>2020</td>
                                                                                <td>Apr</td>
                                                                                <td>Pearl White</td>
                                                                                <td>Dual</td>
                                                                                <td>Gasoline</td>
                                                                                <td>4</td>
                                                                                <td>1400cc</td>
                                                                                <td>PS,NV,AC,WAB,RS,TV,RR,ABS,LS,PW,SR,FOG,AB,GG,BT,LS</td>
                                                                                <td>9,80,000</td>
                                                                                <td>4</td>
                                                                                <td>98,000KM</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="checkbox"/></td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td style="color: #ff9900; font-weight: bolder; background: wheat; ">&checkmark;</td>
                                                                                <td>4321</td>
                                                                                <td>5</td>
                                                                                <td>KEN</td>
                                                                                <td>BHJ-25465456</td>
                                                                                <td>NISSAN</td>
                                                                                <td>Juke</td>
                                                                                <td>2020</td>
                                                                                <td>Apr</td>
                                                                                <td>Pearl White</td>
                                                                                <td>Dual</td>
                                                                                <td>Gasoline</td>
                                                                                <td>4</td>
                                                                                <td>1400cc</td>
                                                                                <td>PS,NV,AC,WAB,RS,TV,RR,ABS,LS,PW,SR,FOG,AB,GG,BT,LS</td>
                                                                                <td>9,80,000</td>
                                                                                <td>4</td>
                                                                                <td>98,000KM</td>
                                                                            </tr>   
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div> -->
                                    </div>  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<script>
    function getState(val) {
    // alert(val);
        $.ajax({
        type: "POST",
        url: "regiondropdown.php",
        data:'make_id='+val,
        success: function(data){
            $("#model-list").html(data);
        }
        });
    }
</script>
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