<main>
	<?php 
	@$nav = $_REQUEST['nav'];
	switch ($nav) {
		case 'login':
			include 'modules/mod_login.php';
			break;
		case 'recover':
			include 'modules/mod_recover.php';
			break;
		case 'registration':
			include 'modules/mod_registration.php';
			break;
		case 'user':
			include 'modules/user_cases.php';
			break;
		case 'admin':
			include 'modules/admin_cases.php';
			break;
		default:
			include 'modules/mod_homepage.php';
			break;
	}

	?>
</main>