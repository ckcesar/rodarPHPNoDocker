<?php

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=database', 'root2', 'root');
} catch (PDOException $e) {
    print_r('Entrou no catch');
    echo '<pre></pre>';
    print $e->getMessage();
    die();
}

print_r($pdo);