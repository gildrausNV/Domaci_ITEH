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

        $sql = "SELECT id FROM iteh.korisnik WHERE iteh.korisnik.username='$username' AND iteh.korisnik.password='$password'";
        $res = $conn->query($sql)->fetch_assoc();
        
        echo json_encode($res);

        if($res != null){
            $_SESSION['id']=$res['id'];
        }
        
        /*if (!$res || $res->num_rows != 1) {
            return "false";
        }
                
        return "true";*/
    } catch(Exception $e){
        echo $e->getMessage() . "<br/>";
            while($e = $e->getPrevious()) {
                echo 'Previous exception: '.$e->getMessage() . "<br/>";
            }
    }
    
?>