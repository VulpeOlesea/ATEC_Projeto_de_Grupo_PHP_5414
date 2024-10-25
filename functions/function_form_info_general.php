<?php 

function function_form_info_general(){
	include 'connections/config.php';
	$q = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM info_general WHERE info_id = 1"));
	echo '
	<div class="flex-column col-lg-6 col-sm-6">
		<div style="width: 90%;">
			<label>Telefone: </label>
			<input type="text" name="info_telephone" class="form-control" value="'.$q["info_telephone"].'">
			<label>Email: </label>
			<input type="email" name="info_email" class="form-control" value="'.$q["info_email"].'">
			<label>Titulo: </label>
			<input type="text" name="info_title" class="form-control" value="'.$q["info_title"].'">	
			<hr>
			<label>Descrição: </label>
			<textarea name="info_description" class="form-control"> '.$q["info_description"].'</textarea>
		</div>
	</div>
		<div class="flex-column col-lg-6 col-sm-6">
			<img src="img/'.$q["info_banner"].'" style="width:50%; height:auto;"><br>
			<label>Banner</label>
			<input type="file" name="info_banner" class="form-control" accept="image/png, image/jpg, application/pdf">

			<button type="submit" name="bt_info" class="form-control mt-2">Inserir</button>
		</div>

	';
}

?>