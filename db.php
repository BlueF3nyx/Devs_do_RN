<?php
    $host = 'localhost';
    $db = 'devs_do_rn';
    $user = 'root';
    $pass = '';
    $query = "CREATE TABLE IF NOT EXISTS anuidados (
        id INT AUTO_INCREMENT PRIMARY KEY,
        ano INT NOT NULL,
        valor DECIMAL(10, 2) NOT NULL
    )";
    try{
        $pdo = new PDO("mysql:host=$host;dbname=$db", 'root','');
        $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo 'Erro na conexão: '. $e->getMessage();
    }
?>
