<?php
require_once __DIR__ . '/../models/User.php';

class UserController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new User($db);
    }

    public function index()
    {
        $users = $this->model->getAll();
        require __DIR__ . '/../views/users/index.php';
    }

    public function create()
    {
        require __DIR__ . '/../views/users/create.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $this->model->create($name, $email, $phone, $password);
            header('Location: http://127.0.0.1/crud-manual/users');
        }
    }
}
