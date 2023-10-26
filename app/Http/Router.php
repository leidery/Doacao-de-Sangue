<?php

namespace App\Http;

use \Closure;
use \Exception;

class Router{
    // raiz do projeto
    private $url = '';
    private $prefix = '';

    // índice de rotas:
    private $route = [];
    
    // instância de request:
    private $request;

    public function __construct($url){
        $this->request = new Request();
        $this->url     = $url;
        $this->setPrefix();
    }

    private function setPrefix(){
        $parseUrl = parse_url($this->url);

        $this->prefix = $parseUrl['path'] ?? '';
    }

    private function addRoute($method, $route, $params = []){
        foreach ($params as $key => $value) {
            if($value instanceof Closure){
                $params['controller'] = $value;
                unset($params[$key]);
                continue;
            }
        }

        // padrão validação url:
        $patternRoute = str_replace('/','\/',$route);

        $this->routes[$patternRoute][$method] = $params;
    }

    public function get($route, $params = []){
        return $this->addRoute('GET', $route, $params);
    }
    public function post($route, $params = []){
        return $this->addRoute('POST', $route, $params);
    }
    public function put($route, $params = []){
        return $this->addRoute('PUT', $route, $params);
    }
    public function delete($route, $params = []){
        return $this->addRoute('DELETE', $route, $params);
    }

    // retorna URI sem prefixo:
    private function getUri(){
        $uri = $this->request->getUri();

        $xUri = strlen($this->prefix) ? explode($this->prefix, $uri) : [$uri];

        return end($xUri);
    }
    
    // retorna array com dados da rota:
    private function getRoute(){
        $uri = $this->getUri();

        $httpMethod = $this->request->getHttpMethod();

        foreach ($this->routes as $patternRoute => $methods) {

            if (preg_match('/' . $patternRoute . '/', $uri)) {
            // if(preg_match($patternRoute, $uri)){
                if($methods[$httpMethod]){
                    return $methods[$httpMethod];
                }

                throw new  Exception("Método não permitido", 405);
                
            }
        }
        throw new  Exception("URL não encontrada", 404);
    }

    public function run(){
        try {
            $route = $this->getRoute();

            // verifica controlador:
            if(!isset($route['controller'])){
                throw new Exception("URL não processada", 500);
            }

            $args = [];

            return call_user_func_array($route['controller'], $args);

        } catch (Exception $e) {
            return new Response($e->getCode(), $e->getMessage());
        }
    }
}