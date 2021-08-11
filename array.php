<?php
include("top.php");
include("connection_db.php");
$query="select * from ats_car_stocK WHERE ";
if(trim($_GET['stock_agent_name']) && trim($_GET['get_stock_rec_no']))
{
    $customer_sell=mysqli_query($connection,"select distinct recordno from ats_stock_reservation where agent_name='".$_GET['stock_agent_name']."'");
    $projects = array();
    while($arrayuas=mysqli_fetch_array($customer_sell))
    {
        
        array_push($projects,$arrayuas[0]);
    }

    $recno=$_GET['get_stock_rec_no'];
    if (in_array($recno, $projects))
  {
    $query.="ats_car_stock_rec_no LIKE '".$_GET['get_stock_rec_no']."' ";
    echo "found";
  }
else
  {
    $usersStr = implode(',', $projects);
    $query.="ats_car_stock_rec_no in ($usersStr) ";
    print_r($projects);

  }
  
}
?>