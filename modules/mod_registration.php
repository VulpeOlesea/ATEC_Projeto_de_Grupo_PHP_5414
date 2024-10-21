<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Criar Conta</h3></div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="usr_name"/>
                                        <label for="inputFirstName">Nome</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="usr_surname"/>
                                        <label for="inputLastName">Sobrenome</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="log_email"/>
                                <label for="inputEmail">Email</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputDistrito" type="text" placeholder="Enter your district" name="usr_district"/>
                                        <label for="inputDistrito">Distrito</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputConcelho" type="text" placeholder="Concelho" name="usr_concelho"/>
                                        <label for="inputConcelho">Concelho</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name="log_password"/>
                                        <label for="inputPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="password_check"/>
                                        <label for="inputPasswordConfirm">Confirmar Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-block" type="submit" name="bt_registration">Criar Conta</button>
                                </div>
                            </div>
                        </form>
                        <?php 
                        if(isset($_POST["bt_registration"])){
                            function_registration($_POST['usr_name'], $_POST['usr_surname'], $_POST['log_email'], $_POST['usr_district'], $_POST['usr_concelho'], $_POST['log_password'], $_POST['password_check']);
                        }
                        ?>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="?nav=login">Já tem conta? Faça Login!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>