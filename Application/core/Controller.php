<?php

namespace Application\core;

class Controller{
    public function model($model){
        require "../Application/models/$model.php";
        return new $model;
    }

    public function view($view, $data = []){
        require "../Application/views/$view.php";
    }
}