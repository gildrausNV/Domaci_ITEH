<?php
    class rezultat {
        public $id;
        public $points;
        public function __construct($id = null, $points=null){
            $this->id = $id;
            $this->points = $points;
        }
        public static function getAll(mysqli $conn){
        $q = "SELECT r.id, k.username, r.poeni FROM iteh.rezultat r JOIN iteh.korisnik k ON r.korisnikID=k.id ORDER BY r.id DESC LIMIT 4";
        return $conn->query($q);
    }
    public static function deleteById($id, mysqli $conn)
    {
        $q = "DELETE FROM iteh.rezultat WHERE iteh.rezultat.id=$id";
        return $conn->query($q);
    }

    public static function add($id, $points, mysqli $conn)
    {

        $q = "INSERT INTO iteh.rezultat(korisnikID, poeni) VALUES($id, $points)";
        return $conn->query($q);
    }
    }
?>