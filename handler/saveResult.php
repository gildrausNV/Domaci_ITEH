<?php
    require  "../model/rezultat.php";
    
    session_start();
    $host = "localhost";
    $db = "iteh";
    $username = "root";
    $password = "";
    try{
    $conn = new mysqli($host, $username, $password, $db);
        
        if ($conn->connect_errno) {
            exit("Konekcija neuspesna: " . $conn->connect_errno);
        }
        $points = $_POST["poeni"];

        $id = $_SESSION['id'];

        rezultat::add($id, $points, $conn);
    } catch(Exception $e){
        echo $e->getMessage() . "<br/>";
            while($e = $e->getPrevious()) {
                echo 'Previous exception: '.$e->getMessage() . "<br/>";
            }
    }
?>