<?php

class App{
    private $controller;
    private $method;
    private $params;

    public function __construct()
    {
        $url = $this->getSettingsFromUrl();
        $this->controller = $this->getControllerFromUrl($url);
        $this->method = $this->getMethodFromUrl($url);
        $this->params = $this->getParamsFromUrl($url);

        if(isset($_POST) && $_POST){
            $this->params['$_POST'] = $_POST;
        }

        call_user_func([$this->controller, $this->method], $this->params);
    }

    public function getSettingsFromUrl(){
        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_splice($url, 0, 2);
        return $url;
    }

    public function getControllerFromUrl($url){
        if(file_exists('../Application/controllers/'.$url[0].'.php')){
            require '../Application/controllers/'.$url[0].'.php';
            return new $url[0];
        }else{
            echo 'n existe';
            exit;
        }
    }

    public function getMethodFromUrl($url){
        if(isset($url[1]) && method_exists($this->controller, $url[1])){
            return $url[1];
        }else{
            echo 'n existe este metodo';
            exit;
        }
    }

    public function getParamsFromUrl($url){
        if(count($url) > 2 && $url[2] != '' ){
            $params = $url;
            array_splice($params, 0, 2);
            
            return $params;
        }

        return [];
    }
}