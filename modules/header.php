
<header class="d-flex flex-row">
	<div class="flex-column col-lg-6 text-start top-icons">
			<ul>
				<li><a href="#">
					<i class="bi bi-facebook"></i>
				</a></li>
				<li><a href="#">
					<i class="bi bi-instagram"></i>
				</a></li>
				<li><a href="#">
					<i class="bi bi-youtube"></i>
				</a></li>
			</ul>
	</div>
	<div class="flex-column col-lg-6 flex-end top-icons">
		<ul>
			<!-- Login - sim/não -->
			<?php 

			if (isset($_SESSION['log_id'])) {
				echo '<li><a href="?nav=user&opt=cart"><i class="bi bi-cart3"></i></a></li>';
				echo '<li><a href="?nav=account"><i class="bi bi-person-fill"></i></a></li>';
				echo '<li><a href="sair.php">Sair</a></li>';
			} else {
				echo '<li><a href="?nav=login"><i class="bi bi-person"></i> Conta</a></li>';
			}
			
			?>
		</ul>
	</div>
</header>
	
