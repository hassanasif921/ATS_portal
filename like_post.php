<?php
include_once "connection_db.php";

$sql = "INSERT INTO table_post_like(userid, role, post_id) VALUES ('".$_POST['userid']."','".$_POST['role']."','".$_POST['id']."')";
if (mysqli_query($connection, $sql))
    echo "true";
else
    echo "false";
?>