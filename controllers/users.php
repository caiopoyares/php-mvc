<?php
  class Users extends Controller {
    public function register() {
      $viewmodel = new UserModel();
      $this->returnView($viewmodel->register(), true);
    }

    public function login() {
      $viewmodel = new Usermodel();
        $this->returnView($viewmodel->login(), true);
    }

    public function logout() {
      unset($_SESSION['is_logged_in']);
      unset($_SESSION['user_data']);
      session_destroy();
      header("Location: " . ROOT_URL . '/users/register');
    }
  }