
<nav class="d-flex flex-row">
	<div class="flex-column col-lg-2 text-start logo">
		<a href="index.php">Online<i class="bi bi-feather"></i>EDITORA</a>
	</div>

	<div class="flex-column col-lg-10 flex-end top-icons">
		<?php 

		if (isset($_SESSION["log_role"])) {
			if($_SESSION["log_role"] == 0){
				//Menu do utilizador
				echo '<nav class="user_nav">';
					echo '<ul>';
						echo '<li><a href="index.php">Home</a></li>';
						echo '<li><a href="?nav=user&opt=profile">Perfil</a></li>';
					echo '</ul>';
				echo '</nav>';
			}else{
				//Menu do administrador
				echo '<nav class="admin_nav">';
					echo '<ul>';
						echo '<li><a href="index.php">Home</a></li>';
						echo '<li><a href="?nav=admin&opt=users">Utilizadores</a></li>';
						echo '<li><a href="?nav=admin&opt=user_reg">Registo do utilizador</a></li>';
						echo '<li><a href="?nav=admin&opt=categories">Categorias</a></li>';
						echo '<li><a href="?nav=admin&opt=products">Produtos</a></li>';
						echo '<li><a href="?nav=admin&opt=info">Informações gerais</a></li>';
					echo '</ul>';
				echo '</nav>';
			}
		}
		?>
</nav>



	