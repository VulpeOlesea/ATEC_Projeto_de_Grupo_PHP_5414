<div class="d-flex flex-row row-m">
	<div class="col-lg-6 col-sm-6">
        <h3>Criar Novo Utilizador</h3>

        <form method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input class="form-control" id="inputFirstName" type="text" placeholder="Nome" name="usr_name" required />
                <label for="inputFirstName">Nome</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputLastName" type="text" placeholder="Sobrenome" name="usr_surname" required />
                <label for="inputLastName">Sobrenome</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputEmail" type="text" placeholder="Email" name="log_email" required />
                <label for="inputEmail">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputDistrito" type="text" placeholder="Distrito" name="usr_district"/>
                <label for="inputDistrito">Distrito</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputConcelho" type="text" placeholder="Concelho" name="usr_concelho"/>
                <label for="inputConcelho">Concelho</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="log_password"/>
                <label for="inputPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirmar Password" name="password_check"/>
                <label for="inputPasswordConfirm">Confirmar Password</label>
            </div>
            <button class="btn btn-primary btn-block" type="submit" name="bt_registration">Criar Conta</button>
        </form>

        <?php
            if(isset($_POST["bt_registration"])){
                function_registration($_POST['usr_name'], $_POST['usr_surname'], $_POST['log_email'], $_POST['usr_district'], $_POST['usr_concelho'], $_POST['log_password'], $_POST['password_check']);
            }
        ?>
    </div>
