<?php  
  
  include("connection_db.php");

  
$setSql = "SELECT `ats_employee_id`,`ats_employee_firstName`,`ats_employee_middleName` FROM `ats_employee`";  
$setRec = mysqli_query($connection, $setSql);  
  
$columnHeader = '';  
$columnHeader = "Sr NO" . "\t" . "User Name" . "\t" . "Password" . "\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  