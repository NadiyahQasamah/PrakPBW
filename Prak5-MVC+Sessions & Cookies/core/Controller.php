<<<<<<< HEAD
<?php
class Controller {
    public function model($model) {
        require_once 'models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        require_once 'views/' . $view . '.php';
    }
=======
<?php
class Controller {
    public function model($model) {
        require_once 'models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        require_once 'views/' . $view . '.php';
    }
>>>>>>> d968932075b22fb6571310b4d6d6ac57703269c6
}