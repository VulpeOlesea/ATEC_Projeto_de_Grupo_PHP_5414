<?php 

function function_list_users(){
	include 'connections/config.php';
	$q = mysqli_query($conn,"SELECT login.log_id, login.log_email, login.log_role, login.log_status, users.usr_name, users.usr_surname, users.usr_district, users.usr_concelho, users.usr_last_access FROM login JOIN users ON login.log_id = users.usr_log_id");
	while($a = mysqli_fetch_array($q)){
		echo '
		<tr>
			<td>'.$a["usr_name"].'</td>
			<td>'.$a["usr_surname"].'</td>
			<td>'.$a["log_email"].'</td>
			<td>'.$a["usr_district"].'</td>
			<td>'.$a["usr_concelho"].'</td>
			<td>'.$a["usr_last_access"].'</td>
			<td>';
				if($a["log_role"] == 1){
					echo 'Admin <a href="#" class="makeusr" id="'.$a["log_id"].'"><i class="bi bi-person-fill-dash"></i></a>';
				}else{
					echo 'User <a href="#" class="makeusr" id="'.$a["log_id"].'"><i class="bi bi-person-fill-add"></i></a>';
				}
			echo '</td>
			<td>';
			if($a["log_status"] == 0){
				echo '<a href="#" class="inativa" id="'.$a["log_id"].'"><i class="bi bi-person-fill"></i></a>';
			}else{
				echo '<a href="#" class="ativa" id="'.$a["log_id"].'"><i class="bi bi-person-fill-slash"></i></a>';
			}	
			echo'</td>
			<td>
				<a href="?nav=admin&opt=users&edit='.$a["log_id"].'" class="btn btn-primary editar">Editar</a>
			</td>
		</tr>
		';
	}
}

?>


