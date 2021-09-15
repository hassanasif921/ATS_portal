<?php
// Finds all server sessions
session_start();

session_destroy();
header("Location:customer-login.php");
?>