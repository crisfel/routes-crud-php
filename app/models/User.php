<?php

class User
{
    private $conn;
    private $table = 'users';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAll()
    {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(string $name, string $email, string $phone, string $password)
    {
        $query = "INSERT INTO {$this->table} (name, email, phone, password) VALUES (:name, :email, :phone, :password)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_BCRYPT));
        return $stmt->execute();
    }
}