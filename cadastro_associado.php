<?php
include 'db.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $data_filiacao = $_POST['data_filiação'];

       $query = "INSERT INTO associados(nome, email, cpf, data_filiacao) VALUES (?, ?, ?, ?)";
       $stmt = $pdo -> prepare($query);
       if ($stmt->execute([$nome, $email, $cpf, $data_filiacao])) {
        echo "Associado cadastrado com sucesso!";
        }else {
        echo "Erro ao cadastrar associado!";
        }
    }
?> 
<form method="POST">
    Nome: <input type="text" name="nome" required> 
    <br>
    E-mail: <input type="text" name="email" required>
    <br>
    CPF: <input type="text" name="cpf" required>
    <br>
    Data de Filiação: <input type="date" name="data_filiação" required>
    <br>
    <button type="submit">cadastrar</button>
</form>    