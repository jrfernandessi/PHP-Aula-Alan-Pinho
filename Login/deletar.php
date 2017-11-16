<?php
include_once './index.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $conn = pg_connect("host=localhost port=5432 dbname=login user=postgres password=junior");
    $sql = "delete from usuario"
            . " where email='$email'";
    $sql_busca = "select * from usuario"
            . " where email='$email'";
    $result = pg_query($conn, $sql_busca);
    if(pg_fetch_assoc($result)){
        pg_query($conn, $sql);
        echo "<br> Usuário deletado com sucesso";
    }else{
        echo "<br> email não cadastrado!";
    }
?>

