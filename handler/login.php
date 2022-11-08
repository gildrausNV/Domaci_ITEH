<?php
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
        $username = $_GET["username"];
        $password = $_GET["password"];
        $res = korisnik::logIn($username, $password, $conn);
        echo json_encode($res);

        if($res != null){
            $_SESSION['id']=$res['id'];
        }
    } catch(Exception $e){
        echo $e->getMessage() . "<br/>";
            while($e = $e->getPrevious()) {
                echo 'Previous exception: '.$e->getMessage() . "<br/>";
            }
    }
    
?>