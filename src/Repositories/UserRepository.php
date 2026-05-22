<?php
require_once "../config/Database.php";
class UserRepository{

    private PDO $pdo;

    public function __construct(){
        $this->pdo = Database::connect();
    }

    public function save(User $user):void{

        $sql = "INSERT INTO users(nom,email,password,role)
                VALUES(?,?,?,?)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            $user->getNom(),
            $user->getEmail(),
            $user->getPassword(),
            $user->getRole()
        ]);
    }
}