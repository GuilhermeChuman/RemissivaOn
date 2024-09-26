<?php

abstract class RouteSwitch
{
    protected function login()
    {
        require __DIR__ . '/Views/Login/login.php';
    }

    protected function cadEstudante()
    {
        require __DIR__ . '/Views/CadastroEstudantes/cadastroEstudantes.php';
    }

    protected function fetchEstudante()
    {
        require __DIR__ . '/Views/RelacaoEstudantes/relacaoEstudantes.php';
    }
    
    protected function __call($name, $arguments)
    {
        http_response_code(404);
        require __DIR__ . '/Views/404/404.php';
    }
}

?>