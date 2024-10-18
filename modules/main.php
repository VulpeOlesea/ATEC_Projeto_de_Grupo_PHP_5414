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


<!-- Modal --
<div class="modal" id="edicao_conta_utilizador" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form method="post">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Editar Utilizador</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="formulario_edicao">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
  		</form>
    </div>
  </div>
</div> -->
