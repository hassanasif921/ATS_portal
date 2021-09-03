<?php
include_once "connection_db.php";


$sql="DELETE FROM table_post_like WHERE userid='".$_POST['userid']."' AND role='".$_POST['role']."' AND post_id='".$_POST['id']."'";

if (mysqli_query($connection, $sql))
    echo "true";
else
    echo "false";
?>