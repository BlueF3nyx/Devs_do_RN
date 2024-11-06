<?php
    include 'db.php';

    $query = "
    SELECT
        asoc.nome,
        anu.ano,
        IFNULL(pag.pago, FALSE) AS pago
        FROM associados asoc
        LEFT JOIN pagamentos pag ON asoc.id = pag.associado_id
        LEFT JOIN anuidades pag ON pag.anuidade_id = anu.id
    ";
    $smt = $pdo -> query($query);
    $associados = $smt->fetchAll();
    
    foreach($associados as $associado){
        $status = $associado['pago'] ? 'Pago' : 'Em atraso';
        echo "Associado: {$associado['nome']} - Ano: {$associado['ano']} - Status: $status<br>";
    }
?>