<?php
include("top.php");
include("connection_db.php");
$query="select * from ats_car_stocK WHERE ats_car_stock_id=".$_GET['car_id'];
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_row($result);


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div style="margin-left: -18px; margin-right: -53px;" class="container">
                            <div style="padding-top: 1%; margin-left: 8px; " class="container row">
                                <div class="col-sm-1">
                                    <input style="width: 80px;" value="Auc. Pics" name="btn_stock_auc_pics" id="btn_stock_auc_pics" type="button" class="btn-square btn-shadow btn btn-warning " data-toggle="modal" data-target="#exampleModalLong-aucpics">
                                </div>
                                <div class="col-sm-1">
                                    <input style="width: 80px;" value="Auc Sht" name="btn_stock_auc_sht" id="btn_stock_auc_sht" type="button" class="btn-square btn-shadow btn btn-warning" data-toggle="modal" data-target="#exampleModalLong-auc-sheet">
                                </div>
                                <div class="col-sm-1">
                                    <input style="width: 80px;" value="EC (JP)" id="btn_stock_ec_jp" name="btn_stock_ec_jp" type="button" class="btn-square btn-shadow btn btn-warning" data-toggle="modal" data-target="#exampleModalLong-ecjp">
                                </div>
                                <div class="col-sm-1">
                                    <input style="width: 80px;" value="EC (EN)" id="btn_stock_ec_en" name="btn_stock_ec_en" type="button" class="btn-square btn-shadow btn btn-warning" data-toggle="modal" data-target="#exampleModalLong-ecen">
                                </div>
                                <div class="col-sm-1">
                                    <input style="width: 80px;" value="Yard Pics" name="btn_stock_yard_pic" id="btn_stock_yard_pic" type="button" class="btn-square btn-shadow btn btn-warning" data-toggle="modal" data-target="#exampleModalLong-yp">
                                </div>
                                <div class="col-sm-1">
                                    <input style="width: 80px;" value="Invoice" name="btn_stock_invoice" id="btn_stock_invoice" type="button" class="btn-square btn-shadow btn btn-warning" data-toggle="modal" data-target="#exampleModalLong-invoice">
                                </div>
                                <div class="col-sm-1">
                                    <input style="width: 80px;" value="TT Copy" id="btn_stock_tt_copy" name="btn_stock_tt_copy" type="button" class="btn-square btn-shadow btn btn-warning" data-toggle="modal" data-target="#exampleModalLong-ttcopy">
                                </div>
                                <div class="col-sm-1">
                                    <input style="width: 80px;" value="Bal. TT" id="btn_stock_tt_bal" name="btn_stock_tt_bal" type="button" class="btn-square btn-shadow btn btn-warning" data-toggle="modal" data-target="#exampleModalLong-baltt">
                                </div>
                                <div class="col-sm-1">
                                    <input style="width: 80px;" value="Ship Odr" id="btn_stock_ship_odr" name="btn_stock_ship_odr" type="button" class="btn-square btn-shadow btn btn-warning" data-toggle="modal" data-target="#exampleModalLong-shiporder">
                                </div>
                                <div class="col-sm-1">
                                    <input style="width: 80px;" value="BL" id="btn_stock_bl" name="btn_stock_bl" type="button" class="btn-square btn-shadow btn btn-warning" data-toggle="modal" data-target="#exampleModalLong-bl">
                                </div>
                                <div class="col-sm-1 ">
                                    <input style="width: 80px;" value="IC" id="btn_stock_ic" name="btn_stock_ic" type="button" class="btn-square btn-shadow btn btn-warning" data-toggle="modal" data-target="#exampleModalLong-ic">
                                </div>
                                <div class="col-sm-1">
                                    <input style="width: 80px;" value="Back" id="btn_back" name="btn_back" type="button" class="btn-square  btn btn-alternate">
                                </div>
                            </div>
                            <div  class="card-body">
                                <form action="" method="" >    
                                    <div style="background-color: wheat; margin-left: -13px; margin-top: -1%; width: 106%;" class="row">
                                                <div class="col-1">
                                                    <label class="form-control-label">Rec. #</label>
                                                    <input style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_rec_no" name="get_stock_rec_no" class="form-control" value="<?php echo $row[1]?>">
                                                </div>
                                                <div class="col-1">
                                                    <label class="form-control-label">Chassi #</label>
                                                    <input style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_rec_no" name="get_stock_rec_no" class="form-control" value="<?php echo $row[2]?>">
                                                </div>
                                                <div  class="col-1">
                                                    <label class="form-control-label">Make</label>
                                                    <?php 
                                                    $querymake=mysqli_fetch_row(mysqli_query($connection,"select * from car_make where id='".$row[3]."'"));
                                                    ?>
                                                    <input style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_rec_no" name="get_stock_rec_no" class="form-control" value="<?php echo $querymake[1]?>">
                                                </div>
                                                <div style="margin-left: -0.8%;" class="col-1">
                                                    <label class="form-control-label">Model</label>
                                                                                                       
                                                    <?php 
                                                    $querymodel=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_model_id='".$row[4]."'"));
                                                    ?>
                                                    <label style="width: 95px; margin-top: -15%; font-size: 11px; padding: 1px; height: auto;" type="text" id="get_stock_model" name="get_stock_model" class="form-control"><?php echo $querymodel[2]?></label>
                                                </div>
                                                <div class="col-1">
                                                        <label class="form-control-label">Package</label>
                                                        <label style="width: 80px; margin-left: 10%; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_package" name="get_stock_package" class="form-control"><?php echo $row[5]?></label>
                                                </div>
                                                <div class="col-1">
                                                        <label class="form-control-label">Mf.&nbsp;Y/M</label>
                                                        <label style="width: 80px; margin-top: -15%; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_man_year" name="get_stock_man_year" class="form-control"><?php echo $row[6]?></label>
                                                </div>
                                                <div class="col-1">
                                                    <label class="form-control-label">Reg.&nbsp;Y/M</label>
                                                    <label style="width: 80px; margin-top: -15%; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_reg_year" name="get_stock_reg_year" class="form-control"><?php echo $row[7]?></label>
                                                </div>
                                                <div class="col-1">
                                                    <label  class="form-control-label">Color</label>
                                                    <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_color" name="get_stock_color" class="form-control"><?php echo $row[8]?></label>
                                                </div>
                                                <div class="col-1">
                                                    
                                                        <label  class="form-control-label">Shift</label>
                                                        <label style="width: 80px; margin-top: -15%;  font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_shift" name="get_stock_shift" class="form-control"><?php echo $row[9]?></label>
                                                    
                                                </div>
                                                <div class="col-1">
                                                        <label  class="form-control-label">Fuel</label>
                                                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_fuel" name="get_stock_fuel" class="form-control"><?php echo $row[10]?></label>
                                                </div>
                                                <div class="col-1">
                                                    
                                                        <label  class="form-control-label">Door</label>
                                                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_door" name="get_stock_door" class="form-control"><?php echo $row[11]?></label>
                                                </div>
                                                <div class="col-1">
                                                        <label class="form-control-label">Engine </label>
                                                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_engine_size" name="get_stock_engine_size" class="form-control"><?php echo $row[13]?></label>
                                                </div>
                                    </div>
                                    <div style=" background-color: wheat; margin-left: -13px; width: 106%; margin-top: -0.5%;" class="row" >
                                        <div class="col-1">
                                            <label class="form-control-label-sm">Grade</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_grade" name="get_stock_grade" class="form-control"><?php echo $row[12]?></label>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-control-label">Kobutsu</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_kobutsu" name="get_stock_kobutsu" class="form-control"><?php echo $row[14]?></label>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-control-label">Engine&nbsp;No.</label>
                                            <label style="width: 80px; margin-top: -15%; height: 20px; font-size: 11px;  padding: 1px;" type="text" id="get_stock_engine_no" name="get_stock_engine_no" class="form-control"><?php echo $row[16]?></label>
                                        </div>
                                        <div class="col-1">
                                            <label  class="form-control-label">Seats</label>
                                            <label style="width: 80px; margin-top: -15%; height: 20px; font-size: 11px;  padding: 1px;" type="text" id="get_stock_seats" name="get_stock_seats" class="form-control"><?php echo $row[16]?></label>
                                        </div>
                                        <div  class="col-1">
                                            <label class="form-control-label">Mileage&nbsp;.1</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_maleage_1" name="get_stock_maleage_1" class="form-control"><?php echo $row[17]?> </label>
                                        </div>
                                        <div class="col-1">
                                                <label  class="form-control-label">Mileage&nbsp;.2</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_maleage_2" name="get_stock_maleage_2" class="form-control"><?php echo $row[18]?></label>
                                        </div>
                                        <div class="col-3">
                                            <label style="margin-left: 41%;"  class="form-control-label text-center"> Option</label>
                                            <label style=" width: 258px; font-size: 11px; margin-top: -3.8%; height: 20px; padding: 1px;" type="text" id="get_stock_all_options" name="get_stock_all_options" class="form-control"><?php echo $row[32] .",".$row[33].",".$row[34].",".$row[35].",".$row[36].",".$row[37].",".$row[38].",".$row[39].",".$row[40].",".$row[41].",".$row[42].",".$row[43].",".$row[44].",".$row[45].",".$row[46].",".$row[47].",".$row[48]?></label>
                                        </div>
                                        <div class="col-3">
                                            <label style="margin-left: 40%;"  class="form-control-label text-center">Other Option</label>
                                            <label style=" width: 248px; font-size: 11px; margin-top: -3.8%; height: 20px; padding: 1px;" type="text" id="get_stock_other_options" name="get_stock_other_options" class="form-control"><?php echo $row[48]?></label>
                                        </div>
                                    </div> 
                                    <div style=" background-color: wheat; margin-left: -13px; width: 106%; margin-top: -0.5%;" class="row ">  
                                        <div class="col-1">
                                            
                                                <label class="form-control-label">Lenght</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_length" name="get_stock_length" class="form-control"><?php echo $row[19]?></label>
                                        </div>
                                        <div class="col-1">
                                            
                                            <label  class="form-control-label">Width</label>
                                                <label style="width: 80px; margin-top: -15%;  font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_width" name="get_stock_width" class="form-control"><?php echo $row[20]?> </label>
                                            
                                        </div>
                                        <div class="col-1">
                                            
                                                <label  class="form-control-label">Height</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_height" name="get_stock_height" class="form-control"><?php echo $row[21]?></label>
                                            
                                        </div>
                                        <div class="col-1">
                                                <label  class="form-control-label">M³</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_cubic_meter" name="get_stock_cubic_meter" class="form-control"><?php echo $row[22]?></label>
                                        </div>
                                        <div class="col-1">
                                                <label class="form-control-label">Weight</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_weight" name="get_stock_weight" class="form-control"><?php echo $row[24]?></label>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-control-label">Total Wt.</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_total_weight" name="get_stock_total_weight" class="form-control"><?php echo $row[25]?></label>
                                        </div>   
                                        <div class="col-1">
                                                <label  class="form-control-label">Max&nbsp;Load.</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_max_loading" name="get_stock_max_loading" class="form-control"><?php echo $row[25]?></label>
                                        </div>
                                        <div class="col-2">
                                            <label  class="form-control-label">Auction House</label>
                                            <label style="width: 168px; margin-top: -6.5%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_auction_house" name="get_stock_auction_house" class="form-control"><?php echo $row[26]?></label>
                                        </div>
                                        <div class="col-1">
                                            <label  class="form-control-label">Lot. No.</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_lot_no" name="get_stock_lot_no" class="form-control"><?php echo $row[27]?></label>
                                        </div>
                                        <div class="col-2">
                                            <label  class="form-control-label">Inventory</label>
                                            <label style="width: 158px; margin-top: -6.5%; font-size: 11px; height: 20px; padding: 1px;" type="text" id="get_stock_country_location" name="get_stock_country_location" class="form-control"><?php echo $row[30]?></label>
                                        </div>
                                    </div>
                                    <div style="background:palegoldenrod; width: 106%; margin-left: -13px; margin-top: -0.5%;" class="row">
                                        <div class="col-1">
                                            <label class="form-control-label">Buy Price</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_buying_price" name="get_stock_buying_price" class="form-control"><?php echo $row[28]?></label>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-control-label">Auc Fee</label>
                                            <label style="width: 80px; margin-top: -15%;  font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_auction_charges" name="get_stock_auction_charges" class="form-control"><?php echo $row[49]?></label>
                                        </div>
                                        <div  class="col-1">
                                            <label  class="form-control-label">Rikuso</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_rikuso_charges" name="get_stock_rikuso_charges" class="form-control"><?php echo $row[50]?></label>
                                        </div>
                                        <div  class="col-1">
                                            <label  class="form-control-label">FOB Ch.</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_fob_charges" name="get_stock_fob_charges" class="form-control"><?php echo $row[65]?> </label>
                                        </div>
                                        <div class="col-1">
                                                <label class="form-control-label">Store&nbsp;Ch.</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_storage_charges" name="get_stock_storage_charges" class="form-control"><?php echo $row[52]?></label>
                                        </div>
                                        <div class="col-1">
                                                <label class="form-control-label">DHL Ch.</label>
                                                <label style="width: 80px; margin-top: -15%; padding: 1px; font-size: 11px; height: auto; " type="text" id="get_stock_dhl_charges" name="get_stock_dhl_charges" class="form-control"><?php echo $row[53]?></label>
                                        </div>
                                        <div class="col-1">
                                            <label  class="form-control-label">Rad Ch.</label>
                                            <label style="width: 80px; margin-top: -15%;  font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_radiation_charges" name="get_stock_radiation_charges" class="form-control"><?php echo $row[54]?> </label>
                                        </div>
                                        <div class="col-1">
                                            <label  class="form-control-label">THC Ch.</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_thc_charges" name="get_stock_thc_charges" class="form-control"><?php echo $row[55]?></label>
                                        </div>
                                        <div class="col-1">
                                                <label  class="form-control-label">Vain Ch.</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_vainning_charges" name="get_stock_vainning_charges" class="form-control"><?php echo $row[56]?></label>
                                        </div>
                                        <div class="col-1">
                                                <label  class="form-control-label">Insp Ch.</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_inspection_charges" name="get_stock_inspection_charges" class="form-control"><?php echo $row[57]?></label>
                                        </div>
                                        <div class="col-1">
                                                <label  class="form-control-label">Frt Ch.</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_freight_charges" name="get_stock_freight_charges" class="form-control"><?php echo $row[58]?></label>
                                        </div>
                                        
                                        <div class="col-1">
                                                <label  class="form-control-label">Otr Ch.</label>
                                                <label style="width: 70px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_other_charges" name="get_stock_other_charges" class="form-control"><?php echo $row[59]?></label>
                                        </div>
                                        </div> 
                                    <div style="margin-top: -0.5%; width: 106%; margin-left: -13px; background: lightyellow" class="row ">
                                        <div class="col-1">
                                            <h5 style="margin-top: 20%; font-weight: bold;" class="text-dark">Dates</h5>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-control-label">Buying</label>
                                            <label style="width: 80px; margin-top: -15%;  font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_buying_date" name="get_stock_buying_date" class="form-control">2102/09</label>
                                        </div>
                                        <div  class="col-1">
                                            <label class="form-control-label">Masso</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_masso_date" name="get_stock_masso_date" class="form-control">Daihatsu</label>
                                        </div>
                                        <div  class="col-1">
                                            <label class="form-control-label">Inyard</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_inyard_date" name="get_stock_inyard_date" class="form-control">LandCruiser </label>
                                        </div>
                                        <div class="col-1">
                                                <label class="form-control-label">Reserve</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_reserve_date" name="get_stock_reserve_date" class="form-control">2102/09</label>
                                        </div>
                                        <div class="col-1">
                                                <label class="form-control-label">Sure OK</label>
                                                <label style="width: 80px; margin-top: -15%; padding: 1px; font-size: 11px; height: auto; " type="text" id="get_stock_sure_ok_date" name="get_stock_sure_ok_date" class="form-control">2102/09</label>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-control-label">Ship</label>
                                            <label style="width: 80px; margin-top: -15%;  font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_ship_date" name="get_stock_ship_date" class="form-control">Pearl </label>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-control-label">Ship OK</label>
                                            <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_ship_ok_date" name="get_stock_ship_ok_date" class="form-control">Manual</label>
                                        </div>
                                        <div class="col-1">
                                                <label class="form-control-label">BL</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_bl_date" name="get_stock_bl_date" class="form-control">Diesel</label>
                                        </div>
                                        <div class="col-1">
                                                <label class="form-control-label">Release&nbsp;OK</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_release_ok_date" name="get_stock_release_ok_date" class="form-control">2102/09</label>
                                        </div>
                                        <div class="col-1">
                                                <label  class="form-control-label">DHL</label>
                                                <label style="width: 80px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_dhl_date" name="get_stock_dhl_date" class="form-control">2102/09</label>
                                        </div>
                                        
                                        <div class="col-1">
                                                <label  class="form-control-label">Inspection</label>
                                                <label style="width: 70px; margin-top: -15%; font-size: 11px; height: auto; padding: 1px;" type="text" id="get_stock_inspection_date" name="get_stock_inspection_date" class="form-control">2102/09</label>
                                        </div>
                                        
                                    </div>
                                    <div style="margin-top: -0.5%; width: 106%; margin-left: -13px; background: khaki" class="row ">
                                        <div class="col-2">
                                            <label  class="form-control-label">Vessel Name</label>
                                            <label style=" font-size: 11px;  margin-top: -5%; height: 20px; padding: 1px; width: 170px;" type="text" id="get_stock_vessel_name" name="get_stock_vessel_name" class="form-control"><?php echo $row[81]?></label>
                                        </div>
                                        <div  class="col-2">
                                            <label  class="form-control-label">Voyage</label>
                                            <label style=" font-size: 11px;  margin-top: -5%; height: 20px; padding: 1px; width: 170px; " type="text" id="get_stock_voyage_name" name="get_stock_voyage_name" class="form-control"><?php echo $row[82]?></label>
                                        </div>
                                        <div  class="col-4">
                                            <label  class="form-control-label">Tracking Number</label>
                                            <label style=" font-size: 11px;  margin-top: -2.2%; height: 20px; width: 350px; padding: 1px;" type="text" id="get_stock_tracking_number" name="get_stock_tracking_number" class="form-control"><?php echo $row[92]?> </label>
                                        </div>
                                        <div class="col-4">
                                                <label class="form-control-label">DHL Link (URL)</label>
                                                <label style=" width: 335px;  margin-top: -2.2%; height: 20px; font-size: 11px; padding: 1px; " type="text" id="get_stock_dhl_link" name="get_stock_dhl_link" class="form-control"><?php echo $row[93]?></label>
                                        </div>
                                    </div>
                                    <div class="row">       
                                        <div style="margin-left: -10px; width: 104.6%;" class="container" id="table2">
                                            <ul  class="tabs-animated-shadow tabs-animated nav nav-justified">
                                                        <li class="nav-item">
                                                            <a role="tab" class="nav-link active " id="tab-c-0" data-toggle="tab" href="#tab-animated-reserve">
                                                                <span >Reserve</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a role="tab" class="nav-link" id="tab-c-1" data-toggle="tab" href="#tab-animated-repair">
                                                                <span>Repair</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-transport">
                                                                <span>Transport</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-parts">
                                                                <span>Parts</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-money">
                                                                <span>Recieve&nbsp;Money</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-commision">
                                                                <span>Commision</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-price">
                                                                <span>Boss Price</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-important">
                                                                <span>Important</span>
                                                            </a>
                                                        </li>
                                            </ul>
                                            <div style="height: 120px; margin-top: -12px; overflow: auto;" class="tab-content " id="table1">
                                                <div class="tab-pane active" id="tab-animated-reserve" role="tabpanel">
                                                    <table style="font-size: 11px; white-space: nowrap;" class="tables-grid">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Action</th>
                                                                <th>Rec No.</th>
                                                                <th>Chassis ID #</th>
                                                                <th>Make</th>
                                                                <th>Model</th>
                                                                <th>Year</th>
                                                                <th>Action</th>
                                                                <th>From</th>
                                                                <th>Till</th>
                                                                <th>Agent Name</th>
                                                                <th>Customer</th>
                                                                <th>Address</th>
                                                                <th>Phone</th>
                                                                <th>Country</th>
                                                                <th>Destination Port</th>
                                                                <th>Consignee Name</th>
                                                                <th>Consignee Phone</th>
                                                                <th>Consignee Address</th>
                                                                <th>Notify Name</th>
                                                                <th>Notify Phone</th>
                                                                <th>Notify Address</th>
                                                                <th>Shipment</th>
                                                                <th>Currency</th>
                                                                <th>FOB</th>
                                                                <th>Freight</th>
                                                                <th>Inspection</th>
                                                                <th>Inspection Charges</th>
                                                                <th>Discount</th>
                                                                <th>Yard Charges</th>
                                                                <th>Repair</th>
                                                                <th>Other</th>
                                                                <th>CNF</th>
                                                                <th>Payment %</th>
                                                                <th>Memo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
                                                                <td><time></time></td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td><div class="mb-2 mr-2 badge badge-primary">Pending</div></td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td><div class="mb-2 mr-2 badge badge-danger">Expired</div></td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td><div class="mb-2 mr-2 badge badge-warning">Cancel</div></td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>       
                                                </div>
                                                <div class="tab-pane" id="tab-animated-repair" role="tabpanel">
                                                    <table style="font-size: 10px;" class=" table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Rec No.</th>
                                                                <th>Chassis ID #</th>
                                                                <th>Make</th>
                                                                <th>Model</th>
                                                                <th>Year</th>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                                <th>Memo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                              
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>  
                                                </div>
                                                <div class="tab-pane" id="tab-animated-transport" role="tabpanel">
                                                    <table style="font-size: 10px;" class=" table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Rec No.</th>
                                                                <th>Chassis ID #</th>
                                                                <th>Make</th>
                                                                <th>Model</th>
                                                                <th>Year</th>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                                <th>Memo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>  
                                                </div>
                                                <div class="tab-pane" id="tab-animated-parts" role="tabpanel">
                                                    <table style="font-size: 10px;" class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Rec No.</th>
                                                                <th>Chassis ID #</th>
                                                                <th>Make</th>
                                                                <th>Model</th>
                                                                <th>Year</th>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                                <th>Memo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody  style="height: 80px;" >
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>  
                                                </div>
                                                <div class="tab-pane" id="tab-animated-money" role="tabpanel">
                                                    <table style="font-size: 10px;" class=" table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Rec No.</th>
                                                                <th>Chassis ID #</th>
                                                                <th>Make</th>
                                                                <th>Model</th>
                                                                <th>Year</th>
                                                                <th>CNF Price</th>
                                                                <th>Customer Name</th>
                                                                <th>Remittance ID #</th>
                                                                <th>Balance Amount</th>
                                                                <th>Balance Amount</th>
                                                                <th>Remaining Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>  
                                                </div>
                                                <div class="tab-pane" id="tab-animated-commision" role="tabpanel">
                                                    <table style="font-size: 10px;" class=" table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Rec No.</th>
                                                                <th>Chassis ID #</th>
                                                                <th>Make</th>
                                                                <th>Model</th>
                                                                <th>Year</th>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                                <th>Memo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>  
                                                </div>
                                                <div class="tab-pane" id="tab-animated-price" role="tabpanel">
                                                    <table style="font-size: 10px;" class=" table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Rec No.</th>
                                                                <th>Chassis ID #</th>
                                                                <th>Make</th>
                                                                <th>Model</th>
                                                                <th>Year</th>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                                <th>Memo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>  
                                                </div>
                                                <div class="tab-pane" id="tab-animated-important" role="tabpanel">
                                                    <table style="font-size: 10px;" class=" table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Rec No.</th>
                                                                <th>Chassis ID #</th>
                                                                <th>Make</th>
                                                                <th>Model</th>
                                                                <th>Year</th>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                                <th>Memo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-left: 1%;" class="row mt-1 nav nav-justified" id="table">
                                        <div class="nav-item">
                                            <input data-toggle="modal"
                                            data-target="#exampleModalLong" 
                                            style="width: 120px;" 
                                            class="btn-pill btn-shadow btn-wide mt-0 mb-2 btn btn-primary" value="Reserve Car " type="button" >
                                        </div>
                                        <div class="nav-item">
                                            <input data-toggle="modal"
                                            data-target="#exampleModalLong-repair"  value="Repair" type="button" class="btn-pill btn-shadow btn-wide mt-0 mb-2 btn btn-warning"
                                            style="width: 120px;">
                                        </div>
                                        
                                        <div class="nav-item">
                                            <input data-toggle="modal"
                                            data-target="#exampleModalLong-rikuso"  value="Rikuso" type="button" class="btn-pill btn-shadow btn-wide mt-0 mb-2 btn btn-warning"
                                            style="width: 120px;">
                                        </div>
                                        <div class="nav-item">
                                            <input data-toggle="modal"
                                            data-target="#exampleModalLong-parts"  value="Parts" type="button" class="btn-pill btn-shadow btn-wide mt-0 mb-2 btn btn-warning"
                                            style="width: 120px;">
                                        </div>
                                        <div class="nav-item">
                                            <input data-toggle="modal"
                                            data-target="#exampleModalLong-money" value="Recieve Money" type="button" class="btn-pill btn-shadow btn-wide mt-0 mb-2 btn btn-warning">
                                        </div>
                                       
                                        <div class="nav-item">
                                            <input data-toggle="modal"
                                            data-target="#exampleModalLong-commision"  value="Commision" type="button" class="btn-pill btn-shadow btn-wide mt-0 mb-2 btn btn-warning"
                                            style="width: 120px;">
                                        </div>
                                        <div class="nav-item">
                                            <input data-toggle="modal"
                                            data-target="#exampleModalLong-boss_price"  value="Boss Price" type="button" class="btn-pill btn-shadow btn-wide mt-0 mb-2 btn btn-warning"
                                            style="width: 120px;">
                                        </div>
                                        <div class="nav-item">
                                            <input data-toggle="modal"
                                            data-target="#exampleModalLong-important"  value="Important" type="button" class="btn-pill btn-shadow btn-wide mt-0 mb-2 btn btn-warning"
                                            style="width: 120px;">
                                        </div>
                                       
                                        
                                    </div>
                                
                                </form>  
                            </div>
                        </div>  
                    </div>   
                </div> 
            </div>
            
<?php
include("bottom.php");
?> 
<!-- Modals -->

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Fill the Form (For Reservation)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div style="background: #ccc;" class="container">
                <div class="row">
                    <div class="col-2">
                        <label class="form-control-label">Rec. #</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc;  padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_rec_no" name="get_stock_rec_no" class="form-control"><?php echo $row[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Chassis&nbsp;#</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold;  " type="text" id="get_stock_chassis_id" name="get_stock_chassis_id" class="form-control"><?php echo $row[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Make</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 2px; background: #ccc; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_make" name="get_stock_make" class="form-control"><?php echo $querymake[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Model</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_model" name="get_stock_model" class="form-control"><?php echo $querymodel[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Year</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_man_year" name="get_stock_man_year" class="form-control"><?php echo $row[6]?></label>
                    </div>
                </div>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-4">
                            <label  class="form-control-label">From</label>
                            <input style=" font-size: 11px;  margin-top: -5%; height: 20px;  width: 130px;" type="date" id="username" name="stock_chassis_id" class="form-control">
                        </div>
                        <div style="margin-top: -3%;" class="col-md-4">
                            <label class="form-control-label">Till</label>
                            <input style=" font-size: 11px;  margin-top: -5%; height: 20px;  width: 130px;" type="date" id="username" name="stock_chassis_id" class="form-control">
                        </div>
                        <div style="margin-top: -3%;" class="col-md-4">
                            <label class="form-control-label">Agent Name</label>
                            <select style="padding: 0px; font-size: 11px; margin-top: -5%;  height: 20px;  width: 140px;"  id="select" class="form-control">
                                <option value="">abc</option>
                                <option>Abc</option>
                                <option>Abc</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-control-label">Customer</label>
                            <select style=" padding: 0px; font-size: 11px;  margin-top: -8%; height: 20px;  width: 120px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                                <option value="---">---</option>
                                <option>Abc</option>
                                <option>Abc</option>
                            </select>
                        </div>
                        <div  class="col-md-3">
                            <label style="margin-left: 8%;" class="form-control-label">Phone</label>
                            <input style=" font-size: 11px; margin-left: 8%; margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                        </div>
                        <div  class="col-md-3">
                            <label class="form-control-label">Country</label>
                            <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                        </div>
                        <div  class="col-md-3">
                            <label class="form-control-label">Destination&nbsp;Port</label>
                            <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                        </div>
                        <div  class="col-md-12">
                            <label class="form-control-label">Address</label>
                            <input style=" font-size: 11px; width: 472px; height: 20px;  margin-top: -2%; " type="text" id="username" name="stock_chassis_id" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="form-control-label">Consignee&nbsp;Name</label>
                            <select style=" padding: 0px; font-size: 11px;  margin-top: -8%; height: 20px;  width: 120px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                                <option value="---">---</option>
                                <option>Abc</option>
                                <option>Abc</option>
                            </select>
                        </div>
                        <div  class="col-md-3">
                            <label style="margin-left: 8%;" class="form-control-label">Consignee&nbsp;Phone</label>
                            <input style=" font-size: 11px; margin-left: 8%; margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                        </div>
                        <div  class="col-md-3">
                            <label class="form-control-label">Notify&nbsp;Name</label>
                            <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                        </div>
                        <div  class="col-md-3">
                            <label class="form-control-label">Notify&nbsp;Phone</label>
                            <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                        </div>
                        <div  class="col-md-6">
                            <label class="form-control-label">Consignee&nbsp;Address</label>
                            <input style=" font-size: 11px; width: 232px; margin-top: -2%; height: 20px;  " type="text" id="username" name="stock_chassis_id" class="form-control">
                        </div>
                        <div  class="col-md-6">
                            <label class="form-control-label">Notify&nbsp;Address</label>
                            <input style=" font-size: 11px; width: 224px; margin-top: -2%; height: 20px;  " type="text" id="username" name="stock_chassis_id" class="form-control">
                        </div>
                        <div style="background: khaki; margin-left: 0px; padding-left: 0px; margin-top: 1%;  padding-bottom: 1%;" class="row container">
                            <div class="col-md-3">
                                <label class="form-control-label">Shipment</label>
                                <select style="padding: 0px; font-size: 11px;  margin-top: -8%; height: 20px;  width: 105px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                                    <option value="---">---</option>
                                    <option>Collect</option>
                                    <option>Prepaid</option>
                                </select>
                            </div>
                            <div  class="col-md-3">
                                <label class="form-control-label">Currency</label>
                                <select style="padding: 0px; font-size: 11px;  margin-top: -8%; height: 20px;  width: 105px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                                    <option value="---">---</option>
                                    <option>$</option>
                                    <option>&yen;</option>
                                </select>
                            </div>
                            <div  class="col-md-3">
                                <label class="form-control-label">FOB</label>
                                <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                            </div>
                            <div  class="col-md-3">
                                <label class="form-control-label">Freight</label>
                                <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                            </div>
                            <div  class="col-md-3">
                                <label class="form-control-label">Inspection</label>
                                <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 105px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label">Inspection&nbsp;Chrgs</label>
                                <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 105px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label">Discount %</label>
                                <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                            </div>
                            <div  class="col-md-3">
                                <label class="form-control-label">Yard Charges</label>
                                <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                            </div>
                            <div  class="col-md-3">
                                <label class="form-control-label">Repair</label>
                                <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 105px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                            </div>
                            <div  class="col-md-3">
                                <label class="form-control-label">Other</label>
                                <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 105px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                            </div>
                            <div  class="col-md-3">
                                <label class="form-control-label">CNF</label>
                                <input style=" font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                            </div>
                            <div  class="col-md-3">
                                <label class="form-control-label">Payment %</label>
                                <select style=" padding: 0px; font-size: 11px;  margin-top: -8%; height: 20px;  width: 100px;" type="text" id="username" name="stock_chassis_id" class="form-control">
                                    <option value="---">---</option>
                                    <option>100%</option>
                                    <option>50%</option>
                                    <option>30%</option>
                                </select>
                            </div>
                            <div  class="col-md-12">
                                <label class="form-control-label">Memo</label>
                                <input style=" font-size: 11px;  margin-top: -2%; width: 461px; height: 20px; " type="text" id="username" name="stock_chassis_id" class="form-control">
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Confirm Reserve</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-repair" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Fill the Form (For Repiar)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div style="background: #ccc;" class="container">
            <div class="row">
                    <div class="col-2">
                        <label class="form-control-label">Rec. #</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc;  padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_rec_no" name="get_stock_rec_no" class="form-control"><?php echo $row[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Chassis&nbsp;#</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold;  " type="text" id="get_stock_chassis_id" name="get_stock_chassis_id" class="form-control"><?php echo $row[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Make</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 2px; background: #ccc; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_make" name="get_stock_make" class="form-control"><?php echo $querymake[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Model</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_model" name="get_stock_model" class="form-control"><?php echo $querymodel[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Year</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_man_year" name="get_stock_man_year" class="form-control"><?php echo $row[6]?></label>
                    </div>
                </div>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-4">
                            <label  class="form-control-label">Date</label>
                            <input style=" font-size: 11px;  margin-top: -5%; height: 20px;" type="date" id="exp_repair_date" name="exp_repair_date" class="form-control">
                        </div>
                        <div style="margin-top: -3%; margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Description</label>
                            <input style=" font-size: 11px; margin-top: -2.5%; height: 20px;" type="text" id="exp_repair_discription" name="exp_repair_discription" class="form-control">
                        </div>
                        <div  class="col-md-4">
                            <label class="form-control-label">Amount</label>
                            <input style=" font-size: 11px;  margin-top: -5%; height: 20px;" type="text" id="exp_repair_amount" name="exp_repair_amount" class="form-control">
                        </div>
                        <div style="margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Memo</label>
                            <input style=" font-size: 11px;  margin-top: -2.5%; height: 20px;" type="text" id="exp_repair_memo" name="exp_repair_memo" class="form-control">
                        </div>                        
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="btn_exp_repair" id="btn_exp_repair" class="btn btn-primary">Add +</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-parts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Fill the Form (For Parts)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div style="background: #ccc;" class="container">
            <div class="row">
                    <div class="col-2">
                        <label class="form-control-label">Rec. #</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc;  padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_rec_no" name="get_stock_rec_no" class="form-control"><?php echo $row[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Chassis&nbsp;#</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold;  " type="text" id="get_stock_chassis_id" name="get_stock_chassis_id" class="form-control"><?php echo $row[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Make</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 2px; background: #ccc; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_make" name="get_stock_make" class="form-control"><?php echo $querymake[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Model</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_model" name="get_stock_model" class="form-control"><?php echo $querymodel[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Year</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_man_year" name="get_stock_man_year" class="form-control"><?php echo $row[6]?></label>
                    </div>
                </div>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-4">
                            <label  class="form-control-label">Date</label>
                            <input style=" font-size: 11px;  margin-top: -5%; height: 20px;" type="date" id="exp_parts_date" name="exp_parts_date" class="form-control">
                        </div>
                        <div style="margin-top: -3%; margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Description</label>
                            <input style=" font-size: 11px; margin-top: -2.5%; height: 20px;" type="text" id="exp_parts_discription" name="exp_parts_discription" class="form-control">
                        </div>
                        <div  class="col-md-4">
                            <label class="form-control-label">Amount</label>
                            <input style=" font-size: 11px;  margin-top: -5%; height: 20px;" type="text" id="exp_parts_amount" name="exp_parts_amount" class="form-control">
                        </div>
                        <div style="margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Memo</label>
                            <input style=" font-size: 11px;  margin-top: -2.5%; height: 20px;" type="text" id="exp_parts_memo" name="exp_parts_memo" class="form-control">
                        </div>                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="btn_exp_parts" id="btn_exp_parts" class="btn btn-primary">Add +</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-rikuso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Fill the Form (For Transportation)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div style="background: #ccc;" class="container">
            <div class="row">
                    <div class="col-2">
                        <label class="form-control-label">Rec. #</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc;  padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_rec_no" name="get_stock_rec_no" class="form-control"><?php echo $row[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Chassis&nbsp;#</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold;  " type="text" id="get_stock_chassis_id" name="get_stock_chassis_id" class="form-control"><?php echo $row[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Make</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 2px; background: #ccc; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_make" name="get_stock_make" class="form-control"><?php echo $querymake[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Model</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_model" name="get_stock_model" class="form-control"><?php echo $querymodel[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Year</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_man_year" name="get_stock_man_year" class="form-control"><?php echo $row[6]?></label>
                    </div>
                </div>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-4">
                            <label  class="form-control-label">Date</label>
                            <input style=" font-size: 11px;  margin-top: -5%; height: 20px;" type="date" id="exp_rikuso_date" name="exp_rikuso_date" class="form-control">
                        </div>
                        <div style="margin-top: -3%; margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Description</label>
                            <input style=" font-size: 11px; margin-top: -2.5%; height: 20px;" type="text" id="exp_rikuso_discription" name="exp_rikuso_discription" class="form-control">
                        </div>
                        <div  class="col-md-4">
                            <label class="form-control-label">Amount</label>
                            <input style=" font-size: 11px; margin-top: -5%; height: 20px;" type="text" id="exp_rikuso_amount" name="exp_rikuso_amount" class="form-control">
                        </div>
                        <div style="margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Memo</label>
                            <input style=" font-size: 11px; margin-top: -2.5%; height: 20px;" type="text" id="exp_rikuso_memo" name="exp_rikuso_memo" class="form-control">
                        </div>                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="btn_exp_rikuso" id="btn_exp_rikuso" class="btn btn-primary">Add +</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-money" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Fill the Form (For Recieve Money)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div style="background: #ccc;" class="container">
            <div class="row">
                    <div class="col-2">
                        <label class="form-control-label">Rec. #</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc;  padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_rec_no" name="get_stock_rec_no" class="form-control"><?php echo $row[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Chassis&nbsp;#</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold;  " type="text" id="get_stock_chassis_id" name="get_stock_chassis_id" class="form-control"><?php echo $row[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Make</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 2px; background: #ccc; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_make" name="get_stock_make" class="form-control"><?php echo $querymake[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Model</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_model" name="get_stock_model" class="form-control"><?php echo $querymodel[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Year</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_man_year" name="get_stock_man_year" class="form-control"><?php echo $row[6]?></label>
                    </div>
                </div>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -2%" class="col-md-6">
                            <label class="form-control-label">CNF Price</label>
                            <input style=" font-size: 11px;  margin-top: -2%; height: 20px;  width: 230px;" type="text" id="get_stock_cnf_price_print_yen" name="get_stock_cnf_price_print_yen" class="form-control">
                        </div>
                        <div style="margin-top: -2%" class="col-md-6">
                            <label class="form-control-label">Customer Name</label>
                            <select style=" padding: 0px; font-size: 11px;  margin-top: -2%; height: 20px;  width: 205px;" type="text" id="allocation_customer_name" name="allocation_customer_name" class="form-control">
                                <option value="---">Customer Table</option>
                                
                            </select>
                        </div>
                        <div  class="col-md-4 mt-1">
                            <label  class="form-control-label">Remittance ID #</label>
                            <input style="font-size: 11px;  margin-top: -3%; height: 20px;  width: 182px;" type="text" id="get_alloacted_remittance_id_ag" name="get_alloacted_remittance_id_ag" class="form-control">
                        </div>
                        <div style="margin-left: -2.6%; margin-top: 5.7%;" class="col-md-4">
                            <button style="float: right; height: 21px; padding: 0px 0px 1px 0px;  width: 80px;" type="button" name="btn_search_available_amount" id="btn_search_available_amount" class="btn btn-success">Search</button>
                        </div>
                        <div class="col-md-4 mt-1">
                            <label class="form-control-label">Current Balance</label>
                            <label style=" font-size: 11px;  margin-top: -3%; height: 20px;  width: 135px;" type="text" id="get_cust_available_amount" name="get_cust_available_amount" class="form-control"></label>
                        </div>
                        <div  class="col-md-6">
                            <label class="form-control-label">Allocated Amount</label>
                            <input style=" font-size: 11px;  margin-top: -2%; height: 20px;  width: 230px;" type="text" id="get_cust_allocated_amount" name="get_cust_allocated_amount" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-control-label">Remaining Amount</label>
                            <input style=" font-size: 11px;  margin-top: -2%; height: 20px;  width: 206px;" type="text" id="cust_remaining_amount" name="cust_remaining_amount" class="form-control">
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="btn_exp_rec_money" id="btn_exp_rec_money" class="btn btn-primary">Add +</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-important" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Fill the Form (For Important)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div style="background: #ccc;" class="container">
            <div class="row">
                    <div class="col-2">
                        <label class="form-control-label">Rec. #</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc;  padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_rec_no" name="get_stock_rec_no" class="form-control"><?php echo $row[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Chassis&nbsp;#</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold;  " type="text" id="get_stock_chassis_id" name="get_stock_chassis_id" class="form-control"><?php echo $row[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Make</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 2px; background: #ccc; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_make" name="get_stock_make" class="form-control"><?php echo $querymake[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Model</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_model" name="get_stock_model" class="form-control"><?php echo $querymodel[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Year</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_man_year" name="get_stock_man_year" class="form-control"><?php echo $row[6]?></label>
                    </div>
                </div>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-4">
                            <label  class="form-control-label">Date</label>
                            <input style=" font-size: 11px;  margin-top: -5%; height: 20px;" type="date" id="exp_important_date" name="exp_important_date" class="form-control">
                        </div>
                        <div style="margin-top: -3%; margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Description</label>
                            <input style=" font-size: 11px; margin-top: -2.5%; height: 20px;" type="text" id="exp_important_discription" name="exp_important_discription" class="form-control">
                        </div>
                        <div  class="col-md-4">
                            <label class="form-control-label">Amount</label>
                            <input style=" font-size: 11px; margin-top: -5%; height: 20px;" type="text" id="exp_important_amount" name="exp_important_amount" class="form-control">
                        </div>
                        <div style="margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Memo</label>
                            <input style=" font-size: 11px; margin-top: -2.5%; height: 20px;" type="text" id="exp_important_memo" name="exp_important_memo" class="form-control">
                        </div>                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="btn_exp_important" id="btn_exp_important" class="btn btn-primary">Add +</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-commision" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Fill the Form (For Commision)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div style="background: #ccc;" class="container">
              <div class="row">
                    <div class="col-2">
                        <label class="form-control-label">Rec. #</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc;  padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_rec_no" name="get_stock_rec_no" class="form-control"><?php echo $row[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Chassis&nbsp;#</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold;  " type="text" id="get_stock_chassis_id" name="get_stock_chassis_id" class="form-control"><?php echo $row[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Make</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 2px; background: #ccc; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_make" name="get_stock_make" class="form-control"><?php echo $querymake[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Model</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_model" name="get_stock_model" class="form-control"><?php echo $querymodel[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Year</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_man_year" name="get_stock_man_year" class="form-control"><?php echo $row[6]?></label>
                    </div>
                </div>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-4">
                            <label  class="form-control-label">Date</label>
                            <input style=" font-size: 11px;  margin-top: -5%; height: 20px;" type="date" id="exp_commission_date" name="exp_commission_date" class="form-control">
                        </div>
                        <div style="margin-top: -3%; margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Description</label>
                            <input style=" font-size: 11px; margin-top: -2.5%; height: 20px;" type="text" id="exp_commission_discription" name="exp_commission_discription" class="form-control">
                        </div>
                        <div  class="col-md-4">
                            <label class="form-control-label">Amount</label>
                            <input style=" font-size: 11px; margin-top: -5%; height: 20px;" type="text" id="exp_commission_amount" name="exp_commission_amount" class="form-control">
                        </div>
                        <div style="margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Memo</label>
                            <input style=" font-size: 11px; margin-top: -2.5%; height: 20px;" type="text" id="exp_commission_memo" name="exp_commission_memo" class="form-control">
                        </div>                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="btn_exp_commission" id="btn_exp_commission" class="btn btn-primary">Add +</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-boss_price" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Fill the Form (For Boss Price)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div style="background: #ccc;" class="container">
            <div class="row">
                    <div class="col-2">
                        <label class="form-control-label">Rec. #</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc;  padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_rec_no" name="get_stock_rec_no" class="form-control"><?php echo $row[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Chassis&nbsp;#</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold;  " type="text" id="get_stock_chassis_id" name="get_stock_chassis_id" class="form-control"><?php echo $row[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Make</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; padding: 2px; background: #ccc; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_make" name="get_stock_make" class="form-control"><?php echo $querymake[1]?></label>
                    </div>
                    <div class="col-3">
                        <label class="form-control-label">Model</label>
                        <label style="width: 100px; margin-top: -9%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_model" name="get_stock_model" class="form-control"><?php echo $querymodel[2]?></label>
                    </div>
                    <div style="margin-left: -4%;" class="col-2">
                        <label class="form-control-label">Year</label>
                        <label style="width: 80px; margin-top: -15%; font-size: 11px; height: 20px; background: #ccc; padding: 2px; border: 1px solid black; font-weight: bold; " type="text" id="get_stock_man_year" name="get_stock_man_year" class="form-control"><?php echo $row[6]?></label>
                    </div>
                </div>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-4">
                            <label  class="form-control-label">Date</label>
                            <input style=" font-size: 11px;  margin-top: -5%; height: 20px;" type="date" id="exp_boss_price_date" name="exp_boss_price_date" class="form-control">
                        </div>
                        <div style="margin-top: -3%; margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Description</label>
                            <input style=" font-size: 11px; margin-top: -2.5%; height: 20px;" type="text" id="exp_boss_price_discription" name="exp_boss_price_discription" class="form-control">
                        </div>
                        <div  class="col-md-4">
                            <label class="form-control-label">Amount</label>
                            <input style=" font-size: 11px; margin-top: -5%; height: 20px;" type="text" id="exp_boss_price_amount" name="exp_boss_price_amount" class="form-control">
                        </div>
                        <div style="margin-left: -2%;" class="col-md-8">
                            <label class="form-control-label">Memo</label>
                            <input style=" font-size: 11px; margin-top: -2.5%; height: 20px;" type="text" id="exp_boss_price_memo" name="exp_boss_price_memo" class="form-control">
                        </div>                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="btn_exp_boss_price" id="btn_exp_boss_price" class="btn btn-primary">Add +</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-auc-sheet" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Auction Sheet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-12">
                            <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[69]); ?>" class="img-fluid">
                        </div>
                                              
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-ecjp" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">EC (JP)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-12">
                            <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[72]); ?>" class="img-fluid">
                        </div>
                                              
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div> 
<div class="modal fade" id="exampleModalLong-ecen" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">EC (EN)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-12">
                            <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[73]); ?>" class="img-fluid">
                        </div>
                                              
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-invoice" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Invoive</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-12">
                            <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[77]); ?>" class="img-fluid">
                        </div>
                                              
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-ttcopy" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">TT Copy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-12">
                            <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[79]); ?>" class="img-fluid">
                        </div>
                                              
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-baltt" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Bal TT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-12">
                            <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[90]); ?>" class="img-fluid">
                        </div>
                                              
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-shiporder" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ship Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-12">
                            <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[85]); ?>" class="img-fluid">
                        </div>
                                              
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-bl" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">BL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-12">
                            <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[88]); ?>" class="img-fluid">
                        </div>
                                              
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-aucpics" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Auction Pictures</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                    <div class="lightbox-gallery">
                                    <div class="container">
                                        
                                                <div class="row photos">
                                                    <?php 
                                                    $queryimg=mysqli_query($connection,"select * from cardocuments where stockid='".$row[1]."' AND imagetype='AUCTION-PICTURES'");
                                                    
                                                    while($resultimg=mysqli_fetch_array($queryimg))
                                                    {
                                                    ?>
                                                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="cardocuments/<?php echo $resultimg[3]?>" data-lightbox="photos"><img class="img-fluid" src="cardocuments/<?php echo $resultimg[3]?>"></a></div>
                                                <?php }?>
                                                </div>
                                     </div>
                                </div>
                                              
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="btn_exp_commission" id="btn_exp_commission" class="btn btn-primary">Add +</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-yp" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Yard Pictures</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                    <div class="lightbox-gallery">
                                    <div class="container">
                                        
                                                <div class="row photos">
                                                    <?php 
                                                    $queryimg1=mysqli_query($connection,"select * from cardocuments where stockid='".$row[1]."' AND imagetype='YARD-PICTURES'");
                                                    
                                                    while($resultimg1=mysqli_fetch_array($queryimg1))
                                                    {
                                                    ?>
                                                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="cardocuments/<?php echo $resultimg1[3]?>" data-lightbox="photos"><img class="img-fluid" src="cardocuments/<?php echo $resultimg1[3]?>"></a></div>
                                                <?php }?>
                                                </div>
                                     </div>
                                </div>
                                              
                    </div>
                </div>
              
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong-ic" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">IC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div style="margin-top: -3%;" class="col-md-12">
                            <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[95]); ?>" class="img-fluid">
                        </div>
                                              
                    </div>
                </div>
             
            </form>
        </div>
    </div>
</div>
<!-- Modals -->
<script>
            $(document).ready(function(){
            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
            });   
</script>
