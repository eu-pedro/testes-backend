<?php

use PHPUnit\Framework\TestCase;
use App\Slug;

class SlugTest extends TestCase{
    public function test_converter(){
        $meuSlug = new Slug(" Programacao em PHP ");

        $this->assertEquals($meuSlug->converter(), "programacao-em-php");
        // o que tem q ser retornado com o que tem que ser comparado
    }
}