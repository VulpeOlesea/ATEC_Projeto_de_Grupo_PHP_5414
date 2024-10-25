<div class="d-flex flex-row row-m">
	<div class="col-lg-6 col-sm-6">
		<h3> Produtos Existentes (<?php count_products(); ?>)</h3>
		<h4>Selecione uma categoria para ver os produtos</h4>
		
			<select class="form-control" id="filtro_categorias" name="filtro_categorias" style="width: 90%;">
				<?php function_select_categories(0); ?>
			</select><br>

		<table class="table" style="width: 90%;">
			<thead class="table-dark">
				<th>Imagem</th>
				<th>Nome</th>
				<th>Preço</th>
				<th>Alterações</th>
			</thead>
			<tbody id="adm_lista_produtos">
			<?php
                function_all_products(0,0);
            ?>
			</tbody>
		</table>
	</div>
	<div class="col-lg-6 col-sm-6">

	<?php 
	@$edit = $_REQUEST["edit"];
	if(!$edit){
		echo '
		<h3>Criar Novo Produto</h3>
			<form method="post" enctype="multipart/form-data">
				<div class="form-floating mb-3">
					<input class="form-control" id="prod_name" type="text" placeholder="Título do livro" name="prod_name" required />
					<label for="prod_name">Título do livro</label>
				</div>
				<div class="form-floating mb-3">
					<input class="form-control" id="prod_author" type="text" placeholder="Autor do livro" name="prod_author" required />
					<label for="prod_author">Autor do livro</label>
				</div>
				<div class="form-floating mb-3">
					<input class="form-control" id="prod_price" type="text" placeholder="Preço do Produto" name="prod_price" required />
					<label for="prod_price">Preço do Produto</label>
				</div>
				<div class="form-floating mb-3">
					<input class="form-control" id="prod_description" type="text" placeholder="Descrição do Produto" name="prod_description"/>
					<label for="prod_description">Descrição do Produto</label>
				</div>
				<div class="form-floating mb-3">
					<select class="form-control" id="prod_category" name="prod_category" required>
						'; function_select_categories(0); 
					echo'
					</select>
					<label for="prod_category">Categoria do Produto</label>
				</div>
				<div class="form-floating mb-3">
					<input type="file" name="prod_image" class="form-control" accept="image/png, image/jpg">
					<label for="prod_image">Foto Produto</label>
				</div>
				<button class="btn btn-primary" type="submit" name="bt_novo_produto">Criar</button>
			</form>
		';
	}else{
		include 'connections/config.php';
		$q = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM products WHERE prod_id = '$edit'"));
		echo '
		<h3>Editar Produto</h3>
			<form method="post" enctype="multipart/form-data">
				<div class="form-floating mb-3">
					<input class="form-control" id="prod_name" type="text" value="'.$q["prod_name"].'" name="prod_name" required />
					<label for="prod_name">Título do livro</label>
				</div>
				<div class="form-floating mb-3">
					<input class="form-control" id="prod_author" type="text" value="'.$q["prod_author"].'" name="prod_author" required />
					<label for="prod_author">Autor do livro</label>
				</div>
				<div class="form-floating mb-3">
					<input class="form-control" id="prod_price" type="text" value="'.$q["prod_price"].'" name="prod_price" required />
					<label for="prod_price">Preço do Produto</label>
				</div>
				<div class="form-floating mb-3">
					<input class="form-control" id="prod_description" type="text" value="'.$q["prod_description"].'" name="prod_description"/>
					<label for="prod_description">Descrição do Produto</label>
				</div>
				<div class="form-floating mb-3">
					<select class="form-control" id="prod_category" name="prod_category" required>
						'; function_select_categories($q["prod_category"]); 
						echo'
					</select>
					<label for="prod_category">Categoria do Produto</label>
				</div>
				<div class="form-floating mb-3">
					<input type="file" name="prod_image" class="form-control" accept="image/png, image/jpg">
					<label for="prod_image">Foto Produto</label>
				</div>
				<button class="btn btn-primary" type="submit" name="bt_editar_produto">Atualizar</button>
			</form>
		';
	}
	
			if(isset($_POST['bt_novo_produto'])){
				function_new_product($_POST['prod_name'], $_POST['prod_author'], $_POST['prod_price'], $_POST['prod_description'], $_POST['prod_category'], $_POST['prod_image']);
			}
			

			?>
			
		</div>
	</div>
