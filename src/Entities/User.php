<?php

class User{

    private ?int $id = null;
    private string $nom;
    private string $email;
    private string $password;
    private string $role;

    public function __construct(
        string $nom,
        string $email,
        string $password,
        string $role
    ){
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function getId():?int{
        return $this->id;
    }

    public function setId(int $id):void{
        $this->id = $id;
    }

    public function getNom():string{
        return $this->nom;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function getPassword():string{
        return $this->password;
    }

    public function getRole():string{
        return $this->role;
    }
}