<<<<<<< HEAD
<?php
class HomeController extends Controller {
    public function index() {
        $data['title'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
=======
<?php
class HomeController extends Controller {
    public function index() {
        $data['title'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
>>>>>>> d968932075b22fb6571310b4d6d6ac57703269c6
}