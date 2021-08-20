<?php
include_once "connection_db.php";


$sql="DELETE FROM `comment_like` WHERE like_userid='".$_POST['userid']."' AND role='".$_POST['role']."' AND comment_id='".$_POST['id']."'";
if (mysqli_query($connection, $sql))
    echo "true";
else
    echo "false";
?>