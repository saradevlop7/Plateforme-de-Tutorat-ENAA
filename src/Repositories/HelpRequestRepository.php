<?php
require_once __DIR__ . "/../../config/Database.php";
require_once __DIR__ . "/../Entities/HelpRequest.php";

class HelpRequestRepository{

    private PDO $pdo;

    public function __construct(){

        $this->pdo = Database::connect();
    }

    public function save(HelpRequest $request):void{

        $sql = "INSERT INTO help_requests
        (titre,description,technologie,statut,id_student)
        VALUES(?,?,?,?,?)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            $request->getTitre(),
            $request->getDescription(),
            $request->getTechnologie(),
            $request->getStatut()->value,
            $request->getStudent()->getId()
        ]);
    }

    public function getAll():array{

        $sql = "SELECT * FROM help_requests";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}