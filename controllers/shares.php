<?php
  class Shares extends Controller {
    protected function index() {
      $this->validateUser();
      $viewmodel = new ShareModel();
      $this->ReturnView($viewmodel->Index(), true);
    }

    protected function add() {
      $this->validateUser();
      $viewmodel = new ShareModel();
      $this->ReturnView($viewmodel->add(), true);
    }

    protected function delete() {
      $this->validateUser();
      $viewmodel = new Sharemodel();
      $viewmodel->delete();
    }

    protected function ValidateUser() {
      if(!isset($_SESSION['is_logged_in'])) {
        header("Location: " . ROOT_URL );
      }
      return;
    }
  }