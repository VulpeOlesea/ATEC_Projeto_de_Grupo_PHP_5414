<?php

function function_login($log_email, $log_password){
	include 'connections/config.php';
	$log_email = mysqli_real_escape_string($conn,$log_email); 
	$log_password = mysqli_real_escape_string($conn,$log_password);

	$log_password = base64_encode($log_password);

	$q = mysqli_query($conn,"SELECT log_email, log_password, log_role, log_id FROM login WHERE log_email = '$log_email' AND log_password = '$log_password' AND log_status = 1");
	$check = mysqli_num_rows($q); 
	if($check == 0){
		echo 'Erro. Utilizador ou Password Errados';
	}else{
		$a = mysqli_fetch_array($q);

		// Existe Utilizador
		$_SESSION["log_email"] =  $a["log_email"];
		$_SESSION["log_role"] = $a["log_role"];
		$_SESSION["log_id"] = $a["log_id"];

		// A última data de login
		$log_id = $a["log_id"];
        $current_time = date('Y-m-d H:i:s');
        mysqli_query($conn, "UPDATE users SET usr_last_access = '$current_time' WHERE usr_log_id = '$log_id'");

		echo '<meta http-equiv="refresh" content="0;url=index.php">';
	}
}

?>