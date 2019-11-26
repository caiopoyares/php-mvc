<?php
  class UserModel extends Model {

    public function register() {
      $password = md5($_POST["password"]);
      if(strlen($_POST['name']) > 0 && strlen($_POST['email']) > 0 && strlen($_POST['password']) > 0) {
        $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
        $this->bind(':name', $_POST['name']);
        $this->bind(':email', $_POST['email']);
        $this->bind(':password', $password);
        $this->execute();
        //verify
        if($this->lastInsertId()) {
          header('Location: ' . ROOT_URL . '/users/login');
        }
      }
      return;
    }

    public function login() {
      $password = md5($_POST["password"]);
      $this->query("SELECT * FROM users WHERE email=:email");
      $this->bind("email", $_POST['email']);
      $result = $this->single();
      if(count($_POST) > 0) {
        if(!$result) {
          return ["emailValid" => false];
        } else {
          if($result['password'] !== $password) {
            return ["passwordValid" => false];
          } else {
            $_SESSION['is_logged_in'] = true;
            $_SESSION['user_data'] = array(
              "id"  => $result["id"],
              "name"  => $result["name"],
              "email" => $result["email"]
            );
            header("Location: " . ROOT_URL);
          }
        }}
        return;
      }
    }