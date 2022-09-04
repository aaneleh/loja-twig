<?php
    require_once __DIR__ . '/vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
    $twig = new Twig_Environment($loader);

    require_once "src/FakeDB.php";

    //acredito que isso não fazia nada
/*     $dados =array (
        "titulo" => "Farmácia sempre cara",
        "cabecalho" => "Produtos",
        "texto" => "vou listar aqui os produtos"
    ); */

    //esse produtos ta sendo importado na linha 4, do fakebd.php
    $parametros = ['produtos' => $produtos];

    $template = $twig->loadTemplate('template.twig');

    //dá render com os parametros dos produtos
    echo $template->render($parametros);


    //INDEX (TEMPLATE.TWIG) CARREGA UM FORMULARIO
    //QUE PODE ESCOLHER A QUANTIDADE DE CADA ITEM E UM SUBMIT "COMPRAR"
    //VAI POSTAR ESSAS INFORMAÇÕES PARA O VENDER.PHP
    //VENDER.PHP VAI DAR REQUIRE EM FAKEDB.PHP
    //FAKEDB.PHP TEM AS CLASSES E VARIAVEIS DOS PRODUTOS
    //VENDER.PHP VAI CHAMAR AS FUNCOES DE .VENDER() EM CADA PRODUTO 
    //COM SUA RESPECTIVA QUANTIDADE
    //E TAMBÉM VAI MOSTRAR A QUANTIDADE COMPRADA DE CADA PRODUTO (isso é retornado no vender())
    //VALOR GASTO COM CADA PRODUTO (produto.preco * quantidade, sem usar metodos)