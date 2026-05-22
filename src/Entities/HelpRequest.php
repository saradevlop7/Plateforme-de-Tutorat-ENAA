<?php
require_once  __DIR__."/../Enums/statuts.php";

class HelpRequest{

    private ?int $id = null;
    private string $titre;
    private string $description;
    private string $technologie;
    private Status $statut;
    private User $student;
    private ?User $tutor = null;

    public function __construct(
        string $titre,
        string $description,
        string $technologie,
        User $student
    ){
        $this->titre = $titre;
        $this->description = $description;
        $this->technologie = $technologie;
        $this->student = $student;

        $this->statut = Status::EN_ATTENTE;
    }

    public function getTitre():string{
        return $this->titre;
    }

    public function getDescription():string{
        return $this->description;
    }

    public function getTechnologie():string{
        return $this->technologie;
    }

    public function getStatut():Status{
        return $this->statut;
    }

    public function getStudent():User{
        return $this->student;
    }



    public function assignTo(User $tutor):void{

    if(
        $this->student->getId() === $tutor->getId()
    ){
        throw new Exception(
            "Impossible de prendre son propre ticket"
        );
    }

    $this->tutor = $tutor;
    $this->statut = Status::ASSIGNE;
}


public function resolve():void{

    $this->statut = Status::RESOLUE;
}
}