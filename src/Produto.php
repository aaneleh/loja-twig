<?php

class Produto
{
    private $id;
    private static $lastId = 1;
    private $nome;
    private $valor;
    private $custo;
    private $estoque;
    private $qtdVendidos;
    private $totalVendidos;

    public function __construct($nome, $valor, $custo, $estoque)
    {
        $this->id = Produto::$lastId++;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->custo = $custo;
        $this->estoque = $estoque;
        $this->qtdVendidos = 0;  
        $this->totalVendidos = 0;  
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getEstoque()
    {
        return $this->estoque;
    }
    public function getValor()
    {
        return $this->valor;
    }
    public function getQtdVendidos()
    {
        return $this->qtdVendidos;
    }
    public function getTotalVendidos()
    {
        return $this->totalVendidos;
    }

    public function vender($quant){
        //se o estoque for ficar negativo, compra tudo em estoque e set o estoque pra 0
        if($this->estoque - $quant < 0){
            $quantidade = "Quantida em estoque insuficiente, foram comprado ".$this->estoque." ".$this->nome;
            $this->estoque = 0;

        } else {
            $quantidade = "Você comprou ".$quant." ".$this->nome;
            $this->estoque -= $quant;
        }

        $this->qtdVendidos += $quant;  
        $this->totalVendidos += $quant * $this->valor;
        
        return $quantidade;
    }
}