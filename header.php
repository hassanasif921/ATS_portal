<?php 

include("connection_db.php");
if(isset($_SESSION['user_id']))
{
    $userid=$_SESSION['user_id'];

    $queryadmin=mysqli_fetch_row(mysqli_query($connection,"SELECT * FROM admin_details where admin_id='$userid'"));
}
if(isset($_SESSION['agents_id']))
{
    $agents_id=$_SESSION['agents_id'];

    $queryagents=mysqli_fetch_row(mysqli_query($connection,"SELECT * FROM ats_employee where ats_employee_id='$agents_id'"));
}
if(isset($_SESSION['vendor_id']))
{
    $vendor_id=$_SESSION['vendor_id'];

    $queryvendor=mysqli_fetch_row(mysqli_query($connection,"SELECT * FROM ats_vendor where ats_vendor_id ='$vendor_id'"));
}
if(isset($_SESSION['customer']))
{
    $customer_id=$_SESSION['customer'];

    $querycustomer=mysqli_fetch_row(mysqli_query($connection,"SELECT * FROM ats_customer where ats_customer_id ='$customer_id'"));
}
?>
<div class="app-header header-shadow">
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
            <div class="app-header__content">
                <div class="app-header-left">
                    <ul class="header-megamenu nav">
                    <?php
        if(!isset($_SESSION["customer"]))
        {?>
                        <li class="dropdown nav-item">
                            <a aria-haspopup="true" data-toggle="dropdown" class="nav-link" aria-expanded="false">
                                <i class="nav-link-icon lnr lnr-cog"></i> Projects&nbsp;
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-rounded dropdown-menu-lg rm-pointers dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-success">
                                        <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/abstract3.jpg');"></div>
                                        <div class="menu-header-content text-left">
                                            <h5 class="menu-header-title">Overview</h5>
                                            <h6 class="menu-header-subtitle">Unlimited options</h6>
                                            <div class="menu-header-btn-pane">
                                                <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                <button class="btn-icon btn-icon-only btn btn-warning btn-sm">
                                                    <i class="pe-7s-config btn-icon-wrapper"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"></i>Graphic Design
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"> </i>App Development
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"> </i>Icon Design
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"></i>Miscellaneous
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"></i>Frontend Dev
                                </button>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                          
                </div>
                <div class="app-header-right">
                    <div class="header-dots">
                    <?php
        if(!isset($_SESSION["customer"]))
        {?>
                        <div class="search-wrapper">
                            <div class="input-holder">
                                <input type="text" class="search-input" placeholder="Type to search">
                                <button class="search-icon"><span></span></button>
                            </div>
                            <button class="close"></button>
                        </div>
                     
                        <div class="dropdown">
                            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                                class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-danger"></span>
                                    <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
                                    <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                </span>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header mb-0">
                                    <div class="dropdown-menu-header-inner bg-deep-blue">
                                        <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                        <div class="menu-header-content text-dark">
                                            <h5 class="menu-header-title">Notifications</h5>
                                            <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                            <span>Messages</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                            <span>Events</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                            <span>System Errors</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container">
                                                <div class="p-3">
                                                    <div class="notifications-box">
                                                        <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">All Hands Meeting</h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Build the production release
                                                                            <span class="badge badge-danger ml-2">NEW</span>
                                                                        </h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Something not important
                                                                            <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/1.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/2.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/3.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/4.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/5.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/9.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/7.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/8.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                    <div class="avatar-icon"><i>+</i></div>
                                                                                </div>
                                                                            </div>
                                                                        </h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">This dot has an info state</h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">All Hands Meeting</h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <p>Yet another one, at <span class="text-success">15:00 PM</span>
                                                                        </p><span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Build the production release
                                                                            <span class="badge badge-danger ml-2">NEW</span>
                                                                        </h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">This dot has a dark state</h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container">
                                                <div class="p-3">
                                                    <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">All Hands Meeting</h4>
                                                                    <p>Lorem ipsum dolor sic amet, today at 
                                                                        <a href="javascript:void(0);">12:00 PM</a>
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                    <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Build the production release</h4>
                                                                    <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                                                        labore et dolore magna elit enim at minim veniam quis nostrud
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title text-success">Something not important</h4>
                                                                    <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">All Hands Meeting</h4>
                                                                    <p>Lorem ipsum dolor sic amet, today at 
                                                                        <a href="javascript:void(0);">12:00 PM</a>
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                    <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Build the production release</h4>
                                                                    <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                                                        labore et dolore magna elit enim at minim veniam quis nostrud
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title text-success">Something not important</h4>
                                                                    <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container">
                                                <div class="no-results pt-3 pb-0">
                                                    <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                        <span class="swal2-success-line-tip"></span>
                                                        <span class="swal2-success-line-long"></span>
                                                        <div class="swal2-success-ring"></div>
                                                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="results-subtitle">All caught up!</div>
                                                    <div class="results-title">There are no system errors!</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-btn text-center nav-item">
                                        <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php }?>
                        <?php
        if(!isset($_SESSION["customer"]))
        {?>
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-focus"></span>
                                    <span class="language-icon opacity-8 flag large DE"></span>
                                </span>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                        <div class="menu-header-image opacity-05" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                        <div class="menu-header-content text-center text-white">
                                            <h6 class="menu-header-subtitle mt-0"> Choose Language</h6>
                                        </div>
                                    </div>
                                </div>
                                <h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large US"></span> USA
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large CH"></span> Switzerland
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large FR"></span> France
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large ES"></span>Spain
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <h6 tabindex="-1" class="dropdown-header">Others</h6>
                                <button type="button" tabindex="0" class="dropdown-item active">
                                    <span class="mr-3 opacity-8 flag large DE"></span> Germany
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large IT"></span> Italy11
                                </button>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            
                                       <?php
                                          if(isset($_SESSION["customer"]))
                                          {
                                              ?>
                                              <img width="42" class="rounded-circle" src="data:image/png;base64,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" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            <?php
                                            }
                                       
                                        elseif (isset($_SESSION['agents_id'])) {
                                            ?>
                                            <img width="42" class="rounded-circle" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($queryagents[18]); ?>" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        <?php
                                        }
                                        elseif (isset($_SESSION['vendor_id'])) {
                                            ?>
                                            <img width="42" class="rounded-circle" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($queryvendor[14]); ?>" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        <?php
                                        }
                                        ?>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                        <?php
                                                                    if(isset($_SESSION['customer']))
                                                                    {
                                                                ?>
                                                            <div class="widget-content-wrapper">

                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="data:image/png;base64,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" alt="">
                                                                </div>

                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading"><?php echo strtoupper($querycustomer[3]);?></div>
                                                                    <div class="widget-subheading opacity-8"></div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <a class="btn-pill btn-shadow btn-shine btn btn-focus" href="logout.php">Logout</a>
                                                                </div>
                                                            </div>
                                                                 <?php
                                                                    }
                                                                    if(isset($_SESSION['user_id']))
                                                                    {
                                                                ?>
                                                            <div class="widget-content-wrapper">

                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($queryadmin[4]); ?>" alt="">
                                                                </div>

                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading"><?php echo $queryadmin[3]?></div>
                                                                    <div class="widget-subheading opacity-8">A short  description</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <a class="btn-pill btn-shadow btn-shine btn btn-focus" href="logout.php">Logout</a>
                                                                </div>
                                                            </div>
                                                            <?php
                                                                    }
                                                                    if(isset($_SESSION['vendor_id']))
                                                                    {
                                                                ?>
                                                            <div class="widget-content-wrapper">

                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpeg" alt="">
                                                                </div>

                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading"><?php echo $queryvendor[3]?></div>
                                                                    <div class="widget-subheading opacity-8">A short  description</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <a class="btn-pill btn-shadow btn-shine btn btn-focus" href="logout.php">Logout</a>
                                                                </div>
                                                            </div>
                                                            <?php 
                                                                
                                                                }
                                                            if(isset($_SESSION['agents_id']))
                                                            {
                                                                
                                                                ?>
                                                            <div class="widget-content-wrapper">

                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($queryagents[18]); ?>" alt="">
                                                            </div>

                                                            <div class="widget-content-left">
                                                                <div class="widget-heading"><?php echo $queryagents[1]." ".$queryagents[2]." ".$queryagents[3]?></div>
                                                                <div class="widget-subheading opacity-8"><?php echo $queryagents[62]?></div>
                                                            </div>
                                                            <div class="widget-content-right mr-2">
                                                                <a class="btn-pill btn-shadow btn-shine btn btn-focus" href="logout.php">Logout</a>
                                                            </div>
                                                            </div>
                                                                <?php 
                                                            }   
                                                            ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                if(!isset($_SESSION['customer']))
                                                {
                                                                ?>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity</li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Recover Password</a>
                                                        </li>
                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Settings
                                                                <div class="ml-auto badge badge-success">New</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Messages
                                                                <div class="ml-auto badge badge-warning">512</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Logs</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                            <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i> Message Inbox
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                            <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                            <b>Support Tickets</b>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm"> Open Messages </button>
                                                </li>
                                            </ul>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if(isset($_SESSION['customer']))
                                {
                                ?>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading "style="color: black;"><?php echo strtoupper($querycustomer[3]);?> </div>
                                    
                                </div>
                                
                                <?php
                                }
                                if(isset($_SESSION['user_id']))
                                {
                                ?>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading "style="color: black;"><?php echo $queryadmin[3]?> </div>
                                    <div class="widget-subheading"> Customer Service | <?php echo $queryadmin[5]?> </div>
                                </div>
                                <?php 
                                }
                                ?>
                                 <?php
                                if(isset($_SESSION['vendor_id']))
                                {
                                ?>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading "style="color: black;"><?php echo $queryvendor[2]?> </div>
                                    <div class="widget-subheading"> <?php echo $queryvendor[4]?> <?php echo $queryvendor[65]?> </div>
                                </div>
                                <?php 
                                }
                                ?>
                                <?php
                                if(isset($_SESSION['agents_id']))
                                {
                                ?>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading "style="color: black;"><?php echo $queryagents[1]." ".$queryagents[2]." ".$queryagents[3]?></div>
                                    <div class="widget-subheading"> <?php echo $queryagents[0]?> | <?php echo $queryagents[62]?> </div>
                                </div>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                    </div>       
                </div>
            </div>
        </div>        
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options</h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header</div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class"
                                                    data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar</div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer</div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div> Header Options </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme</h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light"></div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light"></div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-light"></div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-light"></div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark"></div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light"></div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark"></div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light"></div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light"></div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light"></div>
                                        <div class="divider"></div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light"></div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light"></div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light"></div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light"></div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light"></div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light"></div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark"></div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark"></div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark"></div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark"></div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark"></div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark"></div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark"></div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light"></div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark"></div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light"></div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light"></div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light"></div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark"></div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light"></div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light"></div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light"></div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light"></div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light"></div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light"></div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme</h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light"></div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light"></div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light"></div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light"></div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light"></div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light"></div>
                                        <div class="divider"></div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light"></div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light"></div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light"></div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light"></div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light"></div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light"></div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light"></div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light"></div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light"></div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light"></div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light"></div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light"></div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light"></div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light"></div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light"></div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light"></div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light"></div>
                                    </div>
                                </li>
                                </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default</button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs</h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line"> Line</button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow"> Shadow </button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <h5 class="pb-2">Light Color Schemes
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="app-theme-white"> White Theme</button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="app-theme-gray"> Gray Theme</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>