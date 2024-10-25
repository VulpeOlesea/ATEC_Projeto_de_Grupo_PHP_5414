<?php 

$log_id = $_REQUEST['log_id'];
include '../connections/config.php';
$q = mysqli_query($conn, "UPDATE login SET log_role = (log_role-1)* -1 WHERE log_id = '$log_id'");

?>