<?php

use Application\core\Controller;

class Auth extends  Controller
{
    public function register()
    {
        $model = $this->model("Users");
        
        if (!$model->isLogged())
            $this->view('auth/register');
        else
            header('Location: ../home/index');
    }

    public function saveRegister($form)
    {
        $model = $this->model("Users");

        if (!$model->isLogged()) {
            if (isset($form['$_POST'])) {
                $form = $form['$_POST'];
                $model->register($form);
                header('Location: ./login');
            }
        } else
            header('Location: ../home/index');
    }

    public function login()
    {
        $model = $this->model("Users");

        if (!$model->isLogged())
            $this->view('auth/login');
        else
            header('Location: ../home/index');
    }

    public function auth($form)
    {
        $model = $this->model("Users");

        if (!$model->isLogged()) {
            if (isset($form['$_POST'])) {
                $form = $form['$_POST'];
    
                if ($model->login($form)) {
                    header('Location: ../home/index');
                    exit;
                }
    
                header('Location: ./login');
                exit;
            }
        } else
            header('Location: ../home/index');
    }

    public function logout()
    {
        $model = $this->model("Users");

        if ($model->isLogged()) {
            $model->logout();
            header('Location: ./login');
            exit;
        } else
            header('Location: ./login');
    }
}
