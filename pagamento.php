<?php
    include 'db.php';
    
    $associado_id = 1;
    $anuidade_id = 1;
    $query = "INSERT INTO pagamentos (associados_id, anuidados_id, pago) VALUES(?, ?, TRUE)";
    $stmt = $pdo->prepare($query);
    $stmt -> execute([$associado_id, $anuidade_id]);   
    echo "Pagamento registrado com sucesso";
?>