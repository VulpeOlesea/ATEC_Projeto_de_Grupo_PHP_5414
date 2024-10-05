<header class="d-flex flex-row">
	<div class="flex-column col-lg-6">
		OnlineEditora
	</div>
	<div class="flex-column col-lg-6 flex-end top-icons">
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
			
			<!-- Login - sim/não -->
				<?php 
				if(!$_SESSION["log_id"]){
					echo '<li><a href="?nav=login"><i class="bi bi-person"></i></a></li>';
				}else{
					echo '<li><a href="#"><i class="bi bi-cart3"></i></a></li>';
					echo '<li><a href="?nav=account"><i class="bi bi-person-fill"></i></a></li>';
					echo '<li><a href="sair.php">Sair</a></li>';
				}
				?>
		</ul>
	</div>
</header>
	
