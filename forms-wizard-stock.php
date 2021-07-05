<?php
include("top.php");
include("connection_db.php");

if (isset($_POST["stock_btn"])) {
    $stock_rec_no = $_POST["stock_rec_no"];
    $stock_chassis_id = $_POST["stock_chassis_id"];
    $stock_make = $_POST["stock_make"];
    $stock_model = $_POST["stock_model"];
    $stock_package = $_POST["stock_package"];
    $stock_man_year = $_POST["stock_man_year"];
    $stock_reg_year = $_POST["stock_reg_year"];
    $stock_color = $_POST["stock_color"];
    $stock_shift = $_POST["stock_shift"];
    $stock_fuel = $_POST["stock_fuel"];
    $stock_door = $_POST["stock_door"];
    $stock_grade = $_POST["stock_grade"];
    $stock_engine_size = $_POST["stock_engine_size"];
    $stock_kobutsu = $_POST["stock_kobutsu"];
    $stock_engine_no = $_POST["stock_engine_no"];
    $stock_seats = $_POST["stock_seats"];
    $stock_mileage_1 = $_POST["stock_mileage_1"];
    $stock_mileage_2 = $_POST["stock_mileage_2"];
    $stock_length = $_POST["stock_length"];
    $stock_width = $_POST["stock_width"];
    $stock_height = $_POST["stock_height"];
    $stock_cubic_meter = "97";
    $stock_weight = $_POST["stock_weight"];
    $stock_total_weight = $_POST["stock_total_weight"];
    $stock_max_loading = $_POST["stock_max_loading"];
    $stock_auction = $_POST["stock_auction"];
    $stock_lot_no = $_POST["stock_lot_no"];
    $stock_buying_price = $_POST["stock_buying_price"];
    $stock_buying_date = $_POST["stock_buying_date"];
    $stock_country_location = $_POST["stock_country_location"];
    $stock_city_location = $_POST["stock_city_location"];
    $stock_option_ps = isset($_POST['stock_option_ps']) ? $_POST['stock_option_ps'] : "no";
    $stock_option_nv = isset($_POST['stock_option_nv']) ? $_POST['stock_option_nv'] : "no";
    $stock_option_ac = isset($_POST['stock_option_ac']) ? $_POST['stock_option_ac'] : "no";
    $stock_option_wab = isset($_POST['stock_option_wab']) ? $_POST['stock_option_wab'] : "no";
    $stock_option_rs = isset($_POST['stock_option_rs']) ? $_POST['stock_option_rs'] : "no";
    $stock_option_tv = isset($_POST['stock_option_tv']) ? $_POST['stock_option_tv'] : "no";
    $stock_option_rr = isset($_POST['stock_option_rr']) ? $_POST['stock_option_rr'] : "no";
    $stock_option_abs = isset($_POST['stock_option_abs']) ? $_POST['stock_option_abs'] : "no";
    $stock_option_ls = isset($_POST['stock_option_ls']) ? $_POST['stock_option_ls'] : "no";
    $stock_option_pw = isset($_POST['stock_option_pw']) ? $_POST['stock_option_pw'] : "no";
    $stock_option_sr = isset($_POST['stock_option_sr']) ? $_POST['stock_option_sr'] : "no";
    $stock_option_fog = isset($_POST['stock_option_fog']) ? $_POST['stock_option_fog'] : "no";
    $stock_option_ab = isset($_POST['stock_option_ab']) ? $_POST['stock_option_ab'] : "no";
    $stock_option_gg = isset($_POST['stock_option_gg']) ? $_POST['stock_option_gg'] : "no";
    $stock_option_bt = isset($_POST['stock_option_bt']) ? $_POST['stock_option_bt'] : "no";
    $stock_option_aw = isset($_POST['stock_option_aw']) ? $_POST['stock_option_aw'] : "no";
    $stock_other_options = $_POST["stock_other_options"];
    $stock_buying_price_print = "09";
    $stock_radiation_charges = $_POST["stock_radiation"];
    $stock_auction_charges = $_POST["stock_auction_charges"];
    $stock_rikuso_charges = $_POST["stock_rikuso_charges"];
    $stock_fob_charges = $_POST["stock_fob_charges"];
    $stock_storage_charges = $_POST["stock_storage_charges"];
    $stock_dhl_charges = $_POST["stock_dhl_charges"];
    $stock_thc_charges = $_POST["stock_thc_charges"];
    $stock_vainning_charges = $_POST["stock_vainning_charges"];
    $stock_inspection_charges = $_POST["stock_inspection_charges"];
    $stock_freight_charges = $_POST["stock_freight_charges"];
    $stock_other_charges = $_POST["stock_other_charges"];
    $stock_profit = $_POST["stock_profit"];
    $stock_discount_print = "ass";
    $stock_total_profit_print = "ada";
    $stock_your_profit_print = "09";
    $stock_ats_profit_print = "9";
    $stock_fob_price_print_yen = "9";
    $stock_cnf_price_print_yen = "9";
    $stock_fob_price_print_dollar = "9";
    $stock_cnf_price_print_dollar = '9';
    $stock_buying_date_print = "9";
    //$stock_auction_sheet_file = $_FILES["stock_auction_sheet_file"]['name'];
    $stock_auction_sheet_file = 'demo';
    //$temp_name = $_FILES["stock_auction_sheet_file"]["tmp_name"];
    $temp_name ='demo';
    //$stock_auction_pictures = $_FILES["stock_auction_pictures"]['name'];
    $stock_auction_pictures = 'demo';
    //$temp_name = $_FILES["stock_auction_pictures"]["tmp_name"];
    $temp_name = 'demo';
    $stock_masso_date = $_POST["stock_masso_date"];
   // $stock_export_cerificate_jp_file = $_FILES["stock_export_cerificate_jp_file"];
   $stock_export_cerificate_jp_file ='demo';
   // $temp_name = $_FILES["stock_export_cerificate_jp_file"]["tmp_name"];
    $stock_export_cerificate_en_file = $_FILES["stock_export_cerificate_en_file"];
    //$temp_name = $_FILES["stock_export_cerificate_en_file"]["tmp_name"];
    $stock_inyard_date = $_POST["stock_inyard_date"];
    $stock_yard_pictures = $_FILES["stock_yard_pictures"]['name'];
    $stock_yard_pictures ='demo';
    //$temp_name = $_FILES["stock_yard_pictures"]["tmp_name"];
    $stock_reserve_date = $_POST["stock_reserve_date"];
    //$stock_invoice_file = $_FILES["stock_invoice_file"]['name'];
    $stock_invoice_file = 'demo';
   // $temp_name = $_FILES["stock_invoice_file"]["tmp_name"];
    $stock_sure_ok_date = $_POST["stock_sure_ok_date"];
   // $stock_tt_copy_file = $_FILES["stock_tt_copy_file"]['name'];
   $stock_tt_copy_file ='demo'; 
   //$temp_name = $_FILES["stock_tt_copy_file"]["tmp_name"];
    $stock_ship_date = $_POST["stock_ship_date"];
    $stock_vessel_name = $_POST["stock_vessel_name"];
    $stock_voyage = $_POST["stock_voyage"];
    $stock_ship_ok_date = $_POST["stock_ship_ok_date"];
    //$stock_shipping_invoice_file = $_FILES["stock_shipping_invoice_file"]['name'];
    $stock_shipping_invoice_file='demo';
    // $temp_name = $_FILES["stock_shipping_invoice_file"]["tmp_name"];
    //$stock_shipping_order_file = $_FILES["stock_shipping_order_file"]['name'];
    $stock_shipping_order_file ='demo';
   // $temp_name = $_FILES["stock_shipping_order_file"]["tmp_name"];
    $stock_bl_date = $_POST["stock_bl_date"];
    $stock_bl_no = $_POST["stock_bl_no"];
   // $stock_bill_of_lading_file = $_FILES["stock_bill_of_lading_file"]['name'];
   $stock_bill_of_lading_file ='demo'; 
   //$temp_name = $_FILES["stock_bill_of_lading_file"]["tmp_name"];
    $stock_release_ok_date = $_POST["stock_release_ok_date"];
    //$stock_bal_tt_copy_file = $_FILES["stock_balance_tt_copy_file"]['name'];
    $stock_bal_tt_copy_file ='demo';
    //$temp_name = $_FILES["stock_balance_tt_copy_file"]["tmp_name"];
    $stock_dhl_date = $_POST["stock_dhl_date"];
    $stock_tracking_number = $_POST["stock_tracking_number"];
    $stock_dhl_link = $_POST["stock_dhl_link"];
    $stock_inspection_date = $_POST["stock_inspection_date"];
    $stock_inspection_certificate_file = $_FILES["stock_inspection_certificate_file"]['name'];
    $stock_inspection_certificate_file ='demo';
    // $temp_name = $_FILES["stock_inspection_certificate_file"]["tmp_name"];
    $stock_createdBy = "username";
    $stock_createdAt = time();
    $stock_updatedBy = "username";
    $stock_updatedAt = time();
    $stock_status = "active";

    $Location = "assets\images";
    // $stock_auction_pictures_call=implode(",",$stock_auction_pictures);
    // $stock_yard_pictures_call=implode(",",$stock_yard_pictures);
    
   // if (!empty($_FILES["stock_auction_sheet_file"]["name"]) )  {
      //  if(move_uploaded_file($temp_name,$Location.$stock_auction_sheet_file)) {
            $insert = "insert into ats_car_stock(ats_car_stock_rec_no,ats_car_stock_chassic_no,ats_car_stock_make,ats_car_stock_model,ats_car_stock_pkg,ats_car_stock_man_year,ats_car_stock_reg_year,ats_car_stock_color,ats_car_stock_shift,ats_car_stock_fuel,ats_car_stock_door,ats_car_stock_grade,ats_car_stock_engine_size,ats_car_stock_kobutsu,ats_car_stock_engine_no,ats_car_stock_seats,ats_car_stock_mileage_1,ats_car_stock_mileage_2,ats_car_stock_length,ats_car_stock_width,ats_car_stock_height,ats_car_stock_cubic_meter,ats_car_stock_weight,ats_car_stock_total_weight,ats_car_stock_max_loading,ats_car_stock_auction_house,ats_car_stock_lot_no,ats_car_stock_buying_price,ats_car_stock_buying_date,ats_car_stock_country_location,ats_car_stock_city_location,ats_car_stock_option_ps,ats_car_stock_option_nv,ats_car_stock_option_ac,ats_car_stock_option_wab,ats_car_stock_option_rs,ats_car_stock_option_tv,ats_car_stock_option_rr,ats_car_stock_option_abs,ats_car_stock_option_ls,ats_car_stock_option_pw,ats_car_stock_option_sr,ats_car_stock_option_fog,ats_car_stock_option_ab,ats_car_stock_option_gg,ats_car_stock_option_bt,ats_car_stock_option_aw,ats_car_stock_other_option,ats_car_stock_auction_fees,ats_car_stock_rikuso,ats_car_stock_fob_charge,ats_car_stock_storage_charge,ats_car_stock_dhl_charge,ats_car_stock_radiation,ats_car_stock_thc_charge,ats_car_stock_vaining_charge,ats_car_stock_inspection_charge,ats_car_stock_freight_charge,ats_car_stock_other_charge,ats_car_stock_profit,ats_car_stock_discount,ats_car_stock_total_profit,ats_car_stock_your_profit,ats_car_stock_ats_profit,ats_car_stock_fob_price_yen,ats_car_stock_fob_price_us,ats_car_stock_cnf_price_yen,ats_car_stock_cnf_price_us,ats_car_stock_auction_sheet,ats_car_stock_auction_pics,ats_car_stock_masso_date,ats_car_stock_exp_cer_jp,ats_car_stock_exp_cer_eng,ats_car_stock_inyard_date,ats_car_stock_inyard_pictures,ats_car_stock_reserve_date,ats_car_stock_invoice_file,ats_car_stock_sure_ok_date,ats_car_stock_tt_copy_file,ats_car_stock_ship_date,ats_car_stock_vessel_name,ats_car_stock_voyage,ats_car_stock_ship_ok_date,ats_car_stock_ship_invoice_file,ats_car_stock_ship_order_file,ats_car_stock_bl_date,ats_car_stock_bl_number,ats_car_stock_bl_file,ats_car_stock_release_ok_date,ats_car_stock_bal_tt_copy_file,ats_car_stock_dhl_date,ats_car_stock_tracking_number,ats_car_stock_dhl_link,ats_car_stock_inspection_date,ats_car_stock_inspection_cer_file,ats_car_stock_createdBy,ats_car_stock_createdAt,ats_car_stock_updatedBy,ats_car_stock_updatedAt,ats_car_stock_status) 
                values('$stock_rec_no','$stock_chassis_id','$stock_make','$stock_model','$stock_package',
                '$stock_man_year','$stock_reg_year','$stock_color','$stock_shift','$stock_fuel','$stock_door','$stock_grade','$stock_engine_size','$stock_kobutsu','$stock_engine_no','$stock_seats','$stock_mileage_1','$stock_mileage_2','$stock_length','$stock_width','$stock_height','$stock_cubic_meter','$stock_weight','$stock_total_weight','$stock_max_loading','$stock_auction','$stock_lot_no','$stock_buying_price','$stock_buying_date','$stock_country_location','$stock_city_location','$stock_option_ps','$stock_option_nv',
                '$stock_option_ac','$stock_option_wab','$stock_option_rs','$stock_option_tv','$stock_option_rr','$stock_option_abs','$stock_option_ls','$stock_option_pw',
                '$stock_option_sr','$stock_option_fog','$stock_option_ab','$stock_option_gg','$stock_option_bt','$stock_option_aw','$stock_other_options','$stock_auction_charges','$stock_rikuso_charges','$stock_fob_charges','$stock_storage_charges','$stock_dhl_charges','$stock_radiation_charges','$stock_thc_charges','$stock_vainning_charges','$stock_inspection_charges','$stock_freight_charges','$stock_other_charges','$stock_profit','$stock_discount_print','$stock_total_profit_print','$stock_your_profit_print','$stock_ats_profit_print','$stock_fob_price_print_yen','$stock_fob_price_print_dollar','$stock_cnf_price_print_yen','$stock_cnf_price_print_dollar','$stock_auction_sheet_file','$stock_auction_pictures','$stock_masso_date','$stock_export_cerificate_jp_file','$stock_export_cerificate_en_file','$stock_inyard_date','$stock_yard_pictures','$stock_reserve_date','$stock_invoice_file','$stock_sure_ok_date','$stock_tt_copy_file','$stock_ship_date','$stock_vessel_name','$stock_voyage','$stock_ship_ok_date','$stock_shipping_invoice_file','$stock_shipping_order_file','$stock_bl_date','$stock_bl_no','$stock_bill_of_lading_file','$stock_release_ok_date','$stock_tt_copy_file','$stock_dhl_date','$stock_tracking_number','$stock_dhl_link','$stock_inspection_date','$stock_inspection_certificate_file','$stock_createdBy','$stock_createdAt','$stock_updatedBy','$stock_updatedAt','$stock_status')";
              $query = mysqli_query($connection,$insert) or die(mysqli_error($connection));
              echo $query; 
              // if ($query)
              //  {
                    echo '<script type="text/javascript"> alert("Employee Register Successfully")</script>';
                    // echo '<script language="javascript">window.location.href ="employee-records.php"</script>';
              //  }
            //     else
            //     {
            //         //echo '<script type="text/javascript"> alert("opps !! not inserted")</script>';
            //      echo(`<script type="text/javascript">alert('hello')</script>`);
            //     }

            // }
            // else
         //   {
      //          echo `<script type="text/javascript">alert('not fill')</script>`;
           //     echo '<script type="text/javascript"> console.log('mysqli_error($connection)')</script>';
       //     }
        // foreach ($stock_auction_pictures as $key => $val) {
        //     $targetFilePath = $Location . $val;
        //     move_uploaded_file($_FILES["stock_auction_pictures"]["tmp_name"],$_FILES["stock_yard_pictures"]['tmp_name'][$key],$targetFilePath);
        //     }
  //  }
  //  else
  //  {
 //       echo '<script type="text/javascript"> alert("Please Choose a file")</script>';
        
  //  }						

//}

}

?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <form action="" method="post" enctype="multipart/form-data"> 
                                            <div id="smartwizard">
                                                <ul class="forms-wizard">
                                                    <li>
                                                        <a href="#step-1">
                                                            <em>1</em><span>Car Details</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-2">
                                                            <em>2</em><span>Car Calculation</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-3">
                                                            <em>3</em><span>Status / File / Docs Update</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-4">
                                                            <em>4</em><span>Finish Vizard</span>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                                <div class="form-wizard-content">
                                                    <div id="step-1">
                                                            <div class="form-row"> 
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Rec. No.</label>
                                                                        <input type="text" id="stock_rec_no" name="stock_rec_no" class="form-control"   placeholder="Record No.">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Chassis ID</label>
                                                                        <input  type="text" id="stock_chassis_id" name="stock_chassis_id"   class="form-control" placeholder="Enter Price">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Make</label>
                                                                        <select name="stock_make" id="stock_make"   
                onChange="getState(this.value);" class="form-control">
                                                                        <?php 
                                                                        $queryfetchdetails=mysqli_query($connection,"select * from car_make");
                                                                       
                                                                        ?>
                                                                            <option disabled selected>Please Select</option>

                                                                           <?php 
                                                                           while($rowfetchdetails=mysqli_fetch_array($queryfetchdetails)){
                                                                               ?>
                                                                            <option value="<?php echo $rowfetchdetails[0]?>"><?php echo $rowfetchdetails[1]?></option>

                                                                               <?php
                                                                           }
                                                                           ?>
                                                                        </select>  
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group">
                                                                        <label  class="form-control-label">Model</label>
                                                                        <select name="stock_model" id="model-list"  class="form-control">
                                                                        <option disabled selected>Please Select</option>
</select>
                                                                   
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <label class="form-control-label">Package</label>
                                                                    <input  type="text" id="stock_package" name="stock_package"   placeholder=""    class="form-control">
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <label class="form-control-label">Man. Year</label>
                                                                    <input  type="text" id="stock_man_year" name="stock_man_year" placeholder="2002"    class="form-control">
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <label class="form-control-label">Reg. Year</label>
                                                                    <input  type="text" id="stock_reg_year" name="stock_reg_year"   placeholder="2002" class="form-control">
                                    
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <label class="form-control-label">Color</label>
                                                                    <input type="text" id="stock_color" name="stock_color" placeholder="Color"    class="form-control">
                                
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            <div class="form-row"> 
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group">
                                                                            <label class="form-control-label">Shift</label>
                                                                            <select name="stock_shift" id="stock_shift"   class="form-control">
                                                                                <option value="---">Select</option>    
                                                                                <option value="Automatic">Automatic</option>
                                                                                <option value="Manual">Manual</option> 
                                                                                <option value="Dual">Dual</option>
                                                                            </select> 
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Fuel</label>
                                                                        <select name="stock_fuel" id="stock_fuel"   class="form-control">
                                                                            <option value="---">Select</option>    
                                                                            <option value="GASOLINE">GASOLINE</option>
                                                                            <option value="DIESEL">DIESEL</option> 
                                                                            <option value="HYBRID">HYBRID</option>
                                                                        
                                                                        </select>  
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Door</label>
                                                                        <input type="text" id="stock_door" name="stock_door"   class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <label class="form-control-label">Grade</label><br/>
                                                                    <input type="text" id="stock_grade" name="stock_grade"   placeholder="Grade" class="form-control">
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <label class="form-control-label">Engine Size</label><br/>
                                                                    <input type="text" id="stock_engine_size" name="stock_engine_size"   placeholder="****cc" class="form-control">
                                
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label class="form-control-label">Kobutsu</label><br/>
                                                                    <input type="text" id="stock_kobutsu" name="stock_kobutsu"   placeholder="PAK" class="form-control">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label class="form-control-label">Engine No.</label><br/>
                                                                    <input type="text" id="stock_engine_no" name="stock_engine_no"   placeholder="8785****" class="form-control">
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Seats</label><br/>
                                                                        <input type="text" id="stock_seats" name="stock_seats"   placeholder="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-ng-app="" data-ng-init="length=;width=;height=;" class="form-row"> 
                                                                
                                                                <div class="col-md-1">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Mileage .1</label><br/>
                                                                        <input  type="text" id="stock_mileage_1" name="stock_mileage_1"   placeholder="Km 1" class="form-control">
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Mileage .2</label><br/>
                                                                        <input  type="text" id="stock_mileage_2" name="stock_mileage_2"   placeholder="Km 2" class="form-control">
                                    
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Lenght</label><br/>
                                                                        <input ng-model="length" type="text" id="stock_length" name="stock_length"   placeholder="Lenght" class="form-control">
                                    
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Width</label><br/>
                                                                        <input ng-model="width" type="text" id="stock_width" name="stock_width"   placeholder="Width" class="form-control">
                                    
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <label class="form-control-label">Height</label><br/>
                                                                    <input ng-model="height" type="text" id="stock_height" name="stock_height"   placeholder="Height" class="form-control">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label class="form-control-label">M &sup3; : <br/></label>
                                                                        <span class="form-control" name="stock_cubic_meter" id="stock_cubic_meter" style="color:green; font-weight: bold; ">{{length * width * height / 1000000}}</span>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <label  class="form-control-label">Weight</label><br/>
                                                                    <input type="text" id="stock_weight" name="stock_weight"  placeholder="Weight" class="form-control">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Total Weight</label><br/>
                                                                        <input type="text" id="stock_total_weight" name="stock_total_weight"   placeholder="Total Weight" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Max Loading</label><br/>
                                                                        <input type="text" id="stock_max_loading" name="stock_max_loading"   placeholder="Loading Capacity" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-2">
                                                                    <label class="form-control-label">Auction House</label><br/>
                                                                    <input type="text" id="stock_auction" name="stock_auction"   placeholder="Auction House" class="form-control">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label class="form-control-label">Lot No.</label><br/>
                                                                    <input type="text" id="stock_lot_no" name="stock_lot_no"   placeholder="876****" class="form-control">
                                                            
                                                                </div> 
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Buying Price</label><br/>
                                                                        <input type="text" id="stock_buying_price" name="stock_buying_price"   placeholder="*,**,***" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label class="form-control-label">Buying Date</label><br/>
                                                                    <input type="date" id="stock_buying_date" name="stock_buying_date"    class="form-control">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Country(Car Location)</label>
                                                                        <select name="stock_country_location" id="stock_country_location"   class="form-control">
                                                                            <option value="---">Select</option>    
                                                                            <option value="Japan">Japan</option>
                                                                            <option value="Dubai">Dubai</option> 
                                                                            <option value="Singapore">Singapore</option>
                                                                            <option value="Thailand">Thailand</option>
                                                                            <option value="USA">USA</option>
                                                                            <option value="Pakistan">Pakistan</option>
                                                                        </select>  
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">City</label>
                                                                        <select name="stock_city_location" id="stock_city_location"   class="form-control">
                                                                            <option value="---" >Select</option>    
                                                                            <option value="GASOLINE">GASOLINE</option>
                                                                            <option value="DIESEL">DIESEL</option> 
                                                                            <option value="HYBRID">HYBRID</option>
                                                                        </select>  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="Username" class="form-control-label">Options</label>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_ps" id="stock_option_ps" type="checkbox" value="yes" >
                                                                                <label class="" >PS</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_nv" id="stock_option_nv" type="checkbox" value="yes" >
                                                                                <label class="" >NV</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_ac" id="stock_option_ac" type="checkbox"  value="yes">
                                                                                <label class="" >AC</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_wab" id="stock_option_wab" type="checkbox" value="yes" >
                                                                                <label class="" >WAB</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_rs" id="stock_option_rs" type="checkbox" value="yes" >
                                                                                <label class="" >RS</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_tv" id="stock_option_tv" type="checkbox" value="yes">
                                                                                <label class="" >TV</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_rr" id="stock_option_rr" type="checkbox" value="yes">
                                                                                <label class="" >RR</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_abs" id="stock_option_abs" type="checkbox" value="yes">
                                                                                <label class="" >ABS</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_ls" id="stock_option_ls" type="checkbox"  value="yes">
                                                                                <label class="" >LS</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_pw" id="stock_option_pw" type="checkbox" value="yes">
                                                                                <label class="" >PW</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_sr" id="stock_option_sr" type="checkbox" value="yes" >
                                                                                <label class="" >SR</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_fog" id="stock_option_fog" type="checkbox" value="yes" >
                                                                                <label class="" >FOG</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_ab" id="stock_option_ab" type="checkbox" value="yes">
                                                                                <label class="" >AB</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_gg" id="stock_option_gg" type="checkbox" value="yes">
                                                                                <label class="" >GG</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_bt" id="stock_option_bt" type="checkbox" value="yes">
                                                                                <label class="" >BT</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input name="stock_option_aw" id="stock_option_aw" type="checkbox" value="yes" >
                                                                                <label class="" >AW</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8" >
                                                                        <label class="form-control-label">Other Options</label><br/>
                                                                        <textarea name="stock_other_options" id="stock_other_options" cols="30" rows="4" placeholder="Enter Other Options" class="form-control"></textarea>
                                                                    </div>
                                                            </div> 
                                                    </div>
                                                    <div id="step-2">
                                                        <div class="form-row"> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Buying Price</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" name="stock_buying_price_print" 
                                                                    id="stock_buying_price_print"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Radiation / Plate / Cancel / Photo</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_radiation_charges" name="stock_radiation"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Auction Fees</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_auction_charges" name="stock_auction_charges"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">THC Charges (if container)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="username" name="stock_thc_charges" id="stock_thc_charges"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Rikuso</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_rikuso_charges" name="stock_rikuso_charges"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Vainning Charges (if container)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_vainning_charges" name="stock_vainning_charges"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Clearing & Custom (FOB Charges)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_fob_charges" name="stock_fob_charges"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Inspection Charges</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative">
                                                                    <input type="text" id="stock_inspection_charges" name="stock_inspection_charges"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Storage Charges</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_storage_charges" name="stock_storage_charges"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Freight Charges</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input  type="text" id="stock_freight_charges" name="stock_freight_charges"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">DHL Charges</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative">
                                                                    <input  type="text" id="stock_dhl_charges" name="stock_dhl_charges"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Other Charges</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input  type="text" id="stock_other_charges" name="stock_other_charges"   placeholder="Enter Price" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="background-color: lightgray;" class="divider"></div>
                                                        <div style="margin-bottom: -13px;" class="form-row"> 
                                                            <div class="col-sm-1">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Profit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input  type="text" id="stock_profit"
                                                                    name="stock_profit"  class="form-control-sm form-control">
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-1">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Discount %</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <div class="position-relative form-group">
                                                                    <input type="text" id="stock_discount_print"
                                                                    name="stock_discount_print"  class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Total Profit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <text type="text" id="stock_total_profit_print"  name="stock_total_profit_print" class="form-control-sm form-control">
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-1">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Your Profit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <div class="position-relative "> 
                                                                    <text type="text" id="stock_your_profit_print"  name="stock_your_profit_print" class="form-control-sm form-control">
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-1">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">ATS Profit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <div class="position-relative ">
                                                                    <text type="text" id="stock_ats_profit_print" 
                                                                    name="stock_ats_profit_print" class="form-control-sm form-control">
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div style="background-color: lightgray;" class="divider"></div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">FOB Price &yen; </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <label type="text" id="stock_fob_price_print_yen" 
                                                                    name="stock_fob_price_print_yen" class="form-control-sm form-control">
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">CNF Price &yen; </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <label type="text" id="stock_cnf_price_print_yen"  name="stock_cnf_price_print_yen" class="form-control-sm form-control">
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">FOB Price &dollar;</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <label type="text" id="stock_fob_price_print_dollar"
                                                                    name="stock_fob_price_print_dollar"  class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">CNF Price &dollar; </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <label  type="text" id="stock_cnf_price_print_dollar"  
                                                                    name="stock_cnf_price_print_dollar" class="form-control-sm form-control">
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                    <div id="step-3">
                                                        
                                                        <div class="form-row"> 
                                                           
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Buying Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="date" id="stock_buying_date_print" name="stock_buying_date_print" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Auction Sheet<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_auction_sheet_file" id="stock_auction_sheet_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Auction Pictures<input style="position: absolute; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_auction_pictures" id="stock_auction_pictures"/>
                                                                    </div> 
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Masso Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="date" id="stock_masso_date" name="stock_masso_date"  class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Export Certificate (JP)<input style="position: absolute; border-radius: 20px; opacity: 0; right: 0; top: 0;" type="file" name="stock_export_cerificate_jp_file" id="stock_export_cerificate_jp_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Export Certificate (EN)<input style="position: absolute; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_export_cerificate_en_file" id="stock_export_cerificate_en_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Inyard Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="date" id="stock_inyard_date" name="stock_inyard_date" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-6">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Yard Pictures<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_yard_pictures" id="stock_yard_pictures"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Reserve Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="date" id="stock_reserve_date" name="stock_reserve_date" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-6">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Invoice<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_invoice_file" id="stock_invoice_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Sure OK Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="date" id="stock_sure_ok_date" name="stock_sure_ok_date" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-6">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload TT Copy<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_tt_copy_file" id="stock_tt_copy_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Ship Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="date" id="stock_ship_date" name="stock_ship_date" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_vessel_name" name="stock_vessel_name" placeholder="Vessel Name" class="form-control-sm form-control">
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input  type="text" id="stock_voyage" name="stock_voyage" placeholder="Voyage" class="form-control-sm form-control">
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Ship OK Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="date" id="stock_ship_ok_date" name="stock_ship_ok_date" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Shipping Invoice<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_shipping_invoice_file" id="stock_shipping_invoice_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Shipping Order<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_shipping_order_file" id="stock_shipping_order_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div>     
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">BL Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="date" id="stock_bl_date" name="stock_bl_date" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_bl_no" name="stock_bl_no" placeholder="BL Number" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Bill of Lading<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_bill_of_lading_file" id="stock_bill_of_lading_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                        </div> 
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Release OK Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="date" id="stock_release_ok_date" name="stock_release_ok_date" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-6">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Bal. TT Copy<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_balance_tt_copy_file" id="stock_balance_tt_copy_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                        </div>  
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">DHL Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="date" id="stock_dhl_date" name="stock_dhl_date" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_tracking_number" name="stock_tracking_number"  placeholder="Tracking Number" class="form-control-sm form-control">
                                                                </div>
                                                            </div>  
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_dhl_link" name="stock_dhl_link" placeholder="DHL Link" class="form-control-sm form-control">
                                                                </div>
                                                            </div>  
                                                        </div>   
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Inspection Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="date" id="stock_inspection_date" name="stock_inspection_date" class="form-control-sm form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-6">
                                                                <div class="position-relative">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Inspection Certificate<input style="position: absolute; border-radius: 20px; width: 100%; opacity: 0; right: 0; top: 0;" type="file" multiple="multiple" name="stock_inspection_certificate_file" id="stock_inspection_certificate_file"/>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>                                                  
                                                    </div>
                                                    <div id="step-4">
                                                        <div class="no-results">
                                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                <span class="swal2-success-line-tip"></span>
                                                                <span class="swal2-success-line-long"></span>
                                                                <div class="swal2-success-ring"></div>
                                                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                            </div>
                                                            <div class="results-subtitle mt-4">Finished!</div>
                                                            <div class="results-title">You have Updated the car Successfully</div>
                                                            <div class="mt-3 mb-3"></div>
                                                            <div class="text-center">
                                                                <button   class="btn-shadow btn-wide btn btn-success btn-lg">Finish</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="clearfix">
                                                <input type="reset" id="reset-btn" class="btn-shadow float-left btn btn-link" value="Reset">
                                                <input type="submit"  name="stock_btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary" value="add">
                                                <a id="next-btn" name="next_btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary text-white" >Next</a>
                                                <a id="prev-btn" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</a>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <script>
function getState(val) {
   // alert(val);
	$.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
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
        