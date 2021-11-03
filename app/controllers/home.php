<?php
class Home {
  public function index() {
    echo "Home/index";
  }
}
class Home extends Controller {
  public function index() {
    $data['judul'] = "Home";
    $this->view('templates/header', $data);
    $this->view('home/index');
    $this->view('templates/footer');
  }
}
?>