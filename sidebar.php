            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">DASHBOARD</li>
                            <li>
                                <a href="index.php">
                                    <i class="metismenu-icon pe-7s-plugin fa fa-users"></i>Dashboard
                                </a>
                            </li>
                            <li class="app-sidebar__heading">DATABASE</li>
                            <li>
                                <a href="index-dashboard.php" class="">
                                    <i class="metismenu-icon fa fa-car"></i>Car Search
                                </a>
                            </li>
                            <li>
                                <a href="cust_search.php" class="">
                                    <i class="metismenu-icon fa fa-user"></i>Customer Search
                                </a>
                            </li>
                            <li>
                                <a href="remittance_search.php" class="">
                                    <i class="metismenu-icon fa fa-money"></i>Remittance Search
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fa fa-file"></i>
                                   REPORTS
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left lnr lnr-chevron-down"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>Car Report
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left lnr lnr-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="all-reserved-reports.php">
                                                    <i class="metismenu-icon"></i>All Reserved
                                                </a>
                                            </li>
                                            <li>
                                                <a href="all-ship-paid.php">
                                                    <i class="metismenu-icon"></i>All Shipped
                                                </a>
                                            </li>
                                            <li>
                                                <a href="all-ship-ok.php">
                                                    <i class="metismenu-icon"></i>All Ship OK
                                                </a>
                                            </li>
                                            <li>
                                                <a href="all-release-paid.php">
                                                    <i class="metismenu-icon"></i>All Released
                                                </a>
                                            </li>
                                            <li>
                                                <a href="all-release-ok.php">
                                                    <i class="metismenu-icon"></i>All Release OK
                                                </a>
                                            </li>
                                            <li>
                                                <a href="all-sold.php">
                                                    <i class="metismenu-icon"></i>All SOLD
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="my_bank.php">
                                            <i class="metismenu-icon"></i>My Bank
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>Track My Car
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left lnr lnr-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="metismenu-icon"></i>Waiting For Shipment
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="metismenu-icon"></i>Ship Units
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="metismenu-icon"></i>Waiting For Balance
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="metismenu-icon"></i>Released Units
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>    
                            <!-- <li class="app-sidebar__heading">Application</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fa fa-comment"></i>
                                    Applications
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left lnr lnr-chevron-down"></i>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="#" class="">
                                            <i class="metismenu-icon"></i>Mailbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>Chat
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>FAQ Section
                                        </a>
                                    </li>
                                </ul>
                            </li>--->
                            <li class="app-sidebar__heading">MENU</li>
                            <?php if(!isset($_SESSION['agents_id'])){?>
                            <li class="">
                                <a href="#">
                                    <i style="font-size: 20px;" class=" metismenu-icon pe-7s-browser fa fa-desktop"></i>ACCESS
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left lnr lnr-chevron-down"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>View All Access
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left lnr lnr-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="emp_search.php">
                                                    <i class="metismenu-icon"></i>All Users
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cust_search.php">
                                                    <i class="metismenu-icon"></i>All Customers
                                                </a>
                                            </li>
                                            <li>
                                                <a href="vend_search.php">
                                                    <i class="metismenu-icon"></i>All Vendors
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="forms-wizard-emp.php">
                                            <i class="metismenu-icon"></i>Add New Employee
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form-customer.php">
                                            <i class="metismenu-icon">
                                            </i>Add New Customer 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-wizard-ven.php">
                                            <i class="metismenu-icon">
                                            </i>Add New Vendor 
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <i style="font-size: 30px;" class="metismenu-icon pe-7s-browser fa fa-houzz"></i>INVENTORY
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left lnr lnr-chevron-down"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>View All Inventory
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left lnr lnr-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="inventory_search_japan.php">
                                                    <i class="metismenu-icon"></i>Japan Stock
                                                </a>
                                            </li>
                                            <li>
                                                <a href="inventory_search_dubai.php">
                                                    <i class="metismenu-icon"></i>Dubai Stock 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="inventory_search_singapore.php">
                                                    <i class="metismenu-icon"></i>Singapore Stock
                                                </a>
                                            </li>
                                            <li>
                                                <a href="inventory_search_thailand.php">
                                                    <i class="metismenu-icon"></i>Thailand Stock
                                                </a>
                                            </li>
                                            <li>
                                                <a href="inventory_search_usa.php">
                                                    <i class="metismenu-icon"></i>USA Stock
                                                </a>
                                            </li>
                                            <li>
                                                <a href="inventory_search_pakistan.php">
                                                    <i class="metismenu-icon"></i>Pakistan Stock
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="forms-wizard-stock.php">
                                            <i class="metismenu-icon"></i>Add New Car
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>Upload Excel
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php }?>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-plugin fa fa-credit-card"></i>REMITTANCE
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left lnr lnr-chevron-down"></i>
                                </a>
                                <ul>
                                <?php if(!isset($_SESSION['agents_id'])){?>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>View All
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left lnr lnr-chevron-down"></i>
                                        </a>
                                        <ul>
                                      
                                            <li>
                                                <a href="remittance_search.php">
                                                    <i class="metismenu-icon"></i>All Payments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="refund_search.php">
                                                    <i class="metismenu-icon"></i>All Refunds
                                                </a>
                                            </li>
                                        
                                        </ul>
                                    </li>
                                    <?php }?>
                                    <li>
                                        <a href="form-remittance.php">
                                            <i class="metismenu-icon"></i>Add Payment
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form-refund.php">
                                            <i class="metismenu-icon"></i>Add Refund
                                        </a>
                                    </li>
                                </ul>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>