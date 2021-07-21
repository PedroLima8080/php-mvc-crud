<?php

use Application\core\Controller;

class User extends Controller{
    public function index($data = []){
        $model = $this->model('Users');

        if($model->isLogged()){
            $data['users'] = $model->getAll();
            $this->view('user/index', $data);
        }else
            header('Location: ../auth/login');
    }

    public function destroy($params){
        $model = $this->model('Users');
        
        if($model->isLogged()){
            $id = $params[0];

            $model->destroy($id);

            header('Location: ../index');
        }else{
            header('Location: ../../auth/login');
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
                header('Location: ../index');
                exit;
            }


        }else{
            header('Location: ../../auth/login');
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
    
                header('Location: ./index');
                exit;
            }
        } else
            header('Location: ../auth/login');
    }

    public function create(){
        $model = $this->model("Users");

        if($model->isLogged()){
            $this->view('user/create');
        }else{
            header("Location: ../auth/login");
        }
    }

    public function store($form){
        $model = $this->model("Users");
        
        if ($model->isLogged()) {
            if (isset($form['$_POST'])) {
                $form = $form['$_POST'];
                $model->store($form);
                header('Location: ./index');
            }
        } else
            header('Location: ../auth/login');
    }
}