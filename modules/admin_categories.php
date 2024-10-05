<div class="d-flex flex-row">
	<div class="col-lg-6 col-sm-6">
		<h3>Categorias Existentes</h3>
		<table>
			<thead>
				<th>Categoria</th>
				<th></th>
			</thead>
			<tbody>
				<?php 
					function_list_categories();
				?>
			</tbody>
		</table>
	</div>
	<div class="col-lg-6 col-sm-6">

		<?php 
		$edit = $_REQUEST["edit"];
		if(!$edit){
			echo '<h3>Criar Nova Categoria</h3>
					<form method="post">
						<div class="form-floating mb-3">
			                <input class="form-control" id="cat_name" type="text" placeholder="Nome da Categoria" name="cat_name"/>
			                <label for="cat_name">Nome da Categoria</label>
			            </div>
			            <button class="btn btn-primary" type="submit" name="bt_new_category">Criar</button>
					</form>';
		}else{
			include 'connections/config.php';
			$q = mysqli_fetch_array(mysqli_query($conn,"SELECT cat_name FROM categorias WHERE cat_id = '$edit'"));
			echo '<h3>Editar Categoria</h3>
					<form method="post">
						<div class="form-floating mb-3">
							<input type="hidden" name="cat_id" value="'.$edit.'">
			                <input class="form-control" id="cat_name" type="text" value="'.$q["cat_name"].'" name="cat_name"/>
			                <label for="cat_name">Nome da Categoria</label>
			            </div>
			            <button class="btn btn-primary" type="submit" name="bt_edit_category">Editar</button>
					</form>';
		}

		?>
		
		<?php 
		if(isset($_POST["bt_new_category"])){
			function_new_category($_POST["cat_name"]);
		}
		if(isset($_POST["delete_category"])){
			function_delete_category($_POST["cat_id"]);
		}
		if(isset($_POST["bt_edit_category"])){
			function_edit_category($_POST["cat_id"], $_POST["cat_name"]);
		}
		?>
	</div>
</div>
