<?php

use PHPUnit\Framework\TestCase;
use App\Cliente;

class ClienteTest extends TestCase{
    public function testVerificarCamposVazios(){
        $meuCliente = new Cliente("Pedro", "pedrohenrique@gmail.com");

        $this->assertFalse($meuCliente->validaCampos());
    }

    public function testContarItensPreferencia(){
        $meuCliente = new Cliente("Laele", "laele@gmail.com", 01);
        $meuCliente->setPreferencias(["Promoção", "Barato", "Comida"]);

        $this->assertCount(3, $meuCliente->getPreferencias()); // esse teste irá contar quantos itens existem dentro do vetor
    }

    public function testVerificarTotalCompras(){
        $meuCliente = new Cliente("Junior", "junior.jr@gmail.com", 02);

        $meuCliente->setTotalCompras(300);

        $this->assertGreaterThan(200, $meuCliente->getTotalCompras());
    }
}