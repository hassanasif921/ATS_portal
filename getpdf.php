<?php 
include "connection_db.php";
$query = "select ats_car_stock_ship_order_file from ats_car_stock where ats_car_stock_id = 11";
    $result1 = mysqli_query($connection,$query);
    $result=mysqli_fetch_array($result1);
    $content=$result[0];
?>
<object data="data:application/pdf;base64,<?php echo base64_encode($content) ?>" type="application/pdf" style="height:200px;width:60%"></object>
