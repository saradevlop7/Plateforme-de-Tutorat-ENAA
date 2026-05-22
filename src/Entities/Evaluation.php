<?php

class Evaluation{

    private ?int $id = null;
    private string $commentaire;

    public function __construct(
        string $commentaire
    ){
        $this->commentaire = $commentaire;
    }

    public function getCommentaire():string{
        return $this->commentaire;
    }
}