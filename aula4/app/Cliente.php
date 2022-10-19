<?php

namespace App;
class Cliente{
    private $nome;
    private $email;
    private $codCliente;
    private $totalCompras;
    private $preferencias = [];


    public function __construct($nome = "", $email = "", $codCliente = "")
    {   
        $this->nome = $nome;
        $this->email = $email;
        $this->codCliente = $codCliente;
    }

    public function validaCampos(){
        if(empty($nome) || empty($email) || empty($codCliente)){
            return false;
        }
        else{
            return true;
        }
    }

    public function setTotalCompras($valor){
        if($valor < 0){
            return false;
        }
        else{
            $this->totalCompras = $valor;
        }
    }

    public function getTotalCompras(){
        return $this->totalCompras;
    }

    public function setPreferencias($valor){
        $this->preferencias = $valor;
    }

    public function getPreferencias(){
        return $this->preferencias;
    }

}