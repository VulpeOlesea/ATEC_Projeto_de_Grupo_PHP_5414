<?php 

$log_id = $_REQUEST['log_id'];
include 'connections/config.php';
$q = mysqli_query($conn, "SELECT login.*, users.* FROM login JOIN users ON login.log_id = users.usr_log_id WHERE log_id = '$log_id'");
$a = mysqli_fetch_array($q);

echo '
<div class="form-group mb-4">
	<label for="usr_name" class="form-control-sm">Nome:</label>
	<input type="text" class="form-control" name="usr_name" id="usr_name" value="'.$a["usr_name"].'" placeholder="Nome">
</div>
<div class="form-group mb-4">
	<label for="usr_surname" class="form-control-sm">Sobrenome:</label>
	<input type="text" class="form-control" name="usr_surname" id="usr_surname" value="'.$a["usr_surname"].'" placeholder="Sobrenome">
</div>
<div class="form-group mb-4">
	<label for="log_email" class="form-control-sm">Email:</label>
	<input type="text" class="form-control" name="log_email" id="log_email" value="'.$a["log_email"].'" placeholder="Email">
</div>
';

?>