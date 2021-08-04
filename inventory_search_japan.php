<?php
include("top.php");
include("connection_db.php");

$query="select * from ats_car_stocK  where ats_car_stock_country_location='Japan'";
$queryca=mysqli_query($connection,$query);

?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div style="margin-top: -1.2%; box-shadow: none;" class="app-inner-layout__wrapper row-fluid no-gutters">
                            <div class="tab-content app-inner-layout__content card" >
                                <div style="box-shadow: none;" class=" container card">
                                    <form action="" method="">    
                                        <div style="background:darkgray; padding-top: 2%;" class="row">
                                                <div class="col-sm-1">
                                                    <label style="font-weight: bold; margin-top: 5px;" class="form-control-label">Make</label>
                                                </div>
                                                <div class="col-sm-2 ">
                                                    <input style="margin-left: -20%;" name="get_stock_make_japan" id="get_stock_make_japan"  type="text" class="form-control form-control-sm">
                                                </div>
                                                <div style="margin-left: -3%;" class="col-sm-1">
                                                    <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Model</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input style="margin-left: -20%;" name="get_stock_modal_japan" id="get_stock_modal_japan"  type="text" class="form-control form-control-sm">
                                                </div>
                                                <div style="margin-left: -3%;" class="col-sm-2">
                                                    <label style=" font-weight: bold; margin-top: 5px;" class="form-control-label">Chassis ID #</label>
                                                </div>
                                                <div style="margin-left: -8%;" class="col-sm-2">
                                                    <input name="get_stock_chassis_id_japan" id="get_stock_chassis_id_japan" type="text" class="form-control form-control-sm">
                                                </div>
                                                <div style="margin-left: 2%;" class="col-sm-1">
                                                    <input style="width: 100px;" type="reset" name="btn_reset" class="mb-2 mr-2 btn btn-gradient-primary" value="Refresh"> 
                                                </div>
                                                <div style="margin-left: 5%;" class="col-sm-1">
                                                    <input style="width: 100px;" type="submit" name="japan_search_btn" id="japan_search_btn" class="mb-2 mr-2 btn btn-gradient-success" value="Search"> 
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
                                                                                <td>
                                                                                <?php 
                                                                        for($i=32;$i<48;$i++)
                                                                        {
                                                                            if(trim($rowca[$i]))
                                                                            {
                                                                                $y=$i+1;
                                                                                echo $rowca[$i].",";
                                                                                
                                                                               
                                                                                
                                                                            }
                                                                        }
                                                                    ?>
                                                                                </td>
                                                                                <td><?php echo $rowca[51]?></td>
                                                                                <td><?php echo $rowca[12]?></td>
                                                                                <td><?php echo $rowca[17]?></td>
                                                                                <td><a href="car-view.php?car_id=<?php echo $rowca[0]?>">VIEW</a></td>

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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
include("bottom.php");
?>

           

