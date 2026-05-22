<?php

class Evaluation
{
    private int $id;
    private int $note;
    private int $tuteur_id;
    private int $user_id;

    public function __construct(int $note, int $tuteur_id, int $user_id)
    {
        
        if ($note < 1 || $note > 5) {
            throw new InvalidArgumentException(
                "La note doit être comprise entre 1 et 5."
            );
        }

        $this->note = $note;
        $this->tuteur_id = $tuteur_id;
        $this->user_id = $user_id;
    }

  
    public function getNote(): int
    {
        return $this->note;
    }

    public function getTuteurId(): int
    {
        return $this->tuteur_id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    
    public function setNote(int $note): void
    {
        if ($note < 1 || $note > 5) {
            throw new InvalidArgumentException(
                "La note doit être comprise entre 1 et 5."
            );
        }

        $this->note = $note;
    }
}