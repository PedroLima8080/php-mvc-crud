<?php

use Application\core\Controller;

class Home extends Controller{
    public function index(){
        $model = $this->model('Users');

        if ($model->isLogged()){
            $data['user'] = $model->getUserLogged();
            $this->view('home', $data);
        }
        else
            redirect('auth/login');
    }
}