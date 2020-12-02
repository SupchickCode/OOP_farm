<?php

class Chicken extends Animal
{
    public function __construct()
    {
        $this->id = uniqid();
        $this->type = __CLASS__;
    }

    
    /**
     * Class Chicken returns egg
     * @return int 
     */
    public function get_product(){
        return rand(0,1);
    }
}
