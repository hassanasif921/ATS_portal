<?php
include("top.php");
include("connection_db.php");
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <form action="indextest.php" method="POST">
                            <div style="background:darkgray; padding-top: 1%; padding-bottom: 1.2%;" class="container row">        
                                <div class="col-sm-1">
                                    <label style="margin-top: 5%; font-weight: bold;" class="form-control-label">Agent</label>
                                </div>
                                <div style="margin-left: -4%;" class="col-sm-2 ">
                                    <select name="stock_agent_name" id="stock_agent_name" class="form-control form-control-sm">
                                        <option value="">Agent / User Table</option>
                                    </select> 
                                </div>
                                <div class="col-sm-1">
                                    <label style="margin-top: 5%; font-weight: bold;" class="form-control-label">Country</label>
                                </div>
                                <div style="margin-left: -2.5%;" class="col-sm-2">
                                    <select name="stock_country" id="stock_country" class="form-control form-control-sm">
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
                                    <input style="margin-left: 20%;" type="reset" name="btn-reset" class="mb-2 mr-2 btn btn-gradient-primary btn-block" value="Refresh"> 
                                </div>
                                <div class="col-sm-2">
                                    <input style="margin-left: 30%;" type="submit" name="stock_search_btn" id="stock_search_btn" class="btn mb-2 mr-2 btn btn-gradient-success btn-block" value="Search">    
                                </div>
                                <div class="col-sm-2 ">
                                    <select style="margin-left: 50%;" name="stock_all_agent" id="stock_all_agent" class="form-control form-control-sm">
                                        <option value="All Cars">All Cars</option>
                                        <option value="All Reserved">All Reserved</option>
                                        <option value="All Sold">All Sold</option>
                                        <option value="All Paid">All Paid</option>
                                    </select> 
                                </div>
                            </div> 
                            <div style="margin-top: -1.2%; box-shadow: none;" class="app-inner-layout__wrapper row-fluid no-gutters">
                                <div class="tab-content app-inner-layout__content card">
                                    <div id="accordion">
                                        <div data-parent="#accordion" id="back-to-search" aria-labelledby="headingOne" class="collapse show" style="box-shadow: none;" id="car-search" role="tabpanel" class="tab-pane active container card">
                                            <div class="card-body">
                                                <div style="margin-top: 0.5%;" class="row">
                                                    <div  class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="background: lightgray" class="input-group-text">Rec. No.</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_rec_no" id="get_stock_rec_no" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Kubotsu</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_kobutsu" id="get_stock_kobutsu" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Chassis</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_chassis_id" id="get_stock_chassis_id" type="text" class="form-control">
                                                    </div>  
                                                    <div class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Customer</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_customer_name" id="get_stock_customer_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div style="margin-top: 0.4%;" class="row">
                                                    <div class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width: 68px;" class="input-group-text">Make</span>
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
                                                    <div class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width:68px;" class="input-group-text">Model</span>
                                                        </div>
                                                        <select name="stock_model" id="model-list" class="form-control form-control-sm">
                                                            <option  selected value="">Please Select</option>
                                                         </select>
                                                    </div>
                                                    <div class="col-sm-2 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Shift</span>
                                                        </div>
                                                        <select name="get_stock_shift" id="get_stock_shift" class="form-control form-control-sm">
                                                            <option value="">Select</option>    
                                                            <option value="Automatic">Automatic</option>
                                                            <option value="Manual">Manual</option> 
                                                            <option value="Dual">Dual</option>
                                                        </select> 
                                                    </div>
                                                    <div class="col-sm-2 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Year</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_reg_year" id="get_stock_reg_year" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-sm-2 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Color</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_color" id="get_stock_color" type="text" class="form-control">
                                                    </div>
                                                    <!-- <div style="background: lightgray;" class="">
                                                        <h6 style="font-weight: bold;" name="" id="">Results</h6>
                                                    </div> -->
                                                </div>
                                                <div style="margin-top: 0.4%;" class="row">
                                                    <div class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width:68px;" class="input-group-text">Fuel</span>
                                                        </div>
                                                        <select name="stock_fuel" id="stock_fuel" class="form-control form-control-sm">
                                                            <option value="">Select</option>    
                                                            <option value="GASOLINE">GASOLINE</option>
                                                            <option value="DIESEL">DIESEL</option> 
                                                            <option value="HYBRID">HYBRID</option>
                                                        </select>  
                                                    </div>
                                                    <div class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width:68px;" class="input-group-text">Vessel</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_vessel_name" id="get_stock_vessel_name" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Voyage</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_voyage" id="get_stock_voyage" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-sm-3 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width:80px;" class="input-group-text">BL No.</span>
                                                        </div>
                                                        <input style="font-size: 12px;" name="get_stock_bl_no" id="get_stock_bl_no" type="text" class="form-control">
                                                    </div> 
                                                    
                                                </div>
                                                <div style="margin-top: 0.4%;" class="row">
                                                    <div class="col-sm-6 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span  class="input-group-text">Buy Date</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <input style="background: #ff9900; width:162px;" name="get_stock_buying_date_from" id="get_stock_buying_date_from" placeholder="From"  class="form-control form-control input-mask-trigger"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <p style="margin-left:-49%;" >TO</p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <input style="margin-left:-47%; width:236px; background: #ff9900;" name="get_stock_buying_date_till" id="get_stock_buying_date_till" placeholder="Till" class="form-control form-control input-mask-trigger"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width: 100px;" class="input-group-text">Reserve Date</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input name="get_stock_reserve_ok_date_from" id="get_stock_reserve_ok_date_from" placeholder="From" style="background: #ff9900;" class="form-control form-control-sm input-mask-trigger"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input name="get_stock_reserve_ok_date_till" id="get_stock_reserve_ok_date_till" placeholder="Till" style="background: #ff9900;" class="form-control form-control-sm input-mask-trigger"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                    </div>   
                                                </div>
                                                <div style="margin-top: 0.4%;" class="row">
                                                    <div class="col-sm-6 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width: 100px;" class="input-group-text">Ship Ok Date</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input name="get_stock_ship_ok_date_from" id="get_stock_ship_ok_date_from" placeholder="From" style="background: #ff9900;" class="form-control form-control-sm input-mask-trigger"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input name="get_stock_ship_ok_date_till" id="get_stock_ship_ok_date_till" placeholder="Till" style="background: #ff9900;" class="form-control form-control-sm input-mask-trigger"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-sm-6 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span style="width: 100px;" class="input-group-text">Rel. OK Date</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input name="get_stock_release_ok_date_from" id="get_stock_release_ok_date_from" placeholder="From" style="background: #ff9900;" class="form-control form-control-sm input-mask-trigger"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input name="get_stock_release_ok_date_till" id="get_stock_release_ok_date_till" placeholder="Till" style="background: #ff9900;" class="form-control form-control-sm input-mask-trigger"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="margin-top: 0.4%;" class="row">
                                                    
                                                    <div class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Price</label> 
                                                        <select style="padding: 2px;" name="get_stock_buying_date" id="get_stock_buying_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">InYard</label> 
                                                        <select style="padding: 2px;" name="get_stock_inyard_date" id="get_stock_inyard_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Reserve</label> 
                                                        <select style="padding: 2px;" name="get_stock_reserve_date" id="get_stock_reserve_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Sure</label>
                                                        <select style="padding: 2px;" name="get_stock_sure_ok_date" id="get_stock_sure_ok_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Sold</label> 
                                                        <select style="padding: 2px;" name="get_stock_sold_date" id="get_stock_sold_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">Paid</label> 
                                                        <select style="padding: 2px;" name="get_stock_payment_status" id="get_stock_payment_status" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1 ">
                                                        <label style="padding: 5px;" class="input-group-text">ShipOK</label> 
                                                        <select style="padding: 2px;" name="get_stock_ship_ok_date" id="stock_ship_ok_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>                                                            
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label style="padding: 5px;" class="input-group-text">S/O</label> 
                                                        <select style="padding: 2px;" name="get_stock_shipping_order_file" id="get_stock_shipping_order_file" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label style="padding: 5px;" class="input-group-text">B/L</label> 
                                                        <select style="padding: 2px;" name="get_stock_bl_date" id="get_stock_bl_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label style="padding: 5px;" class="input-group-text">Rel-req</label> 
                                                        <select style="padding: 2px;" name="get_stock_bl_date" id="get_stock_bl_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label style="padding: 5px;" class="input-group-text">Rel. OK</label> 
                                                        <select style="padding: 2px;" name="get_stock_release_ok_date" id="get_stock_release_ok_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label style="padding: 5px;" class="input-group-text">Release</label> 
                                                        <select style="padding: 2px;" name="get_stock_dhl_date" id="get_stock_dhl_date" class="form-control form-control-sm">
                                                            <option>--</option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div style="margin-top: 0.4%;" class="row">
                                                    <div class="col-sm-3"></div>
                                                    <div class="col-sm-6 input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Select Dt.</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input style="background: #ff9900; width:160px;" name="get_stock_select_all_dates_from" id="get_stock_select_all_dates_from" placeholder="From"  class="form-control form-control-sm input-mask-trigger"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input style="margin-left:-20%; background: #ff9900; width:148px;" name="get_stock_select_all_dates_till" id="get_stock_select_all_dates_till" placeholder="Till"  class="form-control form-control-sm input-mask-trigger"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                        <!-- <input style="background: wheat;" name="get_stock_select_all_dates" id="get_stock_select_all_dates" class="btn form-control form-control-sm js-daterangepicker"> -->
                                                    </div>
                                                    <div class="col-sm-3"></div> 
                                                </div>     
                                            </div> 
                                        </div>
                                        <div style="background-color: gray; height: 1px;"></div>
                                        <!-- <div data-parent="#accordion" id="show-records" aria-labelledby="headingOne" class="collapse">
                                            <div class="card-body">
                                                <a data-toggle="collapse" data-target="#back-to-search" aria-expanded="true" aria-controls="collapseOne" class="btn btn-primary text-center text-white">Back to Search</a>
                                                <div style="margin-left: -35px;" class="container">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="main-card card">
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <table style="font-size: 10px;" class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Slct all<input type="checkbox" onclick="toggle(this);" /></th>
                                                                                        <th>Price</th>
                                                                                        <th>Inyrd</th>
                                                                                        <th>Rsrv</th>
                                                                                        <th>Sure</th>
                                                                                        <th>Sold</th>
                                                                                        <th>Shok</th>
                                                                                        <th>Shinv</th>
                                                                                        <th>Bl</th>
                                                                                        <th>RLrq</th>
                                                                                        <th>RLok</th>
                                                                                        <th>RL</th>
                                                                                        <th>Crfct</th>
                                                                                        <th>Dhl</th>
                                                                                        <th>Rec#</th>
                                                                                        <th>Pics</th>
                                                                                        <th>Kbtsu</th>
                                                                                        <th>Chassis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                                                        <th>Make</th>
                                                                                        <th>Model</th>
                                                                                        <th>Year</th>
                                                                                        <th>Mth</th>
                                                                                        <th>Color</th>
                                                                                        <th>Sft</th>
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
                                                                                    $queryca=mysqli_query($connection,"select * from ats_car_stock");

                                                                                    
                                                                                        while($rowca=mysqli_fetch_array($queryca))
                                                                                        {
                                                                                        ?>
                                                                                    <tr>
                                                                                       
                                                                                        <td><input type="checkbox" /></td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;"><?php echo $rowca[28]?></td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat;">&checkmark;</td>
                                                                                        
                                                                                        <td><?php echo $rowca[1]?></td>
                                                                                        <td>5</td>
                                                                                        <td><?php echo $rowca[14]?></td>
                                                                                        <td><?php echo $rowca[2]?></td>
                                                                                        <td><?php echo $rowca[3]?></td>
                                                                                        <td><?php echo $rowca[4]?></td>
                                                                                        <td><?php echo $rowca[6]?></td>
                                                                                        <td>--</td>
                                                                                        <td><?php echo $rowca[8]?></td>
                                                                                        <td><?php echo $rowca[9]?></td>
                                                                                        <td><?php echo $rowca[10]?></td>
                                                                                        <td><?php echo $rowca[11]?></td>
                                                                                        <td><?php echo $rowca[13]?></td>
                                                                                        <td><?php echo $rowca[32] .",".$rowca[34]?></td>
                                                                                        <td><?php echo $rowca[51]?></td>
                                                                                        <td><?php echo $rowca[12]?></td>
                                                                                        <td><?php echo $rowca[17]?></td>
                                                                                    </tr>
                                                                                <?php }?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
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
