<?php
include("top.php");
include("connection_db.php");
$queryupdate=mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_id ='".$_GET['car_id']."'");
$rowupdate=mysqli_fetch_row($queryupdate);
if (isset($_POST["stock_btn"])) {
    $stock_rec_no = $_POST["stock_rec_no"];
    $stock_chassis_id = $_POST["stock_chassis_id"];
    $stock_make = $_POST["stock_make"];
    $stock_model = $_POST["stock_model"];
    $stock_package = $_POST["stock_package"];
    $stock_man_year = $_POST["stock_man_year"];
    $stock_reg_year = $_POST["stock_reg_year"];
    $stock_color = $_POST["stock_color"];
    $stock_shift = $_POST["stock_shift"];
    $stock_fuel = $_POST["stock_fuel"];
    $stock_door = $_POST["stock_door"];
    $stock_grade = $_POST["stock_grade"];
    $stock_engine_size = $_POST["stock_engine_size"];
    $stock_kobutsu = $_POST["stock_kobutsu"];
    $stock_engine_no = $_POST["stock_engine_no"];
    $stock_seats = $_POST["stock_seats"];
    $stock_mileage_1 = $_POST["stock_mileage_1"];
    $stock_mileage_2 = $_POST["stock_mileage_2"];
    $stock_length = $_POST["stock_length"];
    $stock_width = $_POST["stock_width"];
    $stock_height = $_POST["stock_height"];
    $stock_cubic_meter = $_POST["stock_cubic_meter"];
    $stock_weight = $_POST["stock_weight"];
    $stock_total_weight = $_POST["stock_total_weight"];
    $stock_max_loading = $_POST["stock_max_loading"];
    $stock_auction = $_POST["stock_auction"];
    $stock_lot_no = $_POST["stock_lot_no"];
    $stock_buying_price = $_POST["stock_buying_price"];
    $stock_buying_date = $_POST["stock_buying_date"];
    $stock_country_location = $_POST["stock_country_location"];
    $stock_city_location = $_POST["stock_city_location"];
    $stock_option_ps = isset($_POST['stock_option_ps']) ? $_POST['stock_option_ps'] : "";
    $stock_option_nv = isset($_POST['stock_option_nv']) ? $_POST['stock_option_nv'] : "";
    $stock_option_ac = isset($_POST['stock_option_ac']) ? $_POST['stock_option_ac'] : "";
    $stock_option_wab = isset($_POST['stock_option_wab']) ? $_POST['stock_option_wab'] : "";
    $stock_option_rs = isset($_POST['stock_option_rs']) ? $_POST['stock_option_rs'] : "";
    $stock_option_tv = isset($_POST['stock_option_tv']) ? $_POST['stock_option_tv'] : "";
    $stock_option_rr = isset($_POST['stock_option_rr']) ? $_POST['stock_option_rr'] : "";
    $stock_option_abs = isset($_POST['stock_option_abs']) ? $_POST['stock_option_abs'] : "";
    $stock_option_ls = isset($_POST['stock_option_ls']) ? $_POST['stock_option_ls'] : "";
    $stock_option_pw = isset($_POST['stock_option_pw']) ? $_POST['stock_option_pw'] : "";
    $stock_option_sr = isset($_POST['stock_option_sr']) ? $_POST['stock_option_sr'] : "";
    $stock_option_fog = isset($_POST['stock_option_fog']) ? $_POST['stock_option_fog'] : "";
    $stock_option_ab = isset($_POST['stock_option_ab']) ? $_POST['stock_option_ab'] : "";
    $stock_option_gg = isset($_POST['stock_option_gg']) ? $_POST['stock_option_gg'] : "";
    $stock_option_bt = isset($_POST['stock_option_bt']) ? $_POST['stock_option_bt'] : "";
    $stock_option_aw = isset($_POST['stock_option_aw']) ? $_POST['stock_option_aw'] : "";
    $stock_other_options = $_POST["stock_other_options"];
    $stock_buying_price_print = $_POST["stock_buying_price"];
    $stock_radiation_charges = $_POST["stock_radiation"];
    $stock_auction_charges = $_POST["stock_auction_charges"];
    $stock_rikuso_charges = $_POST["stock_rikuso_charges"];
    $stock_fob_charges = $_POST["stock_fob_charges"];
    $stock_storage_charges = $_POST["stock_storage_charges"];
    $stock_dhl_charges = $_POST["stock_dhl_charges"];
    $stock_thc_charges = $_POST["stock_thc_charges"];
    $stock_vainning_charges = $_POST["stock_vainning_charges"];
    $stock_inspection_charges = $_POST["stock_inspection_charges"];
    $stock_freight_charges = $_POST["stock_freight_charges"];
    $stock_other_charges = $_POST["stock_other_charges"];
    $stock_profit = '0';
    $stock_discount_print = "ass";
    $stock_total_profit_print = "ada";
    $stock_your_profit_print = "09";
    $stock_ats_profit_print = "9";
    $stock_fob_price_print_yen =  $_POST["stock_fob_price_print_yen"];
    $stock_cnf_price_print_yen = $_POST["stock_cnf_price_print_yen"];
    $stock_fob_price_print_dollar = $_POST["stock_fob_price_print_dollar"];
    $stock_cnf_price_print_dollar =  $_POST["stock_cnf_price_print_dollar"];
    $stock_buying_date_print = "9";
    $stock_shape=$_POST['stock_shape'];
    $stock_port=$_POST['stock_kobutsu_port'];
    $shipmenttype=$_POST['lr'];
    $conversionrate=$_POST['stock_con_rate'];
    $stock_type=$_POST['stock_type'];
    $stock_country_slab=$_POST['stock_country_slab'];
    $stock_total_expences=$_POST['stock_total_expences'];
    $stock_auction_sheet_file = $_FILES["stock_auction_sheet_file"]['name'];
   
     
   
if(is_uploaded_file($_FILES['stock_auction_sheet_file']['tmp_name'])){
    
    
   
    $filename = $_FILES['stock_auction_sheet_file']['name'];
    $filenamef=$stock_rec_no.$filename;
    // Upload files and store in database
    if(move_uploaded_file($_FILES["stock_auction_sheet_file"]["tmp_name"],'DATA/'.$filenamef)){               
        $echoas=",ats_car_stock_auction_sheet='$filenamef',";
        }
    }
    else
    {
    $echoas=",";
    }    
    //$temp_name = $_FILES["stock_auction_sheet_file"]["tmp_name"];
    $temp_name ='demo';
    //$stock_auction_pictures = $_FILES["stock_auction_pictures"]['name'];
    $stock_auction_pictures = 'demo';
    //$temp_name = $_FILES["stock_auction_pictures"]["tmp_name"];
    $temp_name = 'demo';
    $stock_masso_date = $_POST["stock_masso_date"];
   // $stock_export_cerificate_jp_file = $_FILES["stock_export_cerificate_jp_file"];
   $stock_port_of_loading=$_POST['stock_port_of_loading'];
   $stock_ship_name=$_POST['stock_ship_name'];
   $stock_port_of_discharge=$_POST['stock_port_of_discharge'];
   if(is_uploaded_file($_FILES['stock_export_cerificate_jp_file']['tmp_name'])){
   
    $filename1_ecjp = $_FILES['stock_export_cerificate_jp_file']['name'];
    $filename1fecjp=$stock_rec_no.$filename1_ecjp;
    // Upload files and store in database
    if(move_uploaded_file($_FILES["stock_export_cerificate_jp_file"]["tmp_name"],'DATA/'.$filename1fecjp)){
            
        $echoas1=",ats_car_stock_exp_cer_jp='$filename1fecjp',";
        }
    }
    else
    {
    $echoas1=",";
    }
  
   // $temp_name = $_FILES["stock_export_cerificate_jp_file"]["tmp_name"];
   if(is_uploaded_file($_FILES['stock_export_cerificate_en_file']['tmp_name']))
   {
    $filename1_ecen = $_FILES['stock_export_cerificate_en_file']['name'];
    $filename1fecen=$stock_rec_no.$filename1_en;
    // Upload files and store in database
    if(move_uploaded_file($_FILES["stock_export_cerificate_en_file"]["tmp_name"],'DATA/'.$filename1fecen)){
           
        $echoas2="ats_car_stock_exp_cer_eng='$stock_export_cerificate_en_file',";
    }
  
   }
 
    else{
        $echoas2="";
    }
   
    //$temp_name = $_FILES["stock_export_cerificate_en_file"]["tmp_name"];
    $stock_inyard_date = $_POST["stock_inyard_date"];
  
    //$temp_name = $_FILES["stock_yard_pictures"]["tmp_name"];
    $stock_reserve_date = $_POST["stock_reserve_date"];
    //$stock_invoice_file = $_FILES["stock_invoice_file"]['name'];
    if(is_uploaded_file($_FILES['stock_invoice_file']['tmp_name']))
    {
    $images4=$_FILES['stock_invoice_file']['tmp_name'];
    $stock_invoice_file=addslashes(file_get_contents($images4));
    $echoas3=",ats_car_stock_invoice_file='$stock_invoice_file',";
    }
else {
    $echoas3=",";
}

   // $temp_name = $_FILES["stock_invoice_file"]["tmp_name"];
    $stock_sure_ok_date =date("Y-m-d", strtotime($_POST["stock_sure_ok_date"]));
   // $stock_tt_copy_file = $_FILES["stock_tt_copy_file"]['name'];
  
   if(is_uploaded_file($_FILES['stock_tt_copy_file']['tmp_name']))
    {
      
        $stock_tt_copy_file="";
    $echoas4=",ats_car_stock_tt_copy_file='$stock_tt_copy_file',";
    }

    else
    {
        $echoas4=",";
    }
    
   //$temp_name = $_FILES["stock_tt_copy_file"]["tmp_name"];
    $stock_ship_date = date("Y-m-d", strtotime($_POST["stock_ship_date"]));
    $stock_vessel_name = $_POST["stock_vessel_name"];
    $stock_voyage = $_POST["stock_voyage"];
    $stock_ship_ok_date = date("Y-m-d", strtotime($_POST["stock_ship_ok_date"]));;
    //$stock_shipping_invoice_file = $_FILES["stock_shipping_invoice_file"]['name'];
    if(is_uploaded_file($_FILES['stock_shipping_invoice_file']['tmp_name']))
    {
        $filename1_shippinginvoice = $_FILES['stock_shipping_invoice_file']['name'];
        $stock_shipping_invoice_file=$stock_rec_no.$filename1_shippinginvoice;
        // Upload files and store in database
        if(move_uploaded_file($_FILES["stock_shipping_invoice_file"]["tmp_name"],'DATA/'.$stock_shipping_invoice_file)){
            $echoas5=",ats_car_stock_ship_invoice_file='$stock_shipping_invoice_file',";
            
        }
    
    }
    else{
        $echoas5=",";
    }
  
   
    // $temp_name = $_FILES["stock_shipping_invoice_file"]["tmp_name"];
    //$stock_shipping_order_file = $_FILES["stock_shipping_order_file"]['name'];
    if(is_uploaded_file($_FILES['stock_shipping_order_file']['tmp_name']))
    {
        $images7=$_FILES['stock_shipping_order_file']['tmp_name'];
        $filename7 = $_FILES['stock_shipping_order_file']['name'];
        $filename7f=$stock_rec_no.$filename7;
        // Upload files and store in database
        if(move_uploaded_file($_FILES["stock_shipping_order_file"]["tmp_name"],'DATA/'.$filename7f)){               
            $echoas6="ats_car_stock_ship_order_file='$filename7f',";
        }
       
  
    }
  else {
    $echoas6="";    
  }
  
   // $temp_name = $_FILES["stock_shipping_order_file"]["tmp_name"];
    $stock_bl_date = $_POST["stock_bl_date"];
    $stock_bl_no = $_POST["stock_bl_no"];
   // $stock_bill_of_lading_file = $_FILES["stock_bill_of_lading_file"]['name'];
   if(is_uploaded_file($_FILES['stock_bill_of_lading_file']['tmp_name']))
    {
        $stock_bill_of_lading_file="";
    $echoas7=",ats_car_stock_bl_file='$stock_bill_of_lading_file',";
    }
    else{
        $echoas7=",";
    }
    $stock_release_ok_date = date("Y-m-d", strtotime($_POST["stock_release_ok_date"]));
  
    if(is_uploaded_file($_FILES['stock_balance_tt_copy_file']['tmp_name']))
    {
    
    $echoas8=",ats_car_stock_bal_tt_copy_file='',";
    }
    else{
        $echoas8=",";
    }
  
  
    //$temp_name = $_FILES["stock_balance_tt_copy_file"]["tmp_name"];
    $stock_dhl_date = $_POST["stock_dhl_date"];
    $stock_tracking_number = $_POST["stock_tracking_number"];
    $stock_dhl_link = $_POST["stock_dhl_link"];
    $stock_inspection_date = $_POST["stock_inspection_date"];
    if(is_uploaded_file($_FILES['stock_inspection_certificate_file']['tmp_name']))
    {
        $images10=$_FILES['stock_inspection_certificate_file']['tmp_name'];
        $filename10 = $_FILES['stock_inspection_certificate_file']['name'];
        $stock_inspection_certificate_file=$stock_rec_no.$filename10;
        // Upload files and store in database
        if(move_uploaded_file($_FILES["stock_inspection_certificate_file"]["tmp_name"],'DATA/'.$stock_inspection_certificate_file)){
               
            
        }
    $echoas9=",ats_car_stock_inspection_cer_file='$stock_inspection_certificate_file',";
    }
    else{
        $echoas9=",";
    }
  
   
    // $temp_name = $_FILES["stock_inspection_certificate_file"]["tmp_name"];
    $stock_createdBy = "username";
    $stock_createdAt = time();
    $stock_updatedBy = "username";
    $stock_updatedAt = time();
    $stock_status = "active";
    $stock_extra_transportation=$_POST['stock_extra_transportation'];
    $totalfiles = count($_FILES['stock_auction_pictures']['name']);
    $totalfilesBTT = count($_FILES['stock_balance_tt_copy_file']['name']);
    if(trim($totalfilesBTT)){
        $insertdelbtt = "delete FROM cardocuments WHERE imagetype='BAL-TT' AND stockid='".$rowupdate[1]."' ";                   
         $rquerydel1BTT = mysqli_query($connection,$insertdelbtt);
    }
    for($i=0;$i<$totalfilesBTT;$i++){
        $filenameBTT = $_FILES['stock_balance_tt_copy_file']['name'][$i];
     
       // Upload files and store in database
       if(move_uploaded_file($_FILES["stock_balance_tt_copy_file"]["tmp_name"][$i],'DATA/'.$filenameBTT))
    {
        // Image db insert sql
        $insert1BTT = "INSERT INTO cardocuments(stockid, imagetype, imagename) VALUES ('$stock_rec_no','BAL-TT','$filenameBTT')"; 
        $iqueryBTT = mysqli_query($connection,$insert1BTT);

    }
              
     
              
           else{
               echo 'Error in uploading file - '.$_FILES['stock_balance_tt_copy_file']['name'][$i].'<br/>';
           }
     
        }
    $totalfilesif = count($_FILES['stock_invoice_file']['name']);

    if(trim($totalfiles)){
        $insertdel = "delete FROM cardocuments WHERE imagetype='AUCTION-PICTURES' stockid='".$rowupdate[1]."' ";                   
         $rquerydel1 = mysqli_query($connection,$insertdel);
    }
    for($i=0;$i<$totalfiles;$i++){
        $filename = $_FILES['stock_auction_pictures']['name'][$i];
     
       // Upload files and store in database
       if(move_uploaded_file($_FILES["stock_auction_pictures"]["tmp_name"][$i],'cardocuments/'.$filename)){
               // Image db insert sql
              $insert1 = "INSERT INTO cardocuments(stockid, imagetype, imagename) VALUES ('$stock_rec_no','AUCTION-PICTURES','$filename')";
              
              $iquery = mysqli_query($connection,$insert1);
     
     }
              
     
              
           else{
               echo 'Error in uploading file - '.$_FILES['stock_auction_pictures']['name'][$i].'<br/>';
           }
     
        }
        $totalfiles1 = count($_FILES['stock_yard_pictures']['name']);
        if(trim($totalfiles1)){
            $insertdel = "delete FROM cardocuments WHERE imagetype='YARD-PICTURES' stockid='".$rowupdate[1]."' ";                  
             $rquerydel1 = mysqli_query($connection,$insertdel);
        }
    for($i=0;$i<$totalfiles1;$i++){
        $filename1 = $_FILES['stock_yard_pictures']['name'][$i];
     
       // Upload files and store in database
       if(move_uploaded_file($_FILES["stock_yard_pictures"]["tmp_name"][$i],'cardocuments/'.$filename1)){
               // Image db insert sql
              $insert1 = "INSERT INTO cardocuments(stockid, imagetype, imagename) VALUES ('$stock_rec_no','YARD-PICTURES','$filename1')";
              
              $iquery = mysqli_query($connection,$insert1);
     
     }
              
     
              
           else{
               echo 'Error in uploading file - '.$_FILES['stock_yard_pictures']['name'][$i].'<br/>';
           }
     
        }
            $insert = "UPDATE ats_car_stock SET ats_car_stock_chassic_no='$stock_chassis_id',ats_car_stock_make='$stock_make',ats_car_stock_model='$stock_model',ats_car_stock_pkg='$stock_package',ats_car_stock_man_year='$stock_man_year',ats_car_stock_reg_year='$stock_reg_year',ats_car_stock_color='$stock_color',ats_car_stock_shift='$stock_shift',ats_car_stock_fuel='$stock_fuel',ats_car_stock_door='$stock_door',ats_car_stock_grade='$stock_grade',ats_car_stock_engine_size='$stock_engine_size',ats_car_stock_kobutsu='$stock_kobutsu',ats_car_stock_engine_no='$stock_engine_no',ats_car_stock_seats='$stock_seats',ats_car_stock_mileage_1='$stock_mileage_1',ats_car_stock_mileage_2='$stock_mileage_2',ats_car_stock_length='$stock_length',ats_car_stock_width='$stock_width',ats_car_stock_height='$stock_height',ats_car_stock_cubic_meter='$stock_cubic_meter',ats_car_stock_weight='$stock_weight',ats_car_stock_total_weight='$stock_total_weight',ats_car_stock_max_loading='$stock_max_loading',ats_car_stock_auction_house='$stock_auction',ats_car_stock_lot_no='$stock_lot_no',ats_car_stock_buying_price='$stock_buying_price',ats_car_stock_buying_date='$stock_buying_date',ats_car_stock_country_location='$stock_country_location',ats_car_stock_city_location='$stock_city_location',ats_car_stock_option_ps='$stock_option_ps',ats_car_stock_option_nv='$stock_option_nv',ats_car_stock_option_ac='$stock_option_ac',ats_car_stock_option_wab='$stock_option_wab',ats_car_stock_option_rs='$stock_option_rs',ats_car_stock_option_tv='$stock_option_tv',ats_car_stock_option_rr='$stock_option_rr',ats_car_stock_option_abs='$stock_option_abs',ats_car_stock_option_ls='$stock_option_ls',ats_car_stock_option_pw='$stock_option_pw',ats_car_stock_option_sr='$stock_option_sr',ats_car_stock_option_fog='$stock_option_fog',ats_car_stock_option_ab='$stock_option_ab',ats_car_stock_option_gg='$stock_option_gg',ats_car_stock_option_bt='$stock_option_bt',ats_car_stock_option_aw='$stock_option_aw',ats_car_stock_other_option='$stock_other_options',ats_car_stock_auction_fees='$stock_auction_charges',ats_car_stock_rikuso='$stock_rikuso_charges',ats_car_stock_fob_charge='$stock_fob_charges',ats_car_stock_storage_charge='$stock_storage_charges',ats_car_stock_dhl_charge='$stock_dhl_charges',ats_car_stock_radiation='$stock_radiation_charges',ats_car_stock_thc_charge='$stock_thc_charges',ats_car_stock_vaining_charge='$stock_vainning_charges',ats_car_stock_inspection_charge='$stock_inspection_charges',ats_car_stock_freight_charge='$stock_freight_charges',ats_car_stock_other_charge='$stock_other_charges',ats_car_stock_fob_price_yen='$stock_fob_price_print_yen',ats_car_stock_fob_price_us='$stock_fob_price_print_dollar',ats_car_stock_cnf_price_yen='$stock_cnf_price_print_yen',ats_car_stock_cnf_price_us='$stock_cnf_price_print_dollar' $echoas ats_car_stock_auction_pics='',ats_car_stock_masso_date='$stock_masso_date' $echoas1 $echoas2 ats_car_stock_inyard_date='$stock_inyard_date',ats_car_stock_inyard_pictures='',ats_car_stock_reserve_date='$stock_reserve_date' $echoas3 ats_car_stock_sure_ok_date='$stock_sure_ok_date' $echoas4 ats_car_stock_ship_date='$stock_ship_date',ats_car_stock_vessel_name='$stock_vessel_name',ats_car_stock_voyage='$stock_voyage',ats_car_stock_ship_ok_date='$stock_ship_ok_date' $echoas5 $echoas6 ats_car_stock_bl_date='$stock_bl_date',ats_car_stock_bl_number='$stock_bl_no' $echoas7 ats_car_stock_release_ok_date='$stock_release_ok_date' $echoas8 ats_car_stock_dhl_date='$stock_dhl_date',ats_car_stock_tracking_number='$stock_tracking_number',ats_car_stock_dhl_link='$stock_dhl_link',ats_car_stock_inspection_date='$stock_inspection_date' $echoas9 ats_car_stock_status='$stock_status',ats_car_stock_shape='$stock_shape',stock_port='$stock_port',shipmenttype='$shipmenttype',conversionrate='$conversionrate',extra_transportatiom='$stock_extra_transportation',stock_type='$stock_type',stock_total_expences='$stock_total_expences',stock_country_slab='$stock_country_slab',port_of_loding='$stock_port_of_loading',port_of_discharge='$stock_port_of_discharge',ship_name='$stock_ship_name' where ats_car_stock_id=".$_GET['car_id'];
              $query = mysqli_query($connection,$insert) or die(mysqli_error($connection));
              if ($query)
                  {
                      echo '<script type="text/javascript"> alert("Stock Added Successfully")</script>';
                      echo '<script language="javascript">window.location.href ="index.php"</script>';

                  }
////yard
if(trim($totalfilesif)){
    $insertdelif = "delete FROM cardocuments WHERE imagetype='INVOICE' stockid='".$rowupdate[1]."' ";              
     $rquerydel1if = mysqli_query($connection,$insertdelif);
}
for($i=0;$i<$totalfilesif;$i++){
$filenameif = $_FILES['stock_invoice_file']['name'][$i];

// Upload files and store in database
if(move_uploaded_file($_FILES["stock_invoice_file"]["tmp_name"][$i],'DATA/'.$filenameif)){
       // Image db insert sql
      $insertif = "INSERT INTO cardocuments(stockid, imagetype, imagename) VALUES ('$stock_rec_no','INVOICE','$filenameif')";
      
      $iqueryif = mysqli_query($connection,$insertif);

}
      

      
   else{
       echo 'Error in uploading file - '.$_FILES['stock_yard_pictures']['name'][$i].'<br/>';
   }

}
//BILL OF LADING
$totalfilesBOL = count($_FILES['stock_bill_of_lading_file']['name']);
if(trim($totalfilesBOL)){
    echo "Found";
    $insertdelBOL = "delete FROM cardocuments WHERE imagetype='BOL' AND stockid='".$rowupdate[1]."' ";                   
     $rquerydelBOL = mysqli_query($connection,$insertdelBOL);
     mysqli_error($connection);
}
for($i=0;$i<$totalfilesTT;$i++){
$filenameBOL = $_FILES['stock_bill_of_lading_file']['name'][$i];

// Upload files and store in database
if(move_uploaded_file($_FILES["stock_bill_of_lading_file"]["tmp_name"][$i],'DATA/'.$filenameBOL)){
       // Image db insert sql
      $insertBOL = "INSERT INTO cardocuments(stockid, imagetype, imagename) VALUES ('$stock_rec_no','BOL','$filenameBOL')";
      
      $iqueryBOL = mysqli_query($connection,$insertBOL);

}
      

      
   else{
       echo 'Error in uploading file - '.$_FILES['stock_bill_of_lading_file']['name'][$i].'<br/>';
   }

}
//
$totalfilesTT = count($_FILES['stock_tt_copy_file']['name']);
if(trim($totalfilesTT)){
    echo "Found";
    $insertdelTT = "delete FROM cardocuments WHERE imagetype='TT' AND stockid='".$rowupdate[1]."' ";                   
     $rquerydelTT = mysqli_query($connection,$insertdelTT);
     mysqli_error($connection);
}
for($i=0;$i<$totalfilesTT;$i++){
$filenameTT = $_FILES['stock_tt_copy_file']['name'][$i];

// Upload files and store in database
if(move_uploaded_file($_FILES["stock_tt_copy_file"]["tmp_name"][$i],'DATA/'.$filenameTT)){
       // Image db insert sql
      $insertTT = "INSERT INTO cardocuments(stockid, imagetype, imagename) VALUES ('$stock_rec_no','TT','$filenameTT')";
      
      $iqueryTT = mysqli_query($connection,$insertTT);

}
      

      
   else{
       echo 'Error in uploading file - '.$_FILES['stock_tt_copy_file']['name'][$i].'<br/>';
   }

}
    // $insert = "UPDATE ats_car_stock SET ats_car_stock_chassic_no='$stock_chassis_id',ats_car_stock_make='$stock_make',ats_car_stock_model='$stock_model',ats_car_stock_pkg='$stock_package',ats_car_stock_man_year='$stock_man_year',ats_car_stock_reg_year='$stock_reg_year',ats_car_stock_color='$stock_color',ats_car_stock_shift='$stock_shift',ats_car_stock_fuel='$stock_fuel',ats_car_stock_door='$stock_door',ats_car_stock_grade='$stock_grade',ats_car_stock_engine_size='$stock_engine_size',ats_car_stock_kobutsu='$stock_kobutsu',ats_car_stock_engine_no='$stock_engine_no',ats_car_stock_seats='$stock_seats',ats_car_stock_mileage_1='$stock_mileage_1',ats_car_stock_mileage_2='$stock_mileage_2',ats_car_stock_length='$stock_length',ats_car_stock_width='$stock_width',ats_car_stock_height='$stock_height',ats_car_stock_cubic_meter='$stock_cubic_meter',ats_car_stock_weight='$stock_weight',ats_car_stock_total_weight='$stock_total_weight',ats_car_stock_max_loading='$stock_max_loading',ats_car_stock_auction_house='$stock_auction',ats_car_stock_lot_no='$stock_lot_no',ats_car_stock_buying_price='$stock_buying_price',ats_car_stock_buying_date='$stock_buying_date',ats_car_stock_country_location='$stock_country_location',ats_car_stock_city_location='$stock_city_location',ats_car_stock_option_ps='$stock_option_ps',ats_car_stock_option_nv='$stock_option_nv',ats_car_stock_option_ac='$stock_option_ac',ats_car_stock_option_wab='$stock_option_wab',ats_car_stock_option_rs='$stock_option_rs',ats_car_stock_option_tv='$stock_option_tv',ats_car_stock_option_rr='$stock_option_rr',ats_car_stock_option_abs='$stock_option_abs',ats_car_stock_option_ls='$stock_option_ls',ats_car_stock_option_pw='$stock_option_pw',ats_car_stock_option_sr='$stock_option_sr',ats_car_stock_option_fog='$stock_option_fog',ats_car_stock_option_ab='$stock_option_ab',ats_car_stock_option_gg='$stock_option_gg',ats_car_stock_option_bt='$stock_option_bt',ats_car_stock_option_aw='$stock_option_aw',ats_car_stock_other_option='$stock_other_options',ats_car_stock_auction_fees='$stock_auction_charges',ats_car_stock_rikuso='$stock_rikuso_charges',ats_car_stock_fob_charge='$stock_fob_charges',ats_car_stock_storage_charge='$stock_storage_charges',ats_car_stock_dhl_charge='$stock_dhl_charges',ats_car_stock_radiation='$stock_radiation_charges',ats_car_stock_thc_charge='$stock_thc_charges',ats_car_stock_vaining_charge='$stock_vainning_charges',ats_car_stock_inspection_charge='$stock_inspection_charges',ats_car_stock_freight_charge='$stock_freight_charges',ats_car_stock_other_charge='$stock_other_charges',ats_car_stock_fob_price_yen='$stock_fob_price_print_yen',ats_car_stock_fob_price_us='$stock_fob_price_print_dollar',ats_car_stock_cnf_price_yen='$stock_cnf_price_print_yen',ats_car_stock_cnf_price_us='$stock_cnf_price_print_dollar' $echoas ats_car_stock_auction_pics='',ats_car_stock_masso_date='$stock_masso_date' $echoas1 $echoas2 ats_car_stock_inyard_date='$stock_inyard_date',ats_car_stock_inyard_pictures='',ats_car_stock_reserve_date='$stock_reserve_date' $echoas3 ats_car_stock_sure_ok_date='$stock_sure_ok_date' $echoas4 ats_car_stock_ship_date='$stock_ship_date',ats_car_stock_vessel_name='$stock_vessel_name',ats_car_stock_voyage='$stock_voyage',ats_car_stock_ship_ok_date='$stock_ship_ok_date' $echoas5 $echoas6 ats_car_stock_bl_date='$stock_bl_date',ats_car_stock_bl_number='$stock_bl_no' $echoas7 ats_car_stock_release_ok_date='$stock_release_ok_date' $echoas8 ats_car_stock_dhl_date='$stock_dhl_date',ats_car_stock_tracking_number='$stock_tracking_number',ats_car_stock_dhl_link='$stock_dhl_link',ats_car_stock_inspection_date='$stock_inspection_date' $echoas9 ats_car_stock_status='$stock_status',ats_car_stock_shape='$stock_shape',stock_port='$stock_port',shipmenttype='$shipmenttype',conversionrate='$conversionrate',extra_transportatiom='$stock_extra_transportation',stock_type='$stock_type',stock_total_expences='$stock_total_expences',stock_country_slab='$stock_country_slab' where ats_car_stock_id=".$_GET['car_id'];
    //   $query = mysqli_query($connection,$insert) or die(mysqli_error($connection));
    //   if ($query)
    //       {
    //           echo '<script type="text/javascript"> alert("Stock Added Successfully")</script>';
    //          // echo '<script language="javascript">window.location.href ="car-view.php"</script>';

    //       }
  
}

?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <form action="" method="post" enctype="multipart/form-data"> 
                                            <div id="smartwizard">
                                                <ul class="forms-wizard">
                                                    <li>
                                                        <a href="#step-1">
                                                            <em>1</em><span>Car Details</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-2">
                                                            <em>2</em><span>Car Calculation</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-3">
                                                            <em>3</em><span>Status / File / Docs Update</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-4">
                                                            <em>4</em><span>Finish Vizard</span>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                                <div class="form-wizard-content">
                                                <div id="step-1">
                                                                <div class="form-row"> 
                                                                    <div class="col-md-2">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Rec. No.</label>
                                                                            <input type="text" id="stock_rec_no" name="stock_rec_no" class="form-control form-control-sm" placeholder="Record No." value="<?php echo $rowupdate[1]?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Chassis ID</label>
                                                                            <input type="text" id="stock_chassis_id" name="stock_chassis_id" class="form-control form-control-sm" placeholder="Enter Price" value="<?php echo $rowupdate[2]?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Make</label>
                                                                            <select name="stock_make" id="stock_make" onChange="getState(this.value);" class="form-control form-control-sm">
                                                                                <?php 
                                                                                $queryfetchdetails=mysqli_query($connection,"select * from car_make ");
                                                                                ?>
                                                                                    <option disabled selected>Please Select</option>
                                                                                <?php 
                                                                                    while($rowfetchdetails=mysqli_fetch_array($queryfetchdetails)){
                                                                                        if($rowfetchdetails[0]== $rowupdate[3])
                                                                                        {
                                                                                    ?>
                                                                                <option value="<?php echo $rowfetchdetails[0]?>" selected><?php echo $rowfetchdetails[1]?></option>
                                                                                <?php
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                            echo "<option value='$rowfetchdetails[0]'>$rowfetchdetails[1]</option>";
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            </select>  
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label" >Model</label>
                                                                            <select name="stock_model" id="model-list" class="form-control form-control-sm">
                                                                                <?php 
                                                                                $query_get_model=mysqli_query($connection,"select * from ats_model_car where ats_model_id='".$rowupdate[3]."'");
                                                             
                                                                                  ?>
                                                                              <option  selected value="">Please Select</option>

                                                                              <?php 
                                                                              while($rowfetchmodeldetails=mysqli_fetch_array($query_get_model)){
                                                                                    if($rowfetchmodeldetails[0]== $rowupdate[3])
                                                                                    {
                                                                               ?>
                                                                             <option value="<?php echo $rowfetchmodeldetails[0]?>" selected><?php echo $rowfetchmodeldetails[2]?></option>

                                                                               <?php
                                                                                    }
                                                                                    else
                                                                                    {
                                                                                       echo "<option value='$rowfetchmodeldetails[0]'>$rowfetchmodeldetails[2]</option>";
                                                                                    }
                                                                                 }
                                                                                ?>
                                                                        </select> 
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <label class="form-control-label">Package</label>
                                                                        <input type="text" id="stock_package" name="stock_package" placeholder="" class="form-control form-control-sm" value="<?php echo $rowupdate[5]?>">
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <label class="form-control-label">Man. Year</label>
                                                                        <input type="text" id="stock_man_year" name="stock_man_year" placeholder="2002" class="form-control form-control-sm" value="<?php echo $rowupdate[6]?>">
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <label class="form-control-label">Reg. Year</label>
                                                                        <input type="text" id="stock_reg_year" name="stock_reg_year" placeholder="2002" class="form-control form-control-sm" value="<?php echo $rowupdate[7]?>">
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <label class="form-control-label">Color</label>
                                                                        <input type="text" id="stock_color" name="stock_color" placeholder="Color" class="form-control form-control-sm" value="<?php echo $rowupdate[8]?>">
                                                                    </div>  
                                                                </div>
                                                                <div class="form-row"> 
                                                                    <div class="col-md-2">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Shift</label>
                                                                            <select name="stock_shift" id="stock_shift" class="form-control form-control-sm">
                                                                                <option value="---" <?php if($rowupdate[9]=="---") echo 'selected="selected"'; ?>>Select</option>    
                                                                                <option <?php if($rowupdate[9]=="Automatic") echo 'selected="selected"'; ?> value="Automatic">Automatic</option>
                                                                                <option <?php if($rowupdate[9]=="Manual") echo 'selected="selected"'; ?> value="Manual">Manual</option> 
                                                                                <option <?php if($rowupdate[9]=="Dual") echo 'selected="selected"'; ?> value="Dual">Dual</option>
                                                                            </select> 
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Fuel</label>
                                                                            <select name="stock_fuel" id="stock_fuel" class="form-control form-control-sm">
                                                                                <option <?php if($rowupdate[10]=="---") echo 'selected="selected"'; ?> value="---" >Select</option>    
                                                                                <option <?php if($rowupdate[10]=="GASOLINE") echo 'selected="selected"'; ?> value="GASOLINE">GASOLINE</option>
                                                                                <option <?php if($rowupdate[10]=="DIESEL") echo 'selected="selected"'; ?> value="DIESEL">DIESEL</option> 
                                                                                <option <?php if($rowupdate[10]=="HYBRID") echo 'selected="selected"'; ?> value="HYBRID">HYBRID</option>
                                                                            </select>  
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Door</label>
                                                                            <input type="text" id="stock_door" name="stock_door" class="form-control form-control-sm" value="<?php echo $rowupdate[11]?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <label class="form-control-label">Grade</label><br/>
                                                                        <input type="text" id="stock_grade" name="stock_grade" placeholder="Grade" class="form-control form-control-sm" value="<?php echo $rowupdate[12]?>">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label class="form-control-label">Engine Size</label><br/>
                                                                        <input type="text" id="stock_engine_size" name="stock_engine_size" placeholder="****cc" class="form-control form-control-sm" value="<?php echo $rowupdate[13]?>">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label class="form-control-label">Kobutsu</label><br/>
                                                                        <select id="stock_kobutsu" name="stock_kobutsu" class="form-control form-control-sm" onChange="getSlab(this.value);">
                                                                            <?php 
                                                                                $queryfetchdetails1=mysqli_query($connection,"select DISTINCT countrycode,countryname from kobutsu_slab");
                                                                            ?>
                                                                            <option disabled selected>Please Select</option>
                                                                            <?php 
                                                                                while($rowfetchdetails1=mysqli_fetch_array($queryfetchdetails1)){
                                                                                    if($rowfetchdetails1[0]== $rowupdate[14])
                                                                                    {
                                                                            ?>
                                                                            <option class="form-control" value="<?php echo $rowfetchdetails1[0]?>" selected><?php echo $rowfetchdetails1[0]."-".$rowfetchdetails1[1]?></option>

                                                                            <?php
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "<option class='form-control' value='$rowfetchdetails1[0]'>$rowfetchdetails1[0]-$rowfetchdetails1[1]</option>";
                                                                                }
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-2" id="port">
                                                                                    <?php 
                                                                                $getslab2=mysqli_query($connection,"select * from kobutsu_slab where countrycode='".$rowupdate[14]."'");
            
                                                                                ?>
                                                                                    <label class="form-control-label">Port</label><br/>
                                                                                <div class="position-relative "> 
                                                                                <select id="stock_kobutsu_port" name="stock_kobutsu_port" class="form-control form-control-sm" onChange="getport(this.value);" > 
                                                                                <option value="" selected>Please Select</option>
                                                                                    <?php 
                                                                                    while($getslabrow2=mysqli_fetch_array($getslab2))
                                                                                    {
                                                                                        if($getslabrow2[0]== $rowupdate[102])
                                                                                        {
                                                                                        ?>
                                                                                        <option class="form-control" value="<?php echo $getslabrow2[0]?>" selected><?php echo $getslabrow2[4]?></option>

                                                                                        <?php
                                                                                        }
                                                                                    
                                                                                        else
                                                                                        {
                                                                                        echo "<option class='form-control' value='$getslabrow2[0]'>$getslabrow2[4]</option>";
                                                                                        }
                                                                                    }
                                                                                    ?>
                                                                                </select> 
                                                                                                                                            
                                                                                    </div>
                                                                        </div>
                                                                                                                                        
                                                                </div>
                                                                <div data-ng-app="" data-ng-init="length=;width=;height=;" class="form-row">
                                                                    <div class="col-md-2">
                                                                        <label class="form-control-label">Engine No.</label><br/>
                                                                        <input type="text" id="stock_engine_no" name="stock_engine_no" placeholder="8785****" class="form-control-sm form-control" value="<?php echo $rowupdate[15]?>">
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Seats</label><br/>
                                                                            <input type="text" id="stock_seats" name="stock_seats" placeholder="" class="form-control-sm form-control" value="<?php echo $rowupdate[16]?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Mileage .1</label><br/>
                                                                            <input type="text" id="stock_mileage_1" name="stock_mileage_1" placeholder="Km 1" class="form-control form-control-sm" value="<?php echo $rowupdate[17]?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Mileage .2</label><br/>
                                                                            <input  type="text" id="stock_mileage_2" name="stock_mileage_2" placeholder="Km 2" class="form-control form-control-sm" value="<?php echo $rowupdate[18]?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Lenght</label><br/>
                                                                            <input ng-model="length" type="text" id="stock_length" name="stock_length" placeholder="Lenght" class="form-control form-control-sm" onkeyup="sum()" value="<?php echo $rowupdate[19]?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Width</label><br/>
                                                                            <input ng-model="width" type="text" id="stock_width" name="stock_width" placeholder="Width" class="form-control form-control-sm" onkeyup="sum()" value="<?php echo $rowupdate[20]?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <label class="form-control-label">Height</label><br/>
                                                                        <input ng-model="height" type="text" id="stock_height" name="stock_height" placeholder="Height" class="form-control form-control-sm" onkeyup="sum()" value="<?php echo $rowupdate[21]?>">
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <label class="form-control-label">M &sup3; : <br/></label>
                                                                            <!--<span class="form-control" name="stock_cubic_meter" id="stock_cubic_meter" style="color:green; font-weight: bold; ">{{length * width * height / 1000000}}</span>--->
                                                                            <input ng-model="height" type="text" id="stock_cubic_meter" name="stock_cubic_meter" placeholder="" class="form-control form-control-sm" value="<?php echo $rowupdate[22]?>">
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <label  class="form-control-label">Weight</label><br/>
                                                                        <input type="text" id="stock_weight" name="stock_weight" placeholder="Weight" class="form-control form-control-sm" value="<?php echo $rowupdate[23]?>">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Total Weight</label><br/>
                                                                            <input type="text" id="stock_total_weight" name="stock_total_weight" placeholder="Total Weight" class="form-control form-control-sm" value="<?php echo $rowupdate[24]?>">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-2">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Max Loading</label><br/>
                                                                            <input type="text" id="stock_max_loading" name="stock_max_loading" placeholder="Loading Capacity" class="form-control form-control-sm" value="<?php echo $rowupdate[25]?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label class="form-control-label">Stock</label><br/>
                                                                        <select name="stock_type" id="stock_type" class="form-control form-control-sm">
                                                                            <option value="---" <?php if($rowupdate[106]=="---") echo 'selected="selected"'; ?>>Choose Stock</option>
                                                                            <option value="Company-Stock" <?php if($rowupdate[106]=="Company-Stock") echo 'selected="selected"'; ?>>Company-Stock</option>
                                                                            <option value="Customer-Order(Auction)" <?php if($rowupdate[106]=="Customer-Order(Auction)") echo 'selected="selected"'; ?>>Customer Order(Auction)</option>
                                                                        </select>  
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label class="form-control-label">Auction House</label><br/>
                                                                        <input type="text" id="stock_auction" name="stock_auction" placeholder="Auction House" class="form-control form-control-sm"  value="<?php echo $rowupdate[26]?>">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label class="form-control-label">Lot No.</label><br/>
                                                                        <input type="text" id="stock_lot_no" name="stock_lot_no" placeholder="876****" class="form-control form-control-sm" value="<?php echo $rowupdate[27]?>">
                                                                
                                                                    </div> 
                                                                    <div class="col-md-2">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Buying Price</label><br/>
                                                                            <input type="text" id="stock_buying_price" name="stock_buying_price" placeholder="*,**,***" class="form-control form-control-sm"  onkeyup="buyfunction()" value="<?php echo $rowupdate[28]?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label class="form-control-label">Buying Date</label><br/>
                                                                        <input type="text" id="stock_buying_date" name="stock_buying_date" class="form-control form-control-sm" value="<?php echo $rowupdate[29]?>">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label class="form-control-label">Shape</label><br/>
                                                                        <select name="stock_shape" id="stock_shape" class="form-control form-control-sm">
                                                                            <option value="---" <?php if($rowupdate[101]=="---") echo 'selected="selected"'; ?>>Type : </option>
                                                                            <option <?php if($rowupdate[101]=="Sedan") echo 'selected="selected"'; ?> value="Sedan">Sedan</option>
                                                                            <option <?php if($rowupdate[101]=="Hatchback") echo 'selected="selected"'; ?> value="Hatchback">Hatchback</option>
                                                                            <option <?php if($rowupdate[101]=="Station Wagon") echo 'selected="selected"'; ?> value="Station Wagon">Station Wagon</option>
                                                                            <option <?php if($rowupdate[101]=="Coupe") echo 'selected="selected"'; ?> value="Coupe">Coupe</option>
                                                                            <option <?php if($rowupdate[101]=="Open Top") echo 'selected="selected"'; ?> value="Open Top">Open Top</option>
                                                                            <option <?php if($rowupdate[101]=="SUV") echo 'selected="selected"'; ?> value="SUV">SUV</option>
                                                                            <option <?php if($rowupdate[101]=="MUV") echo 'selected="selected"'; ?> value="MUV">MUV</option>
                                                                            <option <?php if($rowupdate[101]=="Mini Van") echo 'selected="selected"'; ?> value="Mini Van">Mini Van</option>
                                                                            <option <?php if($rowupdate[101]=="Van") echo 'selected="selected"'; ?> value="Van">Van</option>
                                                                            <option <?php if($rowupdate[101]=="Pickup") echo 'selected="selected"'; ?> value="Pickup">Pickup</option>
                                                                            <option <?php if($rowupdate[101]=="Truck") echo 'selected="selected"'; ?> value="Truck">Truck</option>
                                                                            <option <?php if($rowupdate[101]=="Machinery") echo 'selected="selected"'; ?> value="Machinery">Machinery</option>
                                                                            <option <?php if($rowupdate[101]=="Tractor") echo 'selected="selected"'; ?> value="Tractor">Tractor</option>
                                                                            <option <?php if($rowupdate[101]=="Motorcycle") echo 'selected="selected"'; ?> value="Motorcycle">Motorcycle</option>
                                                                            <option <?php if($rowupdate[101]=="Other") echo 'selected="selected"'; ?> value="Other">Other</option>
                                                                        </select>  
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">Country (Car Location)</label>
                                                                            <select name="stock_country_location" id="stock_country_location" class="form-control form-control-sm">
                                                                                <option <?php if($rowupdate[30]=="Other") echo 'selected="selected"'; ?> value="---">Select</option>    
                                                                                <option <?php if($rowupdate[30]=="Japan") echo 'selected="selected"'; ?> value="Japan">Japan</option>
                                                                                <option <?php if($rowupdate[30]=="Dubai") echo 'selected="selected"'; ?> value="Dubai">Dubai</option> 
                                                                                <option  <?php if($rowupdate[30]=="Singapore") echo 'selected="selected"'; ?> value="Singapore">Singapore</option>
                                                                                <option <?php if($rowupdate[30]=="Thailand") echo 'selected="selected"'; ?> value="Thailand">Thailand</option>
                                                                                <option <?php if($rowupdate[30]=="USA") echo 'selected="selected"'; ?> value="USA">USA</option>
                                                                                <option <?php if($rowupdate[30]=="Pakistan") echo 'selected="selected"'; ?> value="Pakistan">Pakistan</option>
                                                                            </select>  
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="position-relative form-group">
                                                                            <label class="form-control-label">City</label>
                                                                            <input type="text "name="stock_city_location" id="stock_city_location" class="form-control form-control-sm" value="<?php echo $rowupdate[31]?>">
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label for="Username" class="form-control-label">Options</label>
                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_ps" id="stock_option_ps" type="checkbox" value="PS"  <?php if($rowupdate[32]=="PS") echo 'checked'; ?>>
                                                                                    <label class="" >PS</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_nv" id="stock_option_nv" type="checkbox" value="NV" <?php if($rowupdate[33]=="NV") echo 'checked'; ?> >
                                                                                    <label class="" >NV</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_ac" id="stock_option_ac" type="checkbox"  value="AC" <?php if($rowupdate[34]=="AC") echo 'checked'; ?>>
                                                                                    <label class="" >AC</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_wab" id="stock_option_wab" type="checkbox" value="WAB" <?php if($rowupdate[35]=="WAB") echo 'checked'; ?>>
                                                                                    <label class="" >WAB</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_rs" id="stock_option_rs" type="checkbox" value="RS" <?php if($rowupdate[36]=="RS") echo 'checked'; ?> >
                                                                                    <label class="" >RS</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_tv" id="stock_option_tv" type="checkbox" value="TV" <?php if($rowupdate[37]=="TV") echo 'checked'; ?>>
                                                                                    <label class="" >TV</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_rr" id="stock_option_rr" type="checkbox" value="RR" <?php if($rowupdate[38]=="RR") echo 'checked'; ?>>
                                                                                    <label class="" >RR</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_abs" id="stock_option_abs" type="checkbox" value="ABS" <?php if($rowupdate[39]=="ABS") echo 'checked'; ?>>
                                                                                    <label class="" >ABS</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_ls" id="stock_option_ls" type="checkbox"  value="LS" <?php if($rowupdate[40]=="LS") echo 'checked'; ?>>
                                                                                    <label class="" >LS</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_pw" id="stock_option_pw" type="checkbox" value="PW" <?php if($rowupdate[41]=="PW") echo 'checked'; ?>>
                                                                                    <label class="" >PW</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_sr" id="stock_option_sr" type="checkbox" value="SR" <?php if($rowupdate[42]=="SR") echo 'checked'; ?>>
                                                                                    <label class="" >SR</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_fog" id="stock_option_fog" type="checkbox" value="FOG" <?php if($rowupdate[43]=="FOG") echo 'checked'; ?>>
                                                                                    <label class="" >FOG</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_ab" id="stock_option_ab" type="checkbox" value="AB" <?php if($rowupdate[44]=="AB") echo 'checked'; ?>>
                                                                                    <label class="" >AB</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_gg" id="stock_option_gg" type="checkbox" value="GG" <?php if($rowupdate[45]=="GG") echo 'checked'; ?>>
                                                                                    <label class="" >GG</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_bt" id="stock_option_bt" type="checkbox" value="BT" <?php if($rowupdate[46]=="BT") echo 'checked'; ?>>
                                                                                    <label class="" >BT</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input name="stock_option_aw" id="stock_option_aw" type="checkbox" value="AW" <?php if($rowupdate[47]=="AW") echo 'checked'; ?>>
                                                                                    <label class="" >AW</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8" >
                                                                            <label class="form-control-label">Other Options</label><br/>
                                                                            <textarea name="stock_other_options" id="stock_other_options" cols="30" rows="4" placeholder="Enter Other Options" class="form-control form-control-sm" VALUE="<?php echo $rowupdate[48]?>"></textarea>
                                                                        </div>
                                                                </div> 
                                                        </div>
                                                        <div id="step-2">
                                                            <div class="form-row"> 
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Auction Fees</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input   type="text" onkeyup="sum1()"  id="stock_auction_charges" name="stock_auction_charges" placeholder="Enter Price" class="form-control-sm form-control" VALUE="<?php echo $rowupdate[49]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Radiation / Plate / Cancel / Photo</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input  type="text" onkeyup="sum1()"  id="stock_radiation_charges" name="stock_radiation" placeholder="Enter Price" class="form-control-sm form-control" VALUE="<?php echo $rowupdate[54]?>">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="form-row"> 
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Rikuso</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input  type="text" onkeyup="sum1()"  id="stock_rikuso_charges" name="stock_rikuso_charges" placeholder="Enter Price" class="form-control-sm form-control" VALUE="<?php echo $rowupdate[50]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">THC Charges (if container)</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input  type="text" onkeyup="sum1()"  name="stock_thc_charges" id="stock_thc_charges" placeholder="Enter Price" class="form-control-sm form-control"  VALUE="<?php echo $rowupdate[55]?>">
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            <div class="form-row"> 
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Clearing & Custom (FOB Charges)</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input  type="text" onkeyup="sum1()"  id="stock_fob_charges" name="stock_fob_charges" placeholder="Enter Price" class="form-control-sm form-control" VALUE="<?php echo $rowupdate[51]?>">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Vaining Charges (if container)</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input  type="text" onkeyup="sum1()"  id="stock_vainning_charges" name="stock_vainning_charges" placeholder="Enter Price" class="form-control-sm form-control" VALUE="<?php echo $rowupdate[56]?>">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="form-row"> 
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Storage Charges</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input  type="text" onkeyup="sum1()"  id="stock_storage_charges" name="stock_storage_charges" placeholder="Enter Price" class="form-control-sm form-control" VALUE="<?php echo $rowupdate[52]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Other Charges</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input   type="text" onkeyup="sum1()"  id="stock_other_charges" name="stock_other_charges" placeholder="Enter Price" class="form-control-sm form-control" VALUE="<?php echo $rowupdate[59]?>">
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="form-row"> 
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">DHL Charges</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative">
                                                                        <input  type="text" onkeyup="sum1()"  id="stock_dhl_charges" name="stock_dhl_charges" placeholder="Enter Price" class="form-control-sm form-control" VALUE="<?php echo $rowupdate[53]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label style="font-weight:bold;" class="form-control-label text-success">Total Expences</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative">
                                                                        <input  type="text" id="stock_total_expences" name="stock_total_expences" placeholder="Enter Price" class="form-control-sm form-control" VALUE="<?php echo $rowupdate[107]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="position-relative">
                                                                        <label style="font-weight:bold;" class="form-control-label text-success">Choose Shipment</label>
                                                                        <select name="lr" id="lr" class="form-control-sm form-control">
                                                                        <option value="" selected>Please Select</option>
                                                                            <option value="RoRo" <?php if($rowupdate[103]=="RoRo") echo 'selected="selected"'; ?>>RoRo</option>
                                                                            <option value="LoLo" <?php if($rowupdate[103]=="LoLo") echo 'selected="selected"'; ?>>LoLo</option>
                                                                        </select>  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="background-color: lightgray;" class="divider" id="showx"></div>
                                                            <div class="form-row">
                                                                <div class="col-sm-4">
                                                                    <div class="position-relative">
                                                                        <input type="radio" name="inspection" Value="YES">&nbsp;CNF&nbsp;&nbsp;
                                                                        <input type="radio" name="inspection" value="NO">&nbsp;F.O.B
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="position-relative">
                                                                        <input type="radio" name="inspection1" Value="YES">&nbsp;Yes&nbsp;&nbsp;
                                                                        <input type="radio" name="inspection1" value="NO">&nbsp;NO 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="margin-bottom: -13px;" class="form-row " id="shows">
                                                                
                                                                
                                                                <div class="col-sm-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label mt-1" >Shiping Freight Charges</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="position-relative " id="freight1">
                                                                    </div>
                                                                    <div class="position-relative " id="freight">
                                                                        <input  type="text" id="stock_freight_charges" value="<?php echo $rowupdate[58] ?>" name="stock_freight_charges" placeholder="Enter Price" class="form-control-sm form-control">
                                                                    </div>
                                                                </div> 
                                                                <div class="col-sm-2">
                                                                
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label mt-1">Inspection Charges</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="position-relative" id="ins_charges">
                                                                        <input type="text" id="stock_inspection_charges" name="stock_inspection_charges" placeholder="Enter Price" value="<?php echo $rowupdate[57] ?>" class="form-control-sm form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label mt-1">Extra Transportation</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="position-relative" id="ins_charges">
                                                                        <input type="text" id="stock_extra_transportation" name="stock_extra_transportation" placeholder="Enter Price" class="form-control-sm form-control" value="<?php echo $rowupdate[105] ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="background-color: lightgray;" class="divider" id="showy"></div>
                                                            <div style="margin-bottom: -13px;" class="form-row"  id="showt"> 
                                                                <div class="col-sm-1">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label mt-1">Buying&nbsp;Price</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="position-relative ">
                                                                        <input type="text" name="stock_buying_price_print" id="stock_buying_price_print" placeholder="Enter Price" class="form-control-sm form-control " value="<?php echo $rowupdate[28] ?>">
                                                                    </div>
                                                                </div>
                                                              
                                                                
                                                                <div class="col-sm-1">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label mt-1">Country&nbsp;Slab</label>
                                                                    </div>
                                                                </div>        
                                                                <div class="col-sm-2" id="slab-list">
                                                                    <div class="position-relative "> 
                                                                        <input style="margin-left:2.5%;" type="text" id="stock_country_slab"  name="stock_country_slab" class="form-control-sm form-control" value="<?php echo $rowupdate[108] ?>">
                                                                    </div>
                                                                </div> 
                                                                <!-- <div class="col-sm-1">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label mt-1">Calculate&nbsp;Total</label>
                                                                    </div>
                                                                </div> -->
                                                                <div class="col-sm-2">
                                                                    <div class="position-relative ">
                                                                        <input type="button" id="btntotal"  name="stock_total_cal" class="btn btn-success" Value="Calculate Total">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label mt-1">Converssion&nbsp;Rate</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1">
                                                                    <div class="position-relative ">
                                                                        <input style="margin-left: -45%;" type="text" id="stock_con_rate"  name="stock_con_rate" class="form-control-sm form-control" value="<?php echo $rowupdate[104]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1">
                                                                    <div class="position-relative ">
                                                                        <input type="button" id="btnconvert"  name="btnconvert" class="btn btn-warning" Value="Convert">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="background-color: lightgray;" class="divider" id="showv"></div>
                                                            <div class="form-row" id="showu"> 
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">FOB Price &yen; </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input type="text" id="stock_fob_price_print_yen" 
                                                                        name="stock_fob_price_print_yen" class="form-control-sm form-control" value="<?php echo $rowupdate[65]?>">
                                                                    </div>
                                                                </div> 
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">CNF Price &yen; </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input type="text" id="stock_cnf_price_print_yen"  name="stock_cnf_price_print_yen" class="form-control-sm form-control" value="<?php echo $rowupdate[67]?>">
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            <div class="form-row" id="showw"> 
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">FOB Price &dollar;</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input type="text" id="stock_fob_price_print_dollar"
                                                                        name="stock_fob_price_print_dollar"  class="form-control-sm form-control" value="<?php echo $rowupdate[66]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">CNF Price &dollar; </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative ">
                                                                        <input  type="text" id="stock_cnf_price_print_dollar"  
                                                                        name="stock_cnf_price_print_dollar" class="form-control-sm form-control" value="<?php echo $rowupdate[68]?>">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    <div id="step-3">
                                                        <div class="form-row"> 
                                                           
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Buying Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">                       
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_buying_date_print" name="stock_buying_date_print" class="form-control-sm form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowupdate[29]?>">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Auction Sheet<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_auction_sheet_file" id="stock_auction_sheet_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Auction Pictures<input style="position: absolute; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_auction_pictures[]" id="stock_auction_pictures" multiple="multiple"/>
                                                                    </div> 
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Masso Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_masso_date" name="stock_masso_date"  class="form-control-sm form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowupdate[71]?>"  >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Export Certificate (JP)<input style="position: absolute; border-radius: 20px; opacity: 0; right: 0; top: 0;" type="file" name="stock_export_cerificate_jp_file" id="stock_export_cerificate_jp_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Export Certificate (EN)<input style="position: absolute; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_export_cerificate_en_file" id="stock_export_cerificate_en_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Inyard Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_inyard_date" name="stock_inyard_date" class="form-control-sm form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowupdate[74]?>">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-6">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Yard Pictures<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_yard_pictures[]" id="stock_yard_pictures" multiple="multiple"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Reserve Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_reserve_date" name="stock_reserve_date" class="form-control-sm form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowupdate[76]?>">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-6">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Invoice<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_invoice_file[]" id="stock_invoice_file" multiple="multiple"/>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Sure OK Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_sure_ok_date" name="stock_sure_ok_date" class="form-control-sm form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowupdate[78]?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-6">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload TT Copy<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_tt_copy_file[]" id="stock_tt_copy_file" multiple="multiple"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Ship Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                    <div class="position-relative ">
                                                                    <input type="text" id="stock_ship_date" name="stock_ship_date" class="form-control-sm form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowupdate[80]?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_vessel_name" name="stock_vessel_name" placeholder="Vessel Name" class="form-control-sm form-control" value="<?php echo $rowupdate[81]?>">
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input  type="text" id="stock_voyage" name="stock_voyage" placeholder="Voyage" class="form-control-sm form-control" value="<?php echo $rowupdate[80]?>">
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Ship OK Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_ship_ok_date" name="stock_ship_ok_date" class="form-control-sm form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowupdate[83]?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Shipping Invoice<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_shipping_invoice_file" id="stock_shipping_invoice_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Shipping Order<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_shipping_order_file" id="stock_shipping_order_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div>     
                                                        </div>
                                                        <div class="form-row"> 
                                                                <div class="col-sm-2">
                                                                    <div class="position-relative form-group">
                                                                        <label class="form-control-label">Port of Loading</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="position-relative">
                                                                        <input type="text" id="stock_port_of_loading" name="stock_port_of_loading" placeholder="Port of Loading" class="form-control-sm form-control" value="<?php echo $rowupdate[120]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative">
                                                                        <input type="text" id="stock_ship_name" name="stock_ship_name" placeholder="Ship Name" class="form-control-sm form-control" value="<?php echo $rowupdate[122]?>">
                                                                    </div>
                                                                </div> 
                                                                <div class="col-sm-3">
                                                                    <div class="position-relative">
                                                                        <input type="text" id="stock_port_of_discharge" name="stock_port_of_discharge" placeholder="Port of Dsicharge" class="form-control-sm form-control" value="<?php echo $rowupdate[121]?>">
                                                                    </div>
                                                                </div>     
                                                            </div>
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">BL Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_bl_date" name="stock_bl_date" class="form-control-sm form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowupdate[86]?>">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_bl_no" name="stock_bl_no" placeholder="BL Number" class="form-control-sm form-control" value="<?php echo $rowupdate[87]?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Bill of Lading<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_bill_of_lading_file[]" multiple="multiple" id="stock_bill_of_lading_file"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                        </div> 
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Release OK Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_release_ok_date" name="stock_release_ok_date" class="form-control-sm form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowupdate[89]?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-6">
                                                                <div class="position-relative ">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Bal. TT Copy<input style="position: absolute; width: 100%; border-radius: 20px;  opacity: 0; right: 0; top: 0;" type="file" name="stock_balance_tt_copy_file[]" id="stock_balance_tt_copy_file" multiple="multiple"/>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                        </div>  
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">DHL Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_dhl_date" name="stock_dhl_date" class="form-control-sm form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowupdate[91]?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_tracking_number" name="stock_tracking_number"  placeholder="Tracking Number" class="form-control-sm form-control" value="<?php echo $rowupdate[92]?>">
                                                                </div>
                                                            </div>  
                                                            <div class="col-sm-3">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_dhl_link" name="stock_dhl_link" placeholder="DHL Link" class="form-control-sm form-control" value="<?php echo $rowupdate[93]?>">
                                                                </div>
                                                            </div>  
                                                        </div>   
                                                        <div class="form-row"> 
                                                            <div class="col-sm-2">
                                                                <div class="position-relative form-group">
                                                                    <label class="form-control-label">Inspection Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="position-relative ">
                                                                    <input type="text" id="stock_inspection_date" name="stock_inspection_date" class="form-control-sm form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $rowupdate[94]?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-6">
                                                                <div class="position-relative">
                                                                    <div style="position: relative; overflow: hidden;" class="file mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Upload Inspection Certificate<input style="position: absolute; border-radius: 20px; width: 100%; opacity: 0; right: 0; top: 0;" type="file" multiple="multiple" name="stock_inspection_certificate_file" id="stock_inspection_certificate_file"/>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <div id="step-4">
                                                   
                                                        <div class="no-results">
                                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                <span class="swal2-success-line-tip"></span>
                                                                <span class="swal2-success-line-long"></span>
                                                                <div class="swal2-success-ring"></div>
                                                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                            </div>
                                                            <div class="results-subtitle mt-4">Finished!</div>
                                                            <div class="results-title">You have Updated the car Successfully</div>
                                                            <div class="mt-3 mb-3"></div>
                                                            <div class="text-center">
                                                                <button   class="btn-shadow btn-wide btn btn-success btn-lg">Finish</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="clearfix">
                                                <input type="reset" id="reset-btn" class="btn-shadow float-left btn btn-link" value="Reset">
                                                <input type="submit"  name="stock_btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary" value="add">
                                                <a id="next-btn" name="next_btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary text-white" >Next</a>
                                                <a id="prev-btn" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</a>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
           
            <script>
function getState(val) {
   // alert(val);
	$.ajax({
	type: "POST",
	url: "regiondropdown.php",
	data:'make_id='+val,
	success: function(data){
		$("#model-list").html(data);
	}
	});
}
function getSlab(val) {
   // alert(val);
	$.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'k_id='+val,
	success: function(data){
		//$("#slab-list").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'i_id='+val,
	success: function(data){
        alert(data);
		$("#port").html(data);
	}
	});
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'ins_id='+val,
	success: function(data){
		$("#ins_charges").html(data);
	}
	});
}

</script>
<script>
function buyfunction() {
    var n1 = document.getElementById('stock_buying_price');
  var n2 = document.getElementById('stock_buying_price_print');
  var v = $("#stock_kobutsu").val();
  var bp = $("#stock_buying_price").val();


  n2.value = n1.value;
  $.ajax({
	type: "POST",
	url: "getslab.php",
	data:{'c_id': v, 'bp': bp},
	success: function(data){
		//$("#freight1").html(data);
        	$("#slab-list").html(data);
	}
	});
  }
</script>
<script>
function getport(val) {
    $.ajax({
	type: "POST",
	url: "ats_dependant_dropdown.php",
	data:'p_id='+val,
	success: function(data){
		$("#freight1").html(data);
	}
	});
  }
  </script>
<script type="text/javascript">
        function sum() {
            var txtFirstNo = document.getElementById('stock_length').value;
            var txtSecondNo = document.getElementById('stock_width').value;
            var txtThirdNo = document.getElementById('stock_height').value;
            var result = (parseInt(txtFirstNo) * parseInt(txtSecondNo) *  parseInt(txtThirdNo)) / 1000000;
            var ce=Math.ceil(result);
            if(ce > 15)
            {

            }
            if (!isNaN(result)) {
                document.getElementById('stock_cubic_meter').value = ce;
            }

        }
       
    </script>
    <!-- <script>
    $('input:radio[name="inspection"]').change(
    function(){
        if (this.checked && this.value == 'YES') {
            var txtFirstNo1 = document.getElementById('stock_freight_charges1').value;
            var txtFirstNo2 = document.getElementById('stock_cubic_meter').value;
            var lolo=$('input:radio[name="rl"]').val();
            alert(lolo);
                var r1=parseInt(txtFirstNo1)*parseInt(txtFirstNo2);
                if(txtFirstNo2 >15)
                {
                    document.getElementById('stock_freight_charges').value = "Please Ask";
                    $('#stock_freight_charges').attr('readonly', true);

                }
                else{
                document.getElementById('stock_freight_charges').value = r1;
                $('#stock_freight_charges').attr('readonly', true);
                }
        }
        if (this.checked && this.value == 'NO') {
         
                document.getElementById('stock_freight_charges').value ="";
                $('#stock_freight_charges').attr('readonly', true);
        }
    });
    </script> -->
    <!-- <script>
    $('input:radio[name="rl"]').change(
    function(){
        if (this.checked && this.value == 'RORO') {
            var txtFirstNo1 = document.getElementById('stock_freight_charges1').value;
            var txtFirstNo2 = document.getElementById('stock_cubic_meter').value;
           
                var r1=parseInt(txtFirstNo1)*parseInt(txtFirstNo2);
                 if(txtFirstNo2 >15)
                 {
                    //  document.getElementById('stock_freight_charges').value = "Please Ask";
                    //  $('#stock_freight_charges').attr('readonly', true);
                    var tv="Please Ask"

                 }
                 else{
                //  document.getElementById('stock_freight_charges').value = r1;
                //  $('#stock_freight_charges').attr('readonly', true);
                var tv=r1;
                alert(r1);
                 }
        }
        if (this.checked && this.value == 'LOLO') {
         
                document.getElementById('stock_freight_charges').value ="";
                $('#stock_freight_charges').attr('readonly', true);
        }
    });
    </script> -->
    <script>
      $('input:radio[name="inspection"]').change(
    function(){
        if (this.checked && this.value == 'YES') {
            var rll= $("#lr").val();
           
           if(rll== 'RoRo'){
            var txtFirstNo1 = document.getElementById('stock_freight_charges1').value;
            var txtFirstNo2 = document.getElementById('stock_cubic_meter').value;
           
                var r1=parseInt(txtFirstNo1)*parseInt(txtFirstNo2);
                if(txtFirstNo2 >15)
                {
                    document.getElementById('stock_freight_charges').value = "Please Ask";
                    $('#stock_freight_charges').attr('readonly', true);

                }
                else{
                document.getElementById('stock_freight_charges').value = r1;
                $('#stock_freight_charges').attr('readonly', true);
                }
           }
           else if(rll=='LoLo')  {
            document.getElementById('stock_freight_charges').value = "Please Ask";
                    $('#stock_freight_charges').attr('readonly', true);
           }

          
                
        }
        if (this.checked && this.value == 'NO') {
         
                document.getElementById('stock_freight_charges').value ="";
                $('#stock_freight_charges').attr('readonly', true);
        }
    });
    </script>
   <script>
    $('input:radio[name="inspection1"]').change(
    function(){
        if (this.checked && this.value == 'YES') {
            
                $('#stock_inspection_charges').attr('readonly', false);
                $('#stock_inspection_charges').attr('disabled', false);
        }
        if (this.checked && this.value == 'NO') {
         
            $("#stock_inspection_charges").get(0).selectedIndex = 0;
                
            

                $('#stock_inspection_charges').attr('readonly', true);
                $('#stock_inspection_charges').attr('disabled', true);
        }
    });
    </script>
    <script>
    $(document).ready(function() {
    $("#btntotal").click(function(){
        var sum1 = document.getElementById('stock_freight_charges').value;
        if (isNaN(document.getElementById('stock_freight_charges').value)) {  
                sum1=0; 
            }  
        var sum2 = document.getElementById('stock_inspection_charges').value;
        if (isNaN(document.getElementById('stock_inspection_charges').value)) {  
                sum2=0; 
            }  
        var sum3 = document.getElementById('stock_buying_price_print').value;
        var sum4 = document.getElementById('stock_country_slab').value;
        var sum5 = document.getElementById('stock_extra_transportation').value;
        if (isNaN(document.getElementById('stock_country_slab').value)) {  
                sum4=0; 
            }  
        var fobsum= parseInt(sum2)+parseInt(sum3)+parseInt(sum4)+parseInt(sum5);
        document.getElementById('stock_fob_price_print_yen').value =fobsum;
     
        var cnf= $('input[name="inspection"]:checked').val();
     if(cnf == 'NO')
     {
        document.getElementById('stock_cnf_price_print_yen').value =0;
        document.getElementById('stock_cnf_price_print_dollar').value =0;
     }
     if(cnf == 'YES')
     {
        var cnfsum= parseInt(sum1)+parseInt(sum2)+parseInt(sum3)+parseInt(sum4)+parseInt(sum5);
        document.getElementById('stock_cnf_price_print_yen').value = cnfsum;
        
     }
    }); 
});
</script>
<script>
    $(document).ready(function() {
       
       
        $("#lr").change(function () {
            $("#shows").show();
            $("#showt").show(); 
            $("#showu").show();  
            $("#showv").show();
            $("#showw").show();
            $("#showx").show();
            $("#showy").show();
        });
});
</script>
<script>
    $(document).ready(function() {
    $("#btnconvert").click(function(){
      
        var fobyen = document.getElementById('stock_fob_price_print_yen').value;
        // if (isNaN(document.getElementById('stock_fob_price_print_yen').value)) {  
        //     fobyen=0; 
        //     }  
        var dollarrate = document.getElementById('stock_con_rate').value;
       
        var fobdollar= parseInt(fobyen) / dollarrate;
        document.getElementById('stock_fob_price_print_dollar').value =fobdollar;
     
        var cnfyen = document.getElementById('stock_cnf_price_print_yen').value;
         if (isNaN(document.getElementById('stock_cnf_price_print_yen').value)) {  
             cnfyen=0; 
            }  
            var cnfdollar= parseInt(cnfyen) / dollarrate; 
            document.getElementById('stock_cnf_price_print_dollar').value =cnfdollar;
    }); 
});
</script>

    <script>
     function sum1() {
            
            var stock_auction_charges = document.getElementById('stock_auction_charges').value;          
            var stock_rikuso_charges = document.getElementById('stock_rikuso_charges').value;           
            var stock_fob_charges = document.getElementById('stock_fob_charges').value;
            var stock_storage_charges = document.getElementById('stock_storage_charges').value;
            var stock_dhl_charges = document.getElementById('stock_dhl_charges').value;
            var stock_radiation_charges = document.getElementById('stock_radiation_charges').value;
            var stock_thc_charges = document.getElementById('stock_thc_charges').value;
            var stock_vainning_charges = document.getElementById('stock_vainning_charges').value;
            var stock_other_charges = document.getElementById('stock_other_charges').value;
            var resultslab = parseInt(stock_auction_charges) + parseInt(stock_rikuso_charges) +  
            parseInt(stock_fob_charges)+ parseInt(stock_storage_charges) + parseInt(stock_dhl_charges) +  
            parseInt(stock_radiation_charges) + parseInt(stock_thc_charges) + parseInt(stock_vainning_charges) +
             parseInt(stock_other_charges);
            document.getElementById('stock_total_expences').value = resultslab;
            document.getElementById('stock_total_expences_print').value = resultslab;
              
            
            
        }
    </script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/masking-input.js" data-autoinit="true"></script>

<?php
include("bottom.php");
?>
        