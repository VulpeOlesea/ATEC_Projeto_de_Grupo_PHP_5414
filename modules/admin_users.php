<div class="d-flex flex-row row-m">
	<div class="col-lg-12 col-sm-12">
		<table class="table">
  			<thead class="table-dark">
    			<th>Nome</th>
				<th>Sobrenome</th>
				<th>Email</th>
				<th>Distrito</th>
				<th>Concelho</th>
				<th>Último acesso</th>
				<th>Perfil</th>
				<th>Desativar</th>
				<th>Alterações</th>			
  			</thead>
			<tbody>
				<?php function_list_users(); ?>
			</tbody>
		</table>
	</div>
</div>

<div class="d-flex flex-row row-m">
	<div class="col-lg-6 col-sm-6">
        <?php 
        if(isset($_REQUEST["edit"])){
            include 'connections/config.php';
            $edit = $_REQUEST["edit"];

            $q = mysqli_fetch_array(mysqli_query($conn,"SELECT usr_name, usr_surname, usr_district, usr_concelho FROM users WHERE usr_log_id = '$edit'"));
            
            echo '
            <h3>Editar Utilizador</h3>
            <form method="post">
                <input type="hidden" name="usr_log_id" value="'.$edit.'">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="usr_name" value="'.$q["usr_name"].'" class="form-control">
                </div>
                <div class="form-group">
                    <label>Sobrenome:</label>
                    <input type="text" name="usr_surname" value="'.$q["usr_surname"].'" class="form-control">
                </div>
                <div class="form-group">
                    <label>Distrito:</label>
                    <input type="text" name="usr_district" value="'.$q["usr_district"].'" class="form-control">
                </div>
                <div class="form-group">
                    <label>Concelho:</label>
                    <input type="text" name="usr_concelho" value="'.$q["usr_concelho"].'" class="form-control">
                </div><br>
                <button type="submit" name="bt_edit_user" class="btn btn-primary">Salvar</button>
            </form>';
        }

        if(isset($_POST["bt_edit_user"])){
            function_edit_user($_POST["usr_log_id"], $_POST["usr_name"], $_POST["usr_surname"], $_POST["usr_district"], $_POST["usr_concelho"]);
        }
        ?>
    </div>
</div>



