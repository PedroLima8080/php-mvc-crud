<?php


use Application\core\Database;

session_start();

class Users{
    public function getAll(){
        $db = new Database;
        $stmt = $db->conn->query('SELECT * FROM users');
        $data = $stmt->fetchAll();
        return $data;
    }

    public function register($form){
        $form['password'] = md5($form['password']);

        $db = new Database;
        $db->conn->beginTransaction();

        try {
            $stmt = $db->conn->query("INSERT INTO users (name, email, password) VALUES ('$form[name]', '$form[email]', '$form[password]')");
            $db->conn->commit();
        } catch (PDOException $e) {
            echo $e;
            $db->conn->rollBack();
            exit;
        }
    }

    public function login($form){
        $form['password'] = md5($form['password']);

        $db = new Database;

        try {
            $stmt = $db->conn->query("SELECT * FROM users WHERE email = '$form[email]' AND password='$form[password]'");
            $user = $stmt->fetch();

            if($user){
                $_SESSION['user'] = $user;
                return true;
            }

            return false;

        } catch (PDOException $e) {
            echo $e;
            exit;
        }
    }

    public function getUserLogged(){
        return $_SESSION['user'];
    }

    public function isLogged(){
        return (isset($_SESSION['user']) && $_SESSION['user'] != null) ? true : false;
    }

    public function getById($id){
        $db = new Database;

        try {
            $stmt = $db->conn->query("SELECT * FROM users WHERE id = $id");
            $user = $stmt->fetch();

            if($user){
                return $user;
            }

            return false;

        } catch (PDOException $e) {
            echo $e;
            exit;
        }
    }

    public function destroy($id){
        $db = new Database;
        $db->conn->beginTransaction();

        try {
            
            $stmt = $db->conn->query("SELECT * FROM users WHERE id = $id");
            $user = $stmt->fetch();

            if($user){
                $db->conn->query("DELETE FROM users WHERE id = $id");
                $db->conn->commit();

                if($user['id'] == $this->getUserLogged()['id']){
                    $this->logout();
                }
            }
            

        } catch (PDOException $e) {
            echo $e;
            $db->conn->rollBack();
            exit;
        }
    }

    public function update($form){
        $db = new Database;
        $db->conn->beginTransaction();

        try {

            $db->conn->query("UPDATE users SET name = '$form[name]', email = '$form[email]' WHERE id = $form[id] ");

            $stmt = $db->conn->query("SELECT * FROM users WHERE id = $form[id]");
            $user = $stmt->fetch();

            
            if($user['id'] == $this->getUserLogged()['id']){
                $_SESSION['user'] = $user;
            }
            
            $db->conn->commit();

        } catch (PDOException $e) {
            echo $e;
            $db->conn->rollBack();
            exit;
        }
    }

    public function logout(){
        $_SESSION['user'] = null;
    }

    public function store($form){
        $form['password'] = md5($form['password']);

        $db = new Database;
        $db->conn->beginTransaction();

        try {
            $stmt = $db->conn->query("INSERT INTO users (name, email, password) VALUES ('$form[name]', '$form[email]', '$form[password]')");
            $db->conn->commit();
        } catch (PDOException $e) {
            echo $e;
            $db->conn->rollBack();
            exit;
        }
    }
}