<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ano = intval($_POST['ano']);
    $valor = floatval($_POST['valor']);
    
    $query = "INSERT INTO anuidados(ano, valor) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    
    if ($stmt === false) {
        die('Erro na preparação da query: ');
    }   
    if ($stmt->execute([$ano, $valor])) {
        echo "Associado cadastrado com sucesso! ";
    } else 
        echo "Erro ao cadastrar associado! ";
    }
?> 

<form method="POST">
    Ano: <input type="number" name="ano" required>
    <br>
    Valor: <input type="number" name="valor" required>
    <br>
    <button type="submit">Cadastrar</button>
</form>