<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $conn = pg_connect("host=localhost port=5432 dbname=login user=postgres password=junior");
    $sql = "select * from usuario "
            . "where email='$email' and senha='$senha'";
    $result = pg_query($conn, $sql);
    if(pg_fetch_assoc($result)){
        echo "<h1>Seja bem vindo ".$email."</h1>";
    }else{
        include './index.php';
        echo "<br>login ou senha inválidos";
    }
?>

