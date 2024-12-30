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

    public function edit($id)
    {
        $user = $this->model->getById($id);
        require __DIR__ . '/../views/users/edit.php';
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $this->model->update($id, $name, $email, $phone);
            header('Location: /crud-manual/users');
        }
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $this->model->store($name, $email, $phone, $password);
            header('Location: /crud-manual/users');
        }
    }


    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /crud-manual/users');
    }
}
