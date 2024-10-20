<?php 
function function_edit_user($log_id, $usr_name, $usr_surname, $usr_district, $usr_concelho){
	include 'connections/config.php';

	$usr_name = mysqli_real_escape_string($conn, $usr_name);
    $usr_surname = mysqli_real_escape_string($conn, $usr_surname);
    $usr_district = mysqli_real_escape_string($conn, $usr_district);
    $usr_concelho = mysqli_real_escape_string($conn, $usr_concelho);
	
	mysqli_query($conn, "UPDATE users SET usr_name = '$usr_name', usr_surname = '$usr_surname', usr_district = '$usr_district', usr_concelho = '$usr_concelho' WHERE usr_log_id = '$log_id'");
	echo '<meta http-equiv="refresh" content="0;url=index.php?nav=admin&opt=users">';	
}

?>