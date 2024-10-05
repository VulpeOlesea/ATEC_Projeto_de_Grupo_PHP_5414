<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                   	<div class="card-body">
                   	    <form method="post">
                   	        <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="log_email"/>
                                <label for="inputEmail">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="log_password"/>
                                <label for="inputPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="?nav=recover">Esqueceu-se da Password?</a>
                                <button class="btn btn-primary" type="submit" name="bt_login">Login</button>
                            </div>
                        </form>
                    </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="?nav=registration">Não tem conta? Registe-se!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    if(isset($_POST['bt_login'])){
        function_login($_POST['log_email'], $_POST['log_password']);
    }
?>