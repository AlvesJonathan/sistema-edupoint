<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="back">
       <div class="login">
           <div class="usuario">
                <label for="usuario">Usuário:</label>
               <input id="usuario" type="text" name="usuario" placeholder="Nome de Usuário"><br><br>
           </div>
           <div class="senha">
                <label for="senha">Senha:</label>
                <input id="senha" type="password" name="senha" placeholder="Senha"><br><br>
           </div>
           <div class="enviar">
               <input type="button" value="Entrar" onclick="login()">
           </div>
        </div>
   </body>
</html>
<script src="js/script.js"></script>
