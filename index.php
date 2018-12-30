<?php
// Объявление простого класса
class TestClass
{
    public $foo;
    private $test;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
    public function setTest($value)
    {
        $this->test = $value;
    }

    public function getTest()
    {
        return $this->test;
    }
}

$class = new TestClass('Привет');
echo $class;
$class->setTest(200);
echo $class->getTest();
