<?php

class Cow extends Animal
{
    public function __construct()
    {
        $this->id = uniqid();
        $this->type = __CLASS__;
    }

    
     /**
     * Class Cow returns milk 8-12 liters
     * @return int 
     */
    public function get_product(){
        return rand(8,12);
    }
}
