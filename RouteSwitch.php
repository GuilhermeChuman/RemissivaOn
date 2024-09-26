<?php

abstract class RouteSwitch
{
    protected function login()
    {
        require __DIR__ . '/Views/Login/login.php';
    }

    protected function meuUsuario()
    {
        require __DIR__ . '/Views/Header/header.php';
        require __DIR__ . '/Views/MeuUsuario/meuUsuario.php';
    }

    protected function cadEstudante()
    {
        require __DIR__ . '/Views/Header/header.php';
        require __DIR__ . '/Views/CadastroEstudantes/cadastroEstudantes.php';
    }

    protected function cadUsuarios()
    {
        require __DIR__ . '/Views/Header/header.php';
        require __DIR__ . '/Views/CadastroUsuarios/cadastroUsuarios.php';
    }

    protected function fetchEstudante()
    {
        require __DIR__ . '/Views/Header/header.php';
        require __DIR__ . '/Views/RelacaoEstudantes/relacaoEstudantes.php';
    }

    protected function fetchUsuarios()
    {
        require __DIR__ . '/Views/Header/header.php';
        require __DIR__ . '/Views/RelacaoUsuarios/relacaoUsuarios.php';
    }
    
    public function __call($name, $arguments)
    {
        http_response_code(404);
        require __DIR__ . '/Views/404/404.php';
    }
}

?>