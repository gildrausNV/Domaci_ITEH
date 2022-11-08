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
        $res = rezultat::getAll($conn);

        while($data = $res->fetch_assoc()){
            echo json_encode($data['id']."|".$data['username']."|".$data['poeni']);
        }

        
    } catch(Exception $e){
        echo $e->getMessage() . "<br/>";
            while($e = $e->getPrevious()) {
                echo 'Previous exception: '.$e->getMessage() . "<br/>";
            }
    }
?>