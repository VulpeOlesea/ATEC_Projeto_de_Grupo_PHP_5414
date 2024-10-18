<footer class="d-flex flex-row">
	
	<div class="flex-column col-lg-4">
		Online<i class="bi bi-feather"></i>EDITORA
	</div>
	<div class="flex-column col-lg-4">
		Contactos<br>
		<?php function_footer_contacts(); ?>
	</div>
	<div class="flex-column col-lg-4 flex-end top-icons">
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

</footer>


<script>
	$(document).ready(function(){

		$(".ativa").click(function(){
			var log_id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "functions/function_status_account.php",
				dataType: "text",
				data:{"log_id": log_id},
				success: function(response){
					//alert(response);
					location.reload();
				}
			});
		});
		$(".inativa").click(function(){
			var log_id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "functions/function_status_account.php",
				dataType: "text",
				data:{"log_id": log_id},
				success: function(response){
					//alert(response);
					location.reload();
				}
			});
		});
		$(".makeusr").click(function(){
			var log_id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "functions/function_status_account.php",
				dataType: "text",
				data:{"log_id": log_id},
				success: function(response){
					//alert(response);
					location.reload();
				}
			});
		});
		$(".editar").click(function(){
			var log_id = $(this).attr('id');
			//alert(log_id);
			$.ajax({
				type: "POST",
				url: "functions/function_status_account.php",
				dataType: "text",
				data:{"log_id": log_id},
				success: function(response){
					//alert(response);
					//location.reload();
					$("#formulario_edicao").html(response);
				}
			});
		});

		$("#filtro_categorias").change(function(){
			var cat_id = $("#filtro_categorias option:selected").attr('value');
			//alert(cat_id);
			$.ajax({
				type: "POST",
				url: "functions/function_status_account.php",
				dataType: "text",
				data:{"cat_id": cat_id},
				success: function(response){
					//alert(response);
					//location.reload();
					$("#adm_lista_produtos").html(response);
				}
			});
		});


	});

</script>

</body>
</html>