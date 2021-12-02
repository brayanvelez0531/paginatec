<?php
    session_start();

    include("configuracion.php");

    $connect = new mysqli($server,$user,$pass,$bd);

    if(isset($_POST["Login"])){
        $usuario = $_POST["user"];
        $password = $_POST["pass"];
        $result = $connect -> query("SELECT * FROM usuarios WHERE Usuario LIKE '".$usuario."' AND Password LIKE '".$password."'");

        if($result -> num_rows==1){
            
            header("location: home.html");
        }else{
            header("location: index.html");
        }
    }else{
        exit();
    }
?>