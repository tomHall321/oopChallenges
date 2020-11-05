<?php

namespace App\Redux;

class Stringy
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function lower()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function repeat($multiplier)
    {   
        $base = $this->string;

        for($i=0; $i<$multiplier - 1; $i +=1){
            $this->string .= $base;
        
        }
        return $this;
    }

    public function upper()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function append($willBeConcatenated)
    {
        $this->string = $this->string.$willBeConcatenated;
        return $this;
    }

    public function get()
    {
        return $this;
    }

}    
