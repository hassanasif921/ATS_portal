<?php 
    include("connection_db.php");
    $id=$_GET['id'];
    $type="NIC-Pic";
    $insert1del = "delete FROM employeecnic WHERE images_type='Res-Pic' AND ats_emp_id=".$id;         
    $iquerydel = mysqli_query($connection,$insert1del);
    while($row=mysqli_fetch_array($iquerydel)){
        echo $row[0];
        echo ",";
    }
    if($iquerydel){
        echo "done";
    }
    else{
        echo mysqli_error($connection);
    }
?>