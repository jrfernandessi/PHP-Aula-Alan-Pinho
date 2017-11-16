<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Cadastrar usuário</h1><br>
        <form method="post" action="./salvar.php">
            login: <input type="email" name="email"/><br>
            senha: <input type="password" name="senha"/><br>
            <input type="submit" value="Salvar"/>
           
        </form>
        <h1>Efetuar Login</h1><br>
        <form method="post" action="./logar.php">
            login: <input type="email" name="email"/><br>
            senha: <input type="password" name="senha"/><br>
            <input type="submit" value="entrar"/>
           
        </form>
        <h1>Atualizar Senha</h1><br>
        <form method="post" action="./atualizar.php">
            login: <input type="email" name="email"/><br>
            senha: <input type="password" name="senha"/><br>
            <input type="submit" value="Atualizar"/>
           
        </form>
        <h1>Deletar usuário</h1><br>
        <form method="post" action="./deletar.php">
            login: <input type="email" name="email"/><br>
            <input type="submit" value="Deletar"/>
           
        </form>
        <a href="listar.php">todos os usuários</a>
    </body>
</html>
