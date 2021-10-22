<?php

include("top.php");
include("connection_db.php");
$recno = array('get_stock_kobutsu', 'get_stock_chassis_id', 'get_stock_customer_name', 'get_stock_make', 'stock_model', 'get_stock_shift','get_stock_reg_year','get_stock_color','stock_fuel','get_stock_vessel_name','get_stock_voyage','get_stock_bl_no','get_stock_buying_date_from','get_stock_buying_date_till','get_stock_reserve_ok_date_from','get_stock_reserve_ok_date_till','get_stock_ship_ok_date_from','get_stock_ship_ok_date_till','get_stock_release_ok_date_from','get_stock_release_ok_date_till');

if(isset($_SESSION['agents_id'])) //checking session variable
{
if(trim($_POST['stock_all_agent']=="AllCar")){
    if(trim($_POST['get_stock_release_ok_date']) || trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || (trim ($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till'])))
    {
        
    $query="select * from ats_car_stock WHERE reserved_status <> 'RESERVED' in ($customeridrec)  AND ";
    }
    else {
        $query="select * from ats_car_stock WHERE reserved_status <> 'RESERVED'";
    }
       //rec no start
            if(trim($_POST['get_stock_rec_no'])){
                $query.="reserved_status <> 'RESERVED' AND ats_car_stock_rec_no LIKE '%".$_POST['get_stock_rec_no']."%' ";
            }
            
          //rec no end
            //kobutsu start
            if(trim($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])){
                $query.="AND ats_car_stock_kobutsu LIKE '%".$_POST['get_stock_kobutsu']."%' ";
            }
          
            if(empty($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])){
                $query.="reserved_status <> 'RESERVED' AND ats_car_stock_kobutsu LIKE '%".$_POST['get_stock_kobutsu']."%' ";
            }
            //kobutsu end
            //chasis start
            if(trim($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_kobutsu']) && trim($_POST['get_stock_rec_no'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="reserved_status <> 'RESERVED' AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            //chassis end
            //customer start
            if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty($_POST['get_stock_chassis_id']) && trim($_POST['get_stock_customer_name'])){
                $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
                    $projectsc = array();
                    while($arrayuasc=mysqli_fetch_array($customer_sellc))
                    {
                    array_push($projectsc,$arrayuasc[0]);
                    }
                    $customerid = "'" . implode ( "', '", $projectsc ) . "'";
                    $query.=" ats_car_stock_rec_no in ($customerid) ";
                   
            }
            if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id'])) && trim($_POST['get_stock_customer_name'])){
                $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
                    $projectsc = array();
                    while($arrayuasc=mysqli_fetch_array($customer_sellc))
                    {
                    array_push($projectsc,$arrayuasc[0]);
                    }
                    $customerid = "'" . implode ( "', '", $projectsc ) . "'";
                    $query.="AND ats_car_stock_rec_no in ($customerid) ";
                   
            }
            //customer ens
            //make start
            if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name'])) && trim($_POST['get_stock_make'])){
               
                    $query.="AND ats_car_stock_make LIKE '%".$_POST['get_stock_make']."%' ";
                   
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty  ($_POST['get_stock_customer_name'])) && trim($_POST['get_stock_make'])){
               
                $query.="reserved_status <> 'RESERVED' AND ats_car_stock_make LIKE '%".$_POST['get_stock_make']."%' ";
               
        }
        //make end
        //model start
        if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make'])) && trim($_POST['stock_model'])){
               
            $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
           
    }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make'])) && trim($_POST['stock_model'])){
            
                $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
            
        }
                //model end
                //shift start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model'])) && trim($_POST['get_stock_shift'])){
                    
                    $query.="AND ats_car_stock_shift LIKE '%".$_POST['get_stock_shift']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model'])) && trim($_POST['get_stock_shift'])){
            
                $query.="reserved_status <> 'RESERVED' AND ats_car_stock_shift LIKE '%".$_POST['get_stock_shift']."%' ";
            
        }
                //shift end
                //year start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift'])) && trim($_POST['get_stock_reg_year'])){
                    
                    $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift'])) && trim($_POST['get_stock_reg_year'])){
            
                $query.="reserved_status <> 'RESERVED' AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
            
        }
                //year end
                //color start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year'])) && trim($_POST['get_stock_color'])){
                    
                    $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                
                    }
                    if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year'])) && trim($_POST['get_stock_color'])){
                    
                        $query.="reserved_status <> 'RESERVED' AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                    
                        }
                //color end
                //fuel start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color'])) && trim($_POST['stock_fuel'])){
                    
                    $query.="AND ats_car_stock_fuel LIKE '%".$_POST['stock_fuel']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color'])) && trim($_POST['stock_fuel'])){
            
                $query.="reserved_status <> 'RESERVED' AND ats_car_stock_fuel LIKE '%".$_POST['stock_fuel']."%' ";
            
        }
                //fuel end
                //vessel start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel'])) && trim($_POST['get_stock_vessel_name'])){
                    
                    $query.="AND ats_car_stock_vessel_name LIKE '%".$_POST['get_stock_vessel_name']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel'])) && trim($_POST['get_stock_vessel_name'])){
            
                $query.="reserved_status <> 'RESERVED' AND ats_car_stock_vessel_name LIKE '%".$_POST['get_stock_vessel_name']."%' ";
            
        }
                //vessel end
                //Voyage start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name'])) && trim($_POST['get_stock_voyage'])){
                    
                    $query.="AND ats_car_stock_voyage LIKE '%".$_POST['get_stock_voyage']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name'])) && trim($_POST['get_stock_voyage'])){
            
                $query.="reserved_status <> 'RESERVED' AND ats_car_stock_voyage LIKE '%".$_POST['get_stock_voyage']."%' ";
            
        }
                //Voyage end
                //BLNO start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage'])) && trim($_POST['get_stock_bl_no'])){
                    
                    $query.="AND ats_car_stock_bl_number LIKE '%".$_POST['get_stock_bl_no']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage'])) && trim($_POST['get_stock_bl_no'])){
            
                $query.=" reserved_status <> 'RESERVED' AND ats_car_stock_bl_number LIKE '%".$_POST['get_stock_bl_no']."%' ";
            
        }
        //buy date start
        if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && trim($_POST['get_stock_buying_date_from']) && trim($_POST['get_stock_buying_date_till']))
        {
            $val10=$_POST['get_stock_buying_date_from'];
            $val11=$_POST['get_stock_buying_date_till'];
            $val101= date("Y-m-d", strtotime($val10));
            $val102= date("Y-m-d", strtotime($val11));

            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_buying_date BETWEEN '$val101' AND '$val102' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no'])) && trim($_POST['get_stock_buying_date_from']) && trim($_POST['get_stock_buying_date_till']))
        {
            $val10=$_POST['get_stock_buying_date_from'];
            $val11=$_POST['get_stock_buying_date_till'];
            $val101= date("Y-m-d", strtotime($val10));
            $val102= date("Y-m-d", strtotime($val11));

            $query.="AND ats_car_stock_buying_date BETWEEN '$val101' AND '$val102' ";
        
        }
        //buy date end
        //reserve date
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && trim($_POST['get_stock_reserve_ok_date_from']) && trim($_POST['get_stock_reserve_ok_date_till']))
        {
            $val11=$_POST['get_stock_reserve_ok_date_from'];
            $val12=$_POST['get_stock_reserve_ok_date_till'];
            $val121= date("Y-m-d", strtotime($val11));
            $val122= date("Y-m-d", strtotime($val12));

            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_reserve_date BETWEEN '$val121' AND '$val122' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till'])) && trim($_POST['get_stock_reserve_ok_date_from']) && trim($_POST['get_stock_reserve_ok_date_till']))
        {
            $val11=$_POST['get_stock_reserve_ok_date_from'];
            $val12=$_POST['get_stock_reserve_ok_date_till'];
            $val121= date("Y-m-d", strtotime($val11));
            $val122= date("Y-m-d", strtotime($val12));
            $query.="AND ats_car_stock_reserve_date BETWEEN '$val121' AND '$val122' ";
        
        }
        //reserve date end
        //shipok date
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']))
        {
            $val13=$_POST['get_stock_ship_ok_date_from'];
            $val14=$_POST['get_stock_ship_ok_date_till'];
            $val131= date("Y-m-d", strtotime($val13));
            $val142= date("Y-m-d", strtotime($val14));

            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_ship_ok_date BETWEEN '$val131' AND '$val142' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till'])) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']))
        {
            $val13=$_POST['get_stock_ship_ok_date_from'];
    $val14=$_POST['get_stock_ship_ok_date_till'];
    $val131= date("Y-m-d", strtotime($val13));
    $val142= date("Y-m-d", strtotime($val14));
            $query.="AND ats_car_stock_ship_ok_date BETWEEN '$val131' AND '$val142' ";
        
        }
        //shipok end
        //relokdate
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {
            $val15=$_POST['get_stock_release_ok_date_from'];
            $val16=$_POST['get_stock_release_ok_date_till'];
            $val151= date("Y-m-d", strtotime($val15));
            $val162= date("Y-m-d", strtotime($val16));

            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_release_ok_date BETWEEN '$val151' AND '$val162' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till'])) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {
            $val15=$_POST['get_stock_release_ok_date_from'];
            $val16=$_POST['get_stock_release_ok_date_till'];
            $val151= date("Y-m-d", strtotime($val15));
            $val162= date("Y-m-d", strtotime($val16));
            $query.="AND ats_car_stock_release_ok_date BETWEEN '$val151' AND '$val162' ";
        
        }
        //inyarddate
        if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu']) && empty($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till']) && trim($_POST['get_stock_inyard_date_from']) && trim($_POST['get_stock_inyard_date_till']))
        {
            $val17=$_POST['get_stock_inyard_date_from'];
            $val18=$_POST['get_stock_inyard_date_till'];
            $val171= date("Y-m-d", strtotime($val17));
            $val182= date("Y-m-d", strtotime($val18));

            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_inyard_date BETWEEN '$val171' AND '$val182' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till'])) && trim($_POST['get_stock_inyard_date_from']) && trim($_POST['get_stock_inyard_date_till']))
        {
            $val17=$_POST['get_stock_inyard_date_from'];
            $val18=$_POST['get_stock_inyard_date_till'];
            $val171= date("Y-m-d", strtotime($val17));
            $val182= date("Y-m-d", strtotime($val18));
            $query.="AND ats_car_stock_inyard_date BETWEEN '$val171' AND '$val182' ";
        
        }
        //inyarddateend
        //sure ok date
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && trim($_POST['get_stock_sure_ok_date_from']) && trim($_POST['get_stock_sure_ok_date_till']))
        {
            $val19=$_POST['get_stock_sure_ok_date_from'];
            $val18=$_POST['get_stock_sure_ok_date_till'];
            $val191= date("Y-m-d", strtotime($val19));
            $val102= date("Y-m-d", strtotime($val18));

            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_sure_ok_date BETWEEN '$val191' AND '$val102' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till']) || trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till'])) && trim($_POST['get_stock_sure_ok_date_from']) && trim($_POST['get_stock_sure_ok_date_till']))
        {
            $val19=$_POST['get_stock_sure_ok_date_from'];
            $val18=$_POST['get_stock_sure_ok_date_till'];
            $val191= date("Y-m-d", strtotime($val19));
            $val102= date("Y-m-d", strtotime($val18));
            $query.="AND ats_car_stock_sure_ok_date BETWEEN '$val191' AND '$val102' ";
        
        }
        //sure ok date end
        //price dropdown
        if(trim($_POST['get_stock_buying_date']) && (empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {

            $val1=$_POST['get_stock_buying_date'];
        
        
            if($val1=="Yes")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_buying_price <>'' ";
            }
            elseif($val1=="No")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_buying_price = '' ";
            }
        
        }
        if(trim($_POST['get_stock_buying_date']) && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val1=$_POST['get_stock_buying_date'];
        
        
            if($val1=="Yes")
            {
            $query.="AND ats_car_stock_buying_price <>'' ";
            }
            elseif($val1=="No")
            {
            $query.="AND ats_car_stock_buying_price ='' ";
            }
        
        }
       
        //inyard dropdown
        if(trim($_POST['get_stock_inyard_date']) &&(empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {

            $val2=$_POST['get_stock_inyard_date'];
  
   
            if($val2=="Yes")
            {
                $query.="reserved_status <> 'RESERVED' AND ats_car_stock_inyard_date <>'' ";
            }
            elseif($val2=="No")
            {
                $query.="reserved_status <> 'RESERVED' AND ats_car_stock_inyard_date ='' ";
            }
           
            

        
        }
        if(trim($_POST['get_stock_inyard_date']) & trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val2=$_POST['get_stock_inyard_date'];
        
        
            if($val2=="Yes")
            {
            $query.="AND ats_car_stock_inyard_date <>'' ";
            }
            elseif($val2=="No")
            {
            $query.="AND ats_car_stock_inyard_date ='' ";
            }
        
        }
        //
        //relokdateend
        //reserve date
        if(trim($_POST['get_stock_reserve_date']) && (empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
            $val3=$_POST['get_stock_reserve_date'];
  
   
            if($val3=="Yes")
            {
            $query.=" reserved_status <> 'RESERVED' AND ats_car_stock_reserve_date <>'' ";
            }
            elseif($val3=="No")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_reserve_date ='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_reserve_date'])  && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val3=$_POST['get_stock_reserve_date'];
  
   
            if($val3=="Yes")
            {
            $query.="AND ats_car_stock_reserve_date <>'' ";
            }
            elseif($val3=="No")
            {
            $query.="AND ats_car_stock_reserve_date ='' ";
            }
           
        
        }
        //endreserve
        //sureokdate
        if( trim($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) &&  empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val4=$_POST['get_stock_sure_ok_date'];
  
   
            if($val4=="Yes")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_sure_ok_date<>'' ";
            }
            elseif($val4=="No")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_sure_ok_date	 ='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_sure_ok_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val4=$_POST['get_stock_sure_ok_date'];
  
   
            if($val4=="Yes")
            {
            $query.="AND ats_car_stock_sure_ok_date<>'' ";
            }
            elseif($val4=="No")
            {
            $query.="AND ats_car_stock_sure_ok_date  ='' ";
            }
           
        
        }
        //endsureok
        //shipok start
        if(trim($_POST['get_stock_ship_ok_date']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val5=$_POST['get_stock_ship_ok_date'];
  
   
            if($val5=="Yes")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_ship_ok_date<>'' ";
            }
            elseif($val5=="No")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_ship_ok_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_ship_ok_date']) && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val5=$_POST['get_stock_ship_ok_date'];
  
   
            if($val5=="Yes")
            {
            $query.="AND ats_car_stock_ship_ok_date<>'' ";
            }
            elseif($val5=="No")
            {
            $query.="AND ats_car_stock_ship_ok_date='' ";
            }
           
        
        }
        //shipok end
        //shporder
        if(trim($_POST['get_stock_shipping_order_file']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || empty($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val6=$_POST['get_stock_shipping_order_file'];
  

            if($val6=="Yes")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_ship_order_file<>'' ";
            }
            elseif($val6=="No")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_ship_order_file='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_shipping_order_file']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val6=$_POST['get_stock_shipping_order_file'];
  

            if($val6=="Yes")
            {
            $query.="AND ats_car_stock_ship_order_file<>'' ";
            }
            elseif($val6=="No")
            {
            $query.="AND ats_car_stock_ship_order_file='' ";
            }
           
        
        }
        //shporder
        //BL
        if(trim($_POST['get_stock_bl_date']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || empty($_POST['get_stock_shipping_order_file']) || empty($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val7=$_POST['get_stock_bl_date'];
  
   
            if($val7=="Yes")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_bl_date<>'' ";
            }
            elseif($val7=="No")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_bl_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_bl_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val7=$_POST['get_stock_bl_date'];
  
   
            if($val7=="Yes")
            {
            $query.="AND ats_car_stock_bl_date<>'' ";
            }
            elseif($val7=="No")
            {
            $query.="AND ats_car_stock_bl_date='' ";
            }
           
        
        }
        //Blend

        //releaseok
        if(trim($_POST['get_stock_release_ok_date']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val8=$_POST['get_stock_release_ok_date'];
  
   
            if($val8=="Yes")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_release_ok_date<>'' ";
            }
            elseif($val8=="No")
            {
            $query.="reserved_status <> 'RESERVED' AND ats_car_stock_release_ok_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_release_ok_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val8=$_POST['get_stock_release_ok_date'];
  
   
            if($val8=="Yes")
            {
            $query.="AND ats_car_stock_release_ok_date<>'' ";
            }
            elseif($val8=="No")
            {
            $query.="AND ats_car_stock_release_ok_date='' ";
            }
           
        
        }
        //releaseokend
        //release
      
        //releaseend
      



        /////////////      ALL CAR END   /////////////
          
            $queryca=mysqli_query($connection,$query);
}
/// ALL RESERVED START /////
if(trim($_POST['stock_all_agent']=="AllReserved")){ 
    $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND reservedpaymentstatus <> 'CONFIRMED' AND remaining_amount > 0 ");
    $projectsc = array();
    while($arrayuasc=mysqli_fetch_array($customer_sellc))
    {
        
    array_push($projectsc,$arrayuasc[0]);
    
    }
    
   
    

    $customeridrec =  "'" . implode ( "', '", $projectsc ) . "'";
    

    if(trim($_POST['get_stock_release_ok_date']) || trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || (trim ($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till'])))
    {
        
    $query="select * from ats_car_stock WHERE ats_car_stock_rec_no in ($customeridrec)  AND ";
    }
    else {
        $query="select * from ats_car_stock WHERE ats_car_stock_rec_no in ($customeridrec)";
    }
       //rec no start
            if(trim($_POST['get_stock_rec_no'])){
                $query.=" ats_car_stock_rec_no LIKE '%".$_POST['get_stock_rec_no']."%' ";
            }
            
          //rec no end
            //kobutsu start
            if(trim($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])){
                $query.="AND ats_car_stock_kobutsu LIKE '%".$_POST['get_stock_kobutsu']."%' ";
            }
          
            if(empty($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])){
                $query.=" AND ats_car_stock_kobutsu LIKE '%".$_POST['get_stock_kobutsu']."%' ";
            }
            //kobutsu end
            //chasis start
            if(trim($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_kobutsu']) && trim($_POST['get_stock_rec_no'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.=" AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            //chassis end
            //customer start
            if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty($_POST['get_stock_chassis_id']) && trim($_POST['get_stock_customer_name'])){
                $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
                    $projectsc = array();
                    while($arrayuasc=mysqli_fetch_array($customer_sellc))
                    {
                    array_push($projectsc,$arrayuasc[0]);
                    }
                    $customerid = "'" . implode ( "', '", $projectsc ) . "'";;
                    $query.=" ats_car_stock_rec_no in ($customerid) ";
                   
            }
            if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id'])) && trim($_POST['get_stock_customer_name'])){
                $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
                    $projectsc = array();
                    while($arrayuasc=mysqli_fetch_array($customer_sellc))
                    {
                    array_push($projectsc,$arrayuasc[0]);
                    }
                    $customerid = "'" . implode ( "', '", $projectsc ) . "'";;
                    $query.="AND ats_car_stock_rec_no in ($customerid) ";
                   
            }
            //customer ens
            //make start
            if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name'])) && trim($_POST['get_stock_make'])){
               
                    $query.="AND ats_car_stock_make LIKE '%".$_POST['get_stock_make']."%' ";
                   
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty  ($_POST['get_stock_customer_name'])) && trim($_POST['get_stock_make'])){
               
                $query.=" AND ats_car_stock_make LIKE '%".$_POST['get_stock_make']."%' ";
               
        }
        //make end
        //model start
        if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make'])) && trim($_POST['stock_model'])){
               
            $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
           
    }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make'])) && trim($_POST['stock_model'])){
            
                $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
            
        }
                //model end
                //shift start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model'])) && trim($_POST['get_stock_shift'])){
                    
                    $query.="AND ats_car_stock_shift LIKE '%".$_POST['get_stock_shift']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model'])) && trim($_POST['get_stock_shift'])){
            
                $query.=" AND ats_car_stock_shift LIKE '%".$_POST['get_stock_shift']."%' ";
            
        }
                //shift end
                //year start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift'])) && trim($_POST['get_stock_reg_year'])){
                    
                    $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift'])) && trim($_POST['get_stock_reg_year'])){
            
                $query.=" AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
            
        }
                //year end
                //color start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year'])) && trim($_POST['get_stock_color'])){
                    
                    $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                
                    }
                    if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year'])) && trim($_POST['get_stock_color'])){
                    
                        $query.=" AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                    
                        }
                //color end
                //fuel start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color'])) && trim($_POST['stock_fuel'])){
                    
                    $query.="AND ats_car_stock_fuel LIKE '%".$_POST['stock_fuel']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color'])) && trim($_POST['stock_fuel'])){
            
                $query.=" AND ats_car_stock_fuel LIKE '%".$_POST['stock_fuel']."%' ";
            
        }
                //fuel end
                //vessel start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel'])) && trim($_POST['get_stock_vessel_name'])){
                    
                    $query.="AND ats_car_stock_vessel_name LIKE '%".$_POST['get_stock_vessel_name']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel'])) && trim($_POST['get_stock_vessel_name'])){
            
                $query.=" AND ats_car_stock_vessel_name LIKE '%".$_POST['get_stock_vessel_name']."%' ";
            
        }
                //vessel end
                //Voyage start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name'])) && trim($_POST['get_stock_voyage'])){
                    
                    $query.="AND ats_car_stock_voyage LIKE '%".$_POST['get_stock_voyage']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name'])) && trim($_POST['get_stock_voyage'])){
            
                $query.=" AND ats_car_stock_voyage LIKE '%".$_POST['get_stock_voyage']."%' ";
            
        }
                //Voyage end
                //BLNO start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage'])) && trim($_POST['get_stock_bl_no'])){
                    
                    $query.="AND ats_car_stock_bl_number LIKE '%".$_POST['get_stock_bl_no']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage'])) && trim($_POST['get_stock_bl_no'])){
            
                $query.="  AND ats_car_stock_bl_number LIKE '%".$_POST['get_stock_bl_no']."%' ";
            
        }
        //buy date start
        if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && trim($_POST['get_stock_buying_date_from']) && trim($_POST['get_stock_buying_date_till']))
        {
            $val10=$_POST['get_stock_buying_date_from'];
            $val11=$_POST['get_stock_buying_date_till'];
            $val101= date("Y-m-d", strtotime($val10));
            $val102= date("Y-m-d", strtotime($val11));

            $query.=" AND ats_car_stock_buying_date BETWEEN '$val101' AND '$val102' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no'])) && trim($_POST['get_stock_buying_date_from']) && trim($_POST['get_stock_buying_date_till']))
        {
            $val10=$_POST['get_stock_buying_date_from'];
            $val11=$_POST['get_stock_buying_date_till'];
            $val101= date("Y-m-d", strtotime($val10));
            $val102= date("Y-m-d", strtotime($val11));

            $query.="AND ats_car_stock_buying_date BETWEEN '$val101' AND '$val102' ";
        
        }
        //buy date end
        //reserve date
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && trim($_POST['get_stock_reserve_ok_date_from']) && trim($_POST['get_stock_reserve_ok_date_till']))
        {
            $val11=$_POST['get_stock_reserve_ok_date_from'];
            $val12=$_POST['get_stock_reserve_ok_date_till'];
            $val121= date("Y-m-d", strtotime($val11));
            $val122= date("Y-m-d", strtotime($val12));

            $query.=" AND ats_car_stock_reserve_date BETWEEN '$val121' AND '$val122' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till'])) && trim($_POST['get_stock_reserve_ok_date_from']) && trim($_POST['get_stock_reserve_ok_date_till']))
        {
            $val11=$_POST['get_stock_reserve_ok_date_from'];
            $val12=$_POST['get_stock_reserve_ok_date_till'];
            $val121= date("Y-m-d", strtotime($val11));
            $val122= date("Y-m-d", strtotime($val12));
            $query.="AND ats_car_stock_reserve_date BETWEEN '$val121' AND '$val122' ";
        
        }
        //reserve date end
        //shipok date
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']))
        {
            $val13=$_POST['get_stock_ship_ok_date_from'];
            $val14=$_POST['get_stock_ship_ok_date_till'];
            $val131= date("Y-m-d", strtotime($val13));
            $val142= date("Y-m-d", strtotime($val14));

            $query.=" AND ats_car_stock_ship_ok_date BETWEEN '$val131' AND '$val142' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till'])) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']))
        {
            $val13=$_POST['get_stock_ship_ok_date_from'];
    $val14=$_POST['get_stock_ship_ok_date_till'];
    $val131= date("Y-m-d", strtotime($val13));
    $val142= date("Y-m-d", strtotime($val14));
            $query.="AND ats_car_stock_ship_ok_date BETWEEN '$val131' AND '$val142' ";
        
        }
        //shipok end
        //relokdate
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {
            $val15=$_POST['get_stock_release_ok_date_from'];
            $val16=$_POST['get_stock_release_ok_date_till'];
            $val151= date("Y-m-d", strtotime($val15));
            $val162= date("Y-m-d", strtotime($val16));

            $query.=" AND ats_car_stock_release_ok_date BETWEEN '$val151' AND '$val161' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till'])) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {
            $val15=$_POST['get_stock_release_ok_date_from'];
            $val16=$_POST['get_stock_release_ok_date_till'];
            $val151= date("Y-m-d", strtotime($val15));
            $val162= date("Y-m-d", strtotime($val16));
            $query.="AND ats_car_stock_release_ok_date BETWEEN '$val151' AND '$val161' ";
        
        }
          //inyarddate
          if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu']) && empty($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till']) && trim($_POST['get_stock_inyard_date_from']) && trim($_POST['get_stock_inyard_date_till']))
          {
              $val17=$_POST['get_stock_inyard_date_from'];
              $val18=$_POST['get_stock_inyard_date_till'];
              $val171= date("Y-m-d", strtotime($val17));
              $val182= date("Y-m-d", strtotime($val18));
  
              $query.=" ats_car_stock_inyard_date BETWEEN '$val171' AND '$val182' ";
          
          }
          if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till'])) && trim($_POST['get_stock_inyard_date_from']) && trim($_POST['get_stock_inyard_date_till']))
          {
              $val17=$_POST['get_stock_inyard_date_from'];
              $val18=$_POST['get_stock_inyard_date_till'];
              $val171= date("Y-m-d", strtotime($val17));
              $val182= date("Y-m-d", strtotime($val18));
              $query.="AND ats_car_stock_inyard_date BETWEEN '$val171' AND '$val182' ";
          
          }
          //inyarddateend
          //sure ok date
          if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && trim($_POST['get_stock_sure_ok_date_from']) && trim($_POST['get_stock_sure_ok_date_till']))
          {
              $val19=$_POST['get_stock_sure_ok_date_from'];
              $val18=$_POST['get_stock_sure_ok_date_till'];
              $val191= date("Y-m-d", strtotime($val19));
              $val102= date("Y-m-d", strtotime($val18));
  
              $query.=" ats_car_stock_sure_ok_date BETWEEN '$val191' AND '$val102' ";
          
          }
          if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till']) || trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till'])) && trim($_POST['get_stock_sure_ok_date_from']) && trim($_POST['get_stock_sure_ok_date_till']))
          {
              $val19=$_POST['get_stock_sure_ok_date_from'];
              $val18=$_POST['get_stock_sure_ok_date_till'];
              $val191= date("Y-m-d", strtotime($val19));
              $val102= date("Y-m-d", strtotime($val18));
              $query.="AND ats_car_stock_sure_ok_date BETWEEN '$val191' AND '$val102' ";
          
          }
          //sure ok date end
        //price dropdown
        if(trim($_POST['get_stock_buying_date']) && (empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {

            $val1=$_POST['get_stock_buying_date'];
        
        
            if($val1=="Yes")
            {
            $query.="ats_car_stock_buying_price <>'' ";
            }
            elseif($val1=="No")
            {
            $query.="ats_car_stock_buying_price = '' ";
            }
        
        }
        if(trim($_POST['get_stock_buying_date']) && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val1=$_POST['get_stock_buying_date'];
        
        
            if($val1=="Yes")
            {
            $query.="AND ats_car_stock_buying_price <>'' ";
            }
            elseif($val1=="No")
            {
            $query.="AND ats_car_stock_buying_price ='' ";
            }
        
        }
       
        //inyard dropdown
        if(trim($_POST['get_stock_inyard_date']) &&(empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {

            $val2=$_POST['get_stock_inyard_date'];
  
   
            if($val2=="Yes")
            {
                $query.="ats_car_stock_inyard_date <>'' ";
            }
            elseif($val2=="No")
            {
                $query.="ats_car_stock_inyard_date ='' ";
            }
           
            

        
        }
        if(trim($_POST['get_stock_inyard_date']) & trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val2=$_POST['get_stock_inyard_date'];
        
        
            if($val2=="Yes")
            {
            $query.="AND ats_car_stock_inyard_date <>'' ";
            }
            elseif($val2=="No")
            {
            $query.="AND ats_car_stock_inyard_date ='' ";
            }
        
        }
        //
        //relokdateend
        //reserve date
        if(trim($_POST['get_stock_reserve_date']) && (empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
            $val3=$_POST['get_stock_reserve_date'];
  
   
            if($val3=="Yes")
            {
            $query.=" ats_car_stock_reserve_date <>'' ";
            }
            elseif($val3=="No")
            {
            $query.="ats_car_stock_reserve_date ='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_reserve_date'])  && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val3=$_POST['get_stock_reserve_date'];
  
   
            if($val3=="Yes")
            {
            $query.="AND ats_car_stock_reserve_date <>'' ";
            }
            elseif($val3=="No")
            {
            $query.="AND ats_car_stock_reserve_date ='' ";
            }
           
        
        }
        //endreserve
        //sureokdate
        if( trim($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) &&  empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val4=$_POST['get_stock_sure_ok_date'];
  
   
            if($val4=="Yes")
            {
            $query.="ats_car_stock_sure_ok_date<>'' ";
            }
            elseif($val4=="No")
            {
            $query.="ats_car_stock_sure_ok_date	 ='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_sure_ok_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val4=$_POST['get_stock_sure_ok_date'];
  
   
            if($val4=="Yes")
            {
            $query.="AND ats_car_stock_sure_ok_date<>'' ";
            }
            elseif($val4=="No")
            {
            $query.="AND ats_car_stock_sure_ok_date  ='' ";
            }
           
        
        }
        //endsureok
        //shipok start
        if(trim($_POST['get_stock_ship_ok_date']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val5=$_POST['get_stock_ship_ok_date'];
  
   
            if($val5=="Yes")
            {
            $query.="ats_car_stock_ship_ok_date<>'' ";
            }
            elseif($val5=="No")
            {
            $query.="ats_car_stock_ship_ok_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_ship_ok_date']) && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val5=$_POST['get_stock_ship_ok_date'];
  
   
            if($val5=="Yes")
            {
            $query.="AND ats_car_stock_ship_ok_date<>'' ";
            }
            elseif($val5=="No")
            {
            $query.="AND ats_car_stock_ship_ok_date='' ";
            }
           
        
        }
        //shipok end
        //shporder
        if(trim($_POST['get_stock_shipping_order_file']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || empty($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val6=$_POST['get_stock_shipping_order_file'];
  

            if($val6=="Yes")
            {
            $query.="ats_car_stock_ship_order_file<>'' ";
            }
            elseif($val6=="No")
            {
            $query.="ats_car_stock_ship_order_file='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_shipping_order_file']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val6=$_POST['get_stock_shipping_order_file'];
  

            if($val6=="Yes")
            {
            $query.="AND ats_car_stock_ship_order_file<>'' ";
            }
            elseif($val6=="No")
            {
            $query.="AND ats_car_stock_ship_order_file='' ";
            }
           
        
        }
        //shporder
        //BL
        if(trim($_POST['get_stock_bl_date']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || empty($_POST['get_stock_shipping_order_file']) || empty($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val7=$_POST['get_stock_bl_date'];
  
   
            if($val7=="Yes")
            {
            $query.="ats_car_stock_bl_date<>'' ";
            }
            elseif($val7=="No")
            {
            $query.="ats_car_stock_bl_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_bl_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val7=$_POST['get_stock_bl_date'];
  
   
            if($val7=="Yes")
            {
            $query.="AND ats_car_stock_bl_date<>'' ";
            }
            elseif($val7=="No")
            {
            $query.="AND ats_car_stock_bl_date='' ";
            }
           
        
        }
        //Blend

        //releaseok
        if(trim($_POST['get_stock_release_ok_date']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val8=$_POST['get_stock_release_ok_date'];
  
   
            if($val8=="Yes")
            {
            $query.="ats_car_stock_release_ok_date<>'' ";
            }
            elseif($val8=="No")
            {
            $query.="ats_car_stock_release_ok_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_release_ok_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val8=$_POST['get_stock_release_ok_date'];
  
   
            if($val8=="Yes")
            {
            $query.="AND ats_car_stock_release_ok_date<>'' ";
            }
            elseif($val8=="No")
            {
            $query.="AND ats_car_stock_release_ok_date='' ";
            }
           
        
        }
        



        /////////////      RESERVED CAR END   /////////////
            $queryca=mysqli_query($connection,$query);
}
///// ALL SOLD START ///////
if(trim($_POST['stock_all_agent']=="AllSold")){
    $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND reservedpaymentstatus='CONFIRMED' AND remaining_amount > 0 ");
    $projectsc = array();
    while($arrayuasc=mysqli_fetch_array($customer_sellc))
    {
        
    array_push($projectsc,$arrayuasc[0]);
    
    }
    
   
    

    $customeridrec =  "'" . implode ( "', '", $projectsc ) . "'";
    

    if(trim($_POST['get_stock_release_ok_date']) || trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || (trim ($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till'])))
    {
       

    $query="select * from ats_car_stock WHERE ats_car_stock_rec_no in ($customeridrec)  AND ";
    }
    else {
        $query="select * from ats_car_stock WHERE ats_car_stock_rec_no in ($customeridrec)";
    }
       //rec no start
            if(trim($_POST['get_stock_rec_no'])){
                $query.=" AND ats_car_stock_rec_no LIKE '%".$_POST['get_stock_rec_no']."%' ";
            }
            
          //rec no end
            //kobutsu start
            if(trim($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])){
                $query.="AND ats_car_stock_kobutsu LIKE '%".$_POST['get_stock_kobutsu']."%' ";
            }
          
            if(empty($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])){
                $query.=" AND ats_car_stock_kobutsu LIKE '%".$_POST['get_stock_kobutsu']."%' ";
            }
            //kobutsu end
            //chasis start
            if(trim($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_kobutsu']) && trim($_POST['get_stock_rec_no'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.=" AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            //chassis end
            //customer start
            if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty($_POST['get_stock_chassis_id']) && trim($_POST['get_stock_customer_name'])){
                $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
                    $projectsc = array();
                    while($arrayuasc=mysqli_fetch_array($customer_sellc))
                    {
                    array_push($projectsc,$arrayuasc[0]);
                    }
                    $customerid = "'" . implode ( "', '", $projectsc ) . "'";;
                    $query.=" ats_car_stock_rec_no in ($customerid) ";
                   
            }
            if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id'])) && trim($_POST['get_stock_customer_name'])){
                $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
                    $projectsc = array();
                    while($arrayuasc=mysqli_fetch_array($customer_sellc))
                    {
                    array_push($projectsc,$arrayuasc[0]);
                    }
                    $customerid = "'" . implode ( "', '", $projectsc ) . "'";;
                    $query.="AND ats_car_stock_rec_no in ($customerid) ";
                   
            }
            //customer ens
            //make start
            if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name'])) && trim($_POST['get_stock_make'])){
               
                    $query.="AND ats_car_stock_make LIKE '%".$_POST['get_stock_make']."%' ";
                   
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty  ($_POST['get_stock_customer_name'])) && trim($_POST['get_stock_make'])){
               
                $query.=" AND ats_car_stock_make LIKE '%".$_POST['get_stock_make']."%' ";
               
        }
        //make end
        //model start
        if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make'])) && trim($_POST['stock_model'])){
               
            $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
           
    }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make'])) && trim($_POST['stock_model'])){
            
                $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
            
        }
                //model end
                //shift start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model'])) && trim($_POST['get_stock_shift'])){
                    
                    $query.="AND ats_car_stock_shift LIKE '%".$_POST['get_stock_shift']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model'])) && trim($_POST['get_stock_shift'])){
            
                $query.=" AND ats_car_stock_shift LIKE '%".$_POST['get_stock_shift']."%' ";
            
        }
                //shift end
                //year start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift'])) && trim($_POST['get_stock_reg_year'])){
                    
                    $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift'])) && trim($_POST['get_stock_reg_year'])){
            
                $query.=" AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
            
        }
                //year end
                //color start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year'])) && trim($_POST['get_stock_color'])){
                    
                    $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                
                    }
                    if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year'])) && trim($_POST['get_stock_color'])){
                    
                        $query.=" AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                    
                        }
                //color end
                //fuel start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color'])) && trim($_POST['stock_fuel'])){
                    
                    $query.="AND ats_car_stock_fuel LIKE '%".$_POST['stock_fuel']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color'])) && trim($_POST['stock_fuel'])){
            
                $query.=" AND ats_car_stock_fuel LIKE '%".$_POST['stock_fuel']."%' ";
            
        }
                //fuel end
                //vessel start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel'])) && trim($_POST['get_stock_vessel_name'])){
                    
                    $query.="AND ats_car_stock_vessel_name LIKE '%".$_POST['get_stock_vessel_name']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel'])) && trim($_POST['get_stock_vessel_name'])){
            
                $query.=" AND ats_car_stock_vessel_name LIKE '%".$_POST['get_stock_vessel_name']."%' ";
            
        }
                //vessel end
                //Voyage start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name'])) && trim($_POST['get_stock_voyage'])){
                    
                    $query.="AND ats_car_stock_voyage LIKE '%".$_POST['get_stock_voyage']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name'])) && trim($_POST['get_stock_voyage'])){
            
                $query.=" AND ats_car_stock_voyage LIKE '%".$_POST['get_stock_voyage']."%' ";
            
        }
                //Voyage end
                //BLNO start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage'])) && trim($_POST['get_stock_bl_no'])){
                    
                    $query.="AND ats_car_stock_bl_number LIKE '%".$_POST['get_stock_bl_no']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage'])) && trim($_POST['get_stock_bl_no'])){
            
                $query.="  AND ats_car_stock_bl_number LIKE '%".$_POST['get_stock_bl_no']."%' ";
            
        }
        //buy date start
        if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && trim($_POST['get_stock_buying_date_from']) && trim($_POST['get_stock_buying_date_till']))
        {
            $val10=$_POST['get_stock_buying_date_from'];
            $val11=$_POST['get_stock_buying_date_till'];
            $val101= date("Y-m-d", strtotime($val10));
            $val102= date("Y-m-d", strtotime($val11));

            $query.=" AND ats_car_stock_buying_date BETWEEN '$val101' AND '$val102' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no'])) && trim($_POST['get_stock_buying_date_from']) && trim($_POST['get_stock_buying_date_till']))
        {
            $val10=$_POST['get_stock_buying_date_from'];
            $val11=$_POST['get_stock_buying_date_till'];
            $val101= date("Y-m-d", strtotime($val10));
            $val102= date("Y-m-d", strtotime($val11));

            $query.="AND ats_car_stock_buying_date BETWEEN '$val101' AND '$val102' ";
        
        }
        //buy date end
        //reserve date
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && trim($_POST['get_stock_reserve_ok_date_from']) && trim($_POST['get_stock_reserve_ok_date_till']))
        {
            $val11=$_POST['get_stock_reserve_ok_date_from'];
            $val12=$_POST['get_stock_reserve_ok_date_till'];
            $val121= date("Y-m-d", strtotime($val11));
            $val122= date("Y-m-d", strtotime($val12));

            $query.=" AND ats_car_stock_reserve_date BETWEEN '$val121' AND '$val122' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till'])) && trim($_POST['get_stock_reserve_ok_date_from']) && trim($_POST['get_stock_reserve_ok_date_till']))
        {
            $val11=$_POST['get_stock_reserve_ok_date_from'];
            $val12=$_POST['get_stock_reserve_ok_date_till'];
            $val121= date("Y-m-d", strtotime($val11));
            $val122= date("Y-m-d", strtotime($val12));
            $query.="AND ats_car_stock_reserve_date BETWEEN '$val121' AND '$val122' ";
        
        }
        //reserve date end
        //shipok date
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']))
        {
            $val13=$_POST['get_stock_ship_ok_date_from'];
            $val14=$_POST['get_stock_ship_ok_date_till'];
            $val131= date("Y-m-d", strtotime($val13));
            $val142= date("Y-m-d", strtotime($val14));

            $query.=" AND ats_car_stock_ship_ok_date BETWEEN '$val131' AND '$val142' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till'])) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']))
        {
            $val13=$_POST['get_stock_ship_ok_date_from'];
    $val14=$_POST['get_stock_ship_ok_date_till'];
    $val131= date("Y-m-d", strtotime($val13));
    $val142= date("Y-m-d", strtotime($val14));
            $query.="AND ats_car_stock_ship_ok_date BETWEEN '$val131' AND '$val142' ";
        
        }
        //shipok end
        //relokdate
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {
            $val15=$_POST['get_stock_release_ok_date_from'];
            $val16=$_POST['get_stock_release_ok_date_till'];
            $val151= date("Y-m-d", strtotime($val15));
            $val162= date("Y-m-d", strtotime($val16));

            $query.=" AND ats_car_stock_release_ok_date BETWEEN '$val151' AND '$val161' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till'])) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {
            $val15=$_POST['get_stock_release_ok_date_from'];
            $val16=$_POST['get_stock_release_ok_date_till'];
            $val151= date("Y-m-d", strtotime($val15));
            $val162= date("Y-m-d", strtotime($val16));
            $query.="AND ats_car_stock_release_ok_date BETWEEN '$val151' AND '$val161' ";
        
        }
        if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu']) && empty($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till']) && trim($_POST['get_stock_inyard_date_from']) && trim($_POST['get_stock_inyard_date_till']))
        {
            $val17=$_POST['get_stock_inyard_date_from'];
            $val18=$_POST['get_stock_inyard_date_till'];
            $val171= date("Y-m-d", strtotime($val17));
            $val182= date("Y-m-d", strtotime($val18));

            $query.=" ats_car_stock_inyard_date BETWEEN '$val171' AND '$val182' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till'])) && trim($_POST['get_stock_inyard_date_from']) && trim($_POST['get_stock_inyard_date_till']))
        {
            $val17=$_POST['get_stock_inyard_date_from'];
            $val18=$_POST['get_stock_inyard_date_till'];
            $val171= date("Y-m-d", strtotime($val17));
            $val182= date("Y-m-d", strtotime($val18));
            $query.="AND ats_car_stock_inyard_date BETWEEN '$val171' AND '$val182' ";
        
        }
        //inyarddateend
        //sure ok date
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && trim($_POST['get_stock_sure_ok_date_from']) && trim($_POST['get_stock_sure_ok_date_till']))
        {
            $val19=$_POST['get_stock_sure_ok_date_from'];
            $val18=$_POST['get_stock_sure_ok_date_till'];
            $val191= date("Y-m-d", strtotime($val19));
            $val102= date("Y-m-d", strtotime($val18));

            $query.=" ats_car_stock_sure_ok_date BETWEEN '$val191' AND '$val102' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till']) || trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till'])) && trim($_POST['get_stock_sure_ok_date_from']) && trim($_POST['get_stock_sure_ok_date_till']))
        {
            $val19=$_POST['get_stock_sure_ok_date_from'];
            $val18=$_POST['get_stock_sure_ok_date_till'];
            $val191= date("Y-m-d", strtotime($val19));
            $val102= date("Y-m-d", strtotime($val18));
            $query.="AND ats_car_stock_sure_ok_date BETWEEN '$val191' AND '$val102' ";
        
        }
        //sure ok date end
        //price dropdown
        if(trim($_POST['get_stock_buying_date']) && (empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {

            $val1=$_POST['get_stock_buying_date'];
        
        
            if($val1=="Yes")
            {
            $query.="ats_car_stock_buying_price <>'' ";
            }
            elseif($val1=="No")
            {
            $query.="ats_car_stock_buying_price = '' ";
            }
        
        }
        if(trim($_POST['get_stock_buying_date']) && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val1=$_POST['get_stock_buying_date'];
        
        
            if($val1=="Yes")
            {
            $query.="AND ats_car_stock_buying_price <>'' ";
            }
            elseif($val1=="No")
            {
            $query.="AND ats_car_stock_buying_price ='' ";
            }
        
        }
       
        //inyard dropdown
        if(trim($_POST['get_stock_inyard_date']) &&(empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {

            $val2=$_POST['get_stock_inyard_date'];
  
   
            if($val2=="Yes")
            {
                $query.="ats_car_stock_inyard_date <>'' ";
            }
            elseif($val2=="No")
            {
                $query.="ats_car_stock_inyard_date ='' ";
            }
           
            

        
        }
        if(trim($_POST['get_stock_inyard_date']) & trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val2=$_POST['get_stock_inyard_date'];
        
        
            if($val2=="Yes")
            {
            $query.="AND ats_car_stock_inyard_date <>'' ";
            }
            elseif($val2=="No")
            {
            $query.="AND ats_car_stock_inyard_date ='' ";
            }
        
        }
        //
        //relokdateend
        //reserve date
        if(trim($_POST['get_stock_reserve_date']) && (empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
            $val3=$_POST['get_stock_reserve_date'];
  
   
            if($val3=="Yes")
            {
            $query.=" ats_car_stock_reserve_date <>'' ";
            }
            elseif($val3=="No")
            {
            $query.="ats_car_stock_reserve_date ='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_reserve_date'])  && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val3=$_POST['get_stock_reserve_date'];
  
   
            if($val3=="Yes")
            {
            $query.="AND ats_car_stock_reserve_date <>'' ";
            }
            elseif($val3=="No")
            {
            $query.="AND ats_car_stock_reserve_date ='' ";
            }
           
        
        }
        //endreserve
        //sureokdate
        if( trim($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) &&  empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val4=$_POST['get_stock_sure_ok_date'];
  
   
            if($val4=="Yes")
            {
            $query.="ats_car_stock_sure_ok_date<>'' ";
            }
            elseif($val4=="No")
            {
            $query.="ats_car_stock_sure_ok_date	 ='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_sure_ok_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val4=$_POST['get_stock_sure_ok_date'];
  
   
            if($val4=="Yes")
            {
            $query.="AND ats_car_stock_sure_ok_date<>'' ";
            }
            elseif($val4=="No")
            {
            $query.="AND ats_car_stock_sure_ok_date  ='' ";
            }
           
        
        }
        //endsureok
        //shipok start
        if(trim($_POST['get_stock_ship_ok_date']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val5=$_POST['get_stock_ship_ok_date'];
  
   
            if($val5=="Yes")
            {
            $query.="ats_car_stock_ship_ok_date<>'' ";
            }
            elseif($val5=="No")
            {
            $query.="ats_car_stock_ship_ok_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_ship_ok_date']) && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val5=$_POST['get_stock_ship_ok_date'];
  
   
            if($val5=="Yes")
            {
            $query.="AND ats_car_stock_ship_ok_date<>'' ";
            }
            elseif($val5=="No")
            {
            $query.="AND ats_car_stock_ship_ok_date='' ";
            }
           
        
        }
        //shipok end
        //shporder
        if(trim($_POST['get_stock_shipping_order_file']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || empty($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val6=$_POST['get_stock_shipping_order_file'];
  

            if($val6=="Yes")
            {
            $query.="ats_car_stock_ship_order_file<>'' ";
            }
            elseif($val6=="No")
            {
            $query.="ats_car_stock_ship_order_file='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_shipping_order_file']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val6=$_POST['get_stock_shipping_order_file'];
  

            if($val6=="Yes")
            {
            $query.="AND ats_car_stock_ship_order_file<>'' ";
            }
            elseif($val6=="No")
            {
            $query.="AND ats_car_stock_ship_order_file='' ";
            }
           
        
        }
        //shporder
        //BL
        if(trim($_POST['get_stock_bl_date']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || empty($_POST['get_stock_shipping_order_file']) || empty($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val7=$_POST['get_stock_bl_date'];
  
   
            if($val7=="Yes")
            {
            $query.="ats_car_stock_bl_date<>'' ";
            }
            elseif($val7=="No")
            {
            $query.="ats_car_stock_bl_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_bl_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val7=$_POST['get_stock_bl_date'];
  
   
            if($val7=="Yes")
            {
            $query.="AND ats_car_stock_bl_date<>'' ";
            }
            elseif($val7=="No")
            {
            $query.="AND ats_car_stock_bl_date='' ";
            }
           
        
        }
        //Blend

        //releaseok
        if(trim($_POST['get_stock_release_ok_date']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val8=$_POST['get_stock_release_ok_date'];
  
   
            if($val8=="Yes")
            {
            $query.="ats_car_stock_release_ok_date<>'' ";
            }
            elseif($val8=="No")
            {
            $query.="ats_car_stock_release_ok_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_release_ok_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val8=$_POST['get_stock_release_ok_date'];
  
   
            if($val8=="Yes")
            {
            $query.="AND ats_car_stock_release_ok_date<>'' ";
            }
            elseif($val8=="No")
            {
            $query.="AND ats_car_stock_release_ok_date='' ";
            }
           
        
        }



        /////////////      ALL CAR END   /////////////
            $queryca=mysqli_query($connection,$query);
}
if(trim($_POST['stock_all_agent']=="AllPaid")){
    $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND reservedpaymentstatus='CONFIRMED' AND remaining_amount <= 0 ");
    $projectsc = array();
    while($arrayuasc=mysqli_fetch_array($customer_sellc))
    {
        
    array_push($projectsc,$arrayuasc[0]);
    
    }
    
   
    

    $customeridrec =  "'" . implode ( "', '", $projectsc ) . "'";
    

    if(trim($_POST['get_stock_release_ok_date']) || trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || (trim ($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till'])))
    {
      
    $query="select * from ats_car_stock WHERE ats_car_stock_rec_no in ($customeridrec)  AND ";
    }
    else {
        $query="select * from ats_car_stock WHERE ats_car_stock_rec_no in ($customeridrec)";
    }
       //rec no start
            if(trim($_POST['get_stock_rec_no'])){
                $query.=" AND ats_car_stock_rec_no LIKE '%".$_POST['get_stock_rec_no']."%' ";
            }
            
          //rec no end
            //kobutsu start
            if(trim($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])){
                $query.="AND ats_car_stock_kobutsu LIKE '%".$_POST['get_stock_kobutsu']."%' ";
            }
          
            if(empty($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])){
                $query.=" AND ats_car_stock_kobutsu LIKE '%".$_POST['get_stock_kobutsu']."%' ";
            }
            //kobutsu end
            //chasis start
            if(trim($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_rec_no']) && trim($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_kobutsu']) && trim($_POST['get_stock_rec_no'])  && trim($_POST['get_stock_chassis_id'])){
                $query.="AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && trim($_POST['get_stock_chassis_id'])){
                $query.=" AND ats_car_stock_chassic_no LIKE '%".$_POST['get_stock_chassis_id']."%' ";
            }
            //chassis end
            //customer start
            if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty($_POST['get_stock_chassis_id']) && trim($_POST['get_stock_customer_name'])){
                $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
                    $projectsc = array();
                    while($arrayuasc=mysqli_fetch_array($customer_sellc))
                    {
                    array_push($projectsc,$arrayuasc[0]);
                    }
                    $customerid = "'" . implode ( "', '", $projectsc ) . "'";;
                    $query.=" ats_car_stock_rec_no in ($customerid) ";
                   
            }
            if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id'])) && trim($_POST['get_stock_customer_name'])){
                $customer_sellc=mysqli_query($connection,"select recordno from ats_stock_reservation where agent_name='".$_POST['stock_agent_name']."' AND customer='".$_POST['get_stock_customer_name']."'");
                    $projectsc = array();
                    while($arrayuasc=mysqli_fetch_array($customer_sellc))
                    {
                    array_push($projectsc,$arrayuasc[0]);
                    }
                    $customerid = "'" . implode ( "', '", $projectsc ) . "'";;
                    $query.="AND ats_car_stock_rec_no in ($customerid) ";
                   
            }
            //customer ens
            //make start
            if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name'])) && trim($_POST['get_stock_make'])){
               
                    $query.="AND ats_car_stock_make LIKE '%".$_POST['get_stock_make']."%' ";
                   
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty  ($_POST['get_stock_customer_name'])) && trim($_POST['get_stock_make'])){
               
                $query.=" AND ats_car_stock_make LIKE '%".$_POST['get_stock_make']."%' ";
               
        }
        //make end
        //model start
        if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make'])) && trim($_POST['stock_model'])){
               
            $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
           
    }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make'])) && trim($_POST['stock_model'])){
            
                $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
            
        }
                //model end
                //shift start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model'])) && trim($_POST['get_stock_shift'])){
                    
                    $query.="AND ats_car_stock_shift LIKE '%".$_POST['get_stock_shift']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model'])) && trim($_POST['get_stock_shift'])){
            
                $query.=" AND ats_car_stock_shift LIKE '%".$_POST['get_stock_shift']."%' ";
            
        }
                //shift end
                //year start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift'])) && trim($_POST['get_stock_reg_year'])){
                    
                    $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift'])) && trim($_POST['get_stock_reg_year'])){
            
                $query.=" AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
            
        }
                //year end
                //color start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year'])) && trim($_POST['get_stock_color'])){
                    
                    $query.="AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                
                    }
                    if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year'])) && trim($_POST['get_stock_color'])){
                    
                        $query.=" AND ats_car_stock_model LIKE '%".$_POST['stock_model']."%' ";
                    
                        }
                //color end
                //fuel start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color'])) && trim($_POST['stock_fuel'])){
                    
                    $query.="AND ats_car_stock_fuel LIKE '%".$_POST['stock_fuel']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color'])) && trim($_POST['stock_fuel'])){
            
                $query.=" AND ats_car_stock_fuel LIKE '%".$_POST['stock_fuel']."%' ";
            
        }
                //fuel end
                //vessel start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel'])) && trim($_POST['get_stock_vessel_name'])){
                    
                    $query.="AND ats_car_stock_vessel_name LIKE '%".$_POST['get_stock_vessel_name']."%' ";
                
            }
            if((empty  ($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel'])) && trim($_POST['get_stock_vessel_name'])){
            
                $query.=" AND ats_car_stock_vessel_name LIKE '%".$_POST['get_stock_vessel_name']."%' ";
            
        }
                //vessel end
                //Voyage start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name'])) && trim($_POST['get_stock_voyage'])){
                    
                    $query.="AND ats_car_stock_voyage LIKE '%".$_POST['get_stock_voyage']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name'])) && trim($_POST['get_stock_voyage'])){
            
                $query.=" AND ats_car_stock_voyage LIKE '%".$_POST['get_stock_voyage']."%' ";
            
        }
                //Voyage end
                //BLNO start
                if((trim($_POST['get_stock_rec_no']) || trim($_POST['get_stock_kobutsu'])  || trim($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage'])) && trim($_POST['get_stock_bl_no'])){
                    
                    $query.="AND ats_car_stock_bl_number LIKE '%".$_POST['get_stock_bl_no']."%' ";
                
            }
            if((empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage'])) && trim($_POST['get_stock_bl_no'])){
            
                $query.="  AND ats_car_stock_bl_number LIKE '%".$_POST['get_stock_bl_no']."%' ";
            
        }
        //buy date start
        if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && trim($_POST['get_stock_buying_date_from']) && trim($_POST['get_stock_buying_date_till']))
        {
            $val10=$_POST['get_stock_buying_date_from'];
            $val11=$_POST['get_stock_buying_date_till'];
            $val101= date("Y-m-d", strtotime($val10));
            $val102= date("Y-m-d", strtotime($val11));

            $query.=" AND ats_car_stock_buying_date BETWEEN '$val101' AND '$val102' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no'])) && trim($_POST['get_stock_buying_date_from']) && trim($_POST['get_stock_buying_date_till']))
        {
            $val10=$_POST['get_stock_buying_date_from'];
            $val11=$_POST['get_stock_buying_date_till'];
            $val101= date("Y-m-d", strtotime($val10));
            $val102= date("Y-m-d", strtotime($val11));

            $query.="AND ats_car_stock_buying_date BETWEEN '$val101' AND '$val102' ";
        
        }
        //buy date end
        //reserve date
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && trim($_POST['get_stock_reserve_ok_date_from']) && trim($_POST['get_stock_reserve_ok_date_till']))
        {
            $val11=$_POST['get_stock_reserve_ok_date_from'];
            $val12=$_POST['get_stock_reserve_ok_date_till'];
            $val121= date("Y-m-d", strtotime($val11));
            $val122= date("Y-m-d", strtotime($val12));

            $query.=" AND ats_car_stock_reserve_date BETWEEN '$val121' AND '$val122' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till'])) && trim($_POST['get_stock_reserve_ok_date_from']) && trim($_POST['get_stock_reserve_ok_date_till']))
        {
            $val11=$_POST['get_stock_reserve_ok_date_from'];
            $val12=$_POST['get_stock_reserve_ok_date_till'];
            $val121= date("Y-m-d", strtotime($val11));
            $val122= date("Y-m-d", strtotime($val12));
            $query.="AND ats_car_stock_reserve_date BETWEEN '$val121' AND '$val122' ";
        
        }
        //reserve date end
        //shipok date
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']))
        {
            $val13=$_POST['get_stock_ship_ok_date_from'];
            $val14=$_POST['get_stock_ship_ok_date_till'];
            $val131= date("Y-m-d", strtotime($val13));
            $val142= date("Y-m-d", strtotime($val14));

            $query.=" AND ats_car_stock_ship_ok_date BETWEEN '$val131' AND '$val142' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till'])) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']))
        {
            $val13=$_POST['get_stock_ship_ok_date_from'];
    $val14=$_POST['get_stock_ship_ok_date_till'];
    $val131= date("Y-m-d", strtotime($val13));
    $val142= date("Y-m-d", strtotime($val14));
            $query.="AND ats_car_stock_ship_ok_date BETWEEN '$val131' AND '$val142' ";
        
        }
        //shipok end
        //relokdate
        if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && trim($_POST['get_stock_ship_ok_date_from']) && trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {
            $val15=$_POST['get_stock_release_ok_date_from'];
            $val16=$_POST['get_stock_release_ok_date_till'];
            $val151= date("Y-m-d", strtotime($val15));
            $val162= date("Y-m-d", strtotime($val16));

            $query.=" AND ats_car_stock_release_ok_date BETWEEN '$val151' AND '$val161' ";
        
        }
        if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till'])) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {
            $val15=$_POST['get_stock_release_ok_date_from'];
            $val16=$_POST['get_stock_release_ok_date_till'];
            $val151= date("Y-m-d", strtotime($val15));
            $val162= date("Y-m-d", strtotime($val16));
            $query.="AND ats_car_stock_release_ok_date BETWEEN '$val151' AND '$val161' ";
        
        }
         //inyarddate
         if(empty($_POST['get_stock_rec_no']) && empty($_POST['get_stock_kobutsu']) && empty($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till']) && trim($_POST['get_stock_inyard_date_from']) && trim($_POST['get_stock_inyard_date_till']))
         {
             $val17=$_POST['get_stock_inyard_date_from'];
             $val18=$_POST['get_stock_inyard_date_till'];
             $val171= date("Y-m-d", strtotime($val17));
             $val182= date("Y-m-d", strtotime($val18));
 
             $query.=" ats_car_stock_inyard_date BETWEEN '$val171' AND '$val182' ";
         
         }
         if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till'])) && trim($_POST['get_stock_inyard_date_from']) && trim($_POST['get_stock_inyard_date_till']))
         {
             $val17=$_POST['get_stock_inyard_date_from'];
             $val18=$_POST['get_stock_inyard_date_till'];
             $val171= date("Y-m-d", strtotime($val17));
             $val182= date("Y-m-d", strtotime($val18));
             $query.="AND ats_car_stock_inyard_date BETWEEN '$val171' AND '$val182' ";
         
         }
          //sure ok date
          if(empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && trim($_POST['get_stock_sure_ok_date_from']) && trim($_POST['get_stock_sure_ok_date_till']))
          {
              $val19=$_POST['get_stock_sure_ok_date_from'];
              $val18=$_POST['get_stock_sure_ok_date_till'];
              $val191= date("Y-m-d", strtotime($val19));
              $val102= date("Y-m-d", strtotime($val18));
  
              $query.=" ats_car_stock_sure_ok_date BETWEEN '$val191' AND '$val102' ";
          
          }
          if((trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) || trim($_POST['get_stock_release_ok_date_from']) || trim($_POST['get_stock_release_ok_date_till']) || trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till'])) && trim($_POST['get_stock_sure_ok_date_from']) && trim($_POST['get_stock_sure_ok_date_till']))
          {
              $val19=$_POST['get_stock_sure_ok_date_from'];
              $val18=$_POST['get_stock_sure_ok_date_till'];
              $val191= date("Y-m-d", strtotime($val19));
              $val102= date("Y-m-d", strtotime($val18));
              $query.="AND ats_car_stock_sure_ok_date BETWEEN '$val191' AND '$val102' ";
          
          }
        //sure ok date end
        //price dropdown
        if(trim($_POST['get_stock_buying_date']) && (empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {

            $val1=$_POST['get_stock_buying_date'];
        
        
            if($val1=="Yes")
            {
            $query.="ats_car_stock_buying_price <>'' ";
            }
            elseif($val1=="No")
            {
            $query.="ats_car_stock_buying_price = '' ";
            }
        
        }
        if(trim($_POST['get_stock_buying_date']) && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val1=$_POST['get_stock_buying_date'];
        
        
            if($val1=="Yes")
            {
            $query.="AND ats_car_stock_buying_price <>'' ";
            }
            elseif($val1=="No")
            {
            $query.="AND ats_car_stock_buying_price ='' ";
            }
        
        }
       
        //inyard dropdown
        if(trim($_POST['get_stock_inyard_date']) &&(empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {

            $val2=$_POST['get_stock_inyard_date'];
  
   
            if($val2=="Yes")
            {
                $query.="ats_car_stock_inyard_date <>'' ";
            }
            elseif($val2=="No")
            {
                $query.="ats_car_stock_inyard_date ='' ";
            }
           
            

        
        }
        if(trim($_POST['get_stock_inyard_date']) & trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val2=$_POST['get_stock_inyard_date'];
        
        
            if($val2=="Yes")
            {
            $query.="AND ats_car_stock_inyard_date <>'' ";
            }
            elseif($val2=="No")
            {
            $query.="AND ats_car_stock_inyard_date ='' ";
            }
        
        }
        //
        //relokdateend
        //reserve date
        if(trim($_POST['get_stock_reserve_date']) && (empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
            $val3=$_POST['get_stock_reserve_date'];
  
   
            if($val3=="Yes")
            {
            $query.=" ats_car_stock_reserve_date <>'' ";
            }
            elseif($val3=="No")
            {
            $query.="ats_car_stock_reserve_date ='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_reserve_date'])  && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val3=$_POST['get_stock_reserve_date'];
  
   
            if($val3=="Yes")
            {
            $query.="AND ats_car_stock_reserve_date <>'' ";
            }
            elseif($val3=="No")
            {
            $query.="AND ats_car_stock_reserve_date ='' ";
            }
           
        
        }
        //endreserve
        //sureokdate
        if( trim($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) &&  empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val4=$_POST['get_stock_sure_ok_date'];
  
   
            if($val4=="Yes")
            {
            $query.="ats_car_stock_sure_ok_date<>'' ";
            }
            elseif($val4=="No")
            {
            $query.="ats_car_stock_sure_ok_date	 ='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_sure_ok_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val4=$_POST['get_stock_sure_ok_date'];
  
   
            if($val4=="Yes")
            {
            $query.="AND ats_car_stock_sure_ok_date<>'' ";
            }
            elseif($val4=="No")
            {
            $query.="AND ats_car_stock_sure_ok_date  ='' ";
            }
           
        
        }
        //endsureok
        //shipok start
        if(trim($_POST['get_stock_ship_ok_date']) && empty($_POST['get_stock_inyard_date_from']) && empty($_POST['get_stock_inyard_date_till']) && empty($_POST['get_stock_sure_ok_date_from']) && empty($_POST['get_stock_sure_ok_date_till']) && empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val5=$_POST['get_stock_ship_ok_date'];
  
   
            if($val5=="Yes")
            {
            $query.="ats_car_stock_ship_ok_date<>'' ";
            }
            elseif($val5=="No")
            {
            $query.="ats_car_stock_ship_ok_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_ship_ok_date']) && trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val5=$_POST['get_stock_ship_ok_date'];
  
   
            if($val5=="Yes")
            {
            $query.="AND ats_car_stock_ship_ok_date<>'' ";
            }
            elseif($val5=="No")
            {
            $query.="AND ats_car_stock_ship_ok_date='' ";
            }
           
        
        }
        //shipok end
        //shporder
        if(trim($_POST['get_stock_shipping_order_file']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || empty($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val6=$_POST['get_stock_shipping_order_file'];
  

            if($val6=="Yes")
            {
            $query.="ats_car_stock_ship_order_file<>'' ";
            }
            elseif($val6=="No")
            {
            $query.="ats_car_stock_ship_order_file='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_shipping_order_file']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val6=$_POST['get_stock_shipping_order_file'];
  

            if($val6=="Yes")
            {
            $query.="AND ats_car_stock_ship_order_file<>'' ";
            }
            elseif($val6=="No")
            {
            $query.="AND ats_car_stock_ship_order_file='' ";
            }
           
        
        }
        //shporder
        //BL
        if(trim($_POST['get_stock_bl_date']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || empty($_POST['get_stock_shipping_order_file']) || empty($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val7=$_POST['get_stock_bl_date'];
  
   
            if($val7=="Yes")
            {
            $query.="ats_car_stock_bl_date<>'' ";
            }
            elseif($val7=="No")
            {
            $query.="ats_car_stock_bl_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_bl_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val7=$_POST['get_stock_bl_date'];
  
   
            if($val7=="Yes")
            {
            $query.="AND ats_car_stock_bl_date<>'' ";
            }
            elseif($val7=="No")
            {
            $query.="AND ats_car_stock_bl_date='' ";
            }
           
        
        }
        //Blend

        //releaseok
        if(trim($_POST['get_stock_release_ok_date']) && empty($_POST['get_stock_inyard_date_from']) || empty($_POST['get_stock_inyard_date_till']) || empty($_POST['get_stock_sure_ok_date_from']) || empty($_POST['get_stock_sure_ok_date_till']) || trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || empty($_POST['get_stock_sure_ok_date']) && empty($_POST['get_stock_reserve_date']) && (empty ($_POST['get_stock_inyard_date']) && empty($_POST['get_stock_buying_date']) && empty($_POST['get_stock_rec_no']) && empty  ($_POST['get_stock_kobutsu'])  && empty  ($_POST['get_stock_chassis_id']) && empty($_POST['get_stock_customer_name']) && empty($_POST['get_stock_make']) && empty($_POST['stock_model']) && empty($_POST['get_stock_shift']) && empty($_POST['get_stock_reg_year']) && empty($_POST['get_stock_color']) && empty($_POST['stock_fuel']) && empty($_POST['get_stock_vessel_name']) && empty($_POST['get_stock_voyage']) && empty($_POST['get_stock_bl_no']) && empty($_POST['get_stock_buying_date_from']) && empty($_POST['get_stock_buying_date_till']) && empty($_POST['get_stock_reserve_ok_date_from']) && empty($_POST['get_stock_reserve_ok_date_till']) && empty($_POST['get_stock_ship_ok_date_from']) && empty($_POST['get_stock_ship_ok_date_till']) && empty($_POST['get_stock_release_ok_date_from']) && empty($_POST['get_stock_release_ok_date_till'])))
        {
           
            $val8=$_POST['get_stock_release_ok_date'];
  
   
            if($val8=="Yes")
            {
            $query.="ats_car_stock_release_ok_date<>'' ";
            }
            elseif($val8=="No")
            {
            $query.="ats_car_stock_release_ok_date='' ";
            }
           

        
        }
        if(trim($_POST['get_stock_release_ok_date']) &&  trim($_POST['get_stock_inyard_date_from']) || trim($_POST['get_stock_inyard_date_till']) || trim($_POST['get_stock_sure_ok_date_from']) || trim($_POST['get_stock_sure_ok_date_till']) ||  trim($_POST['get_stock_bl_date']) || trim($_POST['get_stock_shipping_order_file']) || trim($_POST['get_stock_ship_ok_date']) || trim($_POST['get_stock_sure_ok_date']) || trim($_POST['get_stock_reserve_date']) || trim($_POST['get_stock_inyard_date']) || trim($_POST['get_stock_buying_date']) || trim($_POST['get_stock_rec_no']) || trim  ($_POST['get_stock_kobutsu'])  || trim  ($_POST['get_stock_chassis_id']) || trim($_POST['get_stock_customer_name']) || trim($_POST['get_stock_make']) || trim($_POST['stock_model']) || trim($_POST['get_stock_shift']) || trim($_POST['get_stock_reg_year']) || trim($_POST['get_stock_color']) || trim($_POST['stock_fuel']) || trim($_POST['get_stock_vessel_name']) || trim($_POST['get_stock_voyage']) || trim($_POST['get_stock_bl_no']) || trim($_POST['get_stock_buying_date_from']) || trim($_POST['get_stock_buying_date_till']) || trim($_POST['get_stock_reserve_ok_date_from']) || trim($_POST['get_stock_reserve_ok_date_till']) || trim($_POST['get_stock_ship_ok_date_from']) || trim($_POST['get_stock_ship_ok_date_till']) && trim($_POST['get_stock_release_ok_date_from']) && trim($_POST['get_stock_release_ok_date_till']))
        {

            $val8=$_POST['get_stock_release_ok_date'];
  
   
            if($val8=="Yes")
            {
            $query.="AND ats_car_stock_release_ok_date<>'' ";
            }
            elseif($val8=="No")
            {
            $query.="AND ats_car_stock_release_ok_date='' ";
            }
           
        
        }
        /////////////      ALL SOLD CAR END   /////////////
          
            $queryca=mysqli_query($connection,$query);
}
echo $query;
}

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