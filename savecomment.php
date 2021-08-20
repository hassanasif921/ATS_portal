<?php
include_once "connection_db.php";

$sql = "update tbl_comment set status='EDITED', comment='" . $_POST["value"] . "' where id=" . $_POST["id"];
if (mysqli_query($connection, $sql))
    echo "true";
else
    echo "false";
?>