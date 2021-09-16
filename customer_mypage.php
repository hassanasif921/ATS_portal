<?php
session_start();
if(!isset($_SESSION['customer']))
{
    header("Location:customer-login.php");
}
include("top.php");
include("connection_db.php");

$querytotalbalancepaid=mysqli_fetch_row(mysqli_query($connection,"select SUM(ats_remittance_amount) from ats_remittance where ats_remittance_customer_name='".$querycustomer[1]."'"));
$querytotalbalanceinacc=mysqli_fetch_row(mysqli_query($connection,"select SUM(remaining_amount) from ats_remittance where ats_remittance_customer_name='".$querycustomer[1]."'"));
$querytotalallocation=mysqli_fetch_row(mysqli_query($connection,"select SUM(allocatedamount) from reservationmoney where customername='".$querycustomer[1]."'"));
$querytotaltopay=mysqli_fetch_row(mysqli_query($connection,"select SUM(remaining_amount) from ats_stock_reservation where customer='".$querycustomer[1]."'"));
?>
            <div class="app-main">
                <div class="container p-0">
                    <div class="app-inner-layout chat-layout">
                        <div class="card-body">
                            <div class="row">  
                            <div class="col-md-3 mt-3">
                                    <div class="container">
                                        <div style="background: lightgray; border-radius:50%; padding-top:20%;" class="spin circle buttn widget-chart bg-primary widget-chart-hover ">
                                            <div class="widget-numbers text-white" style="margin-left:-1%!important;"><small>&yen;</small>&nbsp;<?php echo $querytotalbalancepaid[0]?></div>
                                            <div class="widget-heading widget-heading-1 text-uppercase text-white">Total Balance Paid</div>
                                            <div class="widget-subheading text-white mt-1">Updated<span>(<?php echo Date('d/m/Y')?>)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <div class="container">
                                        <div style="background: lightgray; border-radius:50%; padding-top:20%;" class="spin circle buttn widget-chart bg-success  widget-chart-hover">
                                            <div class="widget-numbers text-white" style="margin-left:-1%!important;"><small>&yen;</small>&nbsp;<?php echo $querytotalallocation[0]?></div>
                                            <div class="widget-heading text-uppercase text-white">Total Balance Allocated</div>
                                            <div class="widget-subheading text-white mt-1">Updated<span>(<?php echo Date('d/m/Y')?>)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <div class="container">
                                        <div style="background: lightgray; border-radius:50%; padding-top:20%;" class="spin circle buttn widget-chart bg-plum-plate widget-chart-hover ">
                                            <div class="widget-numbers text-white" style="margin-left:-1%!important;"><small>&yen;</small>&nbsp;<?php echo $querytotaltopay[0]?></div>
                                            <div class="widget-heading text-uppercase text-white">Payble Balance</div>
                                            <div class="widget-subheading text-white mt-1">Updated<span>(<?php echo Date('d/m/Y')?>)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <div class="container">
                                        <div style="background: lightgray; border-radius:50%; padding-top:20%;" class="spin circle buttn widget-chart bg-asteroid widget-chart-hover ">
                                            <div class="widget-numbers text-white" style="margin-left:-1%!important;"><small>&yen;</small>&nbsp;<?php echo $querytotalbalanceinacc[0]?></div>
                                            <div class="widget-heading text-uppercase text-white">Account Balance</div>
                                            <div class="widget-subheading text-white mt-1">Updated<span> (<?php echo Date('d/m/Y')?>)</span></div>
                                        </div>
                                    </div>
                                </div>     
                                <div style="margin-left: -41px;" class="container mt-3">
                                    <ul style="margin-left:8%;" class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link active" id="tab-c-0" data-toggle="tab" href="#tab-animated-reserve">
                                                <span>All Units</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" id="tab-c-1" data-toggle="tab" href="#tab-animated-repair">
                                                <span>Reserved Units (0% Allocation)</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-transport">
                                            <span>Waiting&nbsp;For&nbsp;Arrival (100% Paid)</span>
                                                
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-parts">
                                            <span>Shipped Units With Balance</span>
                                                
                                            </a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-money">
                                                <span>Waiting For Departure (Shipping Paid)</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-commision">
                                                <span>All&nbsp;Completed</span>
                                            </a>
                                        </li>
                                      
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab-animated-reserve" role="tabpanel">
                                            <div style="margin-left: -71px;" class="container">
                                                <h5 style="margin-left:21%;" class="text-center mt-2 text-primary">All Units</h5>
                                                <div class="row">
                                                    <div style="margin-left:11%;" class="col-lg-12">
                                                        <div class="main-card card">
                                                            <div class="card-body">
                                                                <div style="height:360px;" class="table-responsive">
                                                                    <table class="table-hover table-bordered">
                                                                        <thead style="background: lightsteelblue;">
                                                                            <tr class="text-center">
                                                                                <th>#</th>
                                                                               
                                                                                <th>Rec No.</th>
                                                                                <th>Model</th>
                                                                                <th>Chassis</th>
                                                                                <th>Curr.</th>
                                                                                
                                                                                <th>C&F</th>
                                                                                <th>F.O.B</th>
                                                                                <th>Allocated</th>
                                                                                <th>Remaining Balance</th>
                                                                               
                                                                                <th>From Port</th>
                                                                               
                                                                                <th>Arrival Port</th>
                                                                                <th>ETD</th>
                                                                                <th>ETA</th>    
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody style="background: rgb(0, 0, 0, 0.1);">
                                                                        <?php
                                                                        $queryallumits=mysqli_query($connection,"select * from ats_stock_reservation where customer ='".$querycustomer[1]."'");
                                                                        while($rowallunits=mysqli_fetch_array($queryallumits))
                                                                        {
                                                                            ?>
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td><?php echo $rowallunits[1]?></td>
                                                                                <?php $querycarrecord=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$rowallunits[1]."'"));
                                                                                $querymodel=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$querycarrecord[4]."'"));?>
                                                                                <td><?php echo $querymodel[2]?></td>
                                                                                <td><?php echo $querycarrecord[2]?></td>
                                                                                <td>&yen;</td>
                                                                                <td><?php echo ($rowallunits[17] == "CNF" ?$rowallunits[11]   : "--") ?></td>
                                                                                <td><?php echo ($rowallunits[17] == "FOB" ?$rowallunits[11]   : "--") ?></td>
                                                                             
                                                                                <td><?php echo $rowallunits[11]-$rowallunits[15]?></td>
                                                                                <td><?php echo $rowallunits[15]?></td>
                                                                                <td><?php echo $querycarrecord[120]?></td>
                                                                                <td><?php echo $querycarrecord[121]?></td>
                                                                                <td><?php echo $querycarrecord[83]?></td>
                                                                                <td><?php echo $querycarrecord[125]?></td>
                                                                              
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
                                        <div class="tab-pane" id="tab-animated-repair" role="tabpanel">
                                            <div style="margin-left: -71px;" class="container">
                                                <h5 style="margin-left:21%;" class="text-center mt-2 text-primary">Reserved Units (0% Allocation)</h5>
                                                <div class="row">
                                                    <div style="margin-left:11%;" class="col-lg-12">
                                                        <div class="main-card card">
                                                            <div class="card-body">
                                                                <div style="height:360px;" class="table-responsive">
                                                                    <table class="table-hover table-bordered">
                                                                        <thead style="background: lightsteelblue;">
                                                                        <tr class="text-center">
                                                                                <th>#</th>
                                                                               
                                                                                <th>Rec No.</th>
                                                                                <th>Model</th>
                                                                                <th>Chassis</th>
                                                                                <th>Curr.</th>
                                                                                
                                                                                <th>C&F</th>
                                                                                <th>F.O.B</th>
                                                                                <th>Allocated</th>
                                                                                <th>Remaining Balance</th>
                                                                               
                                                                                <th>From Port</th>
                                                                               
                                                                                <th>Arrival Port</th>
                                                                                <th>ETD</th>
                                                                                <th>ETA</th>    
                                                                            </tr>
                                                                        </thead>
                                                                        <?php
                                                                        $queryzeroallocation2=mysqli_query($connection,"select * from ats_stock_reservation where customer ='".$querycustomer[1]."' AND finalfob = remaining_amount");
                                                                        while($rowzeroallocation=mysqli_fetch_array($queryzeroallocation2))
                                                                        {
                                                                            ?>
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td><?php echo $rowzeroallocation[1]?></td>
                                                                                <?php $querycarrecord2=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$rowzeroallocation[1]."'"));
                                                                                $querymodel1=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$querycarrecord2[4]."'"));?>
                                                                                <td><?php echo $querymodel1[2]?></td>
                                                                                <td><?php echo $querycarrecord2[2]?></td>
                                                                                <td>&yen;</td>
                                                                                <td><?php echo ($rowzeroallocation[17] == "CNF" ?$rowzeroallocation[11]   : "--") ?></td>
                                                                                <td><?php echo ($rowzeroallocation[17] == "FOB" ?$rowzeroallocation[11]   : "--") ?></td>
                                                                             
                                                                                <td><?php echo $rowzeroallocation[11]-$rowzeroallocation[15]?></td>
                                                                                <td><?php echo $rowzeroallocation[15]?></td>
                                                                                <td><?php echo $querycarrecord2[120]?></td>
                                                                                <td><?php echo $querycarrecord2[121]?></td>
                                                                                <td><?php echo $querycarrecord2[83]?></td>
                                                                                <td><?php echo $querycarrecord2[125]?></td>
                                                                              
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
                                        <div class="tab-pane" id="tab-animated-transport" role="tabpanel">
                                            <div style="margin-left: -71px;" class="container">
                                                <h5 style="margin-left:21%;" class="text-center mt-2 text-primary">Waiting For Arrival (100% Paid)</h5>
                                                <div class="row">
                                                    <div style="margin-left:11%;" class="col-lg-12">
                                                        <div class="main-card card">
                                                            <div class="card-body">
                                                                <div style="height:360px;" class="table-responsive">
                                                                    <table class="table-hover table-bordered">
                                                                        <thead style="background: lightsteelblue;">
                                                                        <tr class="text-center">
                                                                                <th>#</th>
                                                                               
                                                                                <th>Rec No.</th>
                                                                                <th>Model</th>
                                                                                <th>Chassis</th>
                                                                                <th>Curr.</th>
                                                                                
                                                                                <th>C&F</th>
                                                                                <th>F.O.B</th>
                                                                                <th>Allocated</th>
                                                                                <th>Remaining Balance</th>
                                                                               
                                                                                <th>From Port</th>
                                                                               
                                                                                <th>Arrival Port</th>
                                                                                <th>ETD</th>
                                                                                <th>ETA</th>    
                                                                            </tr>
                                                                        </thead>
                                                                         <tbody style="background: rgb(0, 0, 0, 0.1);">
                                                                         <?php
                                                                          $customer_sellc=mysqli_query($connection,"select ats_car_stock_rec_no from ats_car_stock where ats_car_stock_dhl_date=''");
                                                                          $projectsc = array();
                                                                          while($arrayuasc=mysqli_fetch_array($customer_sellc))
                                                                          {
                                                                              
                                                                          array_push($projectsc,$arrayuasc[0]);
                                                                          
                                                                          }
                                                                          $customerid = "'" . implode ( "', '", $projectsc ) . "'";
                                                                        $querywaitingforarrivalfullpaid=mysqli_query($connection,"select * from ats_stock_reservation where customer ='".$querycustomer[1]."' AND remaining_amount <= 0 AND recordno in ($customerid)");
                                                                        
                                                                        while($rowzeroallocation2=mysqli_fetch_array($querywaitingforarrivalfullpaid))
                                                                        {
                                                                            ?>
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td><?php echo $rowzeroallocation2[1]?></td>
                                                                                <?php $querycarrecord2=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$rowzeroallocation2[1]."'"));
                                                                                $querymodel2=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$querycarrecord2[4]."'"));?>
                                                                                <td><?php echo $querymodel2[2]?></td>
                                                                                <td><?php echo $querycarrecord2[2]?></td>
                                                                                <td>&yen;</td>
                                                                                <td><?php echo ($rowzeroallocation2[17] == "CNF" ?$rowzeroallocation2[11]   : "--") ?></td>
                                                                                <td><?php echo ($rowzeroallocation2[17] == "FOB" ?$rowzeroallocation2[11]   : "--") ?></td>
                                                                             
                                                                                <td><?php echo $rowzeroallocation2[11]-$rowzeroallocation2[15]?></td>
                                                                                <td><?php echo $rowzeroallocation2[15]?></td>
                                                                                <td><?php echo $querycarrecord2[120]?></td>
                                                                                <td><?php echo $querycarrecord2[121]?></td>
                                                                                <td><?php echo $querycarrecord2[83]?></td>
                                                                                <td><?php echo $querycarrecord2[125]?></td>
                                                                                
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
                                        <div class="tab-pane" id="tab-animated-parts" role="tabpanel">
                                            <div style="margin-left: -71px;" class="container">
                                                <h5 style="margin-left:21%;" class="text-center mt-2 text-primary">Shipped Units With Balance</h5>
                                                <div class="row">
                                                    <div style="margin-left:11%;" class="col-lg-12">
                                                        <div class="main-card card">
                                                            <div class="card-body">
                                                                <div style="height:360px;" class="table-responsive">
                                                                    <table class="table-hover table-bordered">
                                                                        <thead style="background: lightsteelblue;">
                                                                        <tr class="text-center">
                                                                                <th>#</th>
                                                                               
                                                                                <th>Rec No.</th>
                                                                                <th>Model</th>
                                                                                <th>Chassis</th>
                                                                                <th>Curr.</th>
                                                                                
                                                                                <th>C&F</th>
                                                                                <th>F.O.B</th>
                                                                                <th>Allocated</th>
                                                                                <th>Remaining Balance</th>
                                                                               
                                                                                <th>From Port</th>
                                                                               
                                                                                <th>Arrival Port</th>
                                                                                <th>ETD</th>
                                                                                <th>ETA</th>    
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody style="background: rgb(0, 0, 0, 0.1);">
                                                                         <?php
                                                                          $customer_sellc1=mysqli_query($connection,"select ats_car_stock_rec_no from ats_car_stock where ats_car_stock_dhl_date<>''");
                                                                          $projectsc1 = array();
                                                                          while($arrayuasc=mysqli_fetch_array($customer_sellc1))
                                                                          {
                                                                              
                                                                          array_push($projectsc1,$arrayuasc[0]);
                                                                          
                                                                          }
                                                                          $customerid1 = "'" . implode ( "', '", $projectsc1 ) . "'";
                                                                        $queryshippedunitswithbalance=mysqli_query($connection,"select * from ats_stock_reservation where customer ='".$querycustomer[1]."' AND remaining_amount > 0 AND recordno in ($customerid1)");
                                                                        
                                                                        while($rowzeroallocation3=mysqli_fetch_array($queryshippedunitswithbalance))
                                                                        {
                                                                            ?>
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td><?php echo $rowzeroallocation3[1]?></td>
                                                                                <?php $querycarrecord3=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$rowzeroallocation3[1]."'"));
                                                                                $querymodel3=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$querycarrecord3[4]."'"));?>
                                                                                <td><?php echo $querymodel3[2]?></td>
                                                                                <td><?php echo $querycarrecord3[2]?></td>
                                                                                <td>&yen;</td>
                                                                                <td><?php echo ($rowzeroallocation3[17] == "CNF" ?$rowzeroallocation3[11]   : "--") ?></td>
                                                                                <td><?php echo ($rowzeroallocation3[17] == "FOB" ?$rowzeroallocation3[11]   : "--") ?></td>
                                                                             
                                                                                <td><?php echo $rowzeroallocation3[11]-$rowzeroallocation3[15]?></td>
                                                                                <td><?php echo $rowzeroallocation3[15]?></td>
                                                                                <td><?php echo $querycarrecord3[120]?></td>
                                                                                <td><?php echo $querycarrecord3[121]?></td>
                                                                                <td><?php echo $querycarrecord3[83]?></td>
                                                                                <td><?php echo $querycarrecord3[125]?></td>
                                                                                
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
                                        <div class="tab-pane" id="tab-animated-money" role="tabpanel">
                                            <div style="margin-left: -71px;" class="container">
                                                <h5 style="margin-left:21%;" class="text-center mt-2 text-primary">Waiting For Departure (Shipping Paid)</h5>
                                                <div class="row">
                                                    <div style="margin-left:11%;" class="col-lg-12">
                                                        <div class="main-card card">
                                                            <div class="card-body">
                                                                <div style="height:360px;" class="table-responsive">
                                                                    <table class="table-hover table-bordered">
                                                                        <thead style="background: lightsteelblue;">
                                                                        <tr class="text-center">
                                                                                <th>#</th>
                                                                               
                                                                                <th>Rec No.</th>
                                                                                <th>Model</th>
                                                                                <th>Chassis</th>
                                                                                <th>Curr.</th>
                                                                                
                                                                                <th>C&F</th>
                                                                                <th>F.O.B</th>
                                                                                <th>Allocated</th>
                                                                                <th>Remaining Balance</th>
                                                                               
                                                                                <th>From Port</th>
                                                                               
                                                                                <th>Arrival Port</th>
                                                                                <th>ETD</th>
                                                                                <th>ETA</th>    
                                                                            </tr>
                                                                    </thead>
                                                                        <tbody style="background: rgb(0, 0, 0, 0.1);">
                                                                            <?php
                                                                            $customer_sellc2=mysqli_query($connection,"select ats_car_stock_rec_no from ats_car_stock where ats_car_stock_dhl_date=''");
                                                                            $projectsc2 = array();
                                                                            while($arrayuasc2=mysqli_fetch_array($customer_sellc2))
                                                                            {
                                                                                
                                                                            array_push($projectsc2,$arrayuasc2[0]);
                                                                            
                                                                            }
                                                                            $customerid1 = "'" . implode ( "', '", $projectsc2 ) . "'";
                                                                            $queryallcompleted=mysqli_query($connection,"select * from ats_stock_reservation where customer ='".$querycustomer[1]."' AND reservedpaymentstatus = 'CONFIRMED' AND recordno in ($customerid1)");
                                                                            
                                                                            while($rowzeroallocation4=mysqli_fetch_array($querywaitingfordeparture))
                                                                            {

                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row">1</th>
                                                                                    <td><?php echo $rowzeroallocation4[1]?></td>
                                                                                    <?php $querycarrecord4=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$rowzeroallocation4[1]."'"));
                                                                                    $querymodel4=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$querycarrecord4[4]."'"));?>
                                                                                    <td><?php echo $querymodel4[2]?></td>
                                                                                    <td><?php echo $querycarrecord4[2]?></td>
                                                                                    <td>&yen;</td>
                                                                                    <td><?php echo ($rowzeroallocation4[17] == "CNF" ?$rowzeroallocation4[11]   : "--") ?></td>
                                                                                    <td><?php echo ($rowzeroallocation4[17] == "FOB" ?$rowzeroallocation4[11]   : "--") ?></td>
                                                                                
                                                                                    <td><?php echo $rowzeroallocation4[11]-$rowzeroallocation4[15]?></td>
                                                                                    <td><?php echo $rowzeroallocation4[15]?></td>
                                                                                    <td><?php echo $querycarrecord4[120]?></td>
                                                                                    <td><?php echo $querycarrecord4[121]?></td>
                                                                                    <td><?php echo $querycarrecord4[83]?></td>
                                                                                    <td><?php echo $querycarrecord4[125]?></td>
                                                                                    
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
                                        <div class="tab-pane" id="tab-animated-commision" role="tabpanel">
                                            <div style="margin-left: -71px;" class="container">
                                                <h5 style="margin-left:21%;" class="text-center mt-2 text-primary">All Completed</h5>
                                                <div class="row">
                                                    <div style="margin-left:11%;" class="col-lg-12">
                                                        <div class="main-card card">
                                                            <div class="card-body">
                                                                <div style="height:360px;" class="table-responsive">
                                                                    <table class="table-hover table-bordered">
                                                                        <thead style="background: lightsteelblue;">
                                                                            <tr class="text-center">
                                                                                <th>#</th>
                                                                                <th>Action</th>
                                                                                <th>Rec No.</th>
                                                                                <th>Model</th>
                                                                                <th>Chassis</th>
                                                                                <th>Currency</th>
                                                                                <th>Type</th>
                                                                                <th>Vehicle Price</th>
                                                                                <th>Paid so far</th>
                                                                                <th>Agreed</th>
                                                                                <th>Paid</th>
                                                                                <th>Vehicle Balance</th>
                                                                                <th>From Port</th>
                                                                                <th>Arrival Port</th>
                                                                                <th>Departure Date</th>
                                                                                <th>Arrival Date</th>    
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody style="background: rgb(0, 0, 0, 0.1);">
                                                                            <?php
                                                                            $customer_sellc3=mysqli_query($connection,"select ats_car_stock_rec_no from ats_car_stock where ats_car_stock_dhl_date=''");
                                                                            $projectsc3 = array();
                                                                            while($arrayuasc3=mysqli_fetch_array($customer_sellc3))
                                                                            {
                                                                                
                                                                            array_push($projectsc3,$arrayuasc3[0]);
                                                                            
                                                                            }
                                                                            $customerid3 = "'" . implode ( "', '", $projectsc3 ) . "'";
                                                                            $queryallcompleted=mysqli_query($connection,"select * from ats_stock_reservation where customer ='".$querycustomer[1]."' AND reservedpaymentstatus = 'CONFIRMED' AND recordno in ($customerid3)");
                                                                            
                                                                            while($rowallcompleted=mysqli_fetch_array($queryallcompleted))
                                                                            {

                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row">1</th>
                                                                                    <td><?php echo $rowallcompleted[1]?></td>
                                                                                    <?php $querycarrecord5=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$rowallcompleted[1]."'"));
                                                                                    $querymodel4=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_make_model='".$querycarrecord5[4]."'"));?>
                                                                                    <td><?php echo $querymodel4[2]?></td>
                                                                                    <td><?php echo $querycarrecord5[2]?></td>
                                                                                    <td>&yen;</td>
                                                                                    <td><?php echo ($rowallcompleted[17] == "CNF" ?$rowallcompleted[11]   : "--") ?></td>
                                                                                    <td><?php echo ($rowallcompleted[17] == "FOB" ?$rowallcompleted[11]   : "--") ?></td>
                                                                                
                                                                                    <td><?php echo $rowallcompleted[11]-$rowallcompleted[15]?></td>
                                                                                    <td><?php echo $rowallcompleted[15]?></td>
                                                                                    <td><?php echo $querycarrecord5[120]?></td>
                                                                                    <td><?php echo $querycarrecord5[121]?></td>
                                                                                    <td><?php echo $querycarrecord5[83]?></td>
                                                                                    <td><?php echo $querycarrecord5[125]?></td>
                                                                                    
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
                </div>
            </div>
<?php
include("bottom.php");
?> 
       