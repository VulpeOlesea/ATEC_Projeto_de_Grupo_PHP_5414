<?php 

function function_form_info_user(){
	include 'connections/config.php';
	$q = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE usr_log_id = '$usr_log_id'"));
	echo '
	<div class="flex-column col-lg-6 col-sm-6">
        <label>Nome: </label>
        <input type="text" name="usr_name" class="form-control" value="'.$q["usr_name"].'">
        <label>Sobrenome: </label>
        <input type="text" name="usr_surname" class="form-control" value="'.$q["usr_surname"].'">
        <label>Email: </label>
        <input type="text" name="info_email" class="form-control" value="'.$q["info_email"].' placeholder="Disabled input" aria-label="Disabled input example" disabled">
        <label>Distrito: </label>
        <input type="text" name="usr_district" class="form-control" value="'.$q["usr_district"].'">	
        <label>Concelho: </label>
        <input type="text" name="usr_concelho" class="form-control" value="'.$q["usr_concelho"].'">	
        <label>Último acesso: </label>
        <input type="text" name="usr_last_access" class="form-control" value="'.$q["usr_last_access"].' placeholder="Disabled input" aria-label="Disabled input example" disabled">

			<button type="submit" name="bt_info_user" class="form-control mt-2">Editar</button>
	</div>

	';
}

?>