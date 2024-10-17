<?php 
function function_footer_contacts(){
	include 'connections/config.php';
	$q = mysqli_query($conn,"SELECT info_telephone, info_email FROM info_general");
	$a = mysqli_fetch_array($q);
	echo '
	<i class="bi bi-telephone"></i> '.$a["info_telephone"].'
		<br>
	<i class="bi bi-envelope"></i> '.$a["info_email"].'
	';
}

?>