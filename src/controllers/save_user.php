<?php
session_start();
requireValidSession(true);

$exception = null;
$userData = [];

if(count($_POST) === 0 && isset($_GET['update'])) {
    $user = User::getOne(['id' => $_GET['update']]);
    $userData = $user->getValues();
    $userData['password'] = null;
} elseif(count($_POST) > 0) {
    try {
        $dbUser = new User($_POST);
        if($dbUser->id) {
            $dbUser->update();
            addSuccessMsg('Usuário Alterado com sucesso!!');
            header('Location: users.php');
            exit();
        } else {
            try {
                $dbUser->insert();
                addSuccessMsg('Usuário Cadastrado com sucesso!!');
            }catch (Exception $e) {
                if(strpos($e->getMessage(), "for key 'users.email'")) {
                    addErrorMsg('E-mail já cadastrado');
                } else {
                    $exception = $e;
                }
            }
        }
        $_POST = [];
    }catch(Exception $e) {
        $exception = $e;
    } finally {
        $userData = $_POST;
    }
}

loadTemplateView('save_user', $userData + ['exception' => $exception]);