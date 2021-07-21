<?php

use Application\core\Controller;

class User extends Controller{
    public function index($data = []){
        $model = $this->model('Users');

        if($model->isLogged()){
            $data['users'] = $model->getAll();
            $this->view('user/index', $data);
        }else
            redirect('auth/login');
    }

    public function destroy($params){
        $model = $this->model('Users');
        
        if($model->isLogged()){
            $id = $params[0];

            $model->destroy($id);

            redirect('user/index');
        }else{
            redirect('auth/login');
            exit;
        }
    }

    public function edit($params){
        $model = $this->model('Users');
        
        if($model->isLogged()){
            $id = $params[0];

            $data['user'] = $model->getById($id);

            if($data['user']){
                $this->view('user/edit', $data);
            }else{
                redirect('user/index');
                exit;
            }


        }else{
            redirect('auth/login');
            exit;
        }
    }

    public function update($form)
    {
        $model = $this->model("Users");

        if ($model->isLogged()) {
            if (isset($form['$_POST'])) {
                $form = $form['$_POST'];

                $model->update($form);
    
                redirect('user/index');
                exit;
            }
        } else
            redirect('auth/login');
    }

    public function create(){
        $model = $this->model("Users");

        if($model->isLogged()){
            $this->view('user/create');
        }else{
            redirect('auth/login');
        }
    }

    public function store($form){
        $model = $this->model("Users");
        
        if ($model->isLogged()) {
            if (isset($form['$_POST'])) {
                $form = $form['$_POST'];
                $model->store($form);
                redirect('user/index');
            }
        } else
            redirect('auth/login');
    }
}