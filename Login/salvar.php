<?php
    include_once './index.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $conn = pg_connect("host=localhost port=5432 dbname=login user=postgres password=junior");
    $sql = "insert into usuario(email, senha)"
            . "values('$email', '$senha')";
    $sql_busca = "select * from usuario"
            . " where email='$email'";
    $result = pg_query($conn, $sql_busca);
    if(pg_fetch_assoc($result)){
        echo 'E-mail já cadastrado';
    }else{
        pg_query($conn, $sql);
        echo 'usuário com email '.$email.' salvo com sucesso!';
    }
    pg_close($conn);
    
?>

