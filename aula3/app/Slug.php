<?php

namespace App;

class Slug{

    private $texto;

    public function __construct($texto){
        $this->texto = $texto;
    }


    public function converter(){
        $resultado = str_replace(" ", "-", $this->getTexto()); // o str_replace() irá substituir um determinado valor de que está sendo procurado (1º parâmetro), por outro (2º parâmetro) em uma determinada string (3º parâmetro)
        return strtolower($resultado);
    }

    public function getTexto(){
        return trim($this->texto); // a função trim() remove todos os espaços do lado direito e esquerdo do texto
    }
}

// $meuSlug = new Slug("Teste de backend usando PHP");
// echo $meuSlug->converter();
// comando para criar o phpunit
// ativar o autoload, depois de criado: composer dump-autoload
