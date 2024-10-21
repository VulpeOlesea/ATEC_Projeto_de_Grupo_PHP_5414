<form method="post" enctype="multipart/form-data">
<section class="d-flex flex-row row-m">
		<?php 
		function_form_info_general();
		
		if(isset($_POST["bt_info"])){
			function_info_general($_POST["info_telephone"],$_POST["info_email"],$_POST["info_title"],$_POST["info_description"]);
			}
		?>
		
</section>
</form>