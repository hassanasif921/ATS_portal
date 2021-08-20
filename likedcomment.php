<?php
include_once "connection_db.php";

$sql = "INSERT INTO comment_like(like_userid, role, comment_id) VALUES ('".$_POST['userid']."','".$_POST['role']."','".$_POST['id']."')";
if (mysqli_query($connection, $sql))
    echo "true";
else
    echo "false";
?>