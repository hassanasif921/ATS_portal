<?php
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
                                                                            <!-- <tr>
                                                                                <th scope="row">1</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
                                                                                <td>MI-298978</td>
                                                                                <td>Suzuki Cultus</td>
                                                                                <td>4676578746</td>
                                                                                <td>$</td>
                                                                                <td>5430 $USD</td>
                                                                                <td>3400 $</td>
                                                                                <td>50%</td>
                                                                                <td>30%</td>
                                                                                <td>4698$</td>
                                                                                <td>KAI TAKA Saki, Port of Japan</td>
                                                                                <td>Gawadar Port</td>
                                                                                <td>Mark</td>
                                                                                <td>02\6\2021</td>
                                                                                <td>02\7\2021</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">4</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-warning">Cancel</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">5</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">6</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-primary">Pending</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">7</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-danger">Expired</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr> -->
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
                                                                        <!-- <tbody style="background: rgb(0, 0, 0, 0.1);">
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
                                                                                <td>MI-298978</td>
                                                                                <td>Suzuki Cultus</td>
                                                                                <td>4676578746</td>
                                                                                <td>$</td>
                                                                                <td>5430 $USD</td>
                                                                                <td>3400 $</td>
                                                                                <td>50%</td>
                                                                                <td>30%</td>
                                                                                <td>4698$</td>
                                                                                <td>KAI TAKA Saki, Port of Japan</td>
                                                                                <td>Gawadar Port</td>
                                                                                <td>Mark</td>
                                                                                <td>02\6\2021</td>
                                                                                <td>02\7\2021</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">4</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-warning">Cancel</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">5</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">6</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-primary">Pending</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">7</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-danger">Expired</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                        </tbody> -->
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
                                                                        <!-- <tbody style="background: rgb(0, 0, 0, 0.1);">
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
                                                                                <td>MI-298978</td>
                                                                                <td>Suzuki Cultus</td>
                                                                                <td>4676578746</td>
                                                                                <td>$</td>
                                                                                <td>5430 $USD</td>
                                                                                <td>3400 $</td>
                                                                                <td>50%</td>
                                                                                <td>30%</td>
                                                                                <td>4698$</td>
                                                                                <td>KAI TAKA Saki, Port of Japan</td>
                                                                                <td>Gawadar Port</td>
                                                                                <td>Mark</td>
                                                                                <td>02\6\2021</td>
                                                                                <td>02\7\2021</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">4</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-warning">Cancel</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">5</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">6</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-primary">Pending</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">7</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-danger">Expired</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                        </tbody> -->
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
                                                                        <!-- <tbody style="background: rgb(0, 0, 0, 0.1);">
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
                                                                                <td>MI-298978</td>
                                                                                <td>Suzuki Cultus</td>
                                                                                <td>4676578746</td>
                                                                                <td>$</td>
                                                                                <td>5430 $USD</td>
                                                                                <td>3400 $</td>
                                                                                <td>50%</td>
                                                                                <td>30%</td>
                                                                                <td>4698$</td>
                                                                                <td>KAI TAKA Saki, Port of Japan</td>
                                                                                <td>Gawadar Port</td>
                                                                                <td>Mark</td>
                                                                                <td>02\6\2021</td>
                                                                                <td>02\7\2021</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">4</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-warning">Cancel</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">5</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">6</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-primary">Pending</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">7</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-danger">Expired</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                        </tbody> -->
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
                                                                        <!-- <tbody style="background: rgb(0, 0, 0, 0.1);">
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
                                                                                <td>MI-298978</td>
                                                                                <td>Suzuki Cultus</td>
                                                                                <td>4676578746</td>
                                                                                <td>$</td>
                                                                                <td>5430 $USD</td>
                                                                                <td>3400 $</td>
                                                                                <td>50%</td>
                                                                                <td>30%</td>
                                                                                <td>4698$</td>
                                                                                <td>KAI TAKA Saki, Port of Japan</td>
                                                                                <td>Gawadar Port</td>
                                                                                <td>Mark</td>
                                                                                <td>02\6\2021</td>
                                                                                <td>02\7\2021</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">4</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-warning">Cancel</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">5</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">6</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-primary">Pending</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">7</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-danger">Expired</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                        </tbody> -->
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
                                                                        <!-- <tbody style="background: rgb(0, 0, 0, 0.1);">
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
                                                                                <td>MI-298978</td>
                                                                                <td>Suzuki Cultus</td>
                                                                                <td>4676578746</td>
                                                                                <td>$</td>
                                                                                <td>5430 $USD</td>
                                                                                <td>3400 $</td>
                                                                                <td>50%</td>
                                                                                <td>30%</td>
                                                                                <td>4698$</td>
                                                                                <td>KAI TAKA Saki, Port of Japan</td>
                                                                                <td>Gawadar Port</td>
                                                                                <td>Mark</td>
                                                                                <td>02\6\2021</td>
                                                                                <td>02\7\2021</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
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
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">4</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-warning">Cancel</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">5</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-success">Active</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">6</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-primary">Pending</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">7</th>
                                                                                <td><div class="mb-2 mr-2 badge badge-danger">Expired</div></td>
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
                                                                                <td>Otto</td>
                                                                            </tr>
                                                                        </tbody> -->
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
       