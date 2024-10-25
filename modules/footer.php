<footer class="d-flex flex-row justify-content-between py-3">
	
	<div class="flex-column col-lg-4">
		Online<i class="bi bi-feather"></i>EDITORA
	</div>
	<div class="flex-column col-lg-4">
		Contactos<br>
		<?php function_footer_contacts(); ?>
	</div>
	<div class="flex-column col-lg-4 d-flex justify-content-end top-icons">
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
					location.reload();
				}
			});
		});
		$(".makeusr").click(function(){
			var log_id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "functions/function_role_account.php",
				dataType: "text",
				data:{"log_id": log_id},
				success: function(response){
					location.reload();
				}
			});
		});
		$(".editar").click(function(){
			var log_id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "functions/function_status_account.php",
				dataType: "text",
				data:{"log_id": log_id},
				success: function(response){
					$("#formulario_edicao").html(response);
				}
			});
		});

		$("#filtro_categorias").change(function(){
			var cat_id = $("#filtro_categorias option:selected").attr('value');
			$.ajax({
				type: "POST",
				url: "functions/function_filter_categories.php",
				dataType: "text",
				data:{"cat_id": cat_id},
				success: function(response){
					$("#adm_lista_produtos").html(response);
				}
			});
		});

        $(".add-to-cart").click(function(){
            var prod_id = $(this).data('prod-id');
			var prod_image = $(this).data('prod-image');
            var prod_name = $(this).data('prod-name');
            var prod_price = $(this).data('prod-price');

            $.ajax({
                type: "POST",
                url: "functions/function_add_to_cart.php", 
                data: {
                    prod_id: prod_id,
					prod_image: prod_image,
                    prod_name: prod_name,
                    prod_price: prod_price
                },
                success: function(response){
                    alert("Produto adicionado ao carrinho!"); 
                }
            });
        });

		$("#search").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#table_search tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
    });

</script>

</body>
</html>