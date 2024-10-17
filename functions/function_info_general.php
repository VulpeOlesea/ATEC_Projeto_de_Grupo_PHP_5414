<?php 

function function_info_general($info_telephone,$info_email,$info_title,$info_description,$info_banner){
	include 'connections/config.php';

	$banner = $_FILES["info_banner"]["name"];
	$temp = explode(".", $_FILES["info_banner"]["name"]);
	$newbanner = round(microtime(true)) . '.' . end($temp);

	move_uploaded_file($_FILES["info_banner"]["tmp_name"], 'img/'.$newbanner);

	$verifica = $_FILES['info_banner']['size'];

	$q = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM info_general WHERE info_id = 1"));
	
	if($verifica == 0){
		mysqli_query($conn, "UPDATE info_general SET info_telephone = '$info_telephone', info_email = '$info_email', info_title = '$info_title', info_description = '$info_description' WHERE info_id = 1");
	}else{
		mysqli_query($conn, "UPDATE info_general SET info_telephone = '$info_telephone', info_email = '$info_email', info_title = '$info_title', info_description = '$info_description', info_banner = '$newbanner' WHERE info_id = 1");
	}
	echo '<meta http-equiv="refresh" content="0;url=index.php?nav=admin&opt=info">';
}

?>