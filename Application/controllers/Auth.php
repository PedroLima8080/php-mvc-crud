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
            redirect('home/index');
    }

    public function saveRegister($form)
    {
        $model = $this->model("Users");

        if (!$model->isLogged()) {
            if (isset($form['$_POST'])) {
                $form = $form['$_POST'];
                $model->register($form);
                redirect('auth/login');
            }
        } else
            redirect('home/index');
    }

    public function login()
    {
        $model = $this->model("Users");

        if (!$model->isLogged())
            $this->view('auth/login');
        else
            redirect('home/index');
    }

    public function auth($form)
    {
        $model = $this->model("Users");

        if (!$model->isLogged()) {
            if (isset($form['$_POST'])) {
                $form = $form['$_POST'];
    
                if ($model->login($form)) {
                    redirect('home/index');
                    exit;
                }
    
                redirect('auth/login');
                exit;
            }
        } else
            redirect('home/index');
    }

    public function logout()
    {
        $model = $this->model("Users");

        if ($model->isLogged()) {
            $model->logout();
        }

        redirect('auth/login');
        exit;

    }
}
