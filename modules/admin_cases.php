<?php 
	@$opt = $_REQUEST['opt'];
	switch ($opt) {
		case 'info':
			include 'admin_info_general.php';
			break;
		case 'users':
			include 'admin_users.php';
			break;
		case 'user_reg':
			include 'admin_user_registration.php';
			break;
		case 'categories':
			include 'admin_categories.php';
			break;
		case 'products':
			include 'admin_products.php';
		break;
	}
?>