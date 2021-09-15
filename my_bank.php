<?php
include("top.php");
include("connection_db.php");
$id=$_SESSION['agents_id'];
$queryunitcosting=mysqli_fetch_row(mysqli_query($connection,"select SUM(finalfob) from ats_stock_reservation where agent_name='".$_SESSION['agents_id']."'"));
$queryunitremitted=mysqli_fetch_row(mysqli_query($connection,"select COUNT(*) from ats_stock_reservation where agent_name='".$_SESSION['agents_id']."' AND remaining_amount <= 0 "));
$queryunitremitted=mysqli_fetch_row(mysqli_query($connection,"select COUNT(*) from ats_stock_reservation where agent_name='".$_SESSION['agents_id']."' AND remaining_amount <= 0 "));
$query2=mysqli_fetch_row(mysqli_query($connection,"select SUM(remaining_amount) from ats_stock_reservation where agent_name='".$_SESSION['agents_id']."'"));
$totalallocated=$queryunitcosting[0]-$query2[0];
$total_remaining=$queryunitcosting[0]-$totalallocated;
$query3=mysqli_fetch_row(mysqli_query($connection,"select SUM(remaining_amount) from ats_remittance where ats_remittance_agent_name='".$_SESSION['agents_id']."'"));

?>        
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div style="margin-top: -1.2%; box-shadow: none;" class="app-inner-layout__wrapper row-fluid no-gutters">
                            <div class="app-inner-layout__content card">
                                <div class="no-gutters mt-3 row">
                                    <div class="col-lg-12 col-xl-8">
                                        <div class="main-card">
                                            <div style="margin: 2%;" class="row">
                                                <div class="col-sm-4">
                                                    <div style="background: lightgray;" class="widget-chart bg-primary widget-chart-hover text-left">
                                                        <div style="font-weight: bold;" class="widget-heading text-uppercase text-white">Units Costing</div>
                                                        <div class="widget-numbers text-white">&yen; <?php echo $queryunitcosting[0]?></div>
                                                        <div class="widget-subheading text-white">Updated<span> (<?php echo Date('d/m/Y')?>)</span></div>
                                                        <!-- <div class="text-success">    
                                                            <span class="pl-1 text-white">175.5%</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div style="background: lightgray;" class="widget-chart bg-focus widget-chart-hover text-left">
                                                        <div style="font-weight: bold;" class="widget-heading text-uppercase text-white">Units Remitted</div>
                                                        <div class="widget-numbers text-white"><small></small><?php echo $queryunitremitted[0] ?></div>
                                                        <div class="widget-subheading text-white">Updated<span> (<?php echo Date('d/m/Y')?>)</span></div>
                                                        <!-- <div class="text-success">    
                                                            <span class="pl-1 text-white">175.5%</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div style="background: lightgray;" class="widget-chart bg-success widget-chart-hover text-left">
                                                        <div style="font-weight: bold;" class="widget-heading text-uppercase text-white">Total Allocated</div>
                                                        <div class="widget-numbers text-white"><small>&yen;</small> <?php echo $totalallocated;?></div>
                                                        <div class="widget-subheading text-white">Updated<span> (<?php echo Date('d/m/Y')?>)</span></div>
                                                        <!-- <div class="text-success">    
                                                            <span class="pl-1 text-white">175.5%</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div style="background: lightgray;" class="widget-chart bg-asteroid widget-chart-hover text-left">
                                                        <div style="font-weight: bold;" class="widget-heading text-uppercase text-white">Total Remaining</div>
                                                        <div class="widget-numbers text-white"><small>&yen;</small> <?php echo $total_remaining?></div>
                                                        <div class="widget-subheading text-white">Updated<span> (<?php echo Date('d/m/Y')?>)</span></div>
                                                        <!-- <div class="text-success">    
                                                            <span class="pl-1 text-white">175.5%</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 mt-2">
                                                    <div style="background: lightgray;" class="widget-chart bg-plum-plate widget-chart-hover text-left">
                                                        <div style="font-weight: bold;" class="widget-heading text-uppercase text-white">Available Balance</div>
                                                        <div class="widget-numbers text-white"><small>&yen;</small> <?php echo $query3[0];?></div>
                                                        <div class="widget-subheading text-white">Updated<span> (<?php echo Date('d/m/Y')?>)</span></div>
                                                        <!-- <div class="text-success">    
                                                            <span class="pl-1 text-white">175.5%</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div style="margin-left:-71px;" class="container">
                                                    <div style="margin-left:8.3%; max-width: 105%;" class="col-md-12">
                                                        <ul class="tabs-animated-shadow tabs-animated nav nav-justified mt-3">
                                                            <li class="nav-item">
                                                                <a role="tab" class="nav-link active" id="tab-c-0" data-toggle="tab" href="#tab-animated-transaction">
                                                                    <span>Transactions</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a role="tab" class="nav-link" id="tab-c-1" data-toggle="tab" href="#tab-animated-allocation">
                                                                    <span>Allocation</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-paid-units">
                                                                    <span>Paid Units</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-unpaid-units">
                                                                    <span>Unpaid Units</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div style="overflow: auto; height:250px;" class="tab-content">
                                                            <div class="tab-pane active" id="tab-animated-transaction" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <b class="mt-4">Search By Date</b>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input class="form-control form-control-sm" placeholder="From">
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <b>To</b>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input class="form-control form-control-sm" placeholder="Till">
                                                                    </div>
                                                                </div>
                                                                
                                                                <table class="table table-md mt-3">
                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th>#</th>
                                                                            <th>Remittance ID </th>
                                                                            <th>Agent Name</th>
                                                                            <th>Customer Name</th>
                                                                            <th>Country</th>
                                                                            <th>Date</th>
                                                                            <th>Sender Name</th>
                                                                            <th>Amount</th>
                                                                            <th>Currency</th>
                                                                            <th>Conversion rate</th>
                                                                            <th>Vendor Name</th>
                                                                            <th>Account No.</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $transiction_history=mysqli_query($connection,"select * from ats_remittance where ats_remittance_agent_name ='".$_SESSION['agents_id']."'");
                                                                        while($row_transiction=mysqli_fetch_array($transiction_history)){ ?>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td><?php echo $row_transiction['ats_remittance_Remittance_ID'] ?></td>
                                                                            <td><?php echo $queryagents[1]." ".$queryagents[2]." ".$queryagents[3]?></td>
                                                                            <?php $getcustomer=mysqli_fetch_row(mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$row_transiction['ats_remittance_customer_name']."'"));?>
                                                                            <td><?php echo $getcustomer[3] ?></td>
                                                                            <?php $getcustomerc=mysqli_fetch_row(mysqli_query($connection,"select * from countryports where id='".$getcustomer[8]."'"));?>

                                                                            <td><?php echo $row_transiction['ats_remittance_country']?></td>
                                                                            <td><?php echo $row_transiction['ats_remittance_date']?></td>
                                                                            <td><?php echo $row_transiction['ats_remittance_sender_name']?></td>
                                                                            <td><?php echo $row_transiction['ats_remittance_amount']?></td>
                                                                            <td><?php echo $row_transiction['ats_remittance_currency']?></td>
                                                                            <td><?php echo $row_transiction['ats_remittance_con_rate']?></td>
                                                                            <?php $getvendor=mysqli_fetch_row(mysqli_query($connection,"select * from ats_vendor where ats_vendor_id='".$row_transiction['ats_remittance_vendor_name']."'"));?>
                                                                            <td><?php echo $getvendor[1]?></td>
                                                                            <td><?php echo $row_transiction['ats_remittance_account']?></td>
                                                                        </tr>
                                                                    <?php }?>
                                                                    </tbody>
                                                                </table>       
                                                            </div>
                                                            <div class="tab-pane" id="tab-animated-allocation" role="tabpanel">
                                                                <table style="white-space: nowrap;" class="table tables-sm">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Remittance ID </th>
                                                                            <th>Record # </th>
                                                                           
                                                                            <th>Customer Name</th>
                                                                     
                                                                            <th>Date</th>
                                                                         
                                                                            <th>Amount</th>
                                                                          
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php 
                                                                        $queryallocation1=mysqli_query($connection,"SELECT * FROM `reservationmoney` where agent_id='".$_SESSION['agents_id']."'");
                                                                        while($queryallocation=mysqli_fetch_array($queryallocation1)){
                                                                        
                                                                        ?>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td><?php echo $queryallocation['remittance_id'] ?></td>
                                                                            <td><?php echo $queryallocation['recordno'] ?></td>
                                                                         
                                                                            <?php $getcustomer1=mysqli_fetch_row(mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$queryallocation['customername']."'"));?>
                                                                            <td><?php echo $getcustomer1[3] ?></td>
                                                                            <td><?php echo $queryallocation['created_at'] ?></td>
                                                                            <td><?php echo $queryallocation['allocatedamount'] ?></td>
                                                                        </tr>
                                                                     <?php } ?>
                                                                    </tbody>
                                                                </table>          
                                                            </div>
                                                            <div class="tab-pane" id="tab-animated-paid-units" role="tabpanel">
                                                                <table style="white-space: nowrap;" class="table tables-sm">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Record # </th>
                                                                            <th>Customer Name </th>
                                                                            <th>Sold Date</th>
                                                                            <th>FOB/CNF</th>
                                                                            <th>Price</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php 
                                                                            
                                                                           $customer_sellc=mysqli_query($connection,"select * from ats_stock_reservation where agent_name='".$_SESSION['agents_id']."' AND remaining_amount<=0");
                                                                                  
                                                                                $i=0;
                                                                                while($rowpaidunits=mysqli_fetch_array($customer_sellc)){
                                                                                    $i++;
                                                                                    ?>
                                                                                    <tr>
                                                                                        <th scope="row"><?php echo $i;?></th>
                                                                                        <td><?php echo $rowpaidunits['recordno'] ?></td>
                                                                                       
                                                                                     
                                                                                        <?php $getcustomer2=mysqli_fetch_row(mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$rowpaidunits['customer']."' "));?>
                                                                                        <td><?php echo $getcustomer2[3] ?></td>
                                                                                        <td><?php echo $rowpaidunits['sold_status'] ?></td>
                                                                                        <td><?php echo $rowpaidunits['conforfob'] ?></td>
                                                                                        <td><?php echo $rowpaidunits['finalfob'] ?></td>
                                                                                    </tr>
                                                                                 <?php } ?>
                                                                    </tbody>
                                                                </table> 
                                                            </div>
                                                            <div class="tab-pane" id="tab-animated-unpaid-units" role="tabpanel">
                                                                <table style="white-space: nowrap;" class="table tables-sm">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Record # </th>
                                                                            <th>Customer Name </th>
                                                                            <th>Sold Date</th>
                                                                            <th>FOB/CNF</th>
                                                                            <th>Remaining Amount</th>
                                                                            <th>Price</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                            
                                                                            $customer_sellc1=mysqli_query($connection,"select * from ats_stock_reservation where agent_name='".$_SESSION['agents_id']."' AND remaining_amount > 0");
                                                                                   
                                                                                 $y=0;
                                                                                 while($rowpaidunits1=mysqli_fetch_array($customer_sellc1)){
                                                                                     $y++;
                                                                                     ?>
                                                                                     <tr>
                                                                                         <th scope="row"><?php echo $y;?></th>
                                                                                         <td><?php echo $rowpaidunits1['recordno'] ?></td>
                                                                                        
                                                                                      
                                                                                         <?php $getcustomer2=mysqli_fetch_row(mysqli_query($connection,"select * from ats_customer where ats_customer_ATS_ID='".$rowpaidunits1['customer']."' "));?>
                                                                                         <td><?php echo $getcustomer2[3] ?></td>
                                                                                         <td><?php echo $rowpaidunits1['sold_status'] ?></td>
                                                                                         <td><?php echo $rowpaidunits1['conforfob'] ?></td>
                                                                                         <td><?php echo $rowpaidunits1['remaining_amount'] ?></td>
                                                                                         <td><?php echo $rowpaidunits1['finalfob'] ?></td>
                                                                                     </tr>
                                                                                  <?php } ?>
                                                                    </tbody>
                                                                </table> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-left: -1.5%;" class="col-lg-12 col-xl-4">
                                        <div class="card">
                                            <!-- <div class="row">
                                                <div class="col-lg-6 col-xl-12">
                                                    <div class="no-shadow rm-border bg-transparent widget-chart text-left card">
                                                        <div class="progress-circle-wrapper">
                                                            <div class="circle-progress circle-progress-gradient-alt-lg">
                                                                <small></small>
                                                            </div>
                                                        </div>
                                                        <div class="widget-chart-content">
                                                            <div style="font-weight: bold;" class="widget-heading text-uppercase">Your Profit</div>
                                                            <div class="widget-numbers text-primary"><span>$563</span></div>
                                                            <div class="widget-description text-secondary">
                                                                <span class="pl-1">
                                                                    <span class="">35%</span>
                                                                </span>Each Sale
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-12">
                                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left mt-2">
                                                        <div class="progress-circle-wrapper">
                                                            <div class="circle-progress circle-progress-gradient-lg">
                                                                <small></small>
                                                            </div>
                                                        </div>
                                                        <div class="widget-chart-content">
                                                            <div style="font-weight: bold;" class="widget-heading text-uppercase">Your Payble Amount</div>
                                                            <div class="widget-numbers text-danger"><span>$194</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="text-center mx-auto mt-3">
                                                <div role="group" class="btn-group-sm btn-group nav">
                                                    <a class="btn-shadow pl-3 pr-3 active btn btn-primary" data-toggle="tab" href="#sales-tab-1">Monthly</a>
                                                    <a class="btn-shadow pr-3 pl-3 btn btn-primary" data-toggle="tab" href="#sales-tab-2">Current</a>
                                                </div>
                                            </div> -->
                                            <div class="card-body">
                                                <div class="">
                                                    <div>
                                                        <div class="text-center">
                                                            <h5 class="menu-header-title">Monthly Sales</h5>
                                                            <h6 class="menu-header-subtitle opacity-6">Total Sales (This Year)</h6>
                                                        </div>
                                                        <div id="chartContainer" style="height: 200px;"></div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <h5 class="menu-header-title">Total Sales</h5>
                                                        </div>
                                                        <label class="label-flip">
                                                            <input class="input-none" type="checkbox"/>
                                                            <div class="card-flip">
                                                                <div class="front bg-slick-carbon">
                                                                    <h4 class="mt-3 text-white">Monthly Sales</h4>
                                                                    <h5 class="text-primary"><b>0998</b></h5>
                                                                </div>
                                                                <div class="back bg-slick-carbon">
                                                                    <h4 class="mt-3 text-white">Total Sales</h4>
                                                                    <h5 class="text-warning"><b>0998</b></h5>
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <!-- <div class="card-hover-shadow-2x widget-chart bg-slick-carbon text-center widget-chart2 mt-3 card">
                                                            <div class="widget-chart-content text-white">
                                                                <div class="menu-header-title">
                                                                    <div class="widget-title text-center">
                                                                        <label>Sales (This Month)
                                                                                    </label>
                                                                        </div>
                                                                </div>
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-numbers text-success">
                                                                        <span style="font-weight: bold; text-align:center;">976</span>
                                                                    </div>    
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-content text-white">
                                                                <div class="menu-header-title">
                                                                    <div class="widget-title">Total Sales</div> 
                                                                </div>
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-numbers text-warning">
                                                                        <span style="font-weight: bold; text-align:center;">976</span>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                        </div> -->
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
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2", // "light2", "dark1", "dark2"
	        animationEnabled: true, // change to true	
            data: [{
                // Change type to "doughnut", "line", "splineArea", etc.
                type: "column",
                dataPoints: [
                    { label: "Jan", y: 10 },
                    { label: "Feb", y: 20 },
                    { label: "Mar", y: 25 },
                    { label: "Apr", y: 30 },
                    { label: "May", y: 40 },
                    { label: "Jun", y: 45 },
                    { label: "Jul", y: 50 },
                    { label: "Aug", y: 60 },
                    { label: "Sep", y: 65 },
                    { label: "Oct", y: 70 },
                    { label: "Nov", y: 80 },
                    { label: "Dec", y: 85 }
                ]
            }]
        });
        chart.render();
    }
</script>