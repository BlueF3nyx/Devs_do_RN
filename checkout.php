<?php
    include 'db.php';

    $associado_id = $_GET['associados_id'];

    $query = "
        SELECT a.id AS anuidade_id, a.ano, a.valor
        FROM anuidados a
        WHERE a.ano >= YEAR((SELECT data_filiacao FROM associados WHERE id = ?))
    ";
    $stmt = $pdo -> prepare($query);
    $stmt->execute([$associado_id]);
    $anuidades = $stmt -> fetchAll();
    
    $total_devido = 0;
    foreach($anuidades as $anuidade){
        $total_devido += $anuidade['valor'];
    }
    
    echo "TOTAL DEVIDO: R$", number_format($total_devido, 2, ',', '.');

    foreach($anuidades as $anuidade){
        echo "<br>Ano: {$anuidade['ano']} - Valor: R$ ".number_format($anuidade['valor'], 2, ',', '.');
    }
    ?>
