<?php

//Todas as funções 

session_start();

// Contas
include 'functions/function_login.php';
include 'functions/function_registration.php';
include 'functions/function_edit_user.php';
/*include 'functions/function_role_account.php'; //TODO - Erro
include 'functions/function_status_account.php'; //TODO - Erro

*/

// Utilizadores
include 'functions/function_list_users.php';

//Categorias
include 'functions/function_list_categories.php';
include 'functions/function_new_category.php';
include 'functions/function_edit_category.php';
include 'functions/function_delete_category.php';
include 'functions/function_select_categories.php';
/*include 'functions/function_filter_categories.php';*/

// Produtos
include 'functions/function_section_products.php';
include 'functions/function_new_product.php';
include 'functions/function_count_products.php';
/*include 'functions/function_delete_product.php';*/ //TODO - Erro 


// Info geral
include 'functions/function_section_banner.php';
include 'functions/function_info_general.php';
include 'functions/function_form_info_general.php';

// Footer
include 'functions/function_footer_contacts.php';

?>