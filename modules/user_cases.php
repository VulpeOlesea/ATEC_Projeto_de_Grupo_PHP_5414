<?php 
	@$opt = $_REQUEST['opt'];
	switch ($opt) {
		case 'profile':
			include 'user_profile.php';
			break;
		case 'cart':
			include 'user_cart.php';
			break;
	}
?>