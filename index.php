<?php
include("top.php");
include("connection_db.php");

if (isset($_POST["btn_post"])) {
    $post_privacy = $_POST["post_privacy"];
    $get_post_emp_fullname = "username";
    $post_designation = "abc";
    $post_heading = $_POST["post_heading"];
    $post_description = $_POST["post_description"];
    $post_image = "img";
    $post_createdAt = time();
    $post_createdBy="demo";
    $post_updatedAt = time();
    $post_updatedBy="demo";
    $post_status = "active";
    $insert = "insert into ats_post(ats_post_privacy,ats_post_username,ats_post_designation,ats_post_heading,ats_post_description,ats_post_image,ats_post_createdBy,ats_post_createdAt,ats_post_updatedBy,ats_post_updatedAt,ats_post_status) values('$post_privacy','$get_post_emp_fullname','$post_designation','$post_heading','$post_description','$post_image','$post_createdAt','$post_createdBy','$post_updatedAt','$post_updatedBy','$post_status')";
    $query = mysqli_query($connection,$insert);
    if ($query)
    {
        echo '<script type="text/javascript"> alert("Employee Register Successfully")</script>';
        //echo '<script language="javascript">window.location.href ="employee-records.php"</script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Employee Not Register")</script>';
    }
}

?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div style="background: transparent;" class="container p-3">
                            <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-rounded-lg">
                                <li class="nav-item">
                                    <a role="tab" data-toggle="tab" class="nav-link active show  progress-bar-animated progress-bar-striped" href="#dashboard-home" aria-selected="true">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" data-toggle="tab" class="nav-link" href="#dashboard-overview" aria-selected="false">
                                        <span>Overview</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" data-toggle="tab" class="nav-link" href="#dashboard-statstics" aria-selected="false">
                                        <span>Statistics</span>
                                    </a>
                                </li>    
                                <li class="nav-item">
                                    <a role="tab" data-toggle="tab" class="nav-link" href="#dashboard-ranking" aria-selected="false">
                                        <span>Ranking</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="app-inner-layout__wrapper row-fluid no-gutters">
                            <div style="background: transparent; box-shadow: none;" class="tab-content col-md-10 app-inner-layout__content card">
                                <div style=" background: transparent; box-shadow: none;" id="dashboard-home" role="tabpanel" class="tab-pane active container card">
                                    <div>
                                        <h4 style="margin-left:5px; margin-top:2%;">Create Post</h4>
                                        <input style="color: black; border-radius: 20px;" data-toggle="modal" data-target="#exampleModalLong" class="form-control mr-sm-2" placeholder="Create a New Post Here..">
                                    </div>
                                    <div style=" background: white;  margin-top:30px;  padding-bottom:10px; margin-bottom:50px;">
                                        <?php
                                            $query = mysqli_query($connection,"select * from ats_post");
                                            $count =mysqli_num_rows($query);
                                            if($count > 0){
                                                while($row = mysqli_fetch_array($query)){	    				   
                                        ?>                         
                                        <div style="padding-top:3%; color: black;" class="container">
                                            <img class="user-avatar rounded-circle" style="width: 55px;" id="get_post_emp_passport_image" name="get_post_emp_passport_image" src="assets/images/avatars/1.jpg" alt="User Avatar">
                                            <label style="font-weight: bold;  margin-left:10px; margin-top:-10px;" name="get_post_emp_fullname" id="get_post_emp_fullname"><?php echo $row["ats_post_username"] ?><br/>
                                            </label>
                                            <p style="margin-left:70px;  font-size:12px; margin-top:-22px;" name="get_post_privacy" id="get_post_privacy"><?php echo $row["ats_post_privacy"] ?>  <i class="fa fa-globe"></i></p>
                                            <h2 style=" margin-top:3.5%;" name="get_post_heading" id="get_post_heading"><?php echo $row["ats_post_heading"] ?></h2>
                                            <h6 id="get_post_date" name="get_post_date"> Dec 7, 2017</h6>
                                            <p style="padding-bottom:2%; padding-top:5%;" name="get_post_description" id="get_post_description"><?php echo $row["ats_post_description"] ?></p>
                                            <div style="margin-bottom:2%" class="row">
                                                <div style="margin-left:7px;" class="col-md-6">
                                                    <img style="width:300px; height:260px;" name="get_post_image1" id="get_post_image1" src="assets/images/logo-inverse.png">
                                                </div>
                                                <div style="margin-left:-20px;" class="col-md-3">
                                                    <img style="width:150px; height:130px;" name="get_post_image2" id="get_post_image2" src="assets/images/logo-inverse.png">
                                                    <img style="width:150px; margin-top:1px; height:130px;" name="get_post_image3" id="get_post_image3" src="assets/images/logo-inverse.png">
                                                </div>
                                                <div style="margin-left:-10px;" class="col-md-3">
                                                    <img style="width:150px; height:130px;" name="get_post_image4" id="get_post_image4" src="assets/images/logo-inverse.png">
                                                    <img style="width:150px; margin-top:1px; height:130px;" name="get_post_image5" id="get_post_image5" src="assets/images/logo-inverse.png">
                                                </div>             
                                                <label class="like-share" style="margin-left:3.5%;"><a><i class="fa fa-thumbs-up"></i><span name="get_post_total_likes" id="get_post_total_likes"> 56</span> Likes</a></label>
                                                <label class="like-share" style="margin-left:67%;  float:right;"><a><i class="fa fa-comments"></i><span name="get_post_total_comments" id="get_post_total_comments"> 56</span> Comments</a></label>
                                            </div>
                                            <form id="signupForm" method="post" action="#">
                                            <div style=" margin-bottom:px;" class="row like-share">
                                                <div style="text-align: center; color:#ff9900; font-size: 24px; border-right: 1px solid black; border-top: 1px solid black; border-bottom: 1px solid black;" class="col-md-6 "><button name="btn_post_like" id="btn_post_like" style="background: transparent; cursor: pointer; border-style:none;" type="submit"><i style="color: #ff9900" class="fa fa-thumbs-up"></i></button></div>
                                                <div style="text-align: center;  font-size: 24px; border-top: 1px solid black; border-bottom: 1px solid black;" class="col-md-6"><button  name="btn_write_comment" id="btn_write_comment" style=" background: transparent; cursor: pointer; border-style:none;" type="submit"><i style="color: #ff9900" class="fa fa-comments"></i></button></div>
                                                <div class="col-sm-1">
                                                    <img class="user-avatar rounded-circle" style="width:50px;  margin-top:7px; height:45px;" name="get_comment_emp_passport_image" id="get_comment_emp_passport_image" src="assets/images/avatars/4.jpg" alt="User Avatar">
                                                </div>
                                                <div style="margin-top:2%;" class="col-sm-10">
                                                    <input style="color: black; border-radius: 7px;" class="form-control" type="text" id="comments_for_post" required placeholder="Write Comment Here..">
                                                </div>
                                                <div class="col-sm-1">
                                                    <button style=" background: #ff9900; margin-left: -10px; margin-top:13px; border-style:none; border-radius: 7px;" id="btn_submit_comment" name="btn_submit_comment" type="button" class="btn btn-primary"><i style="font-size: 20px;" class="fa fa-location-arrow"></i></button>
                                                </div>    
                                            </div>
                                            </form>
                                        </div>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div id="dashboard-overview" role="tabpanel" class="tab-pane container card">
                                    <div style="padding-top:3%;" class="row">
                                        <div class="col-md-4">
                                            <div class="card mb-3 widget-chart widget-chart2 bg-warm-flame text-left">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content text-white">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-title">Sales</div>
                                                            <div class="widget-subtitle text-white">Monthly Goals</div>
                                                        </div>
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">
                                                                <small>$</small>
                                                                1283
                                                            </div>
                                                            <div class="widget-description ml-auto text-white">
                                                                <i class="fa fa-angle-up "></i>
                                                                <span class="pl-1">175.5%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper">
                                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="65"
                                                                aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                            </div>
                                                        </div>
                                                        <div class="progress-sub-label text-white">YoY Growth</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 widget-chart widget-chart2 bg-tempting-azure text-left">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content text-dark">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-title">Profiles</div>
                                                            <div class="widget-subtitle text-dark">Active Users</div>
                                                        </div>
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">368</div>
                                                            <div class="widget-description ml-auto text-dark">
                                                                <span class="pr-1">66.5%</span>
                                                                <i class="fa fa-arrow-left "></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper">
                                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85"
                                                                aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                                            </div>
                                                        </div>
                                                        <div class="progress-sub-label">Monthly Subscribers</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 widget-chart widget-chart2 bg-plum-plate text-left">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content text-white">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-title">Clients</div>
                                                            <div class="widget-subtitle text-white opacity-7">Returning</div>
                                                        </div>
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">87
                                                                <small>%</small>                                                                
                                                            </div>
                                                            <div class="widet-description ml-auto text-white"><span class="pr-1">45</span>
                                                                <i class="fa fa-angle-up "></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper">
                                                        <div class="progress-bar-sm progress-bar-animated progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="47"
                                                                aria-valuemin="0" aria-valuemax="100" style="width: 47%;">
                                                            </div>
                                                        </div>
                                                        <div class="progress-sub-label text-white">Successful Payments</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 widget-chart widget-chart2 bg-mixed-hopes text-left">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content text-white">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-title">Reports</div>
                                                            <div class="widget-subtitle text-white">Bugs Fixed</div>
                                                        </div>
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers text-warning">1621</div>
                                                            <div class="widget-description ml-auto text-white">                                                                    
                                                                <i class="fa fa-arrow-right "></i>
                                                                <span class="pl-1">27.2%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper">
                                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="91"
                                                                aria-valuemin="0" aria-valuemax="100" style="width: 91%;">
                                                            </div>
                                                        </div>
                                                        <div class="progress-sub-label text-white">Severe Reports</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 widget-chart widget-chart2 bg-slick-carbon text-left">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content text-white">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-title opacity-5">Sales</div>
                                                            <div class="widget-subtitle opacity-5 text-white">Monthly Goals</div>
                                                        </div>
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">
                                                                <small>$</small>
                                                                1283
                                                            </div>
                                                            <div class="widget-description ml-auto text-white">
                                                                <i class="fa fa-angle-up "></i>
                                                                <span class="pl-1">175.5%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper">
                                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="65"
                                                                aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                            </div>
                                                        </div>
                                                        <div class="progress-sub-label text-white">YoY Growth</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 widget-chart widget-chart2 bg-asteroid text-left">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content text-white">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-title opacity-5">Payments</div>
                                                            <div class="widget-subtitle opacity-5 text-white">Totals</div>
                                                        </div>
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">
                                                                <small>$</small>
                                                                653
                                                            </div>
                                                            <div class="widget-description ml-auto text-white">
                                                                <i class="fa fa-angle-up "></i>
                                                                <span class="pl-1">$4596</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper">
                                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="65"
                                                                    aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                                </div>
                                                            </div>
                                                            <div class="progress-sub-label text-white">YoY Growth</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:3%;" class="main-card mb-3 card">
                                                <div class="card-header">
                                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Company Agents Status
                                                    </div>
                                                    <div class="btn-actions-pane-right">
                                                        <button type="button" id="PopoverCustomT-1" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm">
                                                            Actions Menu
                                                            <span class="pl-2 align-middle opactiy-7">
                                                                <i class="fa fa-angle-down"></i>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Rec #</th>
                                                                <th class="text-center">Customer</th>
                                                                <th class="text-center">Car Name</th>
                                                                <th class="text-center">Chassis</th>
                                                                <th class="text-center">Status</th>
                                                                <th class="text-center">Due Date</th>
                                                                <th class="text-center">Payment</th>
                                                                <th class="text-center">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center text-muted" style="width: 80px;">#54</td>
                                                                <td class="text-center" style="width: 80px;">
                                                                   <label>Hamza Zaheer</label>
                                                                </td>
                                                                <td class="text-center"><a href="javascript:void(0)">Juan C. Cargill</a></td>
                                                                <td class="text-center"><a href="javascript:void(0)">Micro Electronics</a></td>
                                                                <td class="text-center"><div class="badge badge-pill badge-danger">Canceled</div></td>
                                                                <td class="text-center">
                                                                    <span class="pr-2 opacity-6">
                                                                        <i class="fa fa-business-time"></i>
                                                                    </span>
                                                                    12 Dec
                                                                </td>
                                                                <td class="text-center" style="width: 200px;">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-outer">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left pr-2">
                                                                                    <div class="widget-numbers fsize-1 text-danger">71%</div>
                                                                                </div>
                                                                                <div class="widget-content-right w-100">
                                                                                    <div class="progress-bar-xs progress">
                                                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                                                            aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"
                                                                                            style="width: 71%;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div role="group" class="btn-group-sm btn-group">
                                                                        <button class="btn-shadow btn btn-primary">Hire</button>
                                                                        <button class="btn-shadow btn btn-primary">Fire</button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center text-muted" style="width: 80px;">#55</td>
                                                                <td class="text-center" style="width: 80px;">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                </td>
                                                                <td class="text-center"><a href="javascript:void(0)">Johnathan Phelan</a></td>
                                                                <td class="text-center"><a href="javascript:void(0)">Hatchworks</a></td>
                                                                <td class="text-center"><div class="badge badge-pill badge-info">On Hold</div></td>
                                                                <td class="text-center">
                                                                    <span class="pr-2 opacity-6">
                                                                        <i class="fa fa-business-time"></i>
                                                                    </span>
                                                                    12 Dec
                                                                </td>
                                                                <td class="text-center" style="width: 200px;">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-outer">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left pr-2">
                                                                                    <div class="widget-numbers fsize-1 text-warning">54%</div>
                                                                                </div>
                                                                                <div class="widget-content-right w-100">
                                                                                    <div class="progress-bar-xs progress">
                                                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                                                            aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"
                                                                                            style="width: 54%;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div role="group" class="btn-group-sm btn-group">
                                                                        <button class="btn-shadow btn btn-primary">Hire</button>
                                                                        <button class="btn-shadow btn btn-primary">Fire</button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center text-muted" style="width: 80px;">#56</td>
                                                                <td class="text-center" style="width: 80px;">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                </td>
                                                                <td class="text-center"><a href="javascript:void(0)">Darrell Lowe</a></td>
                                                                <td class="text-center"><a href="javascript:void(0)">Riddle Electronics</a></td>
                                                                <td class="text-center"><div class="badge badge-pill badge-warning">In Progress</div></td>
                                                                <td class="text-center">
                                                                    <span class="pr-2 opacity-6">
                                                                        <i class="fa fa-business-time"></i>
                                                                    </span>
                                                                    12 Dec
                                                                </td>
                                                                <td class="text-center" style="width: 200px;">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-outer">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left pr-2">
                                                                                    <div class="widget-numbers fsize-1 text-success">97%</div>
                                                                                </div>
                                                                                <div class="widget-content-right w-100">
                                                                                    <div class="progress-bar-xs progress">
                                                                                        <div class="progress-bar bg-success" role="progressbar"
                                                                                            aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"
                                                                                            style="width: 97%;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div role="group" class="btn-group-sm btn-group">
                                                                        <button class="btn-shadow btn btn-primary">Hire</button>
                                                                        <button class="btn-shadow btn btn-primary">Fire</button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center text-muted" style="width: 80px;">#56</td>
                                                                <td class="text-center" style="width: 80px;">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                </td>
                                                                <td class="text-center"><a href="javascript:void(0)">George T. Cottrell</a></td>
                                                                <td class="text-center"><a href="javascript:void(0)">Pixelcloud</a></td>
                                                                <td class="text-center"><div class="badge badge-pill badge-success">Completed</div></td>
                                                                <td class="text-center">
                                                                    <span class="pr-2 opacity-6">
                                                                        <i class="fa fa-business-time"></i>
                                                                    </span>
                                                                    12 Dec
                                                                </td>
                                                                <td class="text-center" style="width: 200px;">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-outer">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left pr-2">
                                                                                    <div class="widget-numbers fsize-1 text-info">88%</div>
                                                                                </div>
                                                                                <div class="widget-content-right w-100">
                                                                                    <div class="progress-bar-xs progress">
                                                                                        <div class="progress-bar bg-info" role="progressbar"
                                                                                            aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"
                                                                                            style="width: 88%;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div role="group" class="btn-group-sm btn-group">
                                                                        <button class="btn-shadow btn btn-primary">Hire</button>
                                                                        <button class="btn-shadow btn btn-primary">Fire</button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="d-block p-4 text-center card-footer">
                                                    <button class="btn-pill btn-shadow btn-wide fsize-1 btn btn-dark btn-lg">
                                                        <span class="mr-2 opacity-7">
                                                            <i class="fa fa-cog fa-spin"></i>
                                                        </span>
                                                        <span class="mr-1">View Complete Report</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                      
                                </div>
                                <div id="dashboard-statstics" role="tabpanel" class="tab-pane container card">
                                    <div style="padding-top:3%;" class="row">
                                        <div class="container card">
                                            <div class="tabs-lg-alternate card-header">
                                                <ul class="nav nav-justified">
                                                    <li class="nav-item">
                                                        <a href="#tab-minimal-1" data-toggle="tab" class="nav-link minimal-tab-btn-1">
                                                            <div class="widget-number"><span>$15,065ss</span></div>
                                                            <div class="tab-subheading">
                                                                <span class="pr-2 opactiy-6">
                                                                    <i class="fa fa-comment-dots"></i>
                                                                </span>
                                                                Totals
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#tab-minimal-2" data-toggle="tab" class="nav-link active minimal-tab-btn-2">
                                                            <div class="widget-number">
                                                                <span class="pr-2 text-success">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </span>
                                                                <span>4531</span>
                                                            </div>
                                                            <div class="tab-subheading">Products</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#tab-minimal-3" data-toggle="tab" class="nav-link minimal-tab-btn-3">
                                                            <div class="widget-number text-danger">
                                                                <span>$6,784.0</span>
                                                            </div>
                                                            <div class="tab-subheading">
                                                                <span class="pr-2 opactiy-6">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </span>
                                                                Income
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane" id="tab-minimal-1">
                                                    <div class="card-body">
                                                        <div id="chart-combined-tab"></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade active show" id="tab-minimal-2">
                                                    <div class="card-body">
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                            <div id="chart-apex-negative"></div>
                                                        </div>
                                                        <h5 class="card-title">Target Sales</h5>
                                                        <div class="mt-3 row">
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-numbers text-dark">65%</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper mt-1">
                                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="65"
                                                                                    aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                                                            </div>
                                                                            <div class="progress-sub-label">
                                                                                <div class="sub-label-left font-size-md">Sales</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-numbers text-dark">22%</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper mt-1">
                                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                                    aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"
                                                                                    style="width: 22%;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="progress-sub-label">
                                                                                <div class="sub-label-left font-size-md">Profiles</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-numbers text-dark">83%</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper mt-1">
                                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                                    aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"
                                                                                    style="width: 83%;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="progress-sub-label">
                                                                                <div class="sub-label-left font-size-md">Tickets</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab-minimal-3">
                                                    <div class="rm-border card-header">
                                                        <div>
                                                            <h5 class="menu-header-title text-capitalize text-primary">Income Report</h5>
                                                        </div>
                                                        <div class="btn-actions-pane-right text-capitalize">
                                                            <div class="btn-group dropdown">
                                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-wide mr-1 dropdown-toggle btn btn-outline-focus btn-sm">Options
                                                                </button>
                                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg rm-pointers dropdown-menu dropdown-menu-right">
                                                                    <div class="dropdown-menu-header">
                                                                        <div class="dropdown-menu-header-inner bg-primary">
                                                                            <div class="menu-header-image"
                                                                                style="background-image: url('assets/images/dropdown-header/abstract2.jpg');">
                                                                            </div>
                                                                            <div class="menu-header-content">
                                                                                <div>
                                                                                    <h5 class="menu-header-title">Settings</h5>
                                                                                    <h6 class="menu-header-subtitle">Example Dropdown Menu</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="scroll-area-xs">
                                                                        <div class="scrollbar-container">
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
                                                                                <li class="nav-item-header nav-item">My Account</li>
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2">
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                            <div style="height: 274px;">
                                                                <div id="chart-combined-tab-3"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top bg-light card-header">
                                                        <div class="actions-icon-btn mx-auto">
                                                            <div>
                                                                <div role="group" class="btn-group-lg btn-group nav">
                                                                    <button type="button" data-toggle="tab" href="#tab-content-income" class="btn-pill pl-3 active btn btn-focus">Income</button>
                                                                    <button type="button" data-toggle="tab" href="#tab-content-expenses" class="btn-pill pr-3  btn btn-focus">Expenses</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active fade show" id="tab-content-income" role="tabpanel">
                                                                <h5 class="menu-header-title">Target Sales</h5>
                                                                <h6 class="menu-header-subtitle opacity-6">Total performance for this month</h6>
                                                                <div class="mt-3 row">
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="card-border mb-sm-3 mb-md-0 border-light no-shadow card">
                                                                            <div class="widget-content">
                                                                                <div class="widget-content-outer">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">Orders</div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="widget-numbers line-height-1 text-primary">
                                                                                                <span>366</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-progress-wrapper mt-1">
                                                                                        <div class="progress-bar-xs progress">
                                                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                                                aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"
                                                                                                style="width: 76%;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="progress-sub-label">
                                                                                            <div class="sub-label-left">Monthly Target</div>
                                                                                            <div class="sub-label-right">100%</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="card-border border-light no-shadow card">
                                                                            <div class="widget-content">
                                                                                <div class="widget-content-outer">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">Income</div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="widget-numbers line-height-1 text-success">
                                                                                                <span>$2797</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-progress-wrapper mt-1">
                                                                                        <div class="progress-bar-xs progress-bar-animated progress">
                                                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                                                aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"
                                                                                                style="width: 23%;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="progress-sub-label">
                                                                                            <div class="sub-label-left">Monthly Target</div>
                                                                                            <div class="sub-label-right">100%</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab-content-expenses" role="tabpanel">
                                                                <h5 class="menu-header-title">Tabbed Content</h5>
                                                                <h6 class="menu-header-subtitle opacity-6">Example of various options built with
                                                                    ArchitectUI</h6>
                                                                <div class="mt-3 row">
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="card-hover-shadow-2x mb-sm-3 mb-md-0 widget-chart widget-chart2 bg-premium-dark text-left card">
                                                                            <div class="widget-chart-content text-white">
                                                                                <div class="widget-chart-flex">
                                                                                    <div class="widget-title">Sales</div>
                                                                                    <div class="widget-subtitle opacity-7">Monthly Goals</div>
                                                                                </div>
                                                                                <div class="widget-chart-flex">
                                                                                    <div class="widget-numbers text-success">
                                                                                        <small>$</small>
                                                                                        976
                                                                                        <small class="opacity-8 pl-2">
                                                                                            <i class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                    <div class="widget-description ml-auto opacity-7">
                                                                                        <i class="fa fa-angle-up"></i>
                                                                                        <span class="pl-1">175%</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="card-hover-shadow-2x widget-chart widget-chart2 bg-premium-dark text-left card">
                                                                            <div class="widget-chart-content text-white">
                                                                                <div class="widget-chart-flex">
                                                                                    <div class="widget-title">Clients</div>
                                                                                    <div class="widget-subtitle text-warning">Returning</div>
                                                                                </div>
                                                                                <div class="widget-chart-flex">
                                                                                    <div class="widget-numbers text-warning">84
                                                                                        <small>%</small>
                                                                                        <small class="opacity-8 pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                    <div class="widget-description ml-auto text-warning">
                                                                                        <span class="pr-1">45</span>
                                                                                        <i class="fa fa-angle-up"></i>
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
                                        <div style="padding-top:3%;" class="col-sm-12 col-lg-6">
                                            <div class="mb-3 card">
                                                <div class="card-header-tab card-header">
                                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Total Sales</div>
                                                    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                        <div class="btn-group dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                                <i class="lnr-cog btn-icon-wrapper"></i>
                                                            </button>
                                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-inbox"></i><span>Menus</span>
                                                                </button>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                                </button>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                                </button>
                                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                                <div class="p-1 text-right">
                                                                    <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                                    <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div id="chart-col-1"></div>
                                                </div>
                                                <div class="p-0 d-block card-footer">
                                                    <div class="grid-menu grid-menu-2col">
                                                        <div class="no-gutters row">
                                                            <div class="p-2 col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                    <i class="lnr-car text-primary opacity-7 btn-icon-wrapper mb-2"></i> Admin
                                                                </button>
                                                            </div>
                                                            <div class="p-2 col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                    <i class="lnr-bullhorn text-danger opacity-7 btn-icon-wrapper mb-2"></i> Blog
                                                                </button>
                                                            </div>
                                                            <div class="p-2 col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                    <i class="lnr-bug text-success opacity-7 btn-icon-wrapper mb-2"></i> Register
                                                                </button>
                                                            </div>
                                                            <div class="p-2 col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                    <i class="lnr-heart text-warning opacity-7 btn-icon-wrapper mb-2"></i> Directory
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding-top:3%;" class="col-sm-12 col-lg-6">
                                            <div class="mb-3 card">
                                                <div class="card-header-tab card-header">
                                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Daily Sales</div>
                                                    <div class="btn-actions-pane-right text-capitalize">
                                                        <button class="btn-wide btn-outline-2x btn btn-outline-focus btn-sm">View All</button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div id="chart-col-2"></div>
                                                </div>
                                                <div class="p-0 d-block card-footer">
                                                    <div class="grid-menu grid-menu-2col">
                                                        <div class="no-gutters row">
                                                            <div class="p-2 col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                    <i class="lnr-apartment text-dark opacity-7 btn-icon-wrapper mb-2"> </i> Overview
                                                                </button>
                                                            </div>
                                                            <div class="p-2 col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                    <i class="lnr-database text-dark opacity-7 btn-icon-wrapper mb-2"> </i> Support
                                                                </button>
                                                            </div>
                                                            <div class="p-2 col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                    <i class="lnr-printer text-dark opacity-7 btn-icon-wrapper mb-2"> </i> Activities
                                                                </button>
                                                            </div>
                                                            <div class="p-2 col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                    <i class="lnr-store text-dark opacity-7 btn-icon-wrapper mb-2"> </i> Marketing
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="dashboard-ranking" role="tabpanel" class="tab-pane container card">
                                    <div style="padding-top:3%;" class="row">
                                        <div class="col-md-12">
                                            <div class="card-shadow-primary card-border mb-3 card">
                                                <div class="dropdown-menu-header">
                                                    <div class="dropdown-menu-header-inner bg-primary">
                                                        <div class="menu-header-image opacity-4"
                                                            style="background-image: url('assets/images/dropdown-header/abstract2.jpg');"></div>
                                                        <div class="menu-header-content">
                                                            <h5 class="menu-header-title text-capitalize mb-0 fsize-3">Top Sellers</h5>
                                                            <h6 class="menu-header-subtitle mb-3">Yet another Example of Card Boxes</h6>
                                                            <div role="group" class="mb-0 btn-group">
                                                                <button type="button" class="btn-pill pl-3 pr-3  btn btn-warning">John</button>
                                                                <button type="button" class="pl-3 pr-3  btn btn-warning">Mary</button>
                                                                <button type="button" class="btn-pill pl-3 pr-3  btn btn-warning">Katie</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="p-0 list-group-item">
                                                        <div class="row">
                                                            <div class="center-elem col-md-6">
                                                                <div class="center-elem w-100">
                                                                    <canvas id="doughnut-chart"></canvas>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="widget-chart">
                                                                    <div class="widget-chart-content">
                                                                        <div class="widget-numbers mt-0 text-danger">
                                                                            <small>$</small>
                                                                            158
                                                                            <small class="opacity-5 pl-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </small>
                                                                        </div>
                                                                        <div class="widget-subheading">Sales Today</div>
                                                                    </div>
                                                                </div>
                                                                <div class="divider mt-0 mb-0 mr-2"></div>
                                                                <div class="widget-chart">
                                                                    <div class="widget-chart-content">
                                                                        <div class="widget-numbers mt-0 text-primary">
                                                                            <small>$</small>
                                                                            346
                                                                            <small class="opacity-5 pl-2">
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </small>
                                                                        </div>
                                                                        <div class="widget-subheading">Sales this Month</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="p-0 list-group-item">
                                                        <div class="grid-menu grid-menu-2col">
                                                            <div class="no-gutters row">
                                                                <div class="col-sm-12">
                                                                    <div class="p-1">
                                                                        <button type="button" class="btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                                            <span class="text-uppercase font-weight-bold">Block Button Maybe?</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <div class="mb-3 card">
                                                <div class="card-header-tab card-header">
                                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                        <i class="header-icon lnr-shirt mr-3 text-muted opacity-6"> </i>
                                                        Top Sellers
                                                    </div>
                                                    <div class="btn-actions-pane-right actions-icon-btn">
                                                        <div class="btn-group dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                                <i class="pe-7s-menu btn-icon-wrapper"></i>
                                                            </button>
                                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                                </button>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                                </button>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                                </button>
                                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                                <div class="p-1 text-right">
                                                                    <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                                    <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-chart widget-chart2 text-left p-0">
                                                    <div class="widget-chat-wrapper-outer">
                                                        <div class="widget-chart-content widget-chart-content-lg">
                                                            <div class="widget-chart-flex">
                                                                <div class="widget-title opacity-5 text-muted text-uppercase">New accounts since 2018</div>
                                                            </div>
                                                            <div class="widget-numbers">
                                                                <div class="widget-chart-flex">
                                                                    <div>
                                                                        <span class="opacity-10 text-success pr-2">
                                                                            <i class="fa fa-angle-up"></i>
                                                                        </span>
                                                                        <span>9</span>
                                                                        <small class="opacity-5 pl-1">%</small>
                                                                    </div>
                                                                    <div class="widget-title ml-2 font-size-lg font-weight-normal text-muted">
                                                                        <span class="text-danger pl-2">+14% failed</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-xlg opacity-10 m-0">
                                                            <div id="dashboard-sparkline-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pt-2 pb-0 card-body">
                                                    <h6 class="text-muted text-uppercase font-size-md opacity-9 mb-2 font-weight-normal">Authors</h6>
                                                    <div class="scroll-area-md shadow-overflow">
                                                        <div class="scrollbar-container">
                                                            <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <img width="38" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Viktor Martin</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$152</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    <span>752</span>
                                                                                    <small class="text-warning pl-2">
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <img width="38" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Denis Delgado</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$53</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    <span>587</span>
                                                                                    <small class="text-danger pl-2">
                                                                                        <i class="fa fa-angle-up"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <img width="38" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Shawn Galloway</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$239</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    <span>163</span>
                                                                                    <small class="text-muted pl-2">
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <img width="38" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Latisha Allison</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$21</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    653
                                                                                    <small class="text-primary pl-2">
                                                                                        <i class="fa fa-angle-up"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <img width="38" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Lilly-Mae White</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$381</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small> 629
                                                                                    <small class="text-muted pl-2">
                                                                                        <i class="fa fa-angle-up"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <img width="38" class="rounded-circle" src="assets/images/avatars/8.jpg" alt="">
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Julie Prosser</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$74</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>462
                                                                                    <small class="text-muted pl-2">
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="border-bottom-0 list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <img width="38" class="rounded-circle" src="assets/images/avatars/8.jpg" alt="">
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Amin Hamer</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$7</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    956
                                                                                    <small class="text-success pl-2">
                                                                                        <i class="fa fa-angle-up"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-block text-center rm-border card-footer">
                                                    <button class="btn btn-primary">
                                                        View complete report
                                                        <span class="text-white pl-2 opacity-3">
                                                            <i class="fa fa-arrow-right"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <div class="mb-3 card">
                                                <div class="card-header-tab card-header">
                                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                        <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Best Selling Products
                                                    </div>
                                                    <div class="btn-actions-pane-right actions-icon-btn">
                                                        <div class="btn-group dropdown">
                                                            <button data-toggle="dropdown" type="button" aria-haspopup="true"
                                                                aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                                <i class="pe-7s-menu btn-icon-wrapper"></i></button>
                                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                                </button>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                                </button>
                                                                <button type="button" tabindex="0" class="dropdown-item">
                                                                    <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                                </button>
                                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                                <div class="p-1 text-right">
                                                                    <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                                    <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-chart widget-chart2 text-left p-0">
                                                    <div class="widget-chat-wrapper-outer">
                                                        <div class="widget-chart-content widget-chart-content-lg">
                                                            <div class="widget-chart-flex">
                                                                <div class="widget-title opacity-5 text-muted text-uppercase">Toshiba Laptops
                                                                </div>
                                                            </div>
                                                            <div class="widget-numbers">
                                                                <div class="widget-chart-flex">
                                                                    <div>
                                                                        <span class="opacity-10 text-warning pr-2">
                                                                            <i class="fa fa-dot-circle"></i>
                                                                        </span>
                                                                        <span>$984</span>
                                                                    </div>
                                                                    <div class="widget-title ml-2 font-size-lg font-weight-normal text-muted">
                                                                        <span class="text-success pl-2">+14</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-xlg opacity-10 m-0">
                                                            <div id="dashboard-sparkline-2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pt-2 pb-0 card-body">
                                                    <h6 class="text-muted text-uppercase font-size-md opacity-9 mb-2 font-weight-normal">Top
                                                        Performing</h6>
                                                    <div class="scroll-area-md shadow-overflow">
                                                        <div class="scrollbar-container">
                                                            <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="icon-wrapper m-0">
                                                                                    <div class="progress-circle-wrapper">
                                                                                        <div class="progress-circle-wrapper">
                                                                                            <div class="circle-progress circle-progress-gradient">
                                                                                                <small></small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Asus Laptop</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$152</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    <span>752</span>
                                                                                    <small class="text-warning pl-2">
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="icon-wrapper m-0">
                                                                                    <div class="progress-circle-wrapper">
                                                                                        <div class="progress-circle-wrapper">
                                                                                            <div class="circle-progress circle-progress-danger">
                                                                                                <small></small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Dell Inspire</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$53</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    <span>587</span>
                                                                                    <small class="text-danger pl-2">
                                                                                        <i class="fa fa-angle-up"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="icon-wrapper m-0">
                                                                                    <div class="progress-circle-wrapper">
                                                                                        <div class="progress-circle-wrapper">
                                                                                            <div class="circle-progress circle-progress-primary">
                                                                                                <small></small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Lenovo IdeaPad</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$239</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    <span>163</span>
                                                                                    <small class="text-muted pl-2">
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="icon-wrapper m-0">
                                                                                    <div class="progress-circle-wrapper">
                                                                                        <div class="progress-circle-wrapper">
                                                                                            <div class="circle-progress circle-progress-info">
                                                                                                <small></small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Asus Vivobook</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$21</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    653
                                                                                    <small class="text-primary pl-2">
                                                                                        <i class="fa fa-angle-up"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="icon-wrapper m-0">
                                                                                    <div class="progress-circle-wrapper">
                                                                                        <div class="progress-circle-wrapper">
                                                                                            <div class="circle-progress circle-progress-warning">
                                                                                                <small></small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Apple Macbook</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$381</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    629
                                                                                    <small class="text-muted pl-2">
                                                                                        <i class="fa fa-angle-up"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="icon-wrapper m-0">
                                                                                    <div class="progress-circle-wrapper">
                                                                                        <div class="progress-circle-wrapper">
                                                                                            <div class="circle-progress circle-progress-dark">
                                                                                                <small></small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">HP Envy 13"</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$74</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    462
                                                                                    <small class="text-muted pl-2">
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="border-bottom-0 list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="icon-wrapper m-0">
                                                                                    <div class="progress-circle-wrapper">
                                                                                        <div class="progress-circle-wrapper">
                                                                                            <div class="circle-progress circle-progress-alternate">
                                                                                                <small></small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Gaming Laptop HP</div>
                                                                                <div class="widget-subheading mt-1 opacity-10">
                                                                                    <div class="badge badge-pill badge-dark">$7</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="fsize-1 text-focus">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    956
                                                                                    <small class="text-success pl-2">
                                                                                        <i class="fa fa-angle-up"></i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-block text-center rm-border card-footer">
                                                    <button class="btn btn-primary">
                                                        View all participants
                                                        <span class="text-white pl-2 opacity-3">
                                                            <i class="fa fa-arrow-right"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 card">
                                                <div class="card-header-tab card-header-tab-animation card-header">
                                                    <div class="card-header-title">
                                                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                                        Sales Report
                                                    </div>
                                                    <div class="btn-actions-pane-right text-capitalize">
                                                        <button class="btn-wide btn-outline-2x btn btn-outline-success btn-sm">View All</button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active show" id="tab-eg-11">
                                                            <div class="card mb-3 widget-chart widget-chart2 text-left p-0">
                                                                <div class="widget-chat-wrapper-outer">
                                                                    <div class="widget-chart-content pt-3 pr-3 pl-3">
                                                                        <div class="widget-chart-flex">
                                                                            <div class="widget-numbers">
                                                                                <div class="widget-chart-flex">
                                                                                    <div>
                                                                                        <small class="opacity-5">$</small>
                                                                                        <span>368</span></div>
                                                                                    <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">
                                                                                        Total Leads</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                        <div id="dashboard-sparkline-carousel-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Top
                                                                Authors</h6>
                                                            <div class="scroll-area-sm">
                                                                <div class="scrollbar-container">
                                                                    <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                                        <li class="list-group-item">
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Ella-Rose Henry</div>
                                                                                        <div class="widget-subheading">Web Developer</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="font-size-xlg text-muted">
                                                                                            <small class="opacity-5 pr-1">$</small>
                                                                                            <span>129</span>
                                                                                            <small class="text-danger pl-2">
                                                                                                <i class="fa fa-angle-down"></i>
                                                                                            </small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                                        <div class="widget-subheading">UI Designer</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="font-size-xlg text-muted">
                                                                                            <small class="opacity-5 pr-1">$</small>
                                                                                            <span>54</span>
                                                                                            <small class="text-success pl-2">
                                                                                                <i class="fa fa-angle-up"></i>
                                                                                            </small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                                                                        <div class="widget-subheading">Java Programmer</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="font-size-xlg text-muted">
                                                                                            <small class="opacity-5 pr-1">$</small>
                                                                                            <span>429</span>
                                                                                            <small class="text-warning pl-2">
                                                                                                <i class="fa fa-dot-circle"></i>
                                                                                            </small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Ella-Rose Henry</div>
                                                                                        <div class="widget-subheading">Web Developer</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="font-size-xlg text-muted">
                                                                                            <small class="opacity-5 pr-1">$</small>
                                                                                            <span>129</span>
                                                                                            <small class="text-danger pl-2">
                                                                                                <i class="fa fa-angle-down"></i>
                                                                                            </small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                                        <div class="widget-subheading">UI Designer</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="font-size-xlg text-muted">
                                                                                            <small class="opacity-5 pr-1">$</small>
                                                                                            <span>54</span>
                                                                                            <small class="text-success pl-2">
                                                                                                <i class="fa fa-angle-up"></i>
                                                                                            </small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="divider"></div>
                                                            <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Last
                                                                Month Top Seller</h6>
                                                            <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                                <li class="list-group-item">
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/8.jpg" alt="">
                                                                            </div>
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Ruben Tillman</div>
                                                                                <div class="widget-subheading">UI Designer</div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="font-size-xlg text-muted">
                                                                                    <small class="opacity-5 pr-1">$</small>
                                                                                    <span>54</span>
                                                                                    <small class="text-success pl-2">
                                                                                        <i class="fa fa-angle-up">
                                                                                        </i>
                                                                                    </small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>    
                            </div>
                            <div style="box-shadow: none;" class="app-inner-layout bg-transparent card ">
                                <div style="margin-top: -4.6%;" class="p-3 scrollbar-sidebar">
                                    <div style="box-shadow: none;" class="card-shadow-primary profile-responsive card-border mb-3 card">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-info">
                                                <div class="menu-header-image opacity-2"
                                                    style="background-image: url('assets/images/dropdown-header/abstract1.jpg')"></div>
                                                <div class="menu-header-content btn-pane-right">
                                                    <div class="avatar-icon-wrapper mr-2 avatar-icon-xl">
                                                        <div class="avatar-icon rounded">
                                                            <img src="assets/images/avatars/7.jpg" alt="Avatar 5">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h5 class="menu-header-title">Aliesha Hunter</h5>
                                                    </div>
                                                    <div class="menu-header-btn-pane">
                                                        <div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active show" id="tab-example-161">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <div class="widget-content">
                                                            <div class="text-center">
                                                                <h5 class="widget-heading opacity-4">March Totals</h5>
                                                                <h5><span class="pr-2"> <b class="text-danger">12</b> new leads,</span>
                                                                <span><b class="text-success">$56,24</b> in sales</span></h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="p-0 list-group-item">
                                                        <div class="grid-menu grid-menu-2col">
                                                            <div class="no-gutters row">
                                                                <div class="col-sm-6">
                                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                                        <i class="lnr-license btn-icon-wrapper btn-icon-lg mb-3"> </i>View Profile
                                                                    </button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                                        <i class="lnr-music-note btn-icon-wrapper btn-icon-lg mb-3"></i>Leads Generated
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="tab-example-162">
                                                <div class="p-3 col-sm-12">
                                                    <p class="mb-0">With supporting text below as a natural lead-in to additional content.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                    <div style="box-shadow: none;" class="mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"> </i>
                                            Technical Support
                                        </div>
                                    </div>
                                    <div class="p-0 card-body">
                                        <div class="dropdown-menu-header mt-0 mb-0">
                                            <div class="dropdown-menu-header-inner bg-heavy-rain">
                                                <div class="menu-header-image opacity-1"
                                                    style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                <div class="menu-header-content text-dark">
                                                    <h5 class="menu-header-title">Notifications</h5>
                                                    <h6 class="menu-header-subtitle">
                                                        You have
                                                        <b class="text-danger">21 </b>
                                                        unread messages
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link active" id="tab-c-0" data-toggle="tab" href="#tab-animated-0">
                                                    <span>Messages</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link" id="tab-c-1" data-toggle="tab" href="#tab-animated-1">
                                                    <span>Events</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-2">
                                                    <span>System Errors</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-animated-0" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="p-3 col-sm-6">
                                                            <div class="notifications-box">
                                                                <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
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
                                                                                <p> Yet another one, at<span class="text-success">15:00 PM</span></p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the production
                                                                                    release
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
                                                                                                <img src="assets/images/avatars/2.jpg"alt="">
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
                                                                    <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
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
                                            <div class="tab-pane" id="tab-animated-1" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="p-3">
                                                            <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                            <i class="badge badge-dot badge-dot-xl badge-success"></i>
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
                                                                            <i class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                                        </span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <p>Another meeting today, at 
                                                                                <b class="text-danger">12:00 PM</b>
                                                                            </p>
                                                                            <p>Yet another one, at 
                                                                                <span class="text-success">15:00 PM</span>
                                                                            </p>
                                                                            <span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                            <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                        </span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Build the production release</h4>
                                                                            <p>Lore
                                                                            </p>
                                                                            <span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                            <i class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                                        </span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title text-success">Something not important</h4>
                                                                            <p>Lorem </p>
                                                                            <span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                            <i class="badge badge-dot badge-dot-xl badge-success"></i>
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
                                                                            <i class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                                        </span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <p>Another meeting today, at 
                                                                                <b class="text-danger">12:00 PM</b>
                                                                            </p>
                                                                            <p>Yet another one, at 
                                                                                <span class="text-success">15:00 PM</span>
                                                                            </p>
                                                                            <span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                            <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                        </span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Build the production release</h4>
                                                                            <p>Lorem 
                                                                            </p>
                                                                            <span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                            <i class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                                        </span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title text-success">Something not important</h4>
                                                                            <p>Lorem ipsum trud</p>
                                                                            <span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-animated-2" role="tabpanel">
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
                                            <li class="nav-item-btn text-center pt-4 pb-3 nav-item">
                                                <button class="btn-shadow btn-wide btn-pill btn btn-dark">
                                                    <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span>
                                                    View All Messages
                                                </button>
                                            </li>
                                        </ul>
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
        
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <form action="" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <div style="margin-left:-1px;" class="container">
                    <h5 class="modal-title" id="exampleModalLong">Create a Post</h5>
                    <select style="font-size: 11px; height: 19px; padding: 0px; width:55px;" name="post_privacy" id="post_privacy" class="form-control">
                        <option value="public">Public</option>
                        <option value="users">Users</option> 
                        <option value="vendors">Vendors</option> 
                        <option value="custom">Custom</option> 
                    </select> 

                    <a style="margin-top:-10%;" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
            </div>
            <div class="modal-body col-md-12">
                    <img class="user-avatar rounded-circle" style="width: 35px;" id="get_post_emp_passport_image" name="get_post_emp_passport_image" src="assets/images/avatars/2.jpg" alt="User Avatar">
                    <label style="font-weight: bold;" name="get_post_emp_fullname" id="get_post_emp_fullname" class=""></label>
                <div style="margin-top: 2%" class="">
                    <label style="font-weight: bold;" class="form-control-label">Heading</label><br/>
                    <input style="font-size:12px;" type="text" id="post_heading" name="post_heading" required placeholder="Enter Your Heading..." class="input-style form-control">
                    
                    <label style="font-weight: bold;" class="form-control-label">Description</label><br/>
                    <textarea style="font-size:12px;" id="post_description" name="post_description" rows="5" placeholder="Enter Your Description..." class="form-control"></textarea>
                    <div class="image-upload">
                    <label style="font-weight: bold;" class="form-control-label">Picture</label><br/>
                        <label for="file" style="cursor: pointer;">
                        <i style="font-size: 35px" class="fa fa-picture-o"></i>
                        </label>
                        <input type="file" multiple accept="image/*" name="post_image" id="file" onchange="loadFile(event)" style="display: none;"/>
                    </div>
                    <p><img id="output" width="80"/></p>
                    <p style="font-size:12px; margin-top: -15px; color:black;">Upload Your Pictures</p>
                </div>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-secondary text-white" data-dismiss="modal">Cancel</a>
                <input style="background: #ff9900; border-style: none;" type="submit" value="POST" id="btn_post" name="btn_post" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
</div>
<script>
            var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
            };
     
            $("#post_heading").emojioneArea({
            pickerPosition: "bottom"
            });
            $("#comments_for_post").emojioneArea({
            pickerPosition: "bottom"
            });
            $("#post_description").emojioneArea({
            pickerPosition: "bottom"
            });
            $(document).ready(function(){
            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
            });
</script>
