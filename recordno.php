<?php 
include("connection_db.php");
if(isset($_POST['project_id']))
{
    $query=mysqli_query($connection,"select * from ats_car_stock where project='".$_POST['project_id']."' ORDER BY ats_car_stock_id DESC LIMIT 1");
    $queryreocrd=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where project='".$_POST['project_id']."' ORDER BY ats_car_stock_id DESC LIMIT 1"));
    $num_rows = mysqli_num_rows($query);

    if($num_rows>0)
    {
         
        
        $data = $queryreocrd[1];;    
        $first1 = substr($data, strpos($data, "-") + 1);
        $arr = explode("-", $data, 2);
    
       $first= (int)$first1+1;
       $second= $arr[0];
       echo $second."-".$first;

    }
    else
    {
        echo $_POST['project_id']."287-101";
    }
    
}
?>