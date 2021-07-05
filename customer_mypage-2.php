<?php
include("top.php");
?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div class="card-body">
                            <div style="width: 100%; margin-right: -86px;" class="row">       
                                <div class="container">
                                    <ul  class="nav nav-tabs ">
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link active " id="tab-c-0" data-toggle="tab" href="#tab-animated-reserve">
                                                        <span>All</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" id="tab-c-1" data-toggle="tab" href="#tab-animated-repair">
                                                        <span>Shipped&nbsp;Units&nbsp;with&nbsp;Balance</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-transport">
                                                        <span>Waiting&nbsp;for&nbsp;Departure</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-parts">
                                                        <span>Further&nbsp;Deposit&nbsp;Required</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-money">
                                                        <span>Reserved&nbsp;Units</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-commision">
                                                        <span>All&nbsp;Completed
                                                        </span>
                                                    </a>
                                                </li>
                                                
                                    </ul>
                                    <div style="overflow: auto;" class="tab-content ">
                                        <div class="tab-pane active" id="tab-animated-reserve" role="tabpanel">
                                            <table style="font-size: 11px; white-space: nowrap;" class="table-hover table-bordered">
                                                <thead style="background: lightsteelblue;">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Action</th>
                                                        <th>Rec No #</th>
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
                                                        <th>#7676</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
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
                                        <div class="tab-pane" id="tab-animated-transport" role="tabpanel">
                                            <table style="font-size: 10px;" class=" table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First345646 Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
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
                                        <div class="tab-pane" id="tab-animated-parts" role="tabpanel">
                                            <table style="font-size: 10px;" class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First345646 Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
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
                                                        <th>First345646 Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
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
                                        <div class="tab-pane" id="tab-animated-commision" role="tabpanel">
                                            <table style="font-size: 10px;" class=" table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First345646 Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
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
                        </div>
                    </div>
                </div>
            </div>
<?php
include("bottom.php");
?> 
       
