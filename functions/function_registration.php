<?php

function function_registration($usr_name, $usr_surname, $log_email, $usr_district, $usr_concelho, $log_password, $password_check){
	include 'connections/config.php';
	$usr_name = mysqli_real_escape_string($conn, $usr_name);
	$usr_surname = mysqli_real_escape_string($conn, $usr_surname);
	$log_email = mysqli_real_escape_string($conn, $log_email);
	$usr_district = mysqli_real_escape_string($conn, $usr_district);
	$usr_concelho = mysqli_real_escape_string($conn, $usr_concelho);
	$log_password = mysqli_real_escape_string($conn, $log_password);
	$password_check = mysqli_real_escape_string($conn, $password_check);


	if($log_password == $password_check){
		
		$check = mysqli_fetch_array(mysqli_query($conn,"SELECT log_email FROM login WHERE log_email = '$log_email'"));
		if(!$check){
			$log_password = base64_encode($log_password); 
			mysqli_query($conn, "INSERT INTO login (log_email, log_password) VALUES ('$log_email', '$log_password')");
			$log_id = mysqli_insert_id($conn);
			mysqli_query($conn, "INSERT INTO users (usr_log_id, usr_name, usr_surname, usr_district, usr_concelho) VALUES ('$log_id', '$usr_name', '$usr_surname', '$usr_district', '$usr_concelho')");
			echo 'Conta criada com sucesso!';
		}else{
			echo 'Email já está registado';
		}

	}else{
		echo 'As passwords indicadas não coincidem.';
	}
}

?>