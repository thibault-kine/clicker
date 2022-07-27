<?php

class Player {

    private $id;
    public $name;
    public $class;
    public $gender;
    public $keepsake;


    public function create($_name, $_class, $_gender, $_keepsake) {
        $pdo = new PDO(
            "mysql:dbname=clicker;host=localhost",
            "root",
            ""
        );
    }

    public static function getPlayer($id) {
        $pdo = new PDO(
            "mysql:dbname=clicker;host=localhost",
            "root",
            ""
        );

        $query = "SELECT * IN players WHERE id=:id";
        $prep = $pdo->prepare($query);
        $prep->bindValue(':id', $id);
        $prep->execute();

        
    }
}