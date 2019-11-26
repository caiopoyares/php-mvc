<?php
  class ShareModel extends Model {
    public function index() {
      $this->query('SELECT * FROM shares ORDER BY create_date DESC');
      $rows = $this->resultSet();
      return $rows;
    }
    public function add() {
      if(strlen($_POST['title']) > 0 && strlen($_POST['body']) > 0 && strlen($_POST['link']) > 0) {
        $this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :userId)');
        $this->bind(':title', $_POST['title']);
        $this->bind(':body', $_POST['body']);
        $this->bind(':link', $_POST['link']);
        $this->bind(':userId', 1);
        $this->execute();
        //verify
        if($this->lastInsertId()) {
          header('Location: ' . ROOT_URL . '/shares');
        }
      }
      return;
    }

    public function delete() {
      $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      $url = parse_url($actual_link);
      parse_str($url['query'], $id);
      $this->query('DELETE FROM shares WHERE id=:id');
      $this->bind(':id', $id["id"]);
      $this->execute();
      
      header("Location:" . ROOT_URL . "/shares");
    }
  }