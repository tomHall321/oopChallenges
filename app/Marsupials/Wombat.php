<?php

namespace App\Marsupials;

class Wombat
{
    private $name;
    private $hugCounter = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sayHelloTo($wombat)
    {
        return "Hello {$wombat->getName()}";
    }

    public function giveHug()
    {
        $this->hugCounter += 1;    
        return $this;
        // $this represents the current object instance, for this the current object instance in the fonny object or the tish object
    }

    public function howManyHugs()
    {
        return $this->hugCounter;
    }
}

