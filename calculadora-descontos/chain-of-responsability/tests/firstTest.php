<?php

use PHPUnit\Framework\TestCase;

class firstTest extends TestCase
{
  public function testOne()
  {
    $value = 'value';
    $this->assertEquals('value',$value);
  }


  public function testTwo()
  {
    $value = 'value';
    $this->assertEquals('value',$value);
  }
}