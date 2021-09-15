<?php
include("top.php");
include("connection_db.php");
if(isset($_SESSION['agents_id']))
{
    $NULL="";
    $query="select * from ats_car_stock WHERE reserved_status <> 'RESERVED' AND ";

}
else
{
    $query="select * from ats_car_stocK WHERE ";

}
if(trim($_POST['get_stock_rec_no']) && trim($_POST['stock_agent_name']) && trim($_POST['get_stock_customer_name']) ) {
    // $query.="AND ats_car_stock_kobutsu LIKE '".$_POST['get_stock_kobutsu']."' ";
     $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
     $projectsc = array();
     while($arrayuasc=mysqli_fetch_array($customer_sellc))
     {
         
     array_push($projectsc,$arrayuasc[0]);
     
     }
     
    
     $recno=$_POST['get_stock_rec_no'];
     if (in_array($recno, $projectsc))
     
 {
         
  
     $customerid = implode( "', '", $projectsc ) . "'";
      $query.="ats_car_stock_rec_no in ($customerid) ";
 }
     
 
 
 } 
 elseif(trim($_POST['get_stock_kobutsu']) && trim($_POST['stock_agent_name']) && trim($_POST['get_stock_customer_name']) && empty($_POST['get_stock_rec_no'])) {
    // $query.="AND ats_car_stock_kobutsu LIKE '".$_POST['get_stock_kobutsu']."' ";
     $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
     $projectsc = array();
     while($arrayuasc=mysqli_fetch_array($customer_sellc))
     {
         
     array_push($projectsc,$arrayuasc[0]);
     
     }
     
    
    
         
  
     $customerid = implode( "', '", $projectsc ) . "'";
      $query.="ats_car_stock_rec_no in ($customerid) ";
 
     
 
 
 }
 elseif(trim($_POST['get_stock_kobutsu']) && trim($_POST['stock_agent_name']) && trim($_POST['get_stock_customer_name'])&& trim($_POST['get_stock_rec_no']) ) {
    // $query.="AND ats_car_stock_kobutsu LIKE '".$_POST['get_stock_kobutsu']."' ";
     $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
     $projectsc = array();
     while($arrayuasc=mysqli_fetch_array($customer_sellc))
     {
         
     array_push($projectsc,$arrayuasc[0]);
     
     }
     
    
    
         
     $recno1=$_POST['get_stock_rec_no'];
     if (in_array($recno1, $projectsc))
     
 {
     $customerid = implode( "', '", $projectsc) . "'";
      $query.="ats_car_stock_rec_no in ($customerid) ";
 
 }
 
 
 }
 if(trim($_POST['get_stock_kobutsu']) && trim($_POST['stock_agent_name']) && trim($_POST['get_stock_customer_name'])&& trim($_POST['get_stock_rec_no'])&& trim($_POST['get_stock_chassis_id']) ) {
    // $query.="AND ats_car_stock_kobutsu LIKE '".$_POST['get_stock_kobutsu']."' ";
     $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
     $projectsc = array();
     while($arrayuasc=mysqli_fetch_array($customer_sellc))
     {
         
     array_push($projectsc,$arrayuasc[0]);
     
     }
     
    
    
         
     
     $customerid = implode( "', '", $projectsc) . "'";
      $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
 
 
 
 
 } 
elseif(trim($_POST['stock_agent_name']) && trim($_POST['get_stock_customer_name']) && empty($_POST['get_stock_rec_no'])) {
   // $query.="AND ats_car_stock_kobutsu LIKE '".$_POST['get_stock_kobutsu']."' ";
    
    $customer_sellc=mysqli_query($connection,"select  recordno,customer from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
    $projectsc = array();
    while($arrayuasc=mysqli_fetch_array($customer_sellc))
    {
        
    array_push($projectsc,$arrayuasc[0]);
    
    }
    
   
    
 
    $customerid = implode( "', '", $projectsc) . "'";
     $query.="ats_car_stock_rec_no in ($customerid) ";
  
    


}
elseif(trim($_POST['get_stock_rec_no']) && trim($_POST['stock_agent_name'] ))
{
            $customer_sell=mysqli_query($connection,"select distinct recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."'");
            $projects = array();
            while($arrayuas=mysqli_fetch_array($customer_sell))
            {
                
            array_push($projects,$arrayuas[0]);
            
            }
            
            $recno=$_POST['get_stock_rec_no'];
            if (in_array($recno, $projects))
            
        {
            
            $query.=" LIKE '%".$_POST['get_stock_rec_no']."%' ";
            echo "found";
        
        }
       
        
   
  
}
elseif(trim($_POST['stock_agent_name']) )
{
    if(empty($_POST['stock_all_agent'])){
    $customer_sell1="select distinct recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."'";
    $customer_sell=mysqli_query($connection,$customer_sell1);
    $projects = array();
    while($arrayuas=mysqli_fetch_array($customer_sell))
    {
        array_push($projects,$arrayuas[0]);

    }
    $usersStr = implode(',', $projects);
   
        $query.="ats_car_stock_rec_no in ($usersStr) ";
    }
   
}

elseif(trim($_POST['get_stock_rec_no']))
{
    
    $query.="ats_car_stock_rec_no LIKE '%".$_POST['get_stock_rec_no']."%' ";
   
}

if(trim($_POST['stock_agent_name']) && empty($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])) {
    $query.="AND ats_car_stock_kobutsu LIKE '".$_POST['get_stock_kobutsu']."' ";
} 

elseif(trim($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])) {
    $query.="AND ats_car_stock_kobutsu LIKE '".$_POST['get_stock_kobutsu']."' ";
}
elseif(trim($_POST['get_stock_kobutsu']))
{
    $query.="ats_car_stock_kobutsu LIKE '".$_POST['get_stock_kobutsu']."' ";
}
if(trim($_POST['get_stock_chassis_id']) && trim($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu']) ) {
       $query.="AND ats_car_stock_chassic_no LIKE '".$_POST['get_stock_chassis_id']."' ";
   }
elseif(trim($_POST['get_stock_chassis_id']) && trim($_POST['get_stock_rec_no']) ) {
    $query.="AND ats_car_stock_chassic_no LIKE '".$_POST['get_stock_chassis_id']."' ";
}
elseif(trim($_POST['get_stock_chassis_id']) && trim($_POST['stock_agent_name']) ) {
    $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
}
elseif(trim($_POST['get_stock_chassis_id']) ) {
    $query.="ats_car_stock_chassic_no LIKE '".$_POST['get_stock_chassis_id']."' ";
}
if(trim($_POST['stock_all_agent']) && trim($_POST['stock_agent_name'])){
    $valagent=$_POST['stock_all_agent'];
   
    if($valagent=='AllCar')
    {
        if(isset($_SESSION['agents_id']))
            {
                $query="select * from ats_car_stocK WHERE reserved_status='' ";

            }
            else
            {
                $query="select * from ats_car_stock ";

            }
        
    }
    elseif($valagent=='AllReserved')
    {
        if(isset($_SESSION['agents_id']))
        {
          
            $query="select * from ats_car_stock WHERE ";
        
        }
        $customer_sell1="select distinct recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."'";
        $reserved=mysqli_query($connection,$customer_sell1);
        $arrayreserved = array();
        while($arrayres=mysqli_fetch_array($reserved))
        {
            
        array_push($arrayreserved,$arrayres[0]);
        
        }
      
        $reserveid = implode(',', $arrayreserved);
        $query.="ats_car_stock_rec_no in ('$reserveid') ";
        
    
    }
    elseif($valagent=='AllSold')
    {
        $customer_sell1="select distinct recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND reservedpaymentstatus='CONFIRMED'  ";

    
        $reserved=mysqli_query($connection,$customer_sell1);
        $arrayreserved = array();
        while($arrayres=mysqli_fetch_array($reserved))
        {
            
        array_push($arrayreserved,$arrayres[0]);
        
        }
       
        $reserveid = implode(',', $arrayreserved);
        $query.="ats_car_stock_rec_no in ('$reserveid') ";
        
    
    }
    elseif($valagent=='AllPaid')
    {
        $reserved=mysqli_query($connection,"select recordno from ats_stock_reservation Where reservedpaymentstatus='CONFIRMED' AND payment_status <> '' AND agent_name='".$_POST['stock_agent_name']."'");
        $arrayreserved = array();
        while($arrayres=mysqli_fetch_array($reserved))
        {
            
        array_push($arrayreserved,$arrayres[0]);
        
        }
        
        $reserveid = implode(',', $arrayreserved);
         $query.="ats_car_stock_rec_no in ('$reserveid') ";
    
    }
}
elseif(trim($_POST['stock_all_agent']))
{

    $valagent1=$_POST['stock_all_agent'];
   
    if($valagent1=='AllCar')
    {
        $query="select * from ats_car_stock";
    }
    elseif($valagent1=='AllReserved')
    {
        $reserved=mysqli_query($connection,"select recordno from ats_stock_reservation");
        $arrayreserved = array();
        while($arrayres=mysqli_fetch_array($reserved))
        {
            
        array_push($arrayreserved,$arrayres[0]);
        
        }
        
        $reserveid = implode(',', $arrayreserved);
         $query.="ats_car_stock_rec_no in ($reserveid) ";
         
    
    }
    elseif($valagent1=='AllSold')
    {
        $reserved=mysqli_query($connection,"select recordno from ats_stock_reservation Where reservedpaymentstatus='CONFIRMED' AND payment_status=''");
        $arrayreserved = array();
        while($arrayres=mysqli_fetch_array($reserved))
        {
            
        array_push($arrayreserved,$arrayres[0]);
        
        }
        
        $reserveid = implode(',', $arrayreserved);
         $query.="ats_car_stock_rec_no in ($reserveid) ";
    
    }
    elseif($valagent1=='AllPaid')
    {
        $reserved=mysqli_query($connection,"select recordno from ats_stock_reservation Where reservedpaymentstatus='CONFIRMED' AND payment_status <> ''");
        $arrayreserved = array();
        while($arrayres=mysqli_fetch_array($reserved))
        {
            
        array_push($arrayreserved,$arrayres[0]);
        
        }
        
        $reserveid = implode(',', $arrayreserved);
         $query.="ats_car_stock_rec_no in ($reserveid) ";
    
    }

   
}
if(trim($_POST['get_stock_make'])  && trim($_POST['get_stock_chassis_id']))
{
    $query.="AND ats_car_stock_make LIKE '".$_POST['get_stock_make']."' ";
}
elseif(trim($_POST['get_stock_make'])  && trim($_POST['get_stock_kobutsu']))
{
    $query.="AND ats_car_stock_make LIKE '".$_POST['get_stock_make']."' ";
}
elseif(trim($_POST['get_stock_make'])  && trim($_POST['stock_agent_name']))
{
    $query.="AND ats_car_stock_make LIKE '".$_POST['get_stock_make']."' ";
}
elseif(trim($_POST['get_stock_make'])  && trim($_POST['get_stock_rec_no']))
{
    $query.="AND ats_car_stock_make LIKE '".$_POST['get_stock_make']."' ";
}
elseif(trim($_POST['get_stock_make']))
{
    $query.="ats_car_stock_make LIKE '".$_POST['get_stock_make']."' ";
}
//modal
if(trim($_POST['stock_model'])  && trim($_POST['get_stock_make']))
{
    $query.="AND ats_car_stock_model LIKE '".$_POST['stock_model']."' ";
}
//shift
if(trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']))
{
    if(trim($_POST['get_stock_shift']) ){
        $query.="AND ats_car_stock_shift LIKE '".$_POST['get_stock_shift']."' ";
    }
}
elseif(trim($_POST['get_stock_shift'])) {
    $query.="ats_car_stock_shift LIKE '".$_POST['get_stock_shift']."' ";
}
if(trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']))
{
    if(trim($_POST['get_stock_reg_year']) ){
        $query.="AND ats_car_stock_man_year LIKE '".$_POST['get_stock_reg_year']."' ";
    }
}
elseif(trim($_POST['get_stock_reg_year']) ) {
    $query.="ats_car_stock_man_year LIKE '".$_POST['get_stock_reg_year']."' ";
}
//color
if( trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']))
{
    if(trim($_POST['get_stock_color']) ){
        $query.="AND ats_car_stock_color LIKE '".$_POST['get_stock_color']."' ";
    }
}
elseif(trim($_POST['get_stock_color']) ) {
    $query.="ats_car_stock_color LIKE '".$_POST['get_stock_color']."' ";
}
//fuel
if( trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']))
{
    if(trim($_POST['stock_fuel']) ){
        $query.="AND ats_car_stock_fuel LIKE '".$_POST['stock_fuel']."' ";
    }
}
elseif(trim($_POST['stock_fuel']) ) {
    $query.="ats_car_stock_fuel LIKE '".$_POST['stock_fuel']."' ";
}
//vessel
if( trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']))
{
    if(trim($_POST['get_stock_vessel_name']) ){
        $query.="AND ats_car_stock_vessel_name LIKE '".$_POST['get_stock_vessel_name']."' ";
    }
}
elseif(trim($_POST['get_stock_vessel_name']) ) {
    $query.="ats_car_stock_vessel_name LIKE '".$_POST['get_stock_vessel_name']."' ";
}
//Voyage
if(trim($_POST['get_stock_vessel_name']) || trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']))
{
    if(trim($_POST['get_stock_voyage']) ){
        $query.="AND ats_car_stock_voyage LIKE '".$_POST['get_stock_voyage']."' ";
    }
}
elseif(trim($_POST['get_stock_voyage']) ) {
    $query.="ats_car_stock_voyage LIKE '".$_POST['get_stock_voyage']."' ";
}
//BL_no
if(trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['stock_model'])  || trim($_POST['get_stock_make']) || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_kobutsu']) || trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']))
{
    if(trim($_POST['get_stock_bl_no']) ){
        $query.="AND ats_car_stock_bl_number LIKE '".$_POST['get_stock_bl_no']."' ";
    }
}
elseif(trim($_POST['get_stock_bl_no']) ) {
    $query.="ats_car_stock_bl_number LIKE '".$_POST['get_stock_bl_no']."' ";
}
if(trim($_POST['get_stock_buying_date']))
{

    $val1=$_POST['get_stock_buying_date'];
  
   
    if($val1=="Yes")
    {
    $query=" select * from ats_car_stocK WHERE ats_car_stock_buying_price <>'' ";
    }
    else
    {
    $query="select * from ats_car_stocK WHERE ats_car_stock_buying_price ='' ";
    }
   
}
if(trim($_POST['get_stock_inyard_date']))
{

    $val2=$_POST['get_stock_inyard_date'];
  
   
    if($val2=="Yes")
    {
    $query=" select * from ats_car_stocK WHERE ats_car_stock_inyard_date <>'' ";
    }
    else
    {
    $query="select * from ats_car_stocK WHERE ats_car_stock_inyard_date ='' ";
    }
   
}
if(trim($_POST['get_stock_reserve_date']))
{

    $val3=$_POST['get_stock_reserve_date'];
  
   
    if($val3=="Yes")
    {
    $query=" select * from ats_car_stocK WHERE ats_car_stock_reserve_date	 <>'' ";
    }
    else
    {
    $query="select * from ats_car_stocK WHERE ats_car_stock_reserve_date	 ='' ";
    }
   
}
if(trim($_POST['get_stock_sure_ok_date']))
{

    $val4=$_POST['get_stock_sure_ok_date'];
  
   
    if($val4=="Yes")
    {
    $query=" select * from ats_car_stocK WHERE ats_car_stock_sure_ok_date	 <>'' ";
    }
    else
    {
    $query="select * from ats_car_stocK WHERE ats_car_stock_sure_ok_date	 ='' ";
    }
   
}
if(trim($_POST['get_stock_sure_ok_date']))
{

    $val4=$_POST['get_stock_sure_ok_date'];
  
   
    if($val4=="Yes")
    {
    $query=" select * from ats_car_stocK WHERE ats_car_stock_sure_ok_date	 <>'' ";
    }
    else
    {
    $query="select * from ats_car_stocK WHERE ats_car_stock_sure_ok_date	 ='' ";
    }
   
}
if(trim($_POST['get_stock_payment_status']) && !empty($_POST['get_stock_payment_status']))
{

    $val4=$_POST['get_stock_payment_status'];
  

    if($val4=="Yes")
    {
        $payment=mysqli_query($connection,"select recordno from ats_stock_reservation where reservedpaymentstatus='CONFIRMED'");
        $payments1 = array();
        while($arraypay=mysqli_fetch_array($payment))
        {
            
        array_push($payments1,$arraypay[0]);
        
        }
    
        $paymentid = implode(',', $payments1);
         $query="select * from ats_car_stocK WHERE ats_car_stock_rec_no in ($paymentid) ";
    
    }
    else
    {
        $payment=mysqli_query($connection,"select recordno from ats_stock_reservation where reservedpaymentstatus='NOT_CONFIRMED'");
        $payments1 = array();
        while($arraypay=mysqli_fetch_array($payment))
        {
            
        array_push($payments1,$arraypay[0]);
        
        }
    
        $paymentid = implode(',', $payments1);
         $query="select * from ats_car_stocK WHERE ats_car_stock_rec_no in ($paymentid) ";
    }
   
}
if(isset($_POST['get_stock_ship_ok_date']) && !empty($_POST['get_stock_ship_ok_date']))
{

    $val5=$_POST['get_stock_ship_ok_date'];

   
    if($val5=="Yes")
    {
    $query=" select * from ats_car_stocK WHERE ats_car_stock_ship_ok_date<>'' ";
    }
    else
    {
    $query="select * from ats_car_stocK WHERE ats_car_stock_ship_ok_date='' ";
    }
}
if(trim($_POST['get_stock_ship_ok_date']))
{

    $val5=$_POST['get_stock_ship_ok_date'];
  
   
    if($val5=="Yes")
    {
    $query=" select * from ats_car_stocK WHERE ats_car_stock_ship_ok_date<>'' ";
    }
    else
    {
    $query="select * from ats_car_stocK WHERE ats_car_stock_ship_ok_date='' ";
    }
} 
elseif(trim($_POST['get_stock_shipping_order_file']))
{

    $val6=$_POST['get_stock_shipping_order_file'];
  

    if($val6=="Yes")
    {
    $query=" select * from ats_car_stocK WHERE ats_car_stock_ship_order_file<>'' ";
    }
    else
    {
    $query="select * from ats_car_stocK WHERE ats_car_stock_ship_order_file='' ";
    }

} 
if(trim($_POST['get_stock_bl_date']))
{

    $val7=$_POST['get_stock_bl_date'];
  
   
    if($val7=="Yes")
    {
    $query=" select * from ats_car_stocK WHERE ats_car_stock_bl_date<>'' ";
    }
    else
    {
    $query="select * from ats_car_stocK WHERE ats_car_stock_bl_date='' ";
    }
}
if(trim($_POST['get_stock_release_ok_date']))
{

    $val8=$_POST['get_stock_release_ok_date'];
  
   
    if($val8=="Yes")
    {
    $query=" select * from ats_car_stocK WHERE ats_car_stock_release_ok_date<>'' ";
    }
    else
    {
    $query="select * from ats_car_stocK WHERE ats_car_stock_release_ok_date='' ";
    }
}
if(trim($_POST['get_stock_buying_date_from']) && trim($_POST['get_stock_buying_date_till']))
{
    $val10=$_POST['get_stock_buying_date_from'];
    $val11=$_POST['get_stock_buying_date_till'];
    $val101= date("Y-m-d", strtotime($val10));
    $val102= date("Y-m-d", strtotime($val11));

    $query="select * from ats_car_stocK WHERE ats_car_stock_buying_date	BETWEEN '$val101' AND '$val102' ";
   
}
if(trim($_POST['get_stock_reserve_ok_date_from']) && trim($_POST['get_stock_reserve_ok_date_till']))
{
    $val11=$_POST['get_stock_reserve_ok_date_from'];
    $val12=$_POST['get_stock_reserve_ok_date_till'];
    $val121= date("Y-m-d", strtotime($val11));
    $val122= date("Y-m-d", strtotime($val12));

    $query="select * from ats_car_stocK WHERE ats_car_stock_reserve_date BETWEEN '$val121' AND '$val122' ";
   
}
if(trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_from']))
{
    $val13=$_POST['get_stock_ship_ok_date_from'];
    $val14=$_POST['get_stock_ship_ok_date_till'];
    $val131= date("Y-m-d", strtotime($val13));
    $val142= date("Y-m-d", strtotime($val14));

    $query="select * from ats_car_stocK WHERE ats_car_stock_ship_ok_date BETWEEN '$val121' AND '$val122' ";
   
}
if(trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
{
    $val15=$_POST['get_stock_release_ok_date_from'];
    $val16=$_POST['get_stock_release_ok_date_till'];
    $val151= date("Y-m-d", strtotime($val15));
    $val162= date("Y-m-d", strtotime($val16));

    $query="select * from ats_car_stock WHERE ats_car_stock_release_ok_date BETWEEN '$val151' AND '$val161' ";
   
}
$queryca=mysqli_query($connection,$query);

?>
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <form action="" method="">
                            <div style="margin-top: -1.2%; box-shadow: none;" class="app-inner-layout__wrapper row-fluid no-gutters">
                                <div class="tab-content app-inner-layout__content card" >
                                    <div id="accordion" >
                                        <div data-parent="#accordion" id="back-to-search" aria-labelledby="headingOne" class="collapse show" style="box-shadow: none;"  id="car-search" role="tabpanel"  class="tab-pane active container card">
                                           
                                        </div>
                                        <div style="background-color: gray; height: 1px;"></div>
                                        <div >
                                            <div class="card-body">
                                                <a data-toggle="collapse" data-target="#back-to-search" aria-expanded="true" aria-controls="collapseOne" class="btn btn-primary text-center text-white">Back to Search</a>
                                                <div style="margin-left: -35px;" class="container">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="main-card card">
                                                                    <div class="card-body">
                                                                        
                                                                        <div class="table-responsive">
                                                                            <table style="font-size: 10px;" class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Slct all<input type="checkbox" onclick="toggle(this);" /></th>
                                                                                        <?php 
                                                                                        if(!isset($_SESSION['agents_id']))
                                                                                        {
                                                                                            ?>
                                                                                             <th>Price</th>
                                                                                            <?php
                                                                                        }
                                                                                        ?>
                                                                                       
                                                                                        <th>Inyrd</th>
                                                                                        <th>Rsrv</th>
                                                                                        <th>Sure</th>
                                                                                        <th>Sold</th>
                                                                                        <th>Shpok</th>
                                                                                        <th>Shinv</th>
                                                                                        <th>Bl</th>
                                                                                       
                                                                                        <th>RLok</th>
                                                                                        <th>RL</th>
                                                                                    
                                                                                        <th>Crfct</th>
                                                                                        <th>Dhl</th>
                                                                                        <th>Rec#</th>
                                                                                        
                                                                                        <th>Kbtsu</th>
                                                                                        <th>Chassis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                                                        <th>Make/Modal</th>
                                                                                        <th>Year</th>
                                                                                        <th>Color</th>
                                                                                        <th>Sft</th>
                                                                                        <?php if(!isset($_SESSION['agents_id'])){?>
                                                                                        <th>Feul</th>   
                                                                                        <th>Door</th>
                                                                                        <?php }?>
                                                                                        <th>CC</th>
                                                                                        <th style="text-align: center;">Opt.</th>
                                                                                        <th>FOB</th>
                                                                                        <?php if(!isset($_SESSION['agents_id'])){?>
                                                                                        <th>Grd</th>
                                                                                        <th>Mileage</th><?php } ?>
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
                                                                                        <?php
                                                                                        if(!isset($_SESSION['agents_id']))
                                                                                        {
                                                                                            ?>
                                                                                            <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php echo $rowca[28]?></td>
                                                                                            <?php
                                                                                        }
                                                                                        ?>
                                                                                        
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php  if(!empty($rowca[74])){echo "&checkmark;";}else{echo "X";} ?></td>
                                                                                        
                                                                                        
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php  if($rowca[76] == '0000-00-00'){echo "X";}else{echo "&checkmark;";} ?></td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php  if(!empty($rowca[78])){echo "&checkmark;";}else{echo "X";} ?></td>
                                                                                    
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php  if(!empty($rowca[78])){echo "&checkmark;";}else{echo "X";} ?></td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php  if($rowca[83] == '0000-00-00'){echo "X";}else{echo "&checkmark;";} ?></td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php if(!empty($rowca[84])){echo "&checkmark;";}else{echo "X";} ?></td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php if(!empty($rowca[86])){echo "&checkmark;";}else{echo "X";} ?></td>
                                                                                        
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php if(!empty($rowca[86])){echo "&checkmark;";}else{echo "X";} ?></td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php if(!empty($rowca[91])){echo "&checkmark;";}else{echo "X";} ?></td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php if(!empty($rowca[95])){echo "&checkmark;";}else{echo "X";} ?></td>
                                                                                        <td style="color: #ff9900; font-weight: bolder; background: wheat; "><?php if(!empty($rowca[91])){echo "&checkmark;";}else{echo "X";} ?></td>
                                                                                        
                                                                                        <td><?php echo $rowca[1]?></td>
                                                                                       
                                                                                        <td><?php echo $rowca[14]?></td>
                                                                                        <td><?php echo $rowca[2]?></td>
                                                                                        <?php $querymakeseaarch=mysqli_fetch_row(mysqli_query($connection,"select * from car_make where id='".$rowca[3]."'"));
                                                                                        $querymodelseaarch=mysqli_fetch_row(mysqli_query($connection,"select * from ats_model_car where ats_model_id='".$rowca[4]."'"));?>
                                                                                        <td><?php echo $querymakeseaarch[1]."/".$querymodelseaarch[2]?>
                                                                                      </td>
                                                                                        <td><?php echo $rowca[6]?></td>
                                                                                        
                                                                                        <td><?php echo $rowca[8]?></td>
                                                                                        <td><?php echo $rowca[9]?></td>
                                                                                        <?php if(!isset($_SESSION['agents_id'])){?>
                                                                                        <td><?php echo $rowca[10]?></td>
                                                                                        <td><?php echo $rowca[11]?></td><?php } ?>
                                                                                        <td><?php echo $rowca[13]?></td>
                                                                                        <td><?php echo $rowca[32] .",".$rowca[33].",".$rowca[34].",".$rowca[35].",".$rowca[36].",".$rowca[37].",".$rowca[38].",".$rowca[39].",".$rowca[40].",".$rowca[41].",".$rowca[42].",".$rowca[43].",".$rowca[44].",".$rowca[45].",".$rowca[46].",".$rowca[47].",".$rowca[48]?></td>
                                                                                        <td><?php echo $rowca[51]?></td>
                                                                                        <?php if(!isset($_SESSION['agents_id'])){?>
                                                                                        <td><?php echo $rowca[12]?></td>
                                                                                        <td><?php echo $rowca[17]?></td><?php }?>
                                                                                        <td><a href="car-view.php?car_id=<?php echo $rowca[0]?>">VIEW</a> || <a href="stock_update.php?car_id=<?php echo $rowca[0]?>">EDIT</a></td>

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
