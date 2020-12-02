<?php

abstract class Animal
{
    /**
     * $type : This property meens cow or chicken
     */
    public string $id;
    public string $type;

    
    /**
     * Depending on the type of animal, I get the desired product
     * @return int
     */
    abstract protected function get_product();
    

    /**
     * @return string
     */
    public function __toString()
    {
        return "ID: $this->id;
                TYPE: $this->type;";
    }
}
