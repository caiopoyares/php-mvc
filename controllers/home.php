<?php
  class Home extends Controller {
    protected function Index() {
      if(!isset($_SESSION['is_logged_in'])) {
        header("Location: " . ROOT_URL . '/users/register');
      }
      $viewmodel = new HomeModel();
      $this->ReturnView($viewmodel->Index(), true);
    }
  }