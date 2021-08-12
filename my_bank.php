<?php
include("top.php");
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
                                                        <div style="font-weight: bold;" class="widget-heading text-uppercase text-white">Available Balance</div>
                                                        <div class="widget-numbers text-white"><small>$</small> 80.8k</div>
                                                        <div class="widget-subheading text-white">Updated<span> (09/09/18)</span></div>
                                                        <div class="text-success">    
                                                            <span class="pl-1 text-white">175.5%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="widget-chart widget-chart2 bg-focus widget-chart-hover text-left">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content text-white">
                                                                <div class="widget-chart-flex">
                                                                    <div style="font-weight: bold;" class="widget-title widget-heading text-uppercase">Total Recieveble</div>
                                                                    <div class="widget-subtitle text-white">Remaining</div>
                                                                </div>
                                                                <div class="widget-chart-flex">
                                                                    <div style="font-weight: bold;" class="widget-numbers">
                                                                        <small>$</small>
                                                                        1283
                                                                    </div>
                                                                    <div class="widget-description ml-auto text-white">    
                                                                        <span class="pl-1">35%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="65"
                                                                        aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                                    </div>
                                                                </div>
                                                                <div class="progress-sub-label text-white">Total Recieved <span>65%</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
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
                                                    <div style="overflow: auto;" class="tab-content">
                                                        <div class="tab-pane active" id="tab-animated-transaction" role="tabpanel">
                                                            <table style="font-size:14px;" style="white-space: nowrap;" class="table tables-sm">
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
                                                                        <th>Con. rate</th>
                                                                        <th>Vendor Name</th>
                                                                        <th>Account No.</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>ZM287-98867</td>
                                                                        <td>KSP130-798776</td>
                                                                        <td>Toyota</td>
                                                                        <td>Vitz</td>
                                                                        <td>2018</td>
                                                                        <td>12/12/2020</td>
                                                                        <td>15/12/2020</td>
                                                                        <td>Umesh Kandara</td>
                                                                        <td>Devin Joseph</td>
                                                                        <td>Adam Fernandes</td>
                                                                        <td>Karachi Port</td>
                                                                        <td>FB Area, Bolck-18</td>
                                                                        <td>70%</td>
                                                                        <td>Demo Demo***</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                        <div class="tab-pane" id="tab-animated-allocation" role="tabpanel">
                                                            <table style="white-space: nowrap;" class="table tables-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Remittance ID </th>
                                                                        <th>Agent Name</th>
                                                                        <th>Customer Name</th>
                                                                        <th>Country</th>
                                                                        <th>Date</th>
                                                                        <th>Sender Name</th>
                                                                        <th>Amount</th>
                                                                        <th>Currency</th>
                                                                        <th>Con. rate</th>
                                                                        <th>Vendor Name</th>
                                                                        <th>Account No.</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                        <div class="tab-pane" id="tab-animated-paid-units" role="tabpanel">
                                                            <table style="white-space: nowrap;" class="table tables-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Remittance ID</th>
                                                                        <th>Agent Name</th>
                                                                        <th>Customer Name</th>
                                                                        <th>Country</th>
                                                                        <th>Date</th>
                                                                        <th>Sender Name</th>
                                                                        <th>Amount</th>
                                                                        <th>Currency</th>
                                                                        <th>Con. rate</th>
                                                                        <th>Vendor Name</th>
                                                                        <th>Account No.</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                        <div class="tab-pane" id="tab-animated-unpaid-units" role="tabpanel">
                                                            <table style="white-space: nowrap;" class="table tables-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Remittance ID </th>
                                                                        <th>Agent Name</th>
                                                                        <th>Customer Name</th>
                                                                        <th>Country</th>
                                                                        <th>Date</th>
                                                                        <th>Sender Name</th>
                                                                        <th>Amount</th>
                                                                        <th>Currency</th>
                                                                        <th>Con. rate</th>
                                                                        <th>Vendor Name</th>
                                                                        <th>Account No.</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Mark</td>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-left: -1.5%;" class="col-lg-12 col-xl-4">
                                        <div class="mb-3 card">
                                            <div class="row">
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
                                            </div>
                                            <div class="text-center mx-auto mt-3">
                                                <div role="group" class="btn-group-sm btn-group nav">
                                                    <a class="btn-shadow pl-3 pr-3 active btn btn-primary" data-toggle="tab" href="#sales-tab-1">Monthly</a>
                                                    <a class="btn-shadow pr-3 pl-3 btn btn-primary" data-toggle="tab" href="#sales-tab-2">Current</a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade active show" id="sales-tab-1">
                                                        <div class="text-center">
                                                            <h5 class="menu-header-title">Monthly Sales</h5>
                                                            <h6 class="menu-header-subtitle opacity-6">Total Sales (This Year)</h6>
                                                        </div>
                                                        <div id="chartContainer" style="height: 200px;"></div>
                                                    </div>
                                                    <div class="tab-pane fade" id="sales-tab-2">
                                                        <div class="text-center">
                                                            <h5 class="menu-header-title">Total Sales</h5>
                                                        </div>
                                                        <div class="card-hover-shadow-2x widget-chart bg-slick-carbon widget-chart2 text-left mt-3 card">
                                                            <div class="widget-chart-content text-white">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-title">Sales (This Month)</div>
                                                                    <div class="widget-subtitle">Total Sales</div>
                                                                </div>
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-numbers text-success">
                                                                        <span style="font-weight: bold;">976</span>
                                                                    </div>    
                                                                    <div class="widget-description ml-auto">
                                                                        <div class="widget-numbers text-warning">
                                                                            <span style="font-weight: bold;">976</span>
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