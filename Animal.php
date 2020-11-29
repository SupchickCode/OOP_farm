<?php

class Animal
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
    public function get_product(): int
    {
        if ($this->type == "Cow") {
            return rand(8, 12);
        } elseif ($this->type == "Chicken") {
            return rand(0, 1);
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "ID: $this->id;<br> 
                TYPE: $this->type;";
    }
}
