<?php

require_once __DIR__ . '/RouteSwitch.php';

class Router extends RouteSwitch
{
    public function run(string $requestUri)
    {
        $route = substr($requestUri, 1);

        switch($route){
            case '':
                $this->login();
                break;

            case 'meuUsuario':
                $this->meuUsuario();
                break;
            
            case 'cadUsuario':
                $this->cadUsuarios();
                break;

            case 'relacaoUsuarios':
                $this->fetchUsuarios();
                break;

            case 'cadEstudante':
                $this->cadEstudante();
                break;

            case 'relacaoEstudantes':
                $this->fetchEstudante();
                break;

            default:
                $this->$route();
                break;
        }
    }
}