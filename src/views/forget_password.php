<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/forget_password.css">
    <title>In N' Out</title>
</head>
<body>
    <form class="form-login" action="" method="post">
        <div class="login-card card">
            <div class="card-header">
                <span>Recuperar senha</span>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="form-floating mt-2">
                        <input type="text" name="emai" id="email" class="form-control" placeholder="email">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" name="password" id="password" class="form-control" placeholder="password">
                        <label for="password">Nova Senha</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" name="confirm_password" id="confirm_password" class="form-control" placeholder="confirm_password">
                        <label for="confirm_password">Confirmar Senha</label>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Recuperar senha</button>
            </div>
            <div class="forget">
                <a href="login.php">Voltar a tela de login</a>
            </div>
        </div>
    </form>
</body>
</html>