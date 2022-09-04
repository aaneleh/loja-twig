<?php
    require_once __DIR__ . '/vendor/autoload.php';

    require_once "src/FakeDB.php";

    //loop por todas as entradas do form
    $total = 0;

    for($i = 0; $i < count($_POST); $i ++){
        $quantidade = $_POST[$i+1];

        //compara o id vindo do form com o id de cada produto
        //Assim não depende da posição do array e sim do id em si do produto
        for($j = 0; $j < 4; $j ++){
            if($produtos[$j]->getId() == $i+1) {

                echo $produtos[$j]->vender($quantidade); //isso faz todas as ações e passa uma mensagem de quanto foi comprado
                echo "<br>Você gastou R$".$produtos[$j]->getValor() * $quantidade; 
                $total += $produtos[$j]->getValor() * $quantidade;
            }
        }
    echo "<br><br>";
        
    }
    echo "Total: R$".$total;



