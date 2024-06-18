<?php
declare (strict_types=1);
use PHPUnit\Framework\TestCase;
include "./Facturacion/Operaciones.php";

class Operaciones extends TestCase{

    public function testFactorial():void{
        $this->assertEquals(30,50);
    }

    public function testuno():void{
        $this->assertTrue(false);
    }

    public function testdos():void{
        $this->assertTrue(true);
    }
}