<?php

class Foo
{
    public $a = "I'm a!";
    public $b = "I'm b!";
    public $c;

    public function getB()
    {
        return $this->b;
    }

    public function setC($c)
    {
        $this->c = $c;

        return $this;
    }

    public function getC()
    {
        return $this->c;
    }
}

echo (new Foo())->a;      // I'm a!
echo (new Foo())->getB(); // I'm b!
