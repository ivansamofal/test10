<?php

class TestClass
{
    const TEST_CONSTANT = 1;

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

    public function makeTest()
    {
        echo 'make test';
    }

    public static function testTest()
    {
        return 'test';
    }

    public static function someTest()
    {
        return 'some_test';
    }
}

$class = new TestClass('Привет');
echo $class;
$class->setTest(200);
echo $class->getTest();
