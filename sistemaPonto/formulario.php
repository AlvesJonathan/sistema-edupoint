<?php
    include_once 'layout.php';
?>
<h2>Cadastro dos Alunos</h2>
<main>
    <form action="manterranking.php" method="post">

        <label for="nome">Nome Completo:</label>
        <input type="text" name="nome">

        <label for="posto">Posto:</label>
        <input type="number" name="posto">

        <label for="pontos">Pontos:</label>
        <input type="number" name="pontos">

        <label for="medalha">Medalha:</label>
        <select name="medalha" id="">
            <option value="ouro">Ouro</option>
            <option value="prata">Prata</option>
            <option value="bronze">Bronze</option>
            <option value="excelencia">Excelência</option>
            <option value="desenv">Em desenvolvimento</option>
        </select>
        <input type="submit" value="Cadastrar">
    </form>
</main>
