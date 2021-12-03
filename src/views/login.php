<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>In N' Out</title>
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling mr-2"></i>
                <span class="font-weight-light">In </span>
                <span class="font-weight-bold mx-1">N'</span>
                <span class="font-weight-light">Out</span>
                <i class="icofont-runner-alt-1 ml-2"></i>
            </div>
            <div class="card-body">
                <?php include(TEMPLATE_PATH . '/messages.php') ?>
                <div class="form-group">
                    <div class="form-floating">
                        <input type="email" name="email" id="email" 
                        class="form-control <?= isset($errors) ? ($errors['email'] ? 'is-invalid' : '') : ''?>"  
                        value="<?= isset($email) ? $email : '' ?>" 
                        placeholder="Informe o e-mail" 
                        autofocus>
                        <label for="email">E-mail</label>
                        <div class="invalid-feedback">
                            <?= isset($errors) ? $errors['email'] : '' ?>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <div class="form-floating">
                        <input type="password" name="password" id="password" class="form-control 
                        <?= isset($errors) ? ($errors['password'] ? 'is-invalid' : '') : '' ?>" placeholder="Informe a senha">
                        <label for="password">Senha</label>
                        <div class="invalid-feedback">
                            <?= isset($errors) ? $errors['password'] : ''?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success btn-lg btn-block">Entrar</button>
            </div>
            <div class="forget">
                <a href="forget_password.php">Esqueceu a senha?</a>
            </div>
        </div>
    </form>

</body>
</html>