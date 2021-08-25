<?php

    session_start();

    $usuario_autenticado = false;
    $usuario_id = null;

    $usuarios_app = [
        ['id' => 1, 'email' => 'adm@teste', 'senha' => '123'],
        ['id' => 2, 'email' => 'user@teste', 'senha' => '123'],
    ];

    foreach($usuarios_app as $user){
        $user['email'];
        $user['senha'];

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }

    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }


?>