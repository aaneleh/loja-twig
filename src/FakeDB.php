<?php
    require_once "Produto.php";
    $produtos = array();

    //($nome, $valor, $custo, $estoque)
    $produtos [] = new Produto("Sabonete", 4, 1.5, 500);
    $produtos[] = new Produto("Escova", 9, 3.3, 100);
    $produtos[] = new Produto("Fio dental", 5.5, 2, 20);
    $produtos[] = new Produto("Enxaguante Bucal", 18.90, 4, 10);

?>