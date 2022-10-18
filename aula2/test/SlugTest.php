<?php

use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase{

    public function test_converter(){
        // o caminho dentro do require, deve partir como se eu estivesse em vendor
        
        require_once("app/Slug.php");
        $meuSlug = new Slug("Noticia do estadoo maior");
        $resultadoEsperado = "noticia-do-estado-maior";
        // método assertEquals() segnifica literalmente "Afirmar que seja igual". Com isso, estamos comparando o valor do método com o valor passado.
        $this->assertEquals($meuSlug->converter(), $resultadoEsperado);
        // comando para testar = vendor\bin\phpunit "caminho do arquivo de teste como se estivesse na pasta vendor, não precisa sair"
    }

}