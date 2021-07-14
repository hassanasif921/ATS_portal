<?php
include("top.php");
include("connection_db.php");
// $query="select * from ats_car_stocK WHERE ";
// if(trim($_POST['get_stock_rec_no']))
// {
//     $query.="ats_car_stock_rec_no LIKE '".$_POST['get_stock_rec_no']."' ";
// }
// if(trim($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])) {
//     $query.="AND ats_car_stock_kobutsu LIKE '".$_POST['get_stock_kobutsu']."' ";
// }
// elseif(trim($_POST['get_stock_kobutsu']))
// {
//     $query.="ats_car_stock_kobutsu LIKE '".$_POST['get_stock_kobutsu']."' ";
// }
// if(trim($_POST['get_stock_chassis_id']) && trim($_POST['get_stock_kobutsu']) ) {
//        $query.="AND ats_car_stock_chassic_no LIKE '".$_POST['get_stock_chassis_id']."' ";
//    }
// elseif(trim($_POST['get_stock_chassis_id']) && trim($_POST['get_stock_rec_no']) ) {
//     $query.="AND ats_car_stock_chassic_no LIKE '".$_POST['get_stock_chassis_id']."' ";
// }
// elseif(trim($_POST['get_stock_chassis_id']) ) {
//     $query.="ats_car_stock_chassic_no LIKE '".$_POST['get_stock_chassis_id']."' ";
// }
// if(trim($_POST['get_stock_make'])  && trim($_POST['get_stock_chassis_id']))
// {
//     $query.="AND ats_car_stock_make LIKE '".$_POST['get_stock_make']."' ";
// }
// elseif(trim($_POST['get_stock_make'])  && trim($_POST['get_stock_kobutsu']))
// {
//     $query.="AND ats_car_stock_make LIKE '".$_POST['get_stock_make']."' ";
// }
// elseif(trim($_POST['get_stock_make'])  && trim($_POST['get_stock_rec_no']))
// {
//     $query.="AND ats_car_stock_make LIKE '".$_POST['get_stock_make']."' ";
// }
// elseif(trim($_POST['get_stock_make']))
// {
//     $query.="ats_car_stock_make LIKE '".$_POST['get_stock_make']."' ";
// }
// //modal
// if(trim($_POST['stock_model'])  && trim($_POST['get_stock_make']))
// {
//     $query.="AND ats_car_stock_model LIKE '".$_POST['stock_model']."' ";
// }
// //shift
// if(trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']))
// {
//     if(trim($_POST['get_stock_shift']) ){
//     $query.="AND ats_car_stock_shift LIKE '".$_POST['get_stock_shift']."' ";
//     }
// }
// elseif(trim($_POST['get_stock_shift'])) {
//     $query.="ats_car_stock_shift LIKE '".$_POST['get_stock_shift']."' ";
// }
// if(trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']))
// {
//     if(trim($_POST['get_stock_reg_year']) ){
//     $query.="AND ats_car_stock_man_year LIKE '".$_POST['get_stock_reg_year']."' ";
//     }
// }
// elseif(trim($_POST['get_stock_reg_year']) ) {
//     $query.="ats_car_stock_man_year LIKE '".$_POST['get_stock_reg_year']."' ";
// }
// //color
// if( trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']))
// {
//     if(trim($_POST['get_stock_color']) ){
//     $query.="AND ats_car_stock_color LIKE '".$_POST['get_stock_color']."' ";
//     }
// }
// elseif(trim($_POST['get_stock_color']) ) {
//     $query.="ats_car_stock_color LIKE '".$_POST['get_stock_color']."' ";
// }
// //fuel
// if( trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']))
// {
//     if(trim($_POST['stock_fuel']) ){
//     $query.="AND ats_car_stock_fuel LIKE '".$_POST['stock_fuel']."' ";
//     }
// }
// elseif(trim($_POST['stock_fuel']) ) {
//     $query.="ats_car_stock_fuel LIKE '".$_POST['stock_fuel']."' ";
// }
// //vessel
// if( trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']))
// {
//     if(trim($_POST['get_stock_vessel_name']) ){
//     $query.="AND ats_car_stock_vessel_name LIKE '".$_POST['get_stock_vessel_name']."' ";
//     }
// }
// elseif(trim($_POST['get_stock_vessel_name']) ) {
//     $query.="ats_car_stock_vessel_name LIKE '".$_POST['get_stock_vessel_name']."' ";
// }
// //Voyage
// if(trim($_POST['get_stock_vessel_name']) || trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']))
// {
//     if(trim($_POST['get_stock_voyage']) ){
//     $query.="AND ats_car_stock_voyage LIKE '".$_POST['get_stock_voyage']."' ";
//     }
// }
// elseif(trim($_POST['get_stock_voyage']) ) {
//     $query.="ats_car_stock_voyage LIKE '".$_POST['get_stock_voyage']."' ";
// }
// //BL_no
// if(trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']))
// {
//     if(trim($_POST['get_stock_bl_no']) ){
//     $query.="AND ats_car_stock_bl_number LIKE '".$_POST['get_stock_bl_no']."' ";
//     }
// }
// elseif(trim($_POST['get_stock_bl_no']) ) {
//     $query.="ats_car_stock_bl_number LIKE '".$_POST['get_stock_bl_no']."' ";
// }
// $queryca=mysqli_query($connection,$query);
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <form action="" method="">
                            <div style="margin-top: -0.5%; box-shadow: none;" class="app-inner-layout__wrapper row-fluid no-gutters">
                                <div class="tab-content app-inner-layout__content card" >
                                    <div>
                                        <div style="background-color: gray; height: 1px;"></div>
                                        <div>
                                            <div class="card-body">
                                                <div style="margin-left: -111px;" class="container">
                                                    <div class="row">
                                                        <div style="margin-left:10%;" class="col-lg-12 mt-3">
                                                            <a href="index-dashboard.php" class="btn btn-primary text-center text-white">Back to Search</a>
                                                            <div class="main-card card mt-2">
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
                                                                                    <th>Action</th>
                                                                                </tr>    
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                    while($rowca=mysqli_fetch_array($queryca))
                                                                                    {
                                                                                ?>
                                                                                <tr>
                                                                                    <td><input type="checkbox" /></td>
                                                                                    <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php echo $rowca[28]?></td>
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
                                                                                    <td><?php echo $rowca[32] .",".$rowca[33].",".$rowca[34].",".$rowca[35].",".$rowca[36].",".$rowca[37].",".$rowca[38].",".$rowca[39].",".$rowca[40].",".$rowca[41].",".$rowca[42].",".$rowca[43].",".$rowca[44].",".$rowca[45].",".$rowca[46].",".$rowca[47].",".$rowca[48]?></td>
                                                                                    <td><?php echo $rowca[51]?></td>
                                                                                    <td><?php echo $rowca[12]?></td>
                                                                                    <td><?php echo $rowca[17]?></td>
                                                                                    <td><a href="car-view.php?car_id=<?php echo $rowca[0]?>">VIEW</a></td>
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
                                                <!-- <div style="margin-left: -35px;" class="container">
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
                                                                                        <th>Action</th>
                                                                                    </tr>    
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php
                                                                                        while($rowca=mysqli_fetch_array($queryca))
                                                                                        {
                                                                                        ?>
                                                                                    <tr>
                                                                                        <td><input type="checkbox" /></td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php echo $rowca[28]?></td>
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
                                                                                        <td><?php echo $rowca[32] .",".$rowca[33].",".$rowca[34].",".$rowca[35].",".$rowca[36].",".$rowca[37].",".$rowca[38].",".$rowca[39].",".$rowca[40].",".$rowca[41].",".$rowca[42].",".$rowca[43].",".$rowca[44].",".$rowca[45].",".$rowca[46].",".$rowca[47].",".$rowca[48]?></td>
                                                                                        <td><?php echo $rowca[51]?></td>
                                                                                        <td><?php echo $rowca[12]?></td>
                                                                                        <td><?php echo $rowca[17]?></td>
                                                                                        <td><a href="car-view.php?car_id=<?php echo $rowca[0]?>">VIEW</a></td>
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
                                                </div> -->
                                            </div> 
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </form>
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
$(document).on('ready', function () {
      // initialization of daterangepicker
      $('.js-daterangepicker').daterangepicker();
    });
           
</script>
