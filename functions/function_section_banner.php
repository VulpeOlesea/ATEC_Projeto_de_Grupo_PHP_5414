<?php 

function function_section_banner(){
	include 'connections/config.php';
	$q = mysqli_query($conn,"SELECT info_banner, info_title, info_description FROM info_general");
	$a = mysqli_fetch_array($q);
	echo '
	<section>
	<div class="d-flex flex-row">
		<div class="col-lg-12 col-sm-12">
			<img src="img/'.$a["info_banner"].'">
		</div>
		<div class="col-lg-6 col-sm-6">
			<h3>'.$a["info_title"].'</h3>
			<p>'.$a["info_description"].'</p>
		</div>
	</div>
	</section>';


}


?>